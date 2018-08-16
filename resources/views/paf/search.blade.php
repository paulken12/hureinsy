@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Search Employee by company id
        </div>
        <div class="card-body">
            <form action="{{route('search.me')}}" method="POST">


                {{csrf_field()}}
                <div class="form-group">
                    <label for="search_emp">Search Employee</label>
                    <input type="text" id="search_emp" name="search_emp" class="form-control" title="Search Employee">

                </div>

                <button class="btn btn-success" type="submit">Submit</button>
            </form>
            {{$errors}}
        </div>
    </div>

@endsection