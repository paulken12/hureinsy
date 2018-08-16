@extends('layouts.app')

@section('content')
    @foreach ($profile->basicInfo as $basicInfo)
        <div class="card">
            <div class="card-body">

                <div class="form-group">
                    <a href="{{route('profiles',['slug'=>$basicInfo->slug])}}" class="btn btn-sm btn-secondary">Back</a>
                </div>

                @forelse($basicInfo->education as $education)
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card mb-4">
                                <div class="card-header text-info">
                                    {{$education->background->educational_level}}
                                </div>

                                <div class="card-body ">
                                    <form action="{{route('profile.education.update', ['profile'=>$profile])}}" METHOD="POST">
                                        {{csrf_field()}}
                                        @include('profiles.includes.education')
                                        <br>
                                        <div class="form-group">
                                            <button class="btn btn-success float-right" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center"> You  don't have a educational background</p>
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </div>
                @endforelse

                <div class="form-group text-center">
                    <a href="#" class="btn btn-info">Add more educational background</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection