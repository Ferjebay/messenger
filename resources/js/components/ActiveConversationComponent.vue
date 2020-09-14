<template>
	<b-row class="h-100">
        <b-col cols="8 h-100">
        	<b-card			   			    
			    footer-bg-variant="light"
			    footer-border-variant="dark"
			    title="Conversación activa"
			    class="h-100 test">		

			    <message-conversation-component v-for="message in messages" :key="message.id" :written_by_me="message.written_by_me">	
			    	{{ message.content }}
			    </message-conversation-component>			   

			    <div slot="footer" class="message">
			    	<b-form class="mb-0" @submit.prevent="postMessage">			    	
				    	<b-input-group class="mt-3">
						    <b-form-input placeholder="Escribe un mensaje..." v-model="newMessage" autocomplete="off">						    	
						    </b-form-input>
						    <b-input-group-append>					      
						      <b-button variant="info" type="submit">Enviar</b-button>
						    </b-input-group-append>
						</b-input-group>
					</b-form>
			    </div>
			</b-card>
        </b-col>

        <b-col cols="4">
            <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
            <p>Usuario seleccionado:</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
	export default {        
        data() {
          return {     
                mainProps: { blank: true, blankColor: '#777', width: 60, height: 60, class: 'm1' },
                messages: [] ,
                newMessage: ''      
          }
        },
        mounted(){
        	this.getMessages();
        },
        methods:{
        	getMessages(){
        		axios.get('/api/messages').then(response =>{
        			this.messages = response.data;
        		});
        	},
        	postMessage(){
        		const params = {
        			to_id: 2, 
        			content: this.newMessage
        		};
        		axios.post('/api/messages', params).then(response =>{
        			if(response.data.success){
	        			this.newMessage = '';
	        			this.getMessages();
        			}else{
        				
        			}
        		});	
        	}
        }
    }
</script>

<style scoped>
	.test .card-footer{
		padding: 0px;
	}	
</style>