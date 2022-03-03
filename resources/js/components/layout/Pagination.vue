<template>
    <div>
        <!--Breadcrumb and Page Show Start -->
                        <div class="pagination-box fix">



                            <ul class="blog-pagination ">

                                <ul class="pagination">
                                    <li class="prev disabled">                                       
                                       

                                         <a href="#" :disabled="currentPage <= 1"  @click="movePage(--currentPage )">
                                             &laquo;
                                        </a>   
                                    </li>
                                    
                                    <li class="active"><a href="/shop/index" data-page="0">1</a></li>

                                    <li>
                                        <a href="/shop/index?page=2" data-page="1">2</a>
                                        
                                    </li>

                                    <li class="next">
                                        <a href="#" :disabled="currentPage >= pagination.total" @click="movePage(++currentPage )">
                                            &raquo;
                                        </a>                                       
                                      
                                    </li>
                                </ul>
                            </ul>

                            <div class="toolbar-sorter-footer">
                                <label>Показать:</label>
                                <select class="sorter" name="sorter">
                                    <option value="Position" selected="selected">12</option>
                                    <option value="Product Name">15</option>
                                    <option value="Price">30</option>
                                </select>
                                <span>страниц</span>
                            </div>
                        </div>
                        <!--Breadcrumb and Page Show End -->
    </div>
</template>

<script>
export default {
    props:['pagination'],
    data() {
        return{
            currentPage:1,
        }
    },
    created(){
        console.log("Из пагинации")
        console.log(this.pagination)
    },
    methods:{
        movePage:function(page){
                console.log(page)
            if (page < 1  ){
                this.currentPage = 1
                console.log("Button disabled!")
            }else if(page >= this.pagination.total){
                this.currentPage = pagination.total
                console.log("Button disabled!")
            }   
            else{               

                this.currentPage = page
                this.$store.dispatch('asyncGetItems',{
                        page,                       
                        })
            }
            
        }
    }
}
</script>>