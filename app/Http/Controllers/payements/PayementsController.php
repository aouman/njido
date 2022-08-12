<?php

namespace App\Http\Controllers\payements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PayementsController extends Controller
{
    public function AllPay(){

        $all = DB::table('apparts')
                ->join('payements', 'apparts.id', '=', 'payements.appart_id')
                ->join('users', 'users.id', '=', 'apparts.user_id')
                ->select('payements.*', 'apparts.AppName', 'apparts.AppPrice','users.name','users.phone')
                ->get();
       

        return view('users\admin\payements\payeShow', compact('all'));
    }


    public function AllPayUser($id)
  {

    $all = DB::table('apparts')
    ->join('payements', 'apparts.id', '=', 'payements.appart_id')
    ->join('users', 'users.id', '=', 'apparts.user_id')
    ->select('payements.*', 'apparts.AppName', 'apparts.AppPrice','users.name','users.phone')
    ->get();

   // $mypay = $all :: find($id);
    return view('users\userPaye', compact('all'));
  }

//     public function InsertPay(Request $request)
//     {
//         $data = array();
//         $data['name']= $request->name;
//         $data['phone'] = $request->phone;
//         $data['AppName'] = $request->AppName;
//         $data['AppPrice'] = $request->AppPrice;
//         $data['date_pay'] = date('Y-m-d');
        
//         $insert =   DB::table('apparts')
//         ->join('payements', 'apparts.id', '=', 'payements.appart_id')
//         ->join('users', 'users.id', '=', 'apparts.user_id')
//         ->insert($data);
//         if($insert)
//         {
//         $notification=array(
//             'message'=>'payement effectué avec succes',
//             'alert-type'=>'succes'
//         );
//         return redirect()->route('payeShow')->with($notification);
//         }
//         else
//         {
//         $notification=array(
//             'message'=>'Un problème est survenu',
//             'alert-type'=>'error'
//         );
//         return redirect()->route('payeShow')->with($notification);
//         }
//     } 
}
