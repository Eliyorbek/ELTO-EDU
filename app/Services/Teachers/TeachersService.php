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
            $path->storeAs('teachers', $img, 'public');
            return $teacher;
        }else{
            return 'MAlumot saqlanmadi!';
        }
    }
}
