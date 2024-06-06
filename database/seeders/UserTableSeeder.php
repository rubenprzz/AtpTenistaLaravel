<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'adminTodo',
                'email' => 'adminTodo@admin.es',
                'password' => bcrypt('admintodo'),
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@user.es',
                'password' => bcrypt('user'),
                'role' => 'user',
            ],
            [
                'name' => 'adminTorneo',
                'email' => 'adminTorneo@user.es',
                'password' => bcrypt('admintorneo'),
                'role' => 'adminTorneo',
            ],
            [
                'name' => 'adminTenista',
                'email' => 'adminTenista@user.es',
                'password' => bcrypt('admintenista'),
                'role' => 'adminTenista',
            ],

        ]);
    }
}
