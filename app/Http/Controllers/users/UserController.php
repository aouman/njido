<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function AllUser()
  {
    $all = DB::table('users')
              -> join ('apparts', 'users.id', '=', 'apparts.user_id')
              ->select ('apparts.*','users.*')
              ->get();
    return view('users\admin\locataires\meslocataires',compact('all'));
  }
//addUser, InsertUser

  public function AddUser()
  {
    return view ('users\admin\locataires\add_user');
  }

  public function InsertUser(Request $request)
  {
    $data = array();
    $data['name']= $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['date_location'] = date('Y-m-d');
    $data['role'] = $request->role;
    $data['password'] = Hash::make($request->password);
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['updated_at'] = date('Y-m-d H:i:s');

    $insert = DB::table('users')->insert($data);
    if($insert)
    {
      $notification=array(
        'message'=>'Locataire ajouter avec succes',
        'alert-type'=>'succes'
      );
      return redirect()->route('alluser')->with($notification);
    }
    else
    {
      $notification=array(
        'message'=>'Un problème est survenu',
        'alert-type'=>'error'
      );
      return redirect()->route('alluser')->with($notification);
    }
  }

  public function EditUser($id)
  {
    $edit = DB::table('users')->where('id',$id)->first();
    return view('users\admin\locataires\edit_user',compact('edit'));
  }

  public function UpdateUser(Request $request,$id)
  {
    $data = array();
    $data['name']= $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['date_location'] = date('Y-m-d');
    $data['role'] = $request->role;
    $data['password'] = Hash::make($request->password);
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['updated_at'] = date('Y-m-d H:i:s');

    $update = DB::table('users')
    ->where('id',$id)
    ->update($data);
    if($update)
    {
      $notification=array(
        'message'=>'Locataire modifier avec succes',
        'alert-type'=>'succes'
      );
      return redirect()->route('alluser')->with($notification);
    }
    else
    {
      $notification=array(
        'message'=>'Un problème est survenu',
        'alert-type'=>'error'
      );
      return redirect()->route('alluser')->with($notification);
    }
  }

  public function DeleteUser($id)
  {
    $delete = DB::table('users')->where('id',$id)->delete();
    if ($delete)
    {
      $notification=array(
        'message'=>'Locataire supprimer avec succes',
        'alert-type'=>'succes'
      );
      return redirect()->route('alluser')->with($notification);
    }
    else
    {
      $notification=array(
        'message'=>'Un problème est survenu',
        'alert-type'=>'error'
      );
      return redirect()->route('alluser')->with($notification);
    }
  }

  public function ShowUser($id)
  {
    $all = DB::table('users')
              ->join('apparts','users.id', '=', 'apparts.user_id')
              ->select('apparts.*')
              ->where('id',$id)->get();

  //   if ($all)
  //   {
  //     $notification=array(
  //       'message'=>'Locataire retrouvé avec succes',
  //       'alert-type'=>'succes'
  //     );
  //     return view('users\home', compact('all'))->with($notification);
  //   }
  //   else
  //   {
  //     $notification=array(
  //       'message'=>'Un problème est survenu',
  //       'alert-type'=>'error'
  //     );
  //     return view('users\home', compact('all'))->with($notification);
  //  // return view('users\home',compact('show'));
  //   }
  return view('users\home', compact('all'));//->with($notification);
  }

}
