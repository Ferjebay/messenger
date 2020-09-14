<template>
    <div>
        <b-form-input type="text" required placeholder="Buscar contacto..." class="text-center my-3">
        </b-form-input>

        <b-list-group>
           <contact-component variant="dark"></contact-component>
           <contact-component variant="primary"></contact-component>
           <contact-component variant="secondary"></contact-component>
        </b-list-group>        
    </div>
</template>

<script>
    export default {        
        data() {
          return {            
          }
        }
    }
</script>