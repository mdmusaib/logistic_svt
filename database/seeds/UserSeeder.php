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
     if(DB::table('users')->get()->count() == 0){

        DB::table('users')->insert([

            [
                'name' => Str::random(5),
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('admin123'),
                'phone' => mt_rand(1000000000, 9999999999),
                'status'=>true,
                'role'=>1,
                'api_token' => Str::random(60),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('bde123'),
                'phone' => mt_rand(1000000000, 9999999999),
                'status'=>true,
                'role'=>2,
                'api_token' => Str::random(60),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('teamlead123'),
                'phone' => mt_rand(1000000000, 9999999999),
                'status'=>true,
                'role'=>3,
                'api_token' => Str::random(60),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('photograph123'),
                'phone' => mt_rand(1000000000, 9999999999),
                'status'=>true,
                'role'=>4,
                'api_token' => Str::random(60),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('financelead123'),
                'phone' => mt_rand(1000000000, 9999999999),
                'status'=>true,
                'role'=>5,
                'api_token' => Str::random(60),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('salesperson123'),
                'phone' => mt_rand(1000000000, 9999999999),
                'status'=>true,
                'role'=>6,
                'api_token' => Str::random(60),
                'remember_token' => Str::random(10),
            ]

        ]);

    } else { echo "\e Table is not empty, therefore NOT Able to create user! "; }
    }
    
}
