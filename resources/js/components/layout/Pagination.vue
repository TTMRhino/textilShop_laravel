<template>
    <div>
        <!--Breadcrumb and Page Show Start -->
                        <div class="pagination-box fix">



                            <ul class="blog-pagination ">

                                <ul class="pagination">
                                    <li class="prev disabled">                                       
                                       

                                         <a href="#"   @click="movePage(--currentPage )">
                                             &laquo;
                                        </a>   
                                    </li>
                                    
                                    <li :class="{active:currentPage == page}" 
                                        v-for="page in fromToArr(currentPage,currentPage+5)" 
                                        :key="page"
                                        
                                    >
                                        <a href="#"  @click="movePage(page)">{{page}}</a>
                                    </li>

                                  

                                    <li class="next">
                                        <a href="#"  @click="movePage(++currentPage )">
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
    
    
    methods:{
        
        movePage:function(page){
                console.log(page)
                //если текущая страница 1 то запрещеаем переход на предыдущую страницу
            if (page < 1  ){
               
                this.currentPage = 1
                console.log("Button disabled!")

            }else if(page >= this.pagination.total){//если последняя страница то запрещаем переходиьна следующую
                this.currentPage = pagination.total
                console.log("Button disabled!")
            }   
            else{   //если все ок то выводим содержание            

                this.currentPage = page
                this.$store.dispatch('asyncGetItems',{
                        page,                       
                        })
            }
            
        },
        //формируем ограниченную пагинацию (выводим не все 30 стр а только по 6 шт.)
            fromToArr(curPage,end){

               // pageCount = Math.floor(this.pagination.total/10)
                //console.log
                

                //если end пришел больше чем колличесво стр приравниваем его к колличесву стр.
               if(end > Math.floor(this.pagination.total/10) ){
                   end = Math.floor(this.pagination.total/10)
               }
               
                let arr=[] 

                //делаем "отступы" в отображении номера стр в пагинации <-1 1 0 1 1->
                if(Math.floor(this.pagination.total/10) > 5){
                    if(curPage > 2 &&  end  > 4){
                        curPage -=2                                           
                    }
                }else{ curPage = 1 }                   

                for(curPage; curPage <= end; curPage++){
                    arr.push(curPage)
                }
               
                return  arr
            },
    }
}
</script>>