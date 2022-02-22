<template>
<div id="app"> 
    <div class="container">
      <menu-header></menu-header>
        <div>
            <router-view></router-view>
        </div>
    </div>
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