@extends('layouts.app')

@section('content')
    @foreach ($profile->basicInfo as $basicInfo)

        <div class="row">
            <div class="container-fluid">
                @can('update',$profile)
                    <div class="card mt-1">
                        <div class="card-header">
                            {{$basicInfo->first_name}}&nbsp;{{$basicInfo->last_name}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('profile.basic.update', ['first_name'=>$basicInfo->first_name])}}"
                                  method="POST">

                                {{csrf_field()}}

                                @include('profiles.includes.basic')

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-body text-center">You are not authorize!</div>
                    </div>
                @endcan
            </div>
        </div>
    @endforeach
@endsection