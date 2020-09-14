<template>
    <b-list-group-item class="p-0" :variant="variant" href="#">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
            </b-col>
            <b-col cols="6" align-self="center" class="d-none d-md-block">
                <p class="mb-0">{{ name }}</p>
                <p class="text-muted small mb-1">{{ lastMessage }}</p>
            </b-col>
            <b-col cols="3" class="d-none d-md-block" align-self="center">
                <p class="text-muted small">{{ lastTime }}</p>
            </b-col>
        </b-row>
    </b-list-group-item> 
</template>

<script>
    export default {
        props: ['variant'],
        data() {
          return {
            mainProps: { blank: true, blankColor: '#777', width: 60, height: 60, class: 'm1' },
            name: "Juan Saa A",
            lastMessage: "Tu: hasta luego",
            lastTime: "1:37 pm"
          }
        }
    }
</script>
