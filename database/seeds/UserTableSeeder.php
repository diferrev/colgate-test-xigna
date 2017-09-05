<?php

use Illuminate\Database\Seeder;
use Colgate\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = array(
            ['name' => 'Alberto', 'email' => 'alberto123@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Juliana', 'email' => 'juliana123@gmail.com', 'password' => Hash::make('654321')],
            ['name' => 'Carlos', 'email' => 'carlos123@gmail.com', 'password' => Hash::make('789456')],
            
        );
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}