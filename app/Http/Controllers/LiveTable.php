<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Repositories\User\UserInterface as UserInterface;


class LiveTable extends Controller
{
    
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    
    function index()
    {
        return view('livetable');
    }
    

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
//           $data = DB::table('users')->orderBy('id','desc')->get();
            $data =  $this->user->getAll(); 
            echo $data;
        }
    }

    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'name'    =>  $request->name,
                'email'     =>  $request->email,
                'password'     => bcrypt($request->password),
                'isAdmin'     =>  $request->isAdmin
            );
            $id = DB::table('users')->insert($data);
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
            DB::table('users')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
/*            DB::table('users')
                ->where('id', $request->id)
                ->delete();*/
            $this->user->delete($request->id);
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}
?>