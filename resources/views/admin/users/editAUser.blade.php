@extends('layouts.admin.admin')
@section('page-heading','Edit A User')
@section('content')

    <form method="post" action="{{ route('user.editUser',$user->id) }}">
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



@endsection
