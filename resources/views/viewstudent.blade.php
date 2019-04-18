@extends('AdminLayout')


@section('content1')

   
  <article>

  <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/grade.png" width="50" height="45">Students Final Grades</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:those are all student in your course.</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Student Name</th>
         <th>Grade</th>
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
   url:"/viewstudent/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td contenteditable id="name"></td>';
    html += '<td contenteditable id="grade"></td>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     html +='<td contenteditable class="column_name" data-column_name="name" data-id="'+data[count].id+'">'+data[count].name+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="grade" data-id="'+data[count].id+'">'+data[count].grade+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }
    
 var _token = $('input[name="_token"]').val();

 $(document).on('blur', '.column_name', function(){
  var column_name = $(this).data("column_name");
  var column_value = $(this).text();
  var id = $(this).data("id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('viewstudent.update_data') }}",
    method:"POST",
    data:{column_name:column_name, column_value:column_value, id:id, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
    }
   })
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
  }
 });

});
</script>
      
  </article>


@endsection