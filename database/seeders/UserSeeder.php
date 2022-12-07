<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            "name"=> "Author",
            "email"=> "author@role.test",
            "password"=>Hash::make("password"),
            "role_id" => 1,
        ]);
        User::create([
            "name"=> "Visitor",
            "email"=> "visitor@role.test",
            "password"=>Hash::make("password"),
            "role_id" => 2,
        ]);
    }
}
