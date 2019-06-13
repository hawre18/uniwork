<?php
/**
 * Created by PhpStorm.
 * User: hawre
 * Date: 11/05/2019
 * Time: 01:43 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
class PageFood extends  Controller
{
    public function home()
    {
        $tbl_food=DB::table('tbl_food')->get();
            $tbl_day=DB::table('tbl_day')->get();
        return view('home',compact('tbl_day','tbl_food'));


    }
}
