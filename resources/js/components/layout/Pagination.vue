<template>
    <div>
        <!--Breadcrumb and Page Show Start -->
                        <div class="pagination-box fix">
                            <ul class="blog-pagination ">
                                <ul class="pagination">
                                    <li class="prev disabled menu-group"> 

                                         <a  style="cursor: pointer;" @click="movePage(--currentPage )">
                                             &laquo;
                                        </a>  
                                    </li>

                                   
                                    <li :class="{active:currentPage == page}"
                                        v-for="page in fromToArr(currentPage,currentPage+5)" 
                                        :key="page"
                                    >
                                        <a  style="cursor: pointer;" 
                                        @click="movePage(page)">
                                            {{ page }}
                                        </a>
                                    </li>                                   

                                    <li class="next menu-group">
                                        <a  style="cursor: pointer;" @click="movePage(++currentPage )">
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
import {eventEmitter} from "../../app"
export default {
   
   props:['pagination'],
    data() {
        return{
            //pagination: this.$store.getters.pagination,
            currentPage:this.$store.getters.currentPage
        }
    },
    created(){
       
        eventEmitter.$on('paginationUpdate',() =>{
            this.pagination =  this.$store.getters.pagination           
            this.currentPage = this.$store.getters.currentPage
            this.$forceUpdate();
        })

       
    },
    update(){
      //this.pagination =  this.$store.getters.pagination
    },
   
    
    methods:{
        
        movePage:function(page){
                console.log(page)
                //если текущая страница 1 то запрещеаем переход на предыдущую страницу
            if (page < 1  ){
               
                this.currentPage = 1
                //console.log("Button disabled!")

            }else if(page >= this.pagination.last_page){//если последняя страница то запрещаем переходиьна следующую
            console.log('если последняя страница то запрещаем переходиьна следующую')
                this.currentPage = this.pagination.last_page
               // console.log("Button disabled!")
            }   
            else{   //если все ок то выводим содержание            
                console.log('если все ок то выводим содержание')
                this.currentPage = page
                //const method = this.$store.getters.method
                //this.$store.commit('setMethod', { method: 'items'})
                
                this.$store.dispatch('asyncGetItems',{page})
                        
            }
            
        },        
      
        //формируем ограниченную пагинацию (выводим не все 30 стр а только по 6 шт.)
            fromToArr(curPage,end){

               // pageCount = Math.floor(this.pagination.total/10)
                //console.log(`curPage=${curPage} end=${end}`)
                

                //если end пришел больше чем колличесво стр приравниваем его к колличесву стр.
               if(end > this.pagination.last_page ){
                   end = this.pagination.last_page
               }
               
                let arr=[]
                if(this.pagination.last_page > 5){
                    if(curPage == 2){
                        curPage -=1
                        end -=1
                    }else if(curPage > 2 && end < this.pagination.last_page){
                         console.log("Сработал curPage+3")
                        curPage -= 2
                        end -=2
                    }else if (curPage > 2 && end == this.pagination.last_page){
                        console.log("Сработал curPage+2")                      
                        curPage -= 2
                        //end -=1
                    }
                }

                for(curPage; curPage <= end; curPage++){
                    arr.push(curPage)
                }
                return  arr
                //делаем "отступы" в отображении номера стр в пагинации <-1 1 0 1 1->
              /*  if(this.pagination.last_page > 5){
                    if(curPage >3 &&  end  > 5){
                        curPage -=2
                        end -=2                                          
                    }
                }else{ curPage = 1 }                   

                for(curPage; curPage <= end; curPage++){
                    arr.push(curPage)
                }
               
                return  arr*/
            },
    }
}
</script>