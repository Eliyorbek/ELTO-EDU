<?php

namespace App\Http\Resources\Teachers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeachersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lastname'=>$this->lastname,
            'firstname'=>$this->firstname,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'image'=>'/storage/teachers/'.$this->image
        ];
    }
}
