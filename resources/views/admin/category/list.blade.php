@extends('layouts.admin.admin')
@section('page-heading','Category')
@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $key=> $category)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$category->name_category}}</td>
                        <td>
                            <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger"  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Delete</a>
                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-dark" >Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"> No data</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
