<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Person\Person;

class InstructorCoursesController extends Controller
{
    
    function index(){
    
        return view('instructorcourses');
    }

    function fetch_data(Request $request)
    {
         $person = new Person();
        $person->fetch_data($request);
    }
    
       function add_data(Request $request)
    {

        $person = new Person();
        $person->add_data($request);
        
    }


}
