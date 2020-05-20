@extends('layouts.admin.admin')
@section('page-heading','Products')
@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($images as $key=> $image)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$image->name}}</td>
                        <td><img src="{{'storage/images/'.$image->image}}" alt="" style="width: 200px;height: 200px"></td>
                        <td>{{$image->descriptions}}</td>
                        <td>{{$image->price}}</td>
                        <td>
                            <a href="{{route('image.delete',$image->id)}}" class="btn btn-danger"
                               onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Delete</a>
                            <a href="{{route('image.edit',$image->id)}}" class="btn btn-dark">Edit</a>
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
