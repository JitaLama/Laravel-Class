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
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
              <form action="">
      <div class="modal-body">    
        @csrf() 
            Student ID: <input type="number" name="id"><br>
            Name: <input type="text" name="name"><br>
            class: <input type="text" name="author"><br>
            Mobile No.: <textarea name="detail"></textarea><br>
            Issue Date: <input type="number" name="rack"><br>
            Return Date: <input type="number" name="quantity"><br>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Copy from bootstrap -->
<!-- Button trigger modal -->
@endsection


