<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if (DB::table('users')->get()->count() == 0) {
            DB::table('users')->insert([

            [
                'name' => "Admin",
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@svt'),
                'phone' => mt_rand(1000000000, 9999999999),
                'status'=>true,
                'role'=>1,
                'api_token' => Str::random(60),
                'remember_token' => Str::random(10),
            ],
        ]);
        } else {
            echo "\e Table is not empty, therefore NOT Able to create user! ";
        }
    }
}
