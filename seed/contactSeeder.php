<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'first_name' => 'Nuris',
            'last_name' => 'Saidah',
            'email' => 'Nurissaid@gmail.com',
            'phone' => '085226209994'
        ]);

    
    }
}
