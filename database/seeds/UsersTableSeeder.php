<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'  => 'Admin',
            'email'   => 'asega03@gmail.com',
            'password'  => Hash::make('admin')
        ]);
    }
}
