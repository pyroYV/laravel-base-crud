@extends('layout.main')

@section('title','Main Comics')

@section('main-content')

    <div class="container-lg">
        <div class="row">
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
                            <th scope="col">Options</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                        <tr>
                            <th scope="col">
                                <a href="{{route('comics.show', $comic->id)}}">{{$comic->id}}</a>
                            </th>
                            <th scope="col" colspan="2">
                                <h5>{{$comic->title}}</h5>
                            </th>
                            <th scope="col">
                                <h5>{{$comic->price}}</h5>
                            </th>
                            <th scope="col">
                                <h5>{{$comic->series}}</h5>
                            </th>
                            <th scope="col">
                                <h5>{{$comic->sale_date}}</h5>
                            </th>
                            <th scope="col">
                                <h5>{{$comic->type}}</h5>
                            </th>
                            <th scope="col">
                                <a href="{{ route('comics.edit', $comic->id )}}" class="btn btn-primary">Edit</a>
                            </th>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

