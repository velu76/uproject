<template>
	<div>
		<form>
			<div class="form-group">
				<label>Title</label>
				<input class="form-control" id="title"> </input>
			</div>

			<div class="form-group">
				<label>Bid ID / Number</label>
				<input class="form-control" id="bidId"> </input>
			</div>

			<div class="form-group">
				<label>Start Date</label>
				<flat-pickr
					v-model="sdate"
					class="form-control"
					:config="config"
					name="startdate">
				</flat-pickr>
			</div>

			<div class="form-group">
				<label>Expected End Date</label>
				<flat-pickr
					v-model="edate"
					class="form-control"
					:config="config"
					name="enddate">
				</flat-pickr>
			</div>

		</form>
	</div>
</template>

<script>
export default {
	data () {
		return {
			sdate: new Date(),		
			edate: new Date(),		

			config: {
				dateFormat: 'd-m-Y',
				altInput: true,
				wrap:true,				
			}	
		}
	},

}

</script>

<style>
	
</style>