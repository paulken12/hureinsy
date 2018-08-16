@extends('layouts.app')

@section('content')
    @auth()

        <personnel-form :user="{{ $user }}"
                       :gender="{{ $gender }}"
                       :profile="{{ $profile }}"
                       :civil="{{ $civilStatus }}"
                       :citizenship="{{ $citizenship }}"
                       :extension="{{ $extension }}"
                       :educations="{{ $educations }}"
                       :families="{{ $family }}"
        ></personnel-form>
        {{--<div class="row">--}}
            {{--<div class="container-fluid">--}}
                {{--<div class="card">--}}
                    {{--<form action="{{route('register.confirmed')}}" METHOD="POST">--}}
                        {{--{{csrf_field()}}--}}

                        {{----}}

                        {{--<div class="card-footer text-center">--}}
                            {{--<br>--}}
                            {{--<div class="form-check">--}}
                                {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
                                {{--<label class="form-check-label" for="defaultCheck1">--}}
                                    {{--I certify that the provided information is true and correct to the best of my--}}
                                    {{--knowledge.--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<br>--}}
                            {{--<input type="submit" class="btn btn-success" id="submit-form" value="Submit"--}}
                                   {{--name="submit-form">--}}
                            {{--<a href="#">--}}
                                {{--<input type="button" class="btn btn-secondary" value="Preview">--}}
                            {{--</a>--}}
                        {{--</div>--}}

                        {{--{{$errors}}--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    @endauth
@endsection