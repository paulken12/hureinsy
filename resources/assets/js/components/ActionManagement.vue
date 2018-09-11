<template>

	<div>
		<select v-model="Categories" name="request_status" id="request_status" class="form-control" required>
			<option value="" selected>--Select Category--</option>
			<option v-for="category in categories" v-bind:value="category.id">{{ category.request_status }}</option>
		</select>

		<div v-if="Categories !== ''">
			<select v-model="SubCategories" name="sub_request_status" id="sub_request_status" class="form-control" required>
				<option value="" selected>--Select SubCategory--</option>
				<option v-for="subcategory in subcategories" v-bind:value="subcategory.id" v-if="subcategory.master_id_status == Categories">{{ subcategory.sub_request_status }} - {{ subcategory.description }}</option>
			</select>
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
