<template>
	<div>    		
	    <datatable v-bind="$data" />
  	</div>
</template>

<script>
	export default {
		data: () => ({
			columns: [
				{title: 'Source Name', field: 'text', sortable: true },
				{title: 'Created', field: 'created_at', sortable: true},
				{title: 'Updated', field: 'updated_at', sortable: true}
			],
			data: [],
			total: 0,
			query: {}
		}),

		watch: {
			query: {
				handler (query) {
					axios.post('/admin/getdtsources',{query}).then(response => {
						this.data = response.data;										
					}).catch(e=>{
					console.log("Error:" + e);
					});
				},
				deep: true
			}
		}
	}
</script>