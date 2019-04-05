<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveTable extends Controller
{
    function index()
    {
        return view('livetable');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('users')->orderBy('id','desc')->get();
            echo json_encode($data);
        }
    }

    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'name'    =>  $request->name,
                'email'     =>  $request->email,
                'password' => bcrypt($request->password),
                'isAdmin'     =>  $request->isAdmin
            );
            $id = DB::table('users')->insert($data);
            if($id > 0)
            {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        } 
    }

}
?>