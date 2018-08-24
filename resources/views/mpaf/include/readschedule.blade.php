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
					<input type="text" id="current_days_of_work" name="current_days_of_work" class="form-control-plaintext" title="Current_days_of_work" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_days_of_work" name="proposed_days_of_work" class="form-control-plaintext" title="Proposed_days_of_work" value="{{$get_schedule_details->proposed_days_of_work}}" readonly>
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
					<input type="text" id="current_work_hours_per_week" name="current_work_hours_per_week" class="form-control-plaintext" title="Current_work_hours_per_week" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_hours_per_week" name="proposed_work_hours_per_week" class="form-control-plaintext" title="Proposed_work_hours_per_week" value="{{$get_schedule_details->proposed_work_hours_per_week}}" readonly>
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
					<input type="text" id="current_type_of_shift" name="current_type_of_shift" class="form-control-plaintext" title="Current_type_of_shift" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_type_of_shift" name="proposed_type_of_shift" class="form-control-plaintext" title="Proposed_type_of_shift" value="{{$get_schedule_details->proposed_type_of_shift}}" readonly>
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
					<input type="text" id="current_work_hours_per_day" name="current_work_hours_per_day" class="form-control-plaintext" title="Current_work_hours_per_day" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_hours_per_day" name="proposed_work_hours_per_day" class="form-control-plaintext" title="Proposed_work_hours_per_day" value="{{$get_schedule_details->proposed_work_hours_per_day}}" readonly>
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
					<input type="text" id="current_work_location" name="current_work_location" class="form-control-plaintext" title="Current_work_location" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_work_location" name="proposed_work_location" class="form-control-plaintext" title="Proposed_work_location" value="{{$get_schedule_details->proposed_work_location}}" readonly>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="work_location">Schedule type</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					@if(!empty($get_schedule_details->proposed_key_schedule_type))
					<input type="text" id="sched_type" name="sched_type" class="form-control-plaintext" title="sched_type" value="{{$get_schedule_details->schedType->schedule_type}}" readonly>
					@endif
				</div>
			</div>
			<div class="col">
				<div class="form-group">
				</div>
			</div>
		</div>

		@if($form->masterPafStatus->request_status == 'Pending')
		@else
			<div class="row">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_schedule">HR Remarks</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_schedule" name="proposed_remarks_schedule" class="form-control" title="proposed_remarks_schedule" value="{{$get_schedule_details->proposed_remarks_hr}}">
					</div>
				</div>
			</div>
		@endif
	</div>
</div>