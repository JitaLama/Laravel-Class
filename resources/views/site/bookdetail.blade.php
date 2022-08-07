@extends('site.template')
@section('meropage')

<section id="about">
<div class="container">
    <div class="row">
    <div class="about-us">
    <h1>Book Detail</h1>
    <div class="wrapper">
        <div class="content">
            <h3>Book Name: {{$book->name}}</h3>
            <small>Author Name: {{$book->author}}</small>
            <p>Book Detail: {{$book->detail}}</p>
            <!-- <h3>{{$book->rack}}</h3> -->
        </div>
        <div class="image-section">
            <img src="{{asset('uploads/book/'.$book->photo)}}" alt="">
        </div>
    </div>
</div>
    </div>
</div>

</section>
@stop
