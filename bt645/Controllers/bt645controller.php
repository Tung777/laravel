<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class bt645Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addSP(Request $request){

        return view('bt645');
    }
    public function postSP(Request $request){
        $sanpham = $anhsanpham = $giasanpham  = '';
        $sanpham = $request['sanpham'];
        $anhsanpham = $request['anhsanpham'];
        $giasanpham = $request['giasanpham'];
        return redirect()->route('viewAdd');


    }
}
