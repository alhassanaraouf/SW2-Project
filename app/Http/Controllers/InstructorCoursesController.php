<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InstructorCoursesController extends Controller
{
    
    function index(){
    
        return view('instructorcourses');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
            
        {
            
            $data = DB::table('courses')->where('instructor',$request->id)->get();
            echo json_encode($data);
        }
    }

    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'cname'    =>  $request->cname,
                'code'     =>  $request->code,
                'instructor'     =>  $request->instructor,
            );
            $id = DB::table('courses')->insert($data);
            if($id > 0)
            {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        } 
    }
}
