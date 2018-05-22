<template>	
	<div> 
	
	<div class="editor" v-if="edit">
		<table>
			<tr>
				<td>
					Sourcename
				</td>
				<td>
					<input type="text" size=50 v-model="sourceedt" />
				</td>
			</tr>

			<tr>
				<td></td>
				<td><button @click="updateMe">Change now</button> <button @click="edit=false">Close</button></td>								
			</tr>
		</table>
	</div>


	 <table>
			<tr>
				<th>Source</th>
				<th>Actions</th>
			</tr>				
			<tr v-for="source in sources.data" >	
				<td>{{source.text}}</td>
				<td><button @click="editMe(source.text, source.id)">Edit</button></td>		
			</tr>		
		</table>
  	</div>
</template>

<script>
	export default {		
		props: ['tdata'],
		data: () => {
			return{
				sources:'',
				edit: false,
				sourceedt: '',
			};
		},	

		methods: {
			editMe(item, id){
				// alert("Editing item " + item + " with id of "  + id);
				this.edit=true;
				this.sourceedt=item;
			},

			updateMe() {
				alert("Update clicked!");
			}
		},
		mounted() {
			this.sources=JSON.parse(this.tdata);
			// console.log(this.sources.data);
        }
	}
</script>

<style>
table, th,td {
	border: 1px solid black;
}

th {
	vertical-align: middle;
}

th, td {
	padding: 5px;
	text-align:left;
}

.editor{
	border: 1px solid #2b2e2e; 
	padding: 10px 10px;
	margin-top:10px;
	margin-bottom:10px;
}

button {
	padding: 3px;
	margin:4px;
	color:#000;
	font-size:11px;
	background-color: #00d1b2;
}


</style>