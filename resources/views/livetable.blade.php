@extends('AdminLayout')


@section('content1')

   
  <article>

  <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/ad.png" width="50" height="45">Users Management</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading" >Note:1 menas Admin , 2 Means Instructor</div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
      <table class="table table-striped table-bordered" >
       <thead>
        <tr>
         <th> Name</th>
         <th>E-mail</th>
        <th>Password</th>
         <th>Type</th>
         <th>Operations</th>
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
   url:"/livetable/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td contenteditable id="name"></td>';
    html += '<td contenteditable id="email"></td>';
    html += '<td contenteditable id="password"></td>';
    html += '<td contenteditable id="isAdmin"></td>';
    html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     html +='<td contenteditable class="column_name" data-column_name="name" data-id="'+data[count].id+'">'+data[count].name+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="email" data-id="'+data[count].id+'">'+data[count].email+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="password" data-id="'+data[count].id+'">'+data[count].password+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="isAdmin" data-id="'+data[count].id+'">'+data[count].isAdmin+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }

 var _token = $('input[name="_token"]').val();

 $(document).on('click', '#add', function(){
  var name = $('#name').text();
  var email = $('#email').text();
 var password = $('#password').text();
  var isAdmin = $('#isAdmin').text();
  if(name != '' && email != '' && password != '')
  {
   $.ajax({
    url:"{{ route('livetable.add_data') }}",
    method:"POST",
    data:{name:name, email:email,password:password,isAdmin:isAdmin, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>All Fields are required</div>");
  }
 });

});
</script>
  </article>


@endsection

