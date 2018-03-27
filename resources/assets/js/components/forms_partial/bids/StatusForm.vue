<template>
	<div>
		<div class="form-group">
			<label for="remarks">Remarks</label>
			<textarea class="form-control" id="remarks" rows="3"></textarea>
		</div>

		<div class="form-group">
			<h3>Project Status</h3>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="success" id="success" value="success" checked>
				<label class="form-check-label" for="success">
					Success
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="notSuccess" id="notSuccess" value="notSuccess">
				<label class="form-check-label" for="notSuccess">
					Not Success
				</label>
			</div>
		</div>
	</div>


</template>