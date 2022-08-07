<?php

namespace App\Http\Controllers\payements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PayementsController extends Controller
{
    public function AllPay(){

        $all = DB::table('payements')->get();

        return view('users\admin\payeShow', compact('all'));
    }
}
