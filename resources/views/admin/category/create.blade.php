@extends('layouts.admin.admin')
@section('page-heading','Add Product')
@section('content')
    <form method="post" action="{{route('category.store')}}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name_category"  value="{{old('name_category')}}" required>
{{--            @if($errors->has('name'))--}}
{{--                {{$errors->first('name')}}--}}
{{--            @endif--}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
