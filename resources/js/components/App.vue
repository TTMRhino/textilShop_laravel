<template>

    <div class="wrapper homepage">
      <menu-header></menu-header>        
    <router-view></router-view>



     
   

</div>
</template>

<script>
import Header from "./layout/Header.vue"

    export default {
        name:'App',
        components:{
            'menu-header':Header
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>