@extends('layout.main')

@section('title','Main Comics')

@section('main-content')

    <div class="container-lg">
        <div class="row">
            <a class="button button-primary"href="{{route('comics.create')}}">Create new</a>
            <div class="col-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="">
                            <th scope="col">ID</th>
                            <th scope="col" colspan="2">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale Date</th>
                            <th scope="col">Type</th>
                        </tr>

                    </thead>
                    <tbody>
                    </tbody>
                </table>
                @foreach ($comics as $comic)
                <ul>
               <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->id}}</a>
               <h5>{{$comic->title}}</h5></li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>

@endsection

