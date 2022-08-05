<?php

namespace App\Http\Controllers\appartement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\appart;
use DB;

class AppartController extends Controller
{
    public function AllAppart()
    {
      $all = DB::table('apparts')->get();
      return view('users\admin\appartements\mesappartements',compact('all'));
    }
  //add Appartement, Insert

    public function AddAppart()
    {
      return view ('users\admin\appartements\add_appart');
    }

    public function InsertAppart(Request $request)
    {
      $data = array();
      $data['AppName']= $request->appname;
      $data['AppPrice'] = $request->appprice;
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');


      $insert = DB::table('apparts')->insert($data);
      if($insert)
      {
        $notification=array(
          'message'=>'Appartement ajouter avec succes',
          'alert-type'=>'succes'
        );
        return redirect()->route('allappart')->with($notification);
      }
      else
      {
        $notification=array(
          'message'=>'Un problème est survenu',
          'alert-type'=>'error'
        );
        return redirect()->route('allappart')->with($notification);
      }

    }

    public function EditAppart($id)
    {
      $edit = DB::table('apparts')->where('id',$id)->first();
      return view('users\admin\appartements\edit_appart',compact('edit'));
    }

    public function UpdateAppart(Request $request,$id)
    {
      $data = array();
      $data['AppName']= $request->appname;
      $data['AppPrice'] = $request->appprice;
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      $update = DB::table('apparts')
      ->where('id',$id)
      ->update($data);
      if($update)
      {
        $notification=array(
          'message'=>'Appartements modifier avec succes',
          'alert-type'=>'succes'
        );
        return redirect()->route('allappart')->with($notification);
      }
      else
      {
        $notification=array(
          'message'=>'Un problème est survenu',
          'alert-type'=>'error'
        );
        return redirect()->route('allappart')->with($notification);
      }
    }


    public function DeleteAppart($id)
    {
      $delete = DB::table('apparts')->where('id',$id)->delete();
      if ($delete)
      {
        $notification=array(
          'message'=>'Appartement supprimer avec succes',
          'alert-type'=>'succes'
        );
        return redirect()->route('allappart')->with($notification);
      }
      else
      {
        $notification=array(
          'message'=>'Un problème est survenu',
          'alert-type'=>'error'
        );
        return redirect()->route('allappart')->with($notification);
      }
    }

}
