<template>	
	<div> 
		<code>{{ query }}</code>   		
	    <datatable v-bind="$data" />
  	</div>
</template>

<script>
	export default {
		data: () => ({
			pageSizeOptions: [5,10,15,20],
			columns: [
				{title: 'Source Name', field: 'text', sortable: true },
				
				{title: 'Operation', tdComp: 'Opt', visible: true}
			],
			data: [],
			total: 0,
			query: {},
						
		}),

		watch: {
			query: {
				handler (query) {
					axios.post('/admin/getdtsources',{query}).then(response => {
						this.data = response.data.data;	
						this.total = response.data.total;

					}).catch(e=>{
					console.log("Error:" + e);
					})
				},
				deep: true
			}
		}
	}
</script>