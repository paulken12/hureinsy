@extends('layouts.app')
@section('content')
<form action="{{route('paf.search')}}" method="post">
	{{csrf_field()}}	
	@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			{{session('error')}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@elseif(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{session('success')}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif	
	<div class="card">
		<div class="card-header">
			<h4><i class="fab fa-wpforms"></i> &nbsp; Request for Personnel Action Form</h4>
		</div>
		<div class="card-body">
			<div class="input-group">
				<input type="text" id="raj_id" name="raj_id" class="form-control" title="employee ID" placeholder="Enter employee ID" required>
				<div class="input-group-append">
					<button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
				</div>	
			</div>
		</div>
	</div>
</form>
@endsection