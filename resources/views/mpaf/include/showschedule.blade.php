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
					<input type="text" id="current_days_of_work" name="current_days_of_work" class="form-control-plaintext" title="Current_days_of_work" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_days_of_work" name="proposed_days_of_work" class="form-control" title="Proposed_days_of_work" value="{{$get_schedule_details->proposed_days_of_work}}">
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
					<input type="text" id="current_work_hours_per_week" name="current_work_hours_per_week" class="form-control-plaintext" title="Current_work_hours_per_week" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_hours_per_week" name="proposed_work_hours_per_week" class="form-control" title="Proposed_work_hours_per_week" value="{{$get_schedule_details->proposed_work_hours_per_week}}">
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
					<input type="text" id="current_type_of_shift" name="current_type_of_shift" class="form-control-plaintext" title="Current_type_of_shift" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_type_of_shift" name="proposed_type_of_shift" class="form-control" title="Proposed_type_of_shift" value="{{$get_schedule_details->proposed_type_of_shift}}">
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
					<input type="text" id="current_work_hours_per_day" name="current_work_hours_per_day" class="form-control-plaintext" title="Current_work_hours_per_day" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_hours_per_day" name="proposed_work_hours_per_day" class="form-control" title="Proposed_work_hours_per_day" value="{{$get_schedule_details->proposed_work_hours_per_day}}">
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
					<input type="text" id="current_work_location" name="current_work_location" class="form-control-plaintext" title="Current_work_location" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_location" name="proposed_work_location" class="form-control" title="Proposed_work_location" value="{{$get_schedule_details->proposed_work_location}}">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="sched_type">Sched Type</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
				<select name="sched_type" id="sched_type" class="form-control">
					@if(!empty($get_schedule_details->proposed_key_schedule_type))
						<option style="display:none" value="{{$get_schedule_details->schedType->key}}" selected>{{$get_schedule_details->schedType->schedule_type}}</option>
					@endif
					<option value="">--select--</option>
					@foreach ($sched_type as $schedule)
						<option value="{{$schedule->key}}">{{$schedule->schedule_type}}</option>
					@endforeach
				</select>
				</div>
			</div>
		</div>
		<div class="row alert alert-warning">
			<div class="col-2">
				<div class="form-group">
					<label for="proposed_remarks_job">HR Remarks</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_remarks_job" name="proposed_remarks_job" class="form-control-plaintext " title="proposed_remarks_job" value="{{$get_schedule_details->proposed_remarks_hr}}" readonly>
				</div>
			</div>
		</div>
	</div>
</div>