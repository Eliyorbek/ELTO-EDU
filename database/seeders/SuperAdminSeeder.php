<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname'=>'Eliyorbek',
            'lastname'=>'Tojimatov',
            'email'=>'eltosoft@gmail.com',
            'password'=> Hash::make('eltosoft'),
            'role'=>'super'
        ]);
    }
}
