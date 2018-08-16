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
					<label for="department">Department</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_department" name="current_department" class="form-control-plaintext" title="Current_department" value="{{$employee_name->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_department" name="proposed_department" class="form-control-plaintext" title="Proposed_department" value="{{$get_job_details->proposed_department}}" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="reportto">Report To</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_reportto" name="current_reportto" class="form-control-plaintext" title="Current_reportto" value="{{$employee_name->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_reportto" name="proposed_reportto" class="form-control-plaintext" title="Proposed_reportto" value="{{$get_job_details->proposed_reports_to}}" disabled>
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
					<input type="text" id="current_position/title" name="current_position/title" class="form-control-plaintext" title="Current_reportto" value="{{$employee_name->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_position/title" name="proposed_position/title" class="form-control-plaintext" title="Proposed_position/title" value="{{$get_job_details->proposed_position_title}}" disabled>
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
					<input type="text" id="current_project_assignment" name="current_project_assignment" class="form-control-plaintext" title="Current_project_assignmento" value="{{$employee_name->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_project_assignment" name="proposed_project_assignment" class="form-control-plaintext" title="Proposed_project_assignment" value="{{$get_job_details->proposed_project_assignment}}" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="proposed_remarks">HR Remarks</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_remarks_hr" name="proposed_remarks_hr" class="form-control" title="Proposed_project_assignment">
				</div>
			</div>
		</div>
	</div>
</div>
