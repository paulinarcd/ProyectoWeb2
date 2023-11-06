<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador.unal.edu.co',
            'password' => bycript('12345') 
        ])->assignRole('Admin');

        // User::create([
        //     'name' => 'Oscar Alejandro Ramirez',
        //     'email' => 'oramirezr.unal.edu.co',
        //     'password' => bycript('12345') 
        // ])->assignRole('Admin');

        // User::create([
        //     'name' => 'Samuel Alzate',
        //     'email' => 'salzate.unal.edu.co',
        //     'password' => bycript('12345') 
        // ])->assignRole('Admin');

        // User::create([
        //     'name' => 'Jonathan Alexander Valencia',
        //     'email' => 'jvalencia.unal.edu.co',
        //     'password' => bycript('12345') 
        // ])->assignRole('Admin');

        // User::create([
        //     'name' => 'Paulina Ramirez',
        //     'email' => 'pramirez.unal.edu.co',
        //     'password' => bycript('12345') 
        // ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
