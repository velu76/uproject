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
			vs-labll="Zipcode"
			vs-placeholder="zip coxde"
			v-model="zip"			
			/>			
			
			
		</div>

	<div class="form-group">
		<vs-input
			vs-label="Contact Person"
			vs-placeholder="Contact person at client side"
			v-model="contact"		
		/>		
	</div>

	<div class="form-group">
		<vs-button vs-type="success-border">Save</vs-button>
	</div>
</div>
</template>

<script>
export default {
	data() {
		return {
			countries:[{'text':'Fulham', 'value':1},{'text':'Bronze', 'value':2}],
			clientName: '',
			aStreet1: '',
			aStreet2: '',
			zip:'',
			country:'',			
			contact: ''
		};
	},

	created() {
		this.countries = [{'text':'Fulham', 'value':1},{'text':'Bronze', 'value':2}];
		// axios.get('/countries').then(response => {
		// 	this.countries = response.data;
		// 	// console.log(this.countries);
		// 	this.countries = [{'text':'Fulham', 'value':1},{'text':'Bronze', 'value':2}];
		// }).catch(e=>{
		// 	console.log("Error:" + e);
		// });
	}
	
}
</script>