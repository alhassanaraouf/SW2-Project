<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
// use App\Person\Person;
use App\Helpers\Courses\Level2;

class StudentCoursesController extends Controller
{
    
    function index(){
    
        return view('studentcourses');
    }

    function fetch_data(Request $request)
    {
        $getData = new Level2();
        $getData->fetch_data($request);
    }
    
    function fetch1_data(Request $request)
    {
        $getData = new Level2();
        $getData->fetch1_data($request);
    }
    
      function fetch2_data(Request $request)
    {
        $getData = new Level2();
        $getData->fetch2_data($request);
    }
    
       function fetch3_data(Request $request)
    {
        $getData = new Level2();
        $getData->fetch3_data($request);
    }
    

}
