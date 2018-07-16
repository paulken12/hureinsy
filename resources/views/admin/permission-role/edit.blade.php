@extends('layouts.app')

@section('content')
    @can('admin_view')
        <div class="card">
            <div class="card-header">
                <span class="float-left">Edit Permissions</span>
            </div>
            <div class="card-body">
                @foreach ($roles as  $role)
                    <h3>{{$role->label}}</h3>
                    @foreach ($role->permissions as $permission)
                        <span class="badge badge-pill badge-info">
                            {{$permission->name}}
                            <a href="#"><span class="badge badge-pill badge-danger">X</span></a>
                        </span>
                    @endforeach
                    <br>
                    <br>
                @endforeach
            </div>
        </div>
    @endcan
@endsection
