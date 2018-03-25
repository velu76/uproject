<template>
	<div>
		<form @submit.prevent="submitForm">
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
					:config="config.start"
					name="startdate"
					@on-change="onStartChange"
					>
				</flat-pickr>
			</div>

			<div class="form-group">
				<label>Expected End Date</label>
				<flat-pickr
					v-model="edate"
					class="form-control"
					:config="config.end"
					name="enddate"					
					@on-change="onEndChange">
				</flat-pickr>
				<span v-show="errors.has('endate')" class="help is-danger">{{ errors.first('enddate') }}</span>
			</div>
<!-- v-validate="'after:startdate'" -->
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

				start: {
					dateFormat: 'd-m-Y',
					altInput: true,
					wrap:true,
					minDate: null,
					maxDate: null				
				},

				end: {
					dateFormat: 'd-m-Y',
					altInput: true,
					wrap:true,	
					minDate: null						
				}				
			},	
		}
	},

	methods: {
		onStartChange(selectedDates,dateStr,instance) {			
			this.$set(this.config.end, 'minDate', dateStr);
		},

		onEndChange(selectedDates, dateStr,instance) {
			this.$set(this.config.start, 'maxDate', dateStr);
		}
	}

}

</script>

<style>
	
</style>