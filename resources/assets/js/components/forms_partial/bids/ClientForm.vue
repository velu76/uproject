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

			<select>
				<option v-for="option in countries" value="option.value">{{option.text}}</option>
			</select>			
			
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
			countries:[
				{text:'IT',value:1},
				{text:'Blade Runner',value:2},
				{text:'Thor Ragnarok',value:3},
			],
			clientName: '',
			aStreet1: '',
			aStreet2: '',
			zip:'',
			country:'',			
			contact: ''
		};
	},
	
}
</script>