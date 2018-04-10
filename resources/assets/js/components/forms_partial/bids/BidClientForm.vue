<template>
	<div>
		<div class="form-group small">
			<vs-button vs-type="primary-border" @click="newClientFormActive=true">Add New Client</vs-button>
		</div>		
	<div id="newClientForm" v-show="newClientFormActive">
		 <NewClientForm></NewClientForm>
	</div>

</div>
</template>

<script>

import NewClientForm from '../../admin/ClientForm.vue';

export default {
	components: {
		NewClientForm
	},

	data() {
		return {
			newClientFormActive: false,
			listReady: false,
			
		};
	},
	

	beforeCreate() {		
		// axios.get('/countries').then(response => {
		// 	this.countries = response.data;				
		// }).catch(e=>{
		// console.log("Error:" + e);
		// });
	},

	methods: {
		getCountries() {
		
		}
	}
	
}
</script>