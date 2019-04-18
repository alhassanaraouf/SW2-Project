<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShowStudents extends Controller
{
    
    function index(){
    
        return view('viewstudent');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
            
        {
            
            $data = DB::table('users')->where('isAdmin',null)->get();
            echo json_encode($data);
        }
    }

  function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('users')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }
}
