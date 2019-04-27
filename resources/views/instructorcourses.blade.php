@extends('InstructorLayout')


@section('content1')

   
  <article>

  <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/books.png" width="50" height="45">Courses</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note: Add your Course if it didn't exist, Your ID is <a>
      {{ Auth::user()->id }}
   </a> .</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
         <button type="button" class="btn btn-success btn-xs" id="add" style="float:right;padding:7px;">Add</button>
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
   url:"/livetablec/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td contenteditable id="cname"></td>';
    html += '<td contenteditable id="code"></td>';
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

 var _token = $('input[name="_token"]').val();

 $(document).on('click', '#add', function(){
  var cname = $('#cname').text();
  var code = $('#code').text();
  var instructor = $('#instructor').text();
  if(cname != '' && code != '')
  {
   $.ajax({
    url:"{{ route('livetablec.add_data') }}",
    method:"POST",
    data:{cname:cname, code:code,instructor:{{ Auth::user()->id }}, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>all Fields are required</div>");
  }
 });

});
</script>
      
  </article>


@endsection