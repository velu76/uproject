<template>
	<div>
		<div class="form-group">
			<label>Type</label>
			<select class="form-control">
				<option>Consortium</option>
				<option>JV</option>
				<option>Sub Consultant</option>
			</select>
		</div>

		<div class="form-group">
			<label>Sub Con / Vendor / Partner Name</label>
			<input class="form-control" id="bidId" v-validate="{required:true}"> </input>
		</div>

	</div>
</template>

<script>
	export default {
		data() {
			return {

			};
		}
	}

</script>