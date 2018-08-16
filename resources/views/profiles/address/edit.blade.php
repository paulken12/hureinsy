@extends('layouts.app')

@section('content')
    @foreach ($profile->basicInfo as $basicInfo)
        @forelse ($basicInfo->address as $address)
            <div class="row">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{$address->mAddress->address_type}}
                        </div>
                        <div class="card-body ">

                            <form action="{{route('profile.address.update', ['slug'=>$basicInfo->slug])}}" METHOD="POST">
                                {{csrf_field()}}

                                @include('profiles.includes.address')

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
            <div class="row">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center">You don't have any address provided</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    @endforeach
@endsection