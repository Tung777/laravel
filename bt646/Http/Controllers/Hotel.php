<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class bt646Controller extends Controller
{
    public function showHotel(Request $request)
    {

        public function Hotel()
        {
            $hotel = \Illuminate\Support\Facades\DB::table('hotel')->get();
            return view('list')->with([
                'list' => $hotel
            ]);
        }

        public function showDetail(Request $request)
        {

        }

    }

}
