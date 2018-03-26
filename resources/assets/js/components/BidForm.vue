<template>
	<div>
		<form @submit.prevent>
		<div class="accordian">
			<div class="card">
				<div class="card-header">
					<h5 class="mb-0">
						<button class="btn btn-link" @click="bidToggle = !bidToggle"> 
							Bid Details
						</button>
					</h5>
				</div>

				<div class="collapse" :class="{ 'show' : bidToggle }" v-model="bidToggle" >
					<div class="card-body">
						<details-form></details-form>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h5 class="mb-0">
						<button class="btn btn-link" @click="trackToggle = !trackToggle">
							Tracking Details
						</button>
					</h5>
				</div>

				<div class="collapse" :class="{'show' : trackToggle}" v-model="trackToggle">
					<div class="card-body">
						<tracking-form></tracking-form>					
					</div>
				</div>
			</div>


		</div>
			
<!-- v-validate="'after:startdate'" -->
		</form>
	</div>
</template>

<script>
import DetailsForm from './forms_partial/bids/DetailsForm';
import TrackingForm from './forms_partial/bids/TrackingForm';

export default {
	components: {
		DetailsForm,
		TrackingForm
	},

	data () {
		return {
		
			// Accordian
			bidToggle: false,
			trackToggle: false
		};
	},

	methods: {
	}

}
</script>

<style>
</style>