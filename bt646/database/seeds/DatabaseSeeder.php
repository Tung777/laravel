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
        DB::table('hotel')->insert([
            array('maphong' => 1,'loaiphong'=>'tot','tang'=>'tang 1','tenkhachsan'=>'ks1','diachikhachsan'=>'KS1'),


        ]);
    }
}
