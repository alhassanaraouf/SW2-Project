<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewGradeController extends Controller
{
    
    function index(){
    
        return view('viewgrade');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
            
        {
            
            $data =  array(
                DB::table('users')->where('id', $request->id)->get()
            ); 
            echo json_encode($data);
            
        }
    }

}


