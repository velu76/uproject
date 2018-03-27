<template>
	<div>
		<div class="card">
			<div class="card-header">
				<h5 class="mb-0">
					<button class="btn btn-link" @click="ctoggle = !ctoggle"> 
						{{title}}
					</button>
				</h5>
			</div>

			<div class="collapse" :class="{ 'show' : ctoggle }" v-model="ctoggle" >
				<div class="card-body">
					<slot></slot>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {

  name: 'CardComponent',

  props: ['title'],

  data () {
    return {
    	ctoggle: false
    };
  }
}
</script>

<style lang="css" scoped>
</style>