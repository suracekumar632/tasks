<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id'   => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$UAMVi3M3tmFy2algCimkau/jn/ADPRD7BMwYg5.8s2qejEY99Z8u.',
            'remember_token' => '',
            
        ]);
    }
}
