@extends('StudentLayout')


@section('content1')

   
  <article>

      
<?php if(auth()->user()->level == 1){?>
  <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/books.png" width="50" height="45">Courses</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:It's Your available Courses .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Course Name</th>
         <th>Code</th>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
  </div>


<script>
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"/StudentCoursesController/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     html +='<td contenteditable class="column_name" data-column_name="cname" data-id="'+data[count].id+'">'+data[count].cname+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="code" data-id="'+data[count].id+'">'+data[count].code+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }

});
</script>
      
<?php } elseif(auth()->user()->level == 2){?>

       <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/books.png" width="50" height="45">Courses</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:It's Your available Courses .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Course Name</th>
         <th>Code</th>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
  </div>


<script>
$(document).ready(function(){

 fetch1_data();

 function fetch1_data()
 {
  $.ajax({
   url:"/StudentCoursesController/fetch1_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     html +='<td contenteditable class="column_name" data-column_name="cname" data-id="'+data[count].id+'">'+data[count].cname+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="code" data-id="'+data[count].id+'">'+data[count].code+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }

});
</script>
      
<?php } elseif(auth()->user()->level == 3){?>

      <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/books.png" width="50" height="45">Courses</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:It's Your available Courses .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Course Name</th>
         <th>Code</th>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
  </div>


<script>
$(document).ready(function(){

 fetch2_data();

 function fetch2_data()
 {
  $.ajax({
   url:"/StudentCoursesController/fetch2_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     html +='<td contenteditable class="column_name" data-column_name="cname" data-id="'+data[count].id+'">'+data[count].cname+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="code" data-id="'+data[count].id+'">'+data[count].code+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }

});
</script>
      
<?php } elseif(auth()->user()->level == 4){?>


      <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/books.png" width="50" height="45">Courses</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:It's Your available Courses .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Course Name</th>
         <th>Code</th>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
  </div>


<script>
$(document).ready(function(){

 fetch3_data();

 function fetch3_data()
 {
  $.ajax({
   url:"/StudentCoursesController/fetch3_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     html +='<td contenteditable class="column_name" data-column_name="cname" data-id="'+data[count].id+'">'+data[count].cname+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="code" data-id="'+data[count].id+'">'+data[count].code+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }

});
</script>
      
   <?php } else echo ' <div>

     
    </div>';?>
      
  </article>


@endsection