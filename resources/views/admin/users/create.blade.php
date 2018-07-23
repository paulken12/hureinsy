@extends('layouts.app')

@section('content')
    @can('admin_view')
        <div class="card">
            <div class="card-header">
                Create new account
            </div>
            <div class="card-body">

                <form action="" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="raj_id">Id</label>
                        <input type="text" id="raj_id" name="raj_id" class="form-control" title="Id">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" title="Name">
                    </div>

                    <div class="form-group">
                        <label for="sss_num">SSS Id</label>
                        <input type="text" id="sss_num" name="sss_num" class="form-control" title="SSS Id">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" title="Email">
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Create account</button>
                    </div>


                </form>

            </div>
        </div>
    @endcan
@endsection
