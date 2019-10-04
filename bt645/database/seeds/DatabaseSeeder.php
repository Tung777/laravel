<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
       DB::table('sanpham')->insert([
           array('sanpham' => 'sp1','anhsanpham'=>'http://quanaongoclinh.com/upload/product/525818344591-do-bo-be-gai-hugo-trang-sen-7size-17t.png','giasanpham'=>10000),
           array('sanpham' => 'sp1','anhsanpham'=>'http://quanaongoclinh.com/upload/product/525818344591-do-bo-be-gai-hugo-trang-sen-7size-17t.png','giasanpham'=>10000),
           array('sanpham' => 'sp1','anhsanpham'=>'http://quanaongoclinh.com/upload/product/525818344591-do-bo-be-gai-hugo-trang-sen-7size-17t.png','giasanpham'=>10000),
           array('sanpham' => 'sp1','anhsanpham'=>'http://quanaongoclinh.com/upload/product/525818344591-do-bo-be-gai-hugo-trang-sen-7size-17t.png','giasanpham'=>10000),
           array('sanpham' => 'sp1','anhsanpham'=>'http://quanaongoclinh.com/upload/product/525818344591-do-bo-be-gai-hugo-trang-sen-7size-17t.png','giasanpham'=>10000),
        ]);

    }
}
