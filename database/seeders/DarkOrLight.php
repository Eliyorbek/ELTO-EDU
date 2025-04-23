<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DarkOrLight as Light;

class DarkOrLight extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Light::create([
            'name'=>'style',
        ]);
    }
}
