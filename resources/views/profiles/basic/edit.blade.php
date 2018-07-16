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
                                <form action="{{route('profile.basic.update', ['first_name'=>$basicInfo->first_name])}}" method="POST">

                                    {{csrf_field()}}

                                    @can('basic_edit')
                                        <div class="form-group">
                                            <label for="company_id">Company Id</label>
                                            <input type="text" id="company_id" name="company_id" class="form-control" title="Company Id" value="{{ $basicInfo->company_id}}" disabled>
                                        </div>
                                    @endcan

                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" id="first_name" name="first_name" class="form-control {{$errors->has('first_name') ? ' is-invalid' : ''}}" title="First name" value="{{ $basicInfo->first_name }}">
                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" id="middle_name" name="middle_name" class="form-control {{$errors->has('middle_name') ? ' is-invalid' : ''}}" title="Middle name" value="{{ $basicInfo->middle_name }}">
                                        @if ($errors->has('middle_name'))
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" class="form-control {{$errors->has('last_name') ? ' is-invalid' : ''}}" title="Last name" value="{{$basicInfo->last_name}}">
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                                        @endif
                                    </div>

                                    @can('basic_edit')
                                        <div class="form-group">
                                        <label for="master_gender_key">Gender</label>
                                        <input type="text" id="master_gender_key" name="master_gender_key" class="form-control" title="Gender" value="{{$basicInfo->gender->gender}}" disabled>
                                    </div>
                                    @endcan

                                    <div class="form-group">
                                        <label for="master_civil_status_key">Civil Status</label>
                                        <select name="master_civil_status_key" id="master_civil_status_key" class="form-control" >
                                            @foreach ($civilStatus as $status)
                                                <option value="{{$status->key}}">{{$status->civil_status}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="master_citizenship_key">Citizenship</label>
                                        <select name="master_citizenship_key" id="master_citizenship_key" class="form-control" >
                                            @foreach ($citizenship as $citizen)
                                                <option value="{{$citizen->key}}">{{$citizen->citizenship}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @can('basic_edit')
                                        <div class="form-group">
                                        <label for="date_of_birth">Birth Date</label>
                                        <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" title="Birth date" value="{{$basicInfo->date_of_birth}}" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="birth_place">Birth Place</label>
                                        <input type="text" id="birth_place" name="birth_place" class="form-control" title="Birth place" value="{{$basicInfo->birth_place}}" disabled>
                                    </div>
                                    @endcan
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