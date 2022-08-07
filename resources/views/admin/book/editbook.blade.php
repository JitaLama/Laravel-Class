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
               <h4 class="card-title ">Edit News and Event</h4>
               <p class="card-category"> Read News</p>
              <div class="col-md-6" style="text-align:right">
              </div>
            </div>
          </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <form action="{{ route('postEditBook',$editbook->id) }}" method="post" enctype="multipart/form-data"> 
          <div class="modal-body">
        @csrf()
          Name: <input type="text" name="name" value = "{{$editbook->name}}"><br>
          Author: <input type="text" name="author" value ="{{$editbook->author}}"> <br />
          Detail: <textarea name="detail"> {{$editbook->detail}} </textarea> <br />
          Rack No: <textarea name="rack"> {{$editbook->rack}} </textarea> <br />
          No. of Book: <textarea name="quantity"> {{$editbook->bookquantity}} </textarea> <br />
          Photo: <input type="file" name="photo" value ="{{$editbook->photo}}"> <br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quit changes</button>
        <button type="submit" class="btn btn-primary">Edit changes</button>
      </div>
      </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


