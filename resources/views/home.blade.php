@extends('profilelayout')
@section('content')
<div class='container'>

<div class='row'>
<div class='col-md-8 col-md-offset-2'>
<div class='panel panel-default'>
<div class='panel-heading'>Dashboard</div>
   
    
<?php if(auth()->user()->isAdmin == 1){?>
<div class='panel-body'>
<h1><b>&nbsp Admin Profile</b></h1>
<div class="container" >
    
    <div class="row justify-content-center">
            
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"></div>
         
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                </div>
                
            </div>
        </div>
    </div>
       <img src="/pics/admin.jpg" width="30%" height="30%" style=" display: block;">
</div></div>
<?php } elseif(auth()->user()->isAdmin == 2){?>
 <div class='panel-body'>
<h1><b>&nbsp Instructor Profile</b></h1>
<div class="container" >
    
    <div class="row justify-content-center">
            
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"></div>
         
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                </div>
                
            </div>
        </div>
    </div>
       <img src="/pics/ins.png" width="30%" height="30%" style=" display: block;">
</div>
    </div>
    <?php } else echo '<div class="panel-heading"><h1><b>&nbsp Student Profile</b></h1>
<div class="container" >
    
    <div class="row justify-content-center">
            
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"></div>
                
            </div>
        </div>
    </div>
       <img src="/pics/student.png" width="30%" height="30%" style=" display: block;">
</div></div>';?>
 <div>
       <button style="border: none;outline: 0; display: inline-block; padding: 10px 25px; color: black; background-color: #ddd; text-align: center; cursor: pointer;float:right;"><div  aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                   </div></button>
</div>
</div>
</div>
</div>
</div>

@endsection

