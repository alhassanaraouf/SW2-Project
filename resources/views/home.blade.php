@extends('profilelayout')
@section('content')
<div >

<div class='row'>
<div >
<div >
   
<?php if(auth()->user()->isAdmin == 1){?>
<div >
    <div class="w3-bar w3-dark-grey">
    <li class="w3-bar-item w3-button">&nbsp Admin Pannel</li>
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
<section>
    
  <nav style="height:100%;">
    <ul>
        <br>
      <img src="/pics/admin.png" width="80%">
        <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/home">Profile</a></ul></div>
        <br>
          <div class="w3-bar w3-dark-grey" ><ul align="center"><a href="/livetable">Manage Users</a></ul></div>
        <br>
      <div class="w3-bar w3-dark-grey"><ul align="center"><a href="#">Manage Courses</a></ul></div>
    </ul>
  </nav>
    
  
  <article>
    
    <h1><img src="/pics/ad.png" width="50" height="45">Adminstration Roles</h1>
      <hr>
    <p>Admin will be able to manage all users of the system, adding, updating, deleteing and list them all,but as admin you cannot change anyone's password without his own agreement to avoid any problms, you havent the right to delete any one without a reason.</p><hr>
    <p>Admin will be able to manage all Courses of the system, adding, updating, deleteing and list them all,but as admin you have Also the rights to update courses description, show which courses is available for the semester, also will havee the right to add it's time and update in it.</p><hr>
    <p>An Administrator provides office and administrative support to either a team or individual. This role is vital for the smooth-running of a business. Duties may include fielding telephone calls, receiving and directing visitors, word processing, creating spreadsheets and presentations, and filing. Additionally, Administrators are often responsible for specific projects and tasks, as well as overseeing the work of junior staff.

</p>
      
  </article>
</section>

    
    
</div>
    
    
    
<?php } elseif(auth()->user()->isAdmin == 2){?>
 <div>
   <div class="w3-bar w3-dark-grey">
    <li class="w3-bar-item w3-button">&nbsp Instructor Profile</li>
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
    
<?php } elseif(auth()->user()->isAdmin == ''){?>
 <div>
   <div class="w3-bar w3-dark-grey">
    <li class="w3-bar-item w3-button">&nbsp Student Profile</li>
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
    
    <?php } else echo ' <div>

     
    </div>';?>

</div>
</div>
</div>
</div>

@endsection

