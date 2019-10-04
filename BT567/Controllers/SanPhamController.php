<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SanPhamController extends Controller
{
    //
    public function themSanPham(Request $request){
    	//
    	$danhsachsp=DB::table('sanpham')->get();
    	return view('danhsachsp')->with([
    			'list'=>$danhsachsp
    	]);

    } 
}
