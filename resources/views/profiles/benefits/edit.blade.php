@extends('layouts.app')

@section('content')
    @foreach ($profile->basicInfo as $basicInfo)
        @forelse($basicInfo->benefit as $benefit)

            <div class="row">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            Benefits & Payroll Account
                        </div>
                        <div class="card-body ">
                            <form action="{{route('profile.benefits.update', ['slug'=>$basicInfo->slug])}}" METHOD="POST">

                                {{csrf_field()}}

                                @include('profiles.includes.benefits')

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
                    <p class="text-center"> You  don't have a crime</p>
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        @endforelse
    @endforeach
@endsection