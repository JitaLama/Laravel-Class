@extends('layouts.app', ['activePage' => 'Frequently Asked Questions', 'titlePage' => __('FAQ List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="row">
                <div class="col-md-6">
                <h4 class="card-title ">FAQ Table</h4>
                <p class="card-category">Manage FAQ</p>
                </div>
                <div class="col-md-6" style="text-align:right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"">Add FAQ</a>
                </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Title</th>
                  <th>Detail</th>
                  <th>Photo</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach($Faq as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->detail}}</td>
                    <td><img src="{{asset('uploads/Faq/'.$item->photo)}}" alt="" width="50"></td>
                    <td><a href="{{route('getDeleteFAQ', $item->id)}}">Delete</a> | <a href="{{route('getEditFAQ',$item->id)}}">Edit</a></td>
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
      <form action="{{route('postAddFAQ')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
            @csrf() Title: <input type="text" name="name"><br>
                    Detail: <textarea name="detail"></textarea><br>
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