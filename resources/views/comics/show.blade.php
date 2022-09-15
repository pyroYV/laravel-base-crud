@extends('layout.main')

@section('title', $comic->title)

@section('main-content')
<div class="container-lg bg-success rounded">
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="row p-5">
        <div class="col-6 align-center">
          <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->series}}">

        </div>
        <div class="col-4">
           <h1>{{$comic->title}}</h1>
           <h2>{{$comic->series}} </h2>
           <h5>Prezzo €{{$comic->price}}</h5>
           <h5>Data d'uscita: {{$comic->sale_date}}</h5>
           <h5>#{{$comic->type}}</h5>
        </div>
    </div>
</div>
@endsection
