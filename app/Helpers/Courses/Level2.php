<?php
namespace App\Helpers\Courses;

use Illuminate\Http\Request;
use DB;

class Level2 implements ShowCoursesByLevel {
public function __construct(){ }

function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('courses')->where('Level', '1')->get();
            echo json_encode($data);
        }
    }
    
function fetch1_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('courses')->where('Level', '2')->get();
            echo json_encode($data);
        }
    }
    
function fetch2_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('courses')->where('Level', '3')->get();
            echo json_encode($data);
        }
    }
function fetch3_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('courses')->where('Level', '4')->get();
            echo json_encode($data);
        }
    }
}