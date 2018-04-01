<template>
	<div>
		<div class="form-group">			
			<vs-input 
			vs-label="Client Name" 
			vs-placeholder="Name of client" 
			v-model="clientName" 
			:class="{'is-invalid' : errors.has('clientName')}"
			/>
		</div>

		<div class="form-group">
			<vs-input
			vs-label="Address"
			vs-placeholder="Street Line 1"
			v-model="aStreet1"
			/>
			<vs-input				
			vs-placeholder="Street Line 2"
			v-model="aStreet2"			
			/>

			<vs-input
			vs-label="Zipcode"
			vs-placeholder="zip coxde"
			v-model="zip"			
			/>			
			<label>Country</label>
			<select>
				<option v-for="option,index in countries" value="index">{{option}}</option>
			</select>			
			
		</div>

	<div class="form-group">
		<vs-input
			vs-label="Contact Person"
			vs-placeholder="Contact person at client side"
			v-model="contact"		
		/>		
	</div>
</div>
</template>

<script>
export default {
	data() {
		return {
			countries:'',
			clientName: '',
			aStreet1: '',
			aStreet2: '',
			zip:'',
			country:'',			
			contact: ''
		};
	},

	created() {
		axios.get('/countries').then(response => {
			this.countries = response.data;
			console.log(this.countries);
		}).catch(e=>{
			console.log("Error:" + e);
		});
	}
	
}
</script>