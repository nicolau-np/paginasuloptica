<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    static $users = [
        [
            'name'=>"Nelson Katchipa",
            'email'=>"nelson@gmail.com",
            'password'=>"suloptica",
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(Self::$users as $user){
            User::create($user);
        }
    }
}
