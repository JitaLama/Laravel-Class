@extends('site.template')
@section('meropage')

  <section id="slider">
    <img src="{{asset('Site/image/library.jpg')}}" alt="">
  </section>

  <section id="information">
    <div class="container">
        <div class="row">
            <div class="informationcontent">
                <h3>Search Book</h3>
                <form action="{{route('getSearchBook')}}" method="GET">
                  @csrf()
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="bookname" placeholder="Book Name" style="width:100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="bookauthor" placeholder="Author Name" style="width:100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="submit" value="search" class="btn btn-primary" style="width:100%">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

  <section id="latestproduct">
    <div class="container">
      <div class="row">
        @foreach($books as $abc)
        <div class="col-md-3 bookbox" >
          <div class="card">
            <img src="{{asset('uploads/book/'.$abc->photo)}}" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">
                  {{$abc->name}}
                </h5>
                <!-- <h5>{{$abc->author}}</h5> -->
                <!-- <p class="card-text">{{$abc->detail}}</p> -->
                <!-- <h5>{{$abc->rack}}</h5> -->
                <a href="{{route('getBookDetail',$abc->id)}}" class="btn btn-primary">View Detail</a>
              </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@stop
