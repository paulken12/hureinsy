@extends('layouts.app')

@section('content')
    @can('admin_view')
        <div class="card">
            {{$errors}}
            <div class="card-header">
                Create new account
            </div>
            <div class="card-body">

                <form action="{{route('register.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="raj_id">Id</label>
                        <input type="text" id="raj_id" name="raj_id"
                               class="form-control-plaintext" title="Id" value="{{$company_id}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name"
                               class="form-control {{$errors->has('name') ? ' is-invalid' : ''}}" title="Name" value="{{old('name')}}" required>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $errors->first('name') }}
                                </strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="sss_num">SSS Id</label>
                        <input type="text" id="sss_num" name="sss_num"
                               class="form-control {{$errors->has('sss_num') ? ' is-invalid' : ''}}" title="SSS Id" value="{{old('sss_num')}}" required>

                        @if ($errors->has('sss_num'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $errors->first('sss_num') }}
                                </strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"
                               class="form-control {{$errors->has('email') ? ' is-invalid' : ''}}" title="Email" value="{{old('email')}}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="role_key">Role</label>
                        <select name="role_key" id="role_key" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{$role->name}}">{{$role->label}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Create account</button>
                    </div>


                </form>

            </div>
        </div>
    @endcan
@endsection
