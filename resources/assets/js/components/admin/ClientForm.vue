<template>
	<div>
		<form @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
		
		<div class="form-group small">			
			<label for="name">Client Name</label>
			<input type="text" name="name" class="form-control" id="name" v-model="form.name">	
			<small v-show="form.errors.has('name')" class="form-text text-danger">{{form.errors.get('name')}}</small>
		</div>
		<div class="form-group small">
			<label for="address">Address</label>
			<input type="text" name="street1" class="form-control" id="street1" v-model="form.street1">
			<input type="text" name="street2" class="form-control" id="street2" v-model="form.street2">
			<input type="text" name="zip" class="form-control" id="zip" v-model="form.zip" placeholder="Zip">
			<small v-show="form.errors.has('street1')" class="form-text text-danger">
				The address field must be given.
			</small>
			<small v-show="form.errors.has('zip')" class="form-text text-danger">{{form.errors.get('zip')}}</small>
			
			<label>Country</label>
			<select class="form-control" v-model="form.country_id">
				<option v-for="country,index in countries" :value="index">{{country.text}}</option>
			</select>			
		</div>
	

	<div class="form-group">
		<button type="submit" class="btn btn-success btn-sm" :disabled="form.errors.any()">Save</button>		
	</div>
	</form>
</div>
</template>

<script>
import Form from '../../core/Form.js';
export default {
	data() {
		return {
			countries:[],
			form: new Form({
				name: '',
				street1: '',
				street2: '',
				zip: '',
				country_id:1,			
				contact:''
			})

		};
	},

	methods: {
		onSubmit() {			
			this.form.post('/clients')
				.then(data => this.$emit('newClientAdded'))
				.catch(err => console.log("The form has error " + err));
		},
		checkError() {
		return this.form.errors.any();
		},
	},

	beforeCreate() {
		axios.get('/countries').then(response => {
			this.countries = response.data;				
		}).catch(e=>{
		console.log("Error:" + e);
		});
	}
	
}
</script>