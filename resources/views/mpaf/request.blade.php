@extends('layouts.app')
@section('content')
@if(empty($value))
<form action="{{route('paf.search')}}" method="post">
	{{csrf_field()}}
	<div class="card">
		@if(session('error'))
			<div class="alert alert-danger" role="alert">
				<h4 class="alert-heading">{{session('error')}}</h4>
			</div>
		@else
			<div class="alert alert-success" role="alert">
				<h4 class="alert-heading">{{session('success')}}</h4>
			</div>
		@endif
		<div class="card-header">
			<h4>Personnel Action Form</h4>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label for="raj_id">Enter employee ID</label>
				<input type="text" id="raj_id" name="raj_id" class="form-control " title="Id" required>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Search Employee</button>
			</div>
		</div>
	</div>
</form>
@else
<form action="{{route('paf.store')}}" method="post">
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
						<input type="text" id="raj_id" name="raj_id" class="form-control-plaintext" title="raj_id" value="{{$value->company_id}}">
						<input type="text" id="basic_id" name="basic_id" class="form-control-plaintext" title="basic_id" value="{{$value->user_id}}" hidden>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="name">Name of Employee:</label>
						<input type="text" id="name" name="name" class="form-control-plaintext" title="Name" value="{{$value->first_name}} {{$value->middle_name}} {{$value->last_name}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="date_hired">Date Hired</label>
						<input type="text" id="date_hired" name="date_hired" class="form-control-plaintext" title="Date_hired">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="team">Team</label>
						<input type="text" id="team" name="team" class="form-control-plaintext" title="Team">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="position">Position</label>
						<input type="text" id="position" name="position" class="form-control-plaintext" title="Position">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="department">Department</label>
						<input type="text" id="department" name="department" class="form-control-plaintext" title="Department">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="proposed_effective_date">Proposed Effective Date</label>
						<input type="date" id="proposed_effective_date" name="proposed_effective_date" class="form-control" title="Proposed_effective_date">
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
							<option style="display:none" value="" selected>--select--</option>
							@foreach ($contractChange as $contract)
								<option value="{{$contract->type}}">{{$contract->type}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="remarks">Remarks</label>
						<input type="text" id="remarks" name="remarks" class="form-control" title="Remarks">
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('mpaf.include.job')
	@include('mpaf.include.schedule')
	@include('mpaf.include.compensation')
	
	<div class="card">
		<div class="card-body">
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Request to Human Resource</button>
			</div>
		</div>
	</div>
</form>
@endif
@endsection
{{--
<div class="card">
	<div class="card-header">
		<h4>Change in Job Title, Duties, and Responsibilities Details</h4>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-2">
				<div class="form-group">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="current">Current</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="proposed">Proposed</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="team/department">Team/Department</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_team/department" name="current_team/department" class="form-control" title="Current_team/department">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_team/department" name="proposed_team/department" class="form-control" title="Proposed_team/department">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="supervisor">Supervisor</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_supervisor" name="current_supervisor" class="form-control" title="Current_supervisor">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_supervisor" name="proposed_supervisor" class="form-control" title="Proposed_supervisor">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="position/title">Position/Title</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_position/title" name="current_position/title" class="form-control" title="Current_position/title">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_position/title" name="proposed_position/title" class="form-control" title="Proposed_position/title">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="project_assignment">Project Assignment</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_project_assignment" name="current_project_assignment" class="form-control" title="Current_project_assignment">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_project_assignment" name="proposed_project_assignment" class="form-control" title="Proposed_project_assignment">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header">
		<h4>Change in Work Schedule Details</h4>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-2">
				<div class="form-group">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="current">Current</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="proposed">Proposed</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="days_of_work">Days of Work</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_days_of_work" name="current_days_of_work" class="form-control" title="Current_days_of_work">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_days_of_work" name="proposed_days_of_work" class="form-control" title="Proposed_days_of_work">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="work_hours_per_week">Work Hours per week</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_work_hours_per_week" name="current_work_hours_per_week" class="form-control" title="Current_work_hours_per_week">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_hours_per_week" name="proposed_work_hours_per_week" class="form-control" title="Proposed_work_hours_per_week">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="type_of_shift">Type of Shift</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_type_of_shift" name="current_type_of_shift" class="form-control" title="Current_type_of_shift">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_type_of_shift" name="proposed_type_of_shift" class="form-control" title="Proposed_type_of_shift">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="work_hours_per_day">Work Hours per Day</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_work_hours_per_day" name="current_work_hours_per_day" class="form-control" title="Current_work_hours_per_day">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_hours_per_day" name="proposed_work_hours_per_day" class="form-control" title="Proposed_work_hours_per_day">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="work_location">Work Location</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_work_location" name="current_work_location" class="form-control" title="Current_work_location">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_location" name="proposed_work_location" class="form-control" title="Proposed_work_location">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header">
		<h4>Change in Compensation and Benefit Details</h4>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-2">
				<div class="form-group">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="current">Current</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="proposed">Proposed</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="salary">Salary</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_salary" name="current_salary" class="form-control" title="Current_salary">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_salary" name="proposed_salary" class="form-control" title="Proposed_salary">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="bonus/allowance">Bonus/Allowance</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_bonus/allowance" name="current_bonus/allowance" class="form-control" title="Current_bonus/allowance">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_bonus/allowance" name="proposed_bonus/allowance" class="form-control" title="Proposed_bonus/allowance">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="benefits">Benefits</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_benefits" name="current_benefits" class="form-control" title="Current_benefits">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_benefits" name="proposed_benefits" class="form-control" title="Proposed_benefits">
				</div>
			</div>
		</div>
	</div>
</div>
--}}
{{-- 				            		@foreach($value->address as $values)
<input type="text" id="date_hired" name="date_hired"
class="form-control" title="Date_hired" value="{{$values->unit_num}}" >
@endforeach--}}