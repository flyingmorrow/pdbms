<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataExport;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Data;

class ExcelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export() 
    {
        return Excel::download(new DataExport, 'data.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import(Request $req) 
    {

        Excel::import(new DataImport, $req->file);
        
        return redirect('/admin')->with('success', 'All good!');
    }
}