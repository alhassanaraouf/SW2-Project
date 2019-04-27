<?php

// Person.php

namespace App\Person;

use Illuminate\Http\Request;
use DB;

class Person
{
    public function getName()
    {
        return 'AppDividend';
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
    
     function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('courses')->orderBy('id','desc')->get();
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
            DB::table('courses')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }
    
    
    
     function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('courses')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }

}
