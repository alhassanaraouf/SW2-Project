<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ManagePostController extends Controller
{
     function index()
    {
        return view('managepost');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('post')->orderBy('id','desc')->get();
            echo json_encode($data);
        }
    }

    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'title'    =>  $request->title,
                'desc'     =>  $request->desc,
            );
            $id = DB::table('post')->insert($data);
            if($id > 0)
            {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        } 
    }

    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('post')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('post')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}
?>
