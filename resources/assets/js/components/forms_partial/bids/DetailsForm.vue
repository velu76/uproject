<template>
	<div>
		<div class="form-group">
			<label>Proposal Name</label>
			<input class="form-control" 
			id="title" 
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('title')}"> </input>
		</div>

		<div class="form-group">
			<label>Bid ID / Number</label>
			<input class="form-control" id="bidId" v-validate="{required:true}"> </input>
		</div>

		<div class="form-group">
			<label>Project Source</label>
			<select class="form-control">
				<option>Default select</option>
			</select>
		</div>

		<div class="form-group">
			<label>Project Category</label>
			<select class="form-control">
				<option>Default select</option>
			</select>
		</div>

		<div class="form-group">
			<label>Project Status</label>
			<select class="form-control">
				<option>Default select</option>
			</select>
		</div>

		<div class="form-group">
			<label>Project Description (Scope)</label>
			<input class="form-control" id="bidId" v-validate="{required:true}"> </input>
		</div>

		<div class="form-group">
			<label>Estimated Start Date</label>
			<flat-pickr
			v-model="esdate"
			class="form-control"
			:config="config.start"								
			name="startdate"
			@on-change="onStartChange">
			</flat-pickr>
		</div>

	<div class="form-group">
		<label>Estimated End Date</label>
		<flat-pickr
		v-model="eedate"
		class="form-control"
		:config="config.end"
		name="enddate"					
		@on-change="onEndChange">
	</flat-pickr>
	<span v-show="errors.has('endate')" class="help is-danger">{{ errors.first('enddate') }}</span>
</div>
</div>
</template>

<script>
export default {
	data() {
		return {
			esdate: new Date(),		
			eedate: new Date(),	

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
					minDate: null,					
				},
			}
		};
	},

	methods: {
		onStartChange(selectedDates,dateStr,instance) {			
			this.$set(this.config.end, 'minDate', dateStr);
		},

		onEndChange(selectedDates, dateStr,instance) {
			this.$set(this.config.start, 'maxDate', dateStr);
		},

		

	}
}
</script>