@extends('layouts.app')

@section('content')
    @can('admin_view')
        <div class="card">
            <div class="card-header">Users</div>
            <div class="card-body">
                <table class="table table-light table-sm table-striped">
                    <thead>
                    <tr>
                        <th>User email</th>
                        <th>User name</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as  $user)
                        @foreach ($user->roles as $roles)
                            <tr>
                                <td>{{$user->email}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$roles->label}}</td>
                            </tr>

                        @endforeach
                    @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                    <span class="mr-auto ml-auto">{{$users->render()}}</span>
                </div>
            </div>
        </div>
    @endcan
@endsection
