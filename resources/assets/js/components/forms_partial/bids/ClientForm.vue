<template>
	<div>
		<div class="form-group">
			<label>Client Name</label>
			<input class="form-control" 
			id="clientName" 
			v-model="clientName"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('clientName')}"> </input>
		</div>

		<div class="form-group">
			<label>Address</label>
			<input class="form-control" 
			id="address" 
			v-model="address"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('address')}"> </input>
		</div>

		<div class="form-group">
			<label>Contact Person</label>
			<input class="form-control" 
			id="contact" 
			v-model="contact"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('contact')}"> </input>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				clientName: '',
				address: '',
				contact: ''
			};
		}
	}
</script>