<?php

namespace App\Http\Resources\MyAuth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MyAuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
           'firstname'=>$this->firstname,
           'lastname'=>$this->lastname,
           'email'=>$this->email,
        ];
    }
}
