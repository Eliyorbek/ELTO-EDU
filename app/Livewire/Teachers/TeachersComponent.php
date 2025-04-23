<?php

namespace App\Livewire\Teachers;

use App\Livewire\MyComponent;
use App\Models\Teacher;
class TeachersComponent extends MyComponent
{


    public function render()
    {
        if($this->search != null){
            $teachers=Teacher::where('firstname','like','%'.$this->search.'%')
                ->orWhere('lastname','like','%'.$this->search.'%')
                ->orWhere('email','like','%'.$this->search.'%')
                ->orWhere('phone','like','%'.$this->search.'%')->paginate(15);
        }else{
            $teachers = Teacher::paginate(15);
        }
        return view('livewire.teachers.teachers-component' , compact('teachers'));
    }
}
