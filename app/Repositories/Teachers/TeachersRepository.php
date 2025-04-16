<?php

namespace App\Repositories\Teachers;

use App\Interfaces\Teachers\TeachersInterface;
use App\Models\Teacher;

class TeachersRepository implements TeachersInterface
{
    public function create(array $data)
    {
        return Teacher::create($data);
    }
}
