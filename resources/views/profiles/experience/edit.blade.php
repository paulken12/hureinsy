@extends('layouts.app')

@section('content')
    @foreach($profile->basicInfo as $basicInfo)

        @forelse($basicInfo->experience as $experience)
            <div class="row">
                <div class="container-fluid">
                    <div class="card mt-1">
                        <div class="card-header">
                            Work Experience
                        </div>
                        <div class="card-body ">

                            <form action="{{route('profile.experience.update', ['profile'=>$profile])}}" METHOD="POST">
                                {{csrf_field()}}

                                @include('profiles.includes.experience')

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="row">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center">You don't have any work experience provided</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    @endforeach
@endsection