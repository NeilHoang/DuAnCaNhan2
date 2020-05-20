@extends('layouts.admin.admin')
@section('page-heading','Add Image')
@section('content')
    <form method="post" action="{{route('image.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <label>Name</label>
            <textarea class="form-control ckeditor" name="name" rows="10">{{old('name')}}</textarea>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control ckeditor" name="descriptions" rows="10">{{old('descriptions')}}</textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="{{old('price')}}" required>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="categories_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name_category}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
