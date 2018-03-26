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

			<div class="card">
				<div class="card-header">
					<h5 class="mb-0">
						<button class="btn btn-link" @click="budgetToggle = !budgetToggle">
							Budget Details
						</button>
					</h5>
				</div>

				<div class="collapse" :class="{'show' : budgetToggle}" v-model="budgetToggle">
					<div class="card-body">
						<budget-form></budget-form>					
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h5 class="mb-0">
						<button class="btn btn-link" @click="clientToggle = !clientToggle">
							Client Details
						</button>
					</h5>
				</div>

				<div class="collapse" :class="{'show' : clientToggle}" v-model="clientToggle">
					<div class="card-body">
						<client-form></client-form>					
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h5 class="mb-0">
						<button class="btn btn-link" @click="teamToggle = !teamToggle">
							Team Details
						</button>
					</h5>
				</div>

				<div class="collapse" :class="{'show' : teamToggle}" v-model="teamToggle">
					<div class="card-body">
						<team-form></team-form>					
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h5 class="mb-0">
						<button class="btn btn-link" @click="externalsToggle = !externalsToggle">
							External Parties / Partner Details
						</button>
					</h5>
				</div>

				<div class="collapse" :class="{'show' : externalsToggle}" v-model="externalsToggle">
					<div class="card-body">
						<externals-form></externals-form>					
					</div>
				</div>
			</div>


		</div>
			
<!-- v-validate="'after:startdate'" -->
		</form>
	</div>
</template>

<script>
// Import form parts that would be shown as accordian
import DetailsForm from './forms_partial/bids/DetailsForm';
import TrackingForm from './forms_partial/bids/TrackingForm';
import BudgetForm from './forms_partial/bids/BudgetForm';
import ClientForm from './forms_partial/bids/ClientForm';
import TeamForm from './forms_partial/bids/TeamForm';
import ExternalsForm from './forms_partial/bids/ExternalsForm';

export default {
	components: {
		DetailsForm,
		TrackingForm,
		BudgetForm,
		ClientForm,
		TeamForm,
		ExternalsForm
	},

	data () {
		return {
		
			// Accordian
			bidToggle: false,
			trackToggle: false,
			budgetToggle: false,
			clientToggle: false,
			teamToggle: false,
			externalsToggle: false,
		};
	},

	methods: {
	}

}
</script>

<style>
</style>