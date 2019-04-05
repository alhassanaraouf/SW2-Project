@extends('profilelayout')
@section('content')
 <div class="w3-bar w3-dark-grey">
    <li class="w3-bar-item w3-button">Admin Pannel</li>
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
    
  <nav >
    <ul>
        <br>
      <img src="/pics/admin.png" width="80%">
        <div class="w3-bar w3-dark-grey"><ul align="center"><a href="/home">Profile</a></ul></div>
        <br>
          <div class="w3-bar w3-dark-grey" ><ul align="center"><a href="/livetable">Manage Users</a></ul></div>
        <br>
      <div class="w3-bar w3-dark-grey"><ul align="center"><a href="#">Manage Courses</a></ul></div>
        <br>
      
    </ul>
  </nav>

    
    @yield('content1')

  </section>



@endsection
