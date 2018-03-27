<template>
	<div>
		<div class="form-group">
			<label>Bid Budget</label>
			<input class="form-control" 
			id="bidBudget" 
			v-model="bidBudget"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('bidBudget')}"> </input>
		</div>

		<div class="form-group">
			<label>Budget Utilised</label>
			<input class="form-control" 
			id="utilised" 
			v-model="utilised"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('utilised')}"> </input>
		</div>
	</div>	
</template>

<script>
	export default {
		data () {
			return {	
				bidBudget: 0,
				utilised: 0
			}
		}
	}
</script>