<?php
namespace App\Helpers\Courses;

use Illuminate\Http\Request;
use DB;

//Handle any payment related Issues
interface ShowCoursesByLevel{
/*Algorithms for the pattern*/
    public function fetch_data(Request $request);
}