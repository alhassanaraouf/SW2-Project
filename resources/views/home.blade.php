@extends('profilelayout')
@section('content')
<div >

<div >
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
                    document.getElementById('logout-form').submit();" id="logoutadmin">
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
          <div class="w3-bar w3-dark-grey" ><ul align="center"><a href="/livetable" id="manageuser">Manage Users</a></ul></div>
        <br>
      <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/livetablec" id="managecourses">Manage Courses</a></ul></div>
              <br>
      <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/viewstudent" id="managecourses">Add Final Result</a></ul></div>

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
                    document.getElementById('logout-form').submit();" id="logoutins">
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
        
        <img src="/pics/ins.jpg" width="80%">
        <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/home">Profile</a></ul></div>
        <br>
          <div class="w3-bar w3-dark-grey" ><ul align="center"><a href="/instructorcourses" id="inscourse">Courses</a></ul></div>
        <br>
      <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/books">Courses Books</a></ul></div>
        <br>
    <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/managepost">Post Note</a></ul></div>
        <br>
    </ul>
  </nav>
    
  
  <article>
    
    <h1><img src="/pics/ad.png" width="50" height="45">Instructor Roles</h1>
      <hr>
    <p>Instructor will be able to manage all student of the course that he's responsible for,Organize them, Add grades to them and get report about them.</p><hr>
    <p>Instructor will be also able to see all the Courses that he's responsible for, and decide what to include on that course, projects, and quizes.</p><hr>
    <p>An Administrator provides office and administrative support to either a team or individual. This role is vital for the smooth-running of a business. Duties may include fielding telephone calls, receiving and directing visitors, word processing, creating spreadsheets and presentations, and filing. Additionally, Administrators are often responsible for specific projects and tasks, as well as overseeing the work of junior staff.</p>
      
  </article>
</section>

    
    
    </div>
    
<?php } elseif(auth()->user()->isAdmin == ''){?>
 <div>
   <div class="w3-bar w3-dark-grey">
    <li class="w3-bar-item w3-button">&nbsp Student Profile</li>
     <div>
       <button style="border: none;outline: 0; display: inline-block; padding: 10px 25px; color: black; background-color: #ddd; text-align: center; cursor: pointer;float:right;"><div  aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" id="logouts">
                  {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                   </div></button>
</div>
  </div>
     
<section>
  <nav >
    <ul>
      <img src="/pics/student.png" width="80%">
        <br><br>
        <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/home">Profile</a></ul></div>
        <br>
          <div class="w3-bar w3-dark-grey" ><ul align="center"><a href="/studentcourses">Courses</a></ul></div>
        <br>
      <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/stubook" id="coursebook">Courses Books</a></ul></div>
        <br>
         <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/viewpost" id="postnote">View Note</a></ul></div>
        <br>
     <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/viewgrade" id="postnote">Final Grade</a></ul></div>
      
    </ul>
  </nav>
     
<article>
    
    <h1><img src="/pics/ad.png" width="50" height="45">Student Roles</h1>
      <hr>
    <p>Student Will be Able To register to the college website, Then Loggin With Valid E-mail and Password.</p><hr>
    <p>Student Also will be able to See all the courses in system to choose courses,and see Courses Books to be downloaded.</p><hr>
    <p>When any instructor send important notes, Student will be able to see this note.</p>
    <hr>
    <p>Finally, Student will be able to see his final Grade.</p>
    <hr>
    <p>As Student you have to follow all the college roles and be carful of what you're doing.</p><br>
      
  </article>
</section>
    </div>
    
    <?php } else echo ' <div>

     
    </div>';?>

</div>
</div>
</div>
</div>

@endsection

