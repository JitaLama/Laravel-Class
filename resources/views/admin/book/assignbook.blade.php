@extends('layouts.app', ['activePage' => 'Book', 'titlePage' => __('Book List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
          <div class="row">
            <div class="col-md-6">
               <h4 class="card-title ">Assign Book</h4>
               <!-- <p class="card-category"> Read Book</p> -->
            </div>
          </div>
          </div>
          <form action="{{route('postAddAssignBook')}}" method="POST">
              <div class="card-body">
                <div class="table-responsive">
                  <div class="modal-body">    
                    @csrf() 
                    <div class="row">
                      <div class="col-md-6">
                        Student ID: <input type="number" name="studentid"><br>
                        <input type="hidden" name="bookid" value="{{$book->id}}">
                        Name: <input type="text" name="studentname"><br>
                        class: <input type="number" name="studentclass"><br>
                        Mobile No.: <input type="number" name="studentmobile"><br>
                        Return Date: <input type="date" name="bookreturndate"><br>
                      </div>
                      <div class="col-md-6">
                        <h4>Book Detail</h4>
                        Book Code: <h4>{{$book->bookcode}}</h4>
                        Book Name: <strong>{{$book->name}}</strong><br>
                        Book Author: <h4>{{$book->author}}</h4>
                        Rack No: <h4>{{$book->rack}}</h4>
                        Book Quantity: <h4>{{$book->bookquantity}}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Copy from bootstrap -->
<!-- Button trigger modal -->
@endsection


