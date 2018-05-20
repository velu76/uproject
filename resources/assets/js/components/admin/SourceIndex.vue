<template>
	<div>    		
	    <datatable v-bind="$data" />
  	</div>
</template>

<script>
	export default {
		data: () => ({
			fixHeaderAndSetBodyMaxHeight:200,
			tblStyle: 'table-layout: fixed',
			tblClass: 'table-bordered',
			columns: [
				{title: 'Source Name', field: 'text', sortable: true },
				
				{title: 'Operation', tdComp: 'Opt', visible: true}
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