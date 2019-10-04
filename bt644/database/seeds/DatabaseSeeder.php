<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       /* DB::table('student')->insert([
         array('rollno' =>'ST01' ,'name'=>'Name01','age'=>19,'email'=>'email1@gmail.com','address'=>'HN' ),
         array('rollno' =>'ST01' ,'name'=>'Name01','age'=>19,'email'=>'email1@gmail.com','address'=>'HN' ),
         array('rollno' =>'ST01' ,'name'=>'Name01','age'=>19,'email'=>'email1@gmail.com','address'=>'HN' ),
         array('rollno' =>'ST01' ,'name'=>'Name01','age'=>19,'email'=>'email1@gmail.com','address'=>'HN' ),
         array('rollno' =>'ST01' ,'name'=>'Name01','age'=>19,'email'=>'email1@gmail.com','address'=>'HN' ),

        ]);*/
         DB::table('monhoc')->insert([
         array('mamonhoc' =>'MM01' ,'tenmonhoc'=>'Name01' ),
         array('mamonhoc' =>'MM01' ,'tenmonhoc'=>'Name01' ),
         array('mamonhoc' =>'MM01' ,'tenmonhoc'=>'Name01' ),
         array('mamonhoc' =>'MM01' ,'tenmonhoc'=>'Name01' ),
         array('mamonhoc' =>'MM01' ,'tenmonhoc'=>'Name01' ),


        ]);
    }
}
