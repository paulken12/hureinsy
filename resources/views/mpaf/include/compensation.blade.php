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
					<input type="text" id="current_salary" name="current_salary" class="form-control-plaintext" title="Current_salary" value="{{$value->company_id}}" disabled>
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
					<input type="text" id="current_bonus/allowance" name="current_bonus/allowance" class="form-control-plaintext" title="Current_bonus/allowance" value="{{$value->company_id}}" disabled>
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
					<input type="text" id="current_benefits" name="current_benefits" class="form-control-plaintext" title="Current_benefits" value="{{$value->company_id}}" disabled>
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