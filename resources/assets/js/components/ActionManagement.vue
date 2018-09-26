<template>

	<div>
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
			<select v-model="Categories" name="request_status" id="request_status" class="form-control" required>
				<option value="" selected>--Select Category--</option>
				<option v-for="category in categories" v-bind:value="category.id">{{ category.request_status }}</option>
			</select>
		  </div>
			<select v-model="SubCategories" name="sub_request_status" id="sub_request_status" class="form-control" required>
				<option value="" selected>--Select SubCategory--</option>
				<option v-for="subcategory in subcategories" v-bind:value="subcategory.id" v-if="subcategory.master_id_status == Categories">{{ subcategory.sub_request_status }} - {{ subcategory.description }}</option>
			</select>
		</div>
		<div class="row" v-if="Categories == '2' && SubCategories == '4' || SubCategories == '6'">
			<div class="col-2">
				<div class="form-group">
					<label for="proposed_effective_date"><strong>Date Effective</strong></label>
					<input type="date" id="date_effective" name="date_effective" class="form-control" title="Date_effective" required>
				</div>
			</div>
		</div>
	</div>
	
</template>

<script>

export default{ 
	props: ['categories', 'subcategories'],

	data: function(){
		return {
			Categories: '',
			SubCategories: ''
		}
	}
}
	
</script>
