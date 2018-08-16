@extends('layouts.app')
@section('content')
    @can('update',Auth::user())
        <div class="card card">
            <div class="card-header">Change password</div>
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                `
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('changePassword') }}">
                    {{ csrf_field() }}

                    <div class="form-group ">
                        <label for="current-password">Current Password</label>
                        <input type="password" id="current-password" name="current-password" class="form-control {{$errors->has('current-password') ? ' is-invalid' : ''}}" title="Current password" required>
                        @if ($errors->has('current-password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('current-password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" id="password" name="password" class="form-control {{$errors->has('password') ? ' is-invalid' : ''}}" title="New password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Password Confirm</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Change password</button>
                    </div>
                </form>
            </div>
        </div>
    @endcan
@endsection
