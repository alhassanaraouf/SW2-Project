@extends('StudentLayout')


@section('content1')

   
  <article>

 <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/post.png" width="50" height="50">Instructors Notes</h1>
      <hr>   <div class="panel panel-default" style="width:97%;">
    <div class="panel-heading">Note:Please <a>
      {{ Auth::user()->name }}
   </a> check The notes Always.</div>
    <div class="panel-body">
     {{ csrf_field() }}
     <div id="post_data"></div>
    </div>
   </div>
   <br />
   <br />
  </div>


<script>
$(document).ready(function(){
 
 var _token = $('input[name="_token"]').val();

 load_data('', _token);

 function load_data(id="", _token)
 {
  $.ajax({
   url:"{{ route('viewpost.load_data') }}",
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#load_more_button').remove();
    $('#post_data').append(data);
   }
  })
 }

 $(document).on('click', '#load_more_button', function(){
  var id = $(this).data('id');
  $('#load_more_button').html('<b>Loading...</b>');
  load_data(id, _token);
 });

});
</script>
  </article>


@endsection