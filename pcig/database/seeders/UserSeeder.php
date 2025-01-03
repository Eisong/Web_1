<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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

        User::truncate();
        
        $users = [
            ['email'=>'pcig@gmail.com',
             'name'=>'Admin',
             'password' => Hash::make('Computer@2016'),
            ],
            
        ];

        User::insert($users);
    }
}