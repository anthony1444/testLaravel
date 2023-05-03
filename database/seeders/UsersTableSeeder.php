<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Juan',
            'email' => 'juan@example.com',
            'password' => bcrypt('password'),
            'idrol' => 1
        ]);

        User::create([
            'name' => 'Maria',
            'email' => 'maria@example.com',
            'password' => bcrypt('password'),
            'idrol' => 1
        ]);

        // Agrega tantos usuarios como quieras...

    }
}
