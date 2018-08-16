@extends('layouts.app')
@section('content')
<form action="" method="post">
	{{csrf_field()}}	
	<div class="card">
		<div class="card-header">
			<h4>Personnel Action Form</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="raj_id">Employee ID:</label>
						<input type="text" id="raj_id" name="raj_id" class="form-control-plaintext" title="raj_id" value="{{$employee_name->company_id}}" readonly>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="name">Name of Employee:</label>
						<input type="text" id="name" name="name" class="form-control-plaintext" title="Name" value="{{$employee_name->first_name}} {{$employee_name->middle_name}} {{$employee_name->last_name}}" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="date_hired">Date Hired</label>
						<input type="text" id="date_hired" name="date_hired" class="form-control-plaintext" title="Date_hired" readonly>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="team">Team</label>
						<input type="text" id="team" name="team" class="form-control-plaintext" title="Team" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="position">Position</label>
						<input type="text" id="position" name="position" class="form-control-plaintext" title="Position" readonly>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="department">Department</label>
						<input type="text" id="department" name="department" class="form-control-plaintext" title="Department" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="proposed_effective_date">Proposed Effective Date</label>
						<input type="text" id="proposed_effective_date" name="proposed_effective_date" class="form-control-plaintext" title="Proposed_effective_date" readonly>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<h4>Nature of Action</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="employment_status">Employment Status</label>
						<input type="text" id="employment_status" name="employment_status" class="form-control-plaintext" title="Employment_status" value="{{$form->employment_status}}" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="remarks">Remarks</label>
						<input type="text" id="remarks" name="remarks" class="form-control-plaintext" title="Remarks" value="{{$form->remarks}}" readonly>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('hpaf.include.job')
	@include('hpaf.include.schedule')
	@include('hpaf.include.compensation')
	
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="request_status">Action</label>
						<select name="request_status" id="request_status" class="form-control" required>
							<option style="display:none" value="" selected>--select--</option>
							@if($user_role->id > '2')
								@foreach ($request_status->whereNotIn('id', ['1','3']) as $status)
									<option value="{{$status->key}}">{{$status->request_status}}</option>
								@endforeach
							@else
								@foreach ($request_status->whereNotIn('id', '3') as $status)
									<option value="{{$status->key}}">{{$status->request_status}}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group text-center">
						<button class="btn btn-success" type="submit">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection