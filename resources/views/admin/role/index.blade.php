@extends('layouts.app')

@section('content')
    @can('admin_view')
        <div class="card">
            <div class="card-header">Role</div>
            <div class="card-body">
                <table class="table table-light table-sm table-striped">
                    <thead>
                    <tr>
                        <th>Role</th>
                        <th>Label</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as  $role)
                        @foreach ($role->permissions as $permission)

                            <tr>
                                <td>{{$role->label}}</td>
                                <td>{{$permission->name}}</td>
                            </tr>

                        @endforeach
                    @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                    <span class="mr-auto ml-auto">{{$roles->render()}}</span>
                </div>
            </div>
        </div>
    @endcan
@endsection
