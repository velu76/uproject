<template>
	<div>
		<div class="form-group">
			<label>Bid Start Date</label>
			<flat-pickr
			v-model="bsdate"
			class="form-control"
			:config="config.start"								
			name="startdate"
			@on-change="onStartChange">
			</flat-pickr>
		</div>

		<div class="form-group">
			<label>Bid Completion Date</label>
			<flat-pickr
			v-model="bcdate"
			class="form-control"
			:config="config.complete"								
			name="startdate"
			@on-change="onCompleteChange">
			</flat-pickr>
		</div>

		<div class="form-group">
			<label>Submission Date</label>
			<flat-pickr
			v-model="submissiondate"
			class="form-control"
			:config="config.submit"								
			name="subdate"
			@on-change="onStartChange">
			</flat-pickr>
		</div>

		<div class="form-group">
			<label>Submission Deadline</label>
			<flat-pickr
			v-model="bcdate"
			class="form-control"
			:config="config.deadline"								
			name="deadline">
			</flat-pickr>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				bsdate: new Date(),
				bcdate: new Date(),
				submissiondate: new Date(),
				deadline: new Date(),

				config: {
					start: {
						dateFormat: 'd-m-Y',
						altInput: true,
						wrap:true,		
						minDate: null,
						maxDate: null
					},

					complete: {
						dateFormat: 'd-m-Y',
						altInput: true,
						wrap:true,		
						minDate: null,
						maxDate: null
					},

					submit: {
						dateFormat: 'd-m-Y',
						altInput: true,
						wrap:true
					},

					deadline: {
						dateFormat: 'd-m-Y',
						altInput: true,
						wrap:true
					},


				}
			};
		},

		methods: {
			onStartChange(selectedDates,dateStr,instance) {
				this.$set(this.config.complete, 'minDate', dateStr);
			},

			onCompleteChange(selectedDates,dateStr,instance) {
				this.$set(this.config.start, 'maxDate', dateStr);
			}
		}
	}
</script>