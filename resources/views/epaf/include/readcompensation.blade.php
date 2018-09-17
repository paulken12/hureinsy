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
					<input type="text" id="current_salary" name="current_salary" class="form-control-plaintext" title="Current_salary" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_salary" name="proposed_salary" class="form-control-plaintext" title="Proposed_salary" value="{{empty($get_compensation_details->proposed_salary) ? '' : $get_compensation_details->proposed_salary}}" readonly>
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
					<input type="text" id="current_bonus_allowance" name="current_bonus_allowance" class="form-control-plaintext" title="Current_bonus/allowance" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_bonus_allowance" name="proposed_bonus_allowance" class="form-control-plaintext" title="Proposed_bonus/allowance" value="{{empty($get_compensation_details->proposed_bonus_allowance) ? '' : $get_compensation_details->proposed_bonus_allowance}}" readonly>
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
					<input type="text" id="current_benefits" name="current_benefits" class="form-control-plaintext" title="Current_benefits" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_benefits" name="proposed_benefits" class="form-control-plaintext" title="Proposed_benefits" value="{{empty($get_compensation_details->proposed_benefits) ? '' : $get_compensation_details->proposed_benefits}}" readonly>
				</div>
			</div>
		</div>

		@if(!empty($get_compensation_details->proposed_remarks_hr))
			<div class="row alert alert-primary">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_compensation_hr">HR Remarks</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_compensation_hr" name="proposed_remarks_compensation_hr" class="form-control-plaintext" title="proposed_remarks_compensation_hr" value="{{$get_compensation_details->proposed_remarks_hr}}" readonly>
					</div>
				</div>
			</div>
		@endif

		@if(!empty($get_compensation_details->proposed_remarks_exec))
			<div class="row alert alert-primary">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_compensation_exec">Executive Remarks</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_compensation_exec" name="proposed_remarks_compensation_exec" class="form-control-plaintext" title="proposed_remarks_compensation_exec" value="{{$get_compensation_details->proposed_remarks_hr}}" readonly>
					</div>
				</div>
			</div>
		@endif
	</div>
</div>