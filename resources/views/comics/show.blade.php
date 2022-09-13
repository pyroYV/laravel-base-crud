@extends('layout.main')

@section('title', $comic->title)

@section('main-content')
    <div class="row">
        <div class="col-6">
           <li>{{$comic->title}}</li>
           <li>{{$comic->series}} </li>
           <li><img src="{{$comic->thumb}}" alt="{{$comic->series}}"></li>
        </div>
    </div>
@endsection
