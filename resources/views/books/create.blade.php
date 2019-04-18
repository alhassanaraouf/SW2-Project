@extends('InstructorLayout')


@section('content1')

<article>

  <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/books.png" width="50" height="45">Add New Book</h1><hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default" style="width:100%;">

                <div class="panel-body">

                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        Title:
                        <br>
                        <input type="text" name="title" class="form-control">

                        <br>

                        Cover File:
                        <br>
                        <input type="file" name="cover">

                        <br><br>

                        <input type="submit" value=" Upload book " class="btn btn-primary">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection