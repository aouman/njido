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
       

        return view('users\admin\payeShow', compact('all'));
    }


//     public function AddUser()
//   {
//     return view ('users\admin\locataires\add_user');
//   }

    // public function InsertPay(Request $request)
    // {
    //     $data = array();
    //     $data['name']= $request->name;
    //     $data['phone'] = $request->phone;
    //     $data['AppName'] = $request->AppName;
    //     $data['AppPrice'] = $request->AppPrice;
    //     $data['date_pay'] = date('Y-m-d');
        
    //     $insert =  DB::table('apparts')
    //                 ->join('payements', 'apparts.id', '=', 'payements.appart_id')
    //                 ->insert($data);
    //     if($insert)
    //     {
    //     $notification=array(
    //         'message'=>'Locataire ajouter avec succes',
    //         'alert-type'=>'succes'
    //     );
    //     return redirect()->route('alluser')->with($notification);
    //     }
    //     else
    //     {
    //     $notification=array(
    //         'message'=>'Un problème est survenu',
    //         'alert-type'=>'error'
    //     );
    //     return redirect()->route('alluser')->with($notification);
    //     }
    // } 
}
