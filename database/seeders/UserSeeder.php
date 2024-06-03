<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Admin Team',
            'email' => 'equipo@admin.com',
            'email_verified_at' => now(),
            'rol'=> 'admin',
            'password' =>  Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'User Team',
            'email' => 'equipo@user.com',
            'email_verified_at' => now(),
            'rol' => 'user',
            'password' =>  Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
