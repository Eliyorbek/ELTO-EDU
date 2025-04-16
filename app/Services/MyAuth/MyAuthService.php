<?php

namespace App\Services\MyAuth;

use App\Interfaces\MyAuth\MyAuthInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MyAuthService
{
public function login($data){
$user = User::where('email' , $data['email'])->firstOrFail();
    if($user->role == 'super'){
        if(Hash::check($data['password'], $user->password)){
            return $user;
        }
    }else{
        return 'User yoq';
    }
}
}
