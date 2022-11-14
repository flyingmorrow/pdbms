<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Illuminate\Support\Facades\Schema;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $req)
    {
        $result=Data::where($req->data)->get()->toArray();
        return $result;
    }

    public function detailshow($id)
    {
        $result=Data::where('id',$id)->get()->toArray();
        $columns=Schema::getColumnListing("data");
        return [$result,$columns];
    }
}
