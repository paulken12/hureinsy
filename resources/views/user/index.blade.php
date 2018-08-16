@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container-fluid">
                <div class="card mt-1">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td class="p-2" style="width: 55px">
                                            <img class="rounded-circle p-0 m-0" src="{{$employee->user->avatar_path}}" alt="Avatar" style="height: 38px">
                                        </td>
                                        <td>
                                            <a href="{{$employee->path()}}">{{$employee->first_name}} {{$employee->middle_name}} &nbsp;{{$employee->last_name}}</a>
                                        </td>
                                        <td>Team</td>
                                        <td>
                                            @foreach ($employee->user->roles as $roles)
                                                {{$roles->label}}
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
    <div class="row mt-2">
        <span class="mr-auto ml-auto">{{$employees->links()}}</span>
    </div>
@endsection