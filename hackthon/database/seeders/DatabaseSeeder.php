<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        1 = usuario;
        2 = atendente;
        3 = médico;        
        */

        
        DB::table('users')->insert([
            'name'=> 'Igor',
            'email' => 'igor@laravel.com',
            'password'=> Hash::make('12345678'),
            'type'=> 1,
        ]);
        DB::table('users')->insert([
            'name'=> 'Debora',
            'email' => 'debora@laravel.com',
            'password'=> Hash::make('12345678'),
            'type'=> 2,
        ]);
        DB::table('users')->insert([
            'name'=> 'tabita',
            'email' => 'tabita@laravel.com',
            'password'=> Hash::make('12345678'),
            'type'=> 3,
        ]);
    }
}
