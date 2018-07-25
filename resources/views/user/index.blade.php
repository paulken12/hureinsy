@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container-fluid">
            @foreach ($employees as $employee)
                <div class="card mt-1">
                    <div class="card-body m-2 p-0">
                        <img class="rounded-circle" src="{{$employee->owner->avatar_path}}" alt="Avatar" style="height: 50px">
                        &nbsp;{{$employee->company_id}} &nbsp;
                        <a href="{{$employee->path()}}">{{$employee->first_name}} {{$employee->middle_name}} &nbsp;{{$employee->last_name}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row mt-2">
        <span class="mr-auto ml-auto">{{$employees->links()}}</span>
    </div>
@endsection