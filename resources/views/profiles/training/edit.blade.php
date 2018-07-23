@extends('layouts.app')

@section('content')
    @foreach ($profile->basicInfo as $basicInfo)
        @forelse($basicInfo->training as $training)

            <div class="row">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            Trainings
                        </div>
                        <div class="card-body ">
                            <form action="{{route('profile.training.update', ['profile'=>$profile])}}" METHOD="POST">

                                {{csrf_field()}}

                                @include('profiles.includes.training')

                                <br>
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <div class="card">
                <div class="card-body">
                    <p class="text-center"> You haven't provide training information</p>
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        @endforelse
    @endforeach
@endsection