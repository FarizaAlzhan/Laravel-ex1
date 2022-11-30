<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.ru',
            'password' => Hash::make('password')
        ]);

        $role = Role::create([
            'name' => 'admin',
            'sluq' => 'admin'
        ]);

        $role2 = Role::create([
            'name' => 'user',
            'sluq' => 'user'
        ]);

        DB::table('user_roles')->insert([
            'user_id' => $user -> id,
            'role_id' => $role -> id
        ]);
    }
}
