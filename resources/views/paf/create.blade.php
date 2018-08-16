@extends('layouts.app')

@section('content')

    <form action="{{route('search.store')}}" method="POST">

        {{csrf_field()}}
        <div class="form-group">
            <label for="test_input">Test</label>
            <input type="text" id="test_input" name="test_input" class="form-control " title="Test" value="">
        </div>

        <button class="btn btn-success">submit</button>
    </form>

@endsection