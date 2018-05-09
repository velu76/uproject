<template>
	<div>		
		<div>
			<div class="form-group small">
				<label>Client</label>
				<select class="form-control" v-model="client_id">
					<option v-for="client,index in clients" :value="index">{{client.text}}</option>
				</select>			
			</div>
		</div>

		<hr>
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
			clients: [],
			client_id: '',
			newClientFormActive: false,
			listReady: false,			
		};
	},
	

	beforeCreate() {		
		axios.get('/getClients').then(response => {
			this.clients = response.data;	
			console.log(response.data);			
		}).catch(e=>{
			console.log("Error:" + e);
		});
	},

	methods: {
	}
	
}
</script>