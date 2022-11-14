<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DataController extends Controller
{
    //
    public function index()
    {
        $users=User::all();
        return view('admin',['users'=>$users]);
    }

    public function save(Request $req)
    {
        User::where('id',$req->data['id'])->update(['role'=>$req->data['role'],'state'=>$req->data['state']]);
        return "success";
    }
}
