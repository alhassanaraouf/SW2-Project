<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Person\Person;

class CoursesController extends Controller
{
    function index()
    {
        return view('livetablec');
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
    
    function update_data(Request $request)
    {
        $person = new Person();
        $person->update_data($request);
    }

    function delete_data(Request $request)
    {
        $person = new Person();
        $person->delete_data($request);
    }
}
?>
