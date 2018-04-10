<template>
	<div>
		<form @submit.prevent>
		<div class="accordian">

			<card-component title="Bid Details">
				<details-form></details-form>
			</card-component>		

			<card-component title="Tracking Details">
				<tracking-form></tracking-form>					
			</card-component>

			<card-component title="Budget Details">
				<budget-form></budget-form>						
			</card-component>

			<card-component title="Client Details">
				<client-form></client-form>						
			</card-component>
			
			<card-component title="Team Details">
				<team-form></team-form>	
			</card-component>

			<card-component title="External Parties / Partner Details">
				<externals-form></externals-form>	
			</card-component>

			<card-component title="Finance Details">
				<finance-form></finance-form>	
			</card-component>

			<card-component title="Legal Details">
				<legal-form></legal-form>	
			</card-component>

			<card-component title="Status Details">
				<status-form></status-form>	
			</card-component>

			<card-component title="Documents Details">
				<documents-form></documents-form>	
			</card-component>

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
import ClientForm from './forms_partial/bids/BidClientForm';
import TeamForm from './forms_partial/bids/TeamForm';
import ExternalsForm from './forms_partial/bids/ExternalsForm';
import FinanceForm from './forms_partial/bids/FinanceForm';
import LegalForm from './forms_partial/bids/LegalForm';
import StatusForm from './forms_partial/bids/StatusForm';
import DocumentsForm from './forms_partial/bids/DocumentsForm';
import CardComponent from './core/CardComponent';

export default {
	components: {
		DetailsForm,
		TrackingForm,
		BudgetForm,
		ClientForm,
		TeamForm,
		ExternalsForm,
		FinanceForm,
		LegalForm,
		StatusForm,
		DocumentsForm,
		CardComponent
	},

	data () {
		return {		
		};
	},

	methods: {
	}

}
</script>

<style>
</style>