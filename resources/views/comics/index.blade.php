@extends('layout.main')

@section('title','Main Comics')

@section('main-content')

    <div class="container-lg">
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
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
                            <th scope="col" colspan="4">Options</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <td scope="col">
                                    <a href="{{route('comics.show', $comic->slug)}}">{{$comic->id}}</a>
                                </td>
                                <td scope="col" colspan="2">
                                    <h5>{{$comic->title}}</h5>
                                </td>
                                <td scope="col">
                                    <h5>{{$comic->price}}</h5>
                                </td>
                                <td scope="col">
                                    <h5>{{$comic->series}}</h5>
                                </td>
                                <td scope="col">
                                    <h5>{{$comic->sale_date}}</h5>
                                </td>
                                <td scope="col">
                                    <h5>{{$comic->type}}</h5>
                                </td>
                                <td scope="col" colspan="2">
                                    {{-- edit --}}
                                    <a href="{{ route('comics.edit', $comic->slug )}}" class="btn btn-primary">Edit</a>
                                    {{-- delete --}}
                                </td>
                                <td scope="col" colspan="2">
                                    <form action =" {{route ('comics.destroy', $comic->slug) }}"
                                        method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type = "submit"  class="btn btn-danger d-inline"> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

