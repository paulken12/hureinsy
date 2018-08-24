@extends('layouts.app')
@section('content')
	<form action="{{route('paf.list.reassess.store')}}" method="post">
		<div class="card">
			<div class="card-header">
				<h4>Personnel Action Form</h4>
			</div>
			<div class="card-body">
				{{csrf_field()}}
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
							<select name="employment_status" id="employment_status" class="form-control" required>
								<option style="display:none" value="{{$form->master_key_employment_status}}" selected>{{$form->employmentStatus->employment_status}}</option>
								@foreach ($employment_status as $employment)
									<option value="{{$employment->key}}">{{$employment->employment_status}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="remarks">Remarks</label>
							<input type="text" id="remarks" name="remarks" class="form-control" title="Remarks" value="{{$form->remarks}}">
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('mpaf.include.showjob')
		@include('mpaf.include.showschedule')
		@include('mpaf.include.showcompensation')
		<div class="card">
			<div class="card-body">
				<div class="form-group text-center">
					<input type="text" id="tohr" name="tohr" class="form-control" title="tohr" value="rev-ma" hidden readonly>
					<input type="text" id="clos" name="clos" class="form-control" title="clos" value="rev-mat" hidden readonly>
					<button class="btn btn-success" name="resubmit" type="submit" value="pen">Resubmit to Human Resource</button>
					<button class="btn" name="resubmit" type="submit" value="clo">Close Request</button>
				</div>
			</div>
		</div>
	</form>
@endsection