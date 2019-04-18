@extends('InstructorLayout')


@section('content1')

<article>

  <br/>
  <div class="container box" style="width:105%;padding:0;">
   <h1><img src="/pics/books.png" width="50" height="45">Courses Books</h1><hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default" style="width:100%;">
                <div class="panel-heading" width="100%">Books list</div>

                <div class="panel-body">

                    <a href="{{ route('books.create') }}" class="btn btn-primary">Add new book</a>
                    <br /><br />

                    <table  class="table table-striped table-bordered">
                          <tr>
                            <th>Title</th>
                            <th>Download file</th>
                        </tr>
                        @forelse ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td><a href="">{{ $book->cover }}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No books found.</td>
                            </tr>
                        @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div></article>
      
@endsection