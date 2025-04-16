<?php

namespace App\Services\Teachers;

use App\Models\Teacher;

class TeachersService{

    public function getAll(){
        return Teacher::all();
    }

    public function createTeacher($data){
        dd($data);
    }
}