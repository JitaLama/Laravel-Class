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
              <table class="table table-hover">
                <thead class="">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Author</th>
                  <th>Detail</th>
                  <th>Rack No.</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>C++</td>
                    <td>James</td>
                    <td>detail</td>
                    <td>number</td>
                    <td><a href="">Delete</a> | <a href="">Edit</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>C++</td>
                    <td>James</td>
                    <td>detail</td>
                    <td>number</td>
                    <td><a href="">Delete</a> | <a href="">Edit</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>C++</td>
                    <td>James</td>
                    <td>detail</td>
                    <td>number</td>
                    <td><a href="">Delete</a> | <a href="">Edit</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>C++</td>
                    <td>James</td>
                    <td>detail</td>
                    <td>number</td>
                    <td><a href="">Delete</a> | <a href="">Edit</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>C++</td>
                    <td>James</td>
                    <td>detail</td>
                    <td>number</td>
                    <td><a href="">Delete</a> | <a href="">Edit</a></td>
                  </tr>
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
      <form action="{{route('postAddBook')}}" method="POST">
      <div class="modal-body">    
        @csrf() Title: <input type="text" name="name" value="{{$Frequently->title}}"><br>
            Detail: <textarea name="detail">{{$Frequently->detail}}</textarea><br>
            Photo: <input type="file" name="photo" value="{{$Frequently->photo}}">
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