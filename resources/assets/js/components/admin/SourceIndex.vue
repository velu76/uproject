<template>	
	<div> 
	 <table class="table">
			<header>
				<th>Source</th>
				<th>Actions</th>
			</header>				
			<tr v-for="source in sources.data" >	
				<td>{{source.text}}</td>
				<td><a class="btn btn-large" @click="editMe(source.text, source.id)">Edit</a></td>		
			</tr>
			
		</table>
  	</div>
</template>

<script>
	export default {		
		props: ['tdata'],
		data: () => {
			return{
				sources:''
			};
		},	

		methods: {
			editMe(item, id){
				alert("Editing item " + item + " with id of "  + id);
			}
		},
		mounted() {
			this.sources=JSON.parse(this.tdata);
			// console.log(this.sources.data);
        }
	}
</script>