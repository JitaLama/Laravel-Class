@extends('layouts.app', ['activePage' => 'book', 'titlePage' => __('Book List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
          <div class="row">
            <div class="col-md-6">
            <h4 class="card-title mt-0">Book Table</h4>
            <p class="card-category">Manage books</p>
            <div class="col-md-6" style="text-align:right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Books</a>
            </div>
            </div>
          </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="myTable">
                <thead class="">
                  <th>Book Code</th>
                  <th>Name</th>
                  <th>Author</th>
                  <th>Rack No.</th>
                  <th>No. of Book</th>
                  <th>Photo</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach($books as $book)
                  <tr>
                    <td>{{$book->bookcode}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->rack}}</td>
                    <td>{{$book->bookquantity}}</td>
                    <td><img src="{{asset('uploads/book/'.$book->photo)}}" alt="" width="50"></td>
                    <td><a href="{{route('getDeleteBook', $book->id)}}">Delete</a> | <a href="{{route('getEditBook', $book->id)}}">Edit</a> | <a href="{{route('getAssignBook', $book->id)}}">Assign</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('postAddBook')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">    
        @csrf() Name: <input type="text" name="name"><br>
            Author: <input type="text" name="author"><br>
            Detail: <textarea name="detail"></textarea><br>
            Rack No.: <input type="number" name="rack"><br>
            No. of Book: <input type="number" name="quantity"><br>
            Photo: <input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection