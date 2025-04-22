<?php

namespace App\Services\Teachers;

use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;

class TeachersService{

    public function getAll(){
        return Teacher::all();
    }

    public function createTeacher($data){

        if(isset($data['image'])){
            $path = $data['image'];
            $img = md5(rand(1111,9999).microtime()). '.' .$path->extension();
            $path->storeAs('teachers', $img, 'public');
        }else{
            $img = 'null';
        }
        $teacher = Teacher::create([
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'phone'=>$data['phone'],
            'image'=>$img,
        ]);
        if($teacher){
            return $teacher;
        }else{
            return 'MAlumot saqlanmadi!';
        }
    }


    public function updateTeacher($id,$data){
        $teacher = Teacher::findOrFail($id);
        if(isset($data['image'])){
            $path = $data['image'];
            $img = md5(rand(111,999).microtime()).'.' .$path->extension();
            $oldImagePath = public_path('storage/teachers/' . $teacher->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $path->storeAs('teachers' , $img, 'public');
        }else{
            $img = $teacher->image;
        }
        $teacher->update([
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'email'=>$data['email'],
            'password'=>$data['password']=='null' ? $teacher->password : Hash::make($data['password']) ,
            'phone'=>$data['phone'],
            'image'=>$img,
        ]);
        return $teacher;
    }

    public function deleteTeacher($id){
        $teacher = Teacher::findOrFail($id);
        $oldImage = public_path('storage/teachers/'. $teacher->image);
        if($teacher->delete()){
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        }
        return $teacher;
    }
}
