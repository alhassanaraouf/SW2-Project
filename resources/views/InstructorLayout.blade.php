@extends('profilelayout')
@section('content')
 <div class="w3-bar w3-dark-grey">
    <li class="w3-bar-item w3-button">Instructor Profile</li>
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
    
  <nav >
    <ul>
      <img src="/pics/ins.jpg" width="80%">
        <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/home">Profile</a></ul></div>
        <br>
          <div class="w3-bar w3-dark-grey" ><ul align="center"><a href="/instructorcourses">Courses</a></ul></div>
        <br>
      <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/books" id="coursebook">Courses Books</a></ul></div>
        <br>
         <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/managepost" id="postnote">Post Note</a></ul></div>
        <br>
      
    </ul>
  </nav>

    
    @yield('content1')

  </section>



@endsection
