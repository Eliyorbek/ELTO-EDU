<?php

namespace Database\Seeders;

use App\Models\HamburgerActiveButton;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Hamburger extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HamburgerActiveButton::create([
            'event'=>'sidebar-icon-only',
        ]);
    }
}
