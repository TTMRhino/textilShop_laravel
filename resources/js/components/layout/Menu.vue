<template>
    <div>
        <div class="sidebar white-bg">

            <div class="single-sidebar" >
                 <div  div class="group-title">
                    <h2>categories</h2>
                </div>
                <ul>
                    <ul class="middle-menu-list menuSideBar" 
                        v-for=" mgroup in mainGroups"
                        :key="mgroup.id"
                    >
                        <li>
                            <a href="/shop/index?maingroup_id=1">
                                {{ mgroup.title }} <i class="fa fa-angle-down" v-if="mgroup.subgroup.length"></i>
                            </a>

                            <ul class="ht-dropdown dropdown-style-one"
                                v-for="subGroup in mgroup.subgroup"
                                :key="subGroup.id"
                            >
                                <li> 
                                    <a href="/shop/index?subgroup_id=1">{{ subGroup.title }}</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>

                </ul>

               <!-- <div class="alert alert-danger" role="alert" v-if="errored">
                    Ошибка!                   
                </div>

              <div class="d-flex align-items-center" v-if="loading">
                <strong>Loading...</strong>
                <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
              </div>-->

               <!-- <ul class="middle-menu-list menuSideBar">
                    <li><a href="/shop/index?maingroup_id=2">
                            Гладильные доски<i class="fa fa-angle-down"></i></a>
                        <ul class="ht-dropdown dropdown-style-one">
                            <li> <a href="/shop/index?subgroup_id=1">Турецкие доски</a></li>
                            <li> <a href="/shop/index?subgroup_id=2">Доски "Ника"</a></li>
                        </ul>
                    </li>
                </ul>-->
            </div>


            <!-- Single Banner Start -->
            <div class="single-sidebar single-banner zoom pt-20">
                <a href="#" class="hidden-sm"><img src="/images/banner/8.jpg" alt="slider-banner"></a>
                <a href="#" class="visible-sm"><img src="/images/banner/6.jpg" alt="slider-banner"></a>
            </div>
            <!-- Single Banner End -->
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
               // mainGroups:this.$store.getters.getGroups
               // mainGroups:[],
                //errored:false,
                //loading:true
            }
        },
        mounted(){
            /*axios.get('/api/v1/maingroup')
            .then(res => { 
                this.mainGroups = res.data.data
                }).catch(err => {
                    this.errored = true
                    console.err(err)
                }).finally(() => { 
                    this.loading = false 
                    })*/
        },
        computed:{
            mainGroups(){
               
                return this.$store.getters.groups
            }
        },
        created(){
            //забираем с сервера группы(все) 
            this.$store.dispatch('asyncGetGroups')
        }
    }
</script>