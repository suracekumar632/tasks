<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->delete();

        DB::table('students')->insert([
            'id'   => 1,
            'title' => 'tamil',
            'name' => 'suresh',
            'mark' => 40,
            'order' => 1,
            
        ]);
        DB::table('students')->insert([
            'id'   => 2,
            'title' => 'tamil',
            'name' => 'varun',
            'mark' => 50,
             'order' => 2,
        ]);
         DB::table('students')->insert([
            'id'   => 3,
            'title' => 'tamil',
            'name' => 'dinesh',
            'mark' => 60,
             'order' => 3,
        ]);
    }
}
