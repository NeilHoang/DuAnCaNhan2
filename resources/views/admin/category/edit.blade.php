@extends('layouts.admin.admin')
@section('page-heading','Edit Product')
@section('content')

    <form method="post" action="{{route('category.update',$categories->id)}}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name_category" value="{{$categories->name_category}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
