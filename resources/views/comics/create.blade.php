@extends('layout.main')

@section('title','Main Comics')

@section('main-content')
<div class="container-lg">
                <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title" placeholder="Title" name="title">
                </div>
                <div class="mb-3">
                    <label for="Thumbnail" class="form-label">Thumbnail</label>
                    <input type="text"  class="form-control" id="Thumbnail" placeholder="Thumbnail" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="number" step='0.01' class="form-control" id="Price" placeholder="Price" name="price">
                </div>
                <div class="mb-3">
                    <label for="Series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="Series" placeholder="Series" name="series">
                </div>
                <div class="mb-3">
                    <label for="Sale-Date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="Sale-Date" placeholder="Date" name="sale_date">
                </div>
                <label for="form-select" class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option value="Comic Book">Comic Book</option>
                    <option value="Graphic Novel">Graphic Novel</option>
                    <option selected value="Other">Other</option>
                </select>

               <input type="submit" class="btn btn-success mt-2" value="Submit">
            </form>

</div>
@endsection
