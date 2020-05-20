@extends('layouts.admin.admin')
@section('page-heading','User')
@section('content')

    @forelse($users as $key=>$user)
        <div class="modal fade" id="EditModal{{ $user->id }}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="{{ route('user.edit',$user->id) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Edit user</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>User name</label>
                                <input type="text" class="form-control" name="user" placeholder="Enter user"
                                       value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email"
                                       value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" name="oldPassword">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
    @endforelse
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                       style="text-align: center">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $key=>$user)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class="btn btn-danger" style="color: white"
                                   href="{{ route('user.destroy',$user->id) }}">Delete</a>

                                <button type="button" style="color: white"
                                        class="btn btn-primary" data-toggle="modal"
                                        data-target="#EditModal{{ $user->id }}">
                                    Edit
                                </button>
{{--                                <a class="btn btn-success" style="color: white"--}}
{{--                                   href="{{ route('user.showEditRole',$user->id) }}">EditRole</a>--}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


