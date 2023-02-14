@extends('site.template')
@section('meropage')

  <section id="latestproduct">
    <div class="container">
      <div class="row">
        <h3>Search Result</h3>
        @if($searchresults->count())
        @foreach($searchresults as $abc)
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
        @else
            No book Found.
        @endif
      </div>
    </div>
  </section>
@stop
