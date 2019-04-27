@extends('StudentLayout')


@section('content1')

   
  <article>
      
<?php if(auth()->user()->grade >= 50){?>
  <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/grade.png" width="50" height="45">Here's Your Intial Grade</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:It's Just initial Result for you <a>
      {{ Auth::user()->name }}
   </a> .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <div class="alert alert-success">Congratulations! You've Passed This Semester.</div>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
      <br><br><br><br>
  </div>
<?php } elseif(auth()->user()->grade == ''){?>

        <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/grade.png" width="50" height="45">Here's Your Intial Grade</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:It's Just initial Result for you <a>
      {{ Auth::user()->name }}
   </a> .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <div class="alert alert-danger">You're Bolcked Now,No Results To show!</div>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
      <br><br><br><br>
  </div>
<?php } elseif(auth()->user()->grade < 50){?>
      
        <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/grade.png" width="50" height="45">Here's Your Intial Grade</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:It's Just initial Result for you <a>
      {{ Auth::user()->name }}
   </a> .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <div class="alert alert-danger">Oops! You're Faild in This Semester. </div>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
      <br><br><br><br>
  </div>
    <?php } else echo ' <div>

     
    </div>';?>
      
  </article>


@endsection