<template>
	<div>		
		<div>
			<div class="form-group small">
				<label>Client</label>
				<select class="form-control" v-model="client_id">
					<option v-for="(client,id) in clients" :value="id">{{client.name}}</option>
				</select>							
			</div>
		</div>

		<hr>
		<div class="form-group small">
			<vs-button vs-type="primary-border" @click="activateForm">Add New Client</vs-button>
		</div>		

		<div>
			<p>{{status}}</p>
		</div>

		<div id="newClientForm" v-show="newClientFormActive">
			 <NewClientForm v-on:newClientAdded="updateClients" v-if="newClientFormActive"></NewClientForm>
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
			status: '',			
		};
	},

	methods: {
		updateClients() {
			axios.get('/getClients').then(response => {				
				this.clients = response.data;	
				this.activateForm();
				this.status = 'New client added!';								
			}).catch(e=>{
				console.log("Error:" + e);
			});	
		},

		activateForm() {
			this.newClientFormActive = ! this.newClientFormActive;
		}
	},	

	beforeCreate() {		
	axios.get('/getClients').then(response => {	
			this.clients = response.data;			
		}).catch(e=>{
			console.log("Error:" + e);
		});	
	}	
}
</script>