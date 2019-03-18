@extends('profilelayout')

@section('content')
<h1><b>&nbsp User Profile</b></h1>
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
                    You are logged in!
                </div>
                
            </div>
        </div>
    </div>
       <img src="/pics/profile.png" width="30%" height="30%" style=" display: block; margin-left: auto; margin-right: auto;">
       <hr>
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
@endsection
