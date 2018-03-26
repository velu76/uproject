<template>
	<div>
		<div class="form-group">
			<label>Currency used</label>
			<select class="form-control">
				<option>Singapore Dollar (SGD)</option>
				<option>US Dollar (USD)</option>
				<option>Chinese Renembi (CYR)</option>
				<option>Euro (EUR)</option>				
			</select>
		</div>

		<div class="form-group">
			<label>Actual Fee</label>
			<input class="form-control" 
			id="actualFee" 
			v-model="actualFee"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('actualFee')}"> </input>
		</div>

		<div class="form-group">
			<label>Contract Sum</label>
			<input class="form-control" 
			id="contractSum" 
			v-model="contractSum"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('contractSum')}"> </input>
		</div>

		<div class="form-group">
			<label>Project Cost / Value (Est)</label>
			<input class="form-control" 
			id="value" 
			v-model="value"
			v-validate="{required:true}"
			:class="{'is-invalid' : errors.has('value')}"> </input>
		</div>
	</div>
</template>

<script>
export default {

  name: 'FinanceForm',

  data () {
    return {
    	actualFee: 0,
    	value: 0,
    	contractSum: 0
    }
  }
}
</script>

<style lang="css" scoped>
</style>