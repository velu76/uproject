<template>
	<div>    
		<code>query: {{ query }}</code>
	    <datatable v-bind="$data" />
  	</div>
</template>

<script>
	export default {
		data: () => ({
			columns: [
				{title: 'Text', field: 'text', sortable: true },
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
					axios.get('/getSources').then(response => {
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