<template> 
	<div>
		<b-media :right-align="written_by_me" vertical-align="center">
		    <template v-slot:aside>
		      <b-img blank blank-color="#ccc" width="48" alt="placeholder" rounded="circle"></b-img>
		    </template>				    
		    <b-card body-class="py-1">
		      <slot></slot>
		    </b-card>	    
		</b-media>			
	</div> 
</template>

<script>
	export default {  
		props: {'written_by_me': Boolean},      
        data() {
          return {     
                mainProps: { blank: true, blankColor: '#777', width: 60, height: 60, class: 'm1' },
                content: 'abc...'       
          }
        }
    }
</script>

<style scoped>
	.test .card-footer{
		padding: 0px;
	}	
</style>