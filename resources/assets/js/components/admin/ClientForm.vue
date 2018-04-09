<template>
	<div>
		<form @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
		<div class="form-group small">
			<label for="contact">Contact Person</label>
			<input type="text" name="contact" class="form-control" id="contact" v-model="form.contact">			
			<small v-show="form.errors.has('contact')" 
				  class="form-text text-danger">{{form.errors.get('contact')}}</small>
		</div>

		<div class="form-group small">			
			<label for="clientName">Client Name</label>
			<input type="text" name="clientName" class="form-control" id="clientName" v-model="form.clientName">	
			<small v-show="form.errors.has('clientName')" class="form-text text-danger">{{form.errors.get('clientName')}}</small>
		</div>
		<div class="form-group small">
			<label for="address">Address</label>
			<input type="text" name="aStreet1" class="form-control" id="aStreet1" v-model="form.aStreet1">
			<input type="text" name="aStreet2" class="form-control" id="aStreet2" v-model="form.aStreet2">
			<input type="text" name="zip" class="form-control" id="zip" v-model="form.zip" placeholder="Zip">
			<small v-show="form.errors.has('aStreet1')" class="form-text text-danger">
				The address field must be given.
			</small>
			<small v-show="form.errors.has('zip')" class="form-text text-danger">{{form.errors.get('zip')}}</small>
			
			<label>Country</label>
			<select class="form-control" v-model="form.country">
				<option v-for="country,index in countries" :value="index">{{country.text}}</option>
			</select>			
		</div>
	

	<div class="form-group">
		<vs-button vs-type="success-border" type="submit">Save</vs-button>
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
				clientName: '',
				aStreet1: '',
				aStreet2: '',
				zip: '',
				country:1,			
				contact:''
			})

		};
	},

	methods: {
		onSubmit() {
			console.log('form submitted!');
			this.form.post('/clients')
				.then(data => console.log(data))
				.catch(err => console.log("The form has error " + err));
		},

		setBorder() {
			if(this.form.errors.has('clientName')) return 'danger';

			return 'default';	
		}
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