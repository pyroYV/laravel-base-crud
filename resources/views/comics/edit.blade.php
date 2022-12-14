@extends('layout.main')

@section('title','Main Comics')

@section('main-content')
<div class="container-lg bg-warning">
                <form action="{{route('comics.update', $comic->slug)}}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title" value="{{old('title', $comic->title)}}" name="title">
                </div>
                        @error('title')
                            <div class="alert alert-danger">
                                {{$message}}
                             </div>
                        @enderror

                <div class="mb-3">
                    <label for="Thumbnail" class="form-label">Thumbnail</label>
                    <input type="text"  class="form-control" id="Thumbnail" value="{{old('thumb', $comic->thumb)}}" name="thumb">
                </div>
                        @error('thumb')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                <div class="mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="number" step='0.01' class="form-control" id="Price" value="{{old('price', $comic->price)}}" name="price">
                </div>
                        @error('price')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                <div class="mb-3">
                    <label for="Series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="Series" value="{{old('series', $comic->series)}}" name="series">
                </div>
                        @error('series')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                <div class="mb-3">
                    <label for="Sale-Date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="Sale-Date" value="{{old('sale_date', $comic->sale_date) }}" name="sale_date">
                </div>
                @error('sale_date')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <label for="form-select" class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option
                    @if ($comic->type === 'Comic Book')
                        {
                        {{'selected'}}
                        }
                    @endif
                    value="Comic Book">Comic Book</option>
                    <option
                    @if($comic->type === 'Graphic Novel')
                        {
                        {{'selected'}}
                        }
                    @endif
                    value="Graphic Novel">Graphic Novel</option>
                    <option
                    @if($comic->type === 'Other')
                        {
                        {{'selected'}}
                        }
                    @endif
                    value="Other">Other</option>
                </select>

               <a href="{{route('comics.show', $comic->slug )}}"><input type="submit" class="btn btn-success mt-2" value="Submit"></a>
            </form>

</div>
@endsection
