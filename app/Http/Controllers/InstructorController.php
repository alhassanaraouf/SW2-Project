<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //
    public function index()
{
return view('home');
}
public function instructor()
{ return view('instructor'); }
}
