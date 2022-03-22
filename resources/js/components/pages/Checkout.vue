<template>
    <div>
            <div class="checkout-area pt-30  pb-60">
                <div class="container">
            
                    <div class="row">
                        
                      
                        <div class="col-lg-6 col-md-6">
                            <!-- Fields -->
                        
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Имя</label>
                                    <input  class="form-control" 
                                    id="exampleInputPassword1" 
                                    placeholder="Имя"
                                    v-model="name"
                                    :class="{'is-invalid':$v.name.$error}"
                                    @blur="$v.name.$touch()">
                                    <div class="invalid-feedback">
                                        Не корректное имя
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputPhone1">Телефон</label>
                                    <input  class="form-control" 
                                    id="InputPhone1" 
                                    placeholder="Телефон"
                                    :class="{'is-invalid':$v.phone.$error}"
                                    v-model="phone"
                                    @blur="$v.phone.$touch()">
                                     
                                    <div class="invalid-feedback">
                                        Не корректый телефон
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputIndex">Почтовый индекс</label>
                                    <input  class="form-control" 
                                    id="InputIndex" 
                                    placeholder="Почтовый индекс"
                                    v-model="mailIndex"
                                    :class="{'is-invalid':$v.mailIndex.$error}"
                                    @blur="$v.mailIndex.$touch()">

                                    <div class="invalid-feedback">
                                        Не корректый индекс
                                    </div>
                                </div>                            

                                <div class="form-group">
                                    <label for="InputCity">Город</label>
                                    <input class="form-control" 
                                    id="InputCity" 
                                    aria-describedby="Введите город" 
                                    placeholder="Город"
                                    v-model="city"
                                    :class="{'is-invalid':$v.city.$error}"
                                    @blur="$v.city.$touch()">
                                    
                                   
                                    <div class="invalid-feedback">
                                        Не корректый Город
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputAdres1">Адрес</label>
                                    <input  class="form-control" 
                                    id="InputAdres1" 
                                    aria-describedby="InputAdres" 
                                    placeholder="Адрес"
                                    v-model="adress"
                                    :class="{'is-invalid':$v.adress.$error}"
                                    @blur="$v.adress.$touch()">
                                    
                                    <div class="invalid-feedback">
                                        Не корректый Адресс
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Коментарий</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                        
                               
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                                        <div class="your-order">
                                            <h3>Ваш заказ</h3>
                                            <div class="your-order-table table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Товар</th>
                                                            <th class="product-total">Всего</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    <!--FOREACH START -->

                                                        <tr 
                                                        class="cart_item"
                                                        v-for="item in items"
                                                        :key="item.id"
                                                        >
                                                            <td class="product-name">
                                                                {{ item.item }}  <strong class="product-quantity"> ×  {{ item.quantity }}  шт.</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="amount"> {{ item.price * item.quantity }} р.</span>
                                                            </td>
                                                        </tr>

                                                        <!--FOREACH END -->
                                                        
                                                    </tbody>
                                                    <tfoot>                                           
                                                        <tr class="order-total">
                                                            <th>Итого по заказу</th>
                                                            <td><strong><span class="amount"> {{ totalSum }} р.</span></strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="payment-method">
                                                <div class="payment-accordion">
                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOne">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Оплата:
                                                                </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse  in show" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="panel-body">
                                                                    <p>Оплата наличными при получении или банковской картой по терминалу.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    
                                                    </div>
                                                    <div class="order-button-payment">                                            
                                                    <button type="submit" 
                                                    class="btn btn-warning"
                                                    @click="setCustomer()"
                                                    :disabled="$v.$invalid">Заказать</button> 
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        
                            
                        
                    </div>
                </div>
            </div>

            

    </div>
</template>

<script>

           
            
import { required,maxLength,minLength,numeric } from 'vuelidate/lib/validators'

export default {
    data(){
        return{
            items:this.$store.getters.getCartItems,
            
                name:'',
                phone:'',
                mailIndex:'',
                city:'',
                adress:''
            
        }
    },
    validations:{
        name:{
            required,
            minLength:minLength(3),
            maxLength:maxLength(20)           
        },
        phone:{
          required,          
            minLength:minLength(3),
            maxLength:maxLength(20),
            numeric   
        },
        mailIndex:{
            required,
            minLength:minLength(3),
            maxLength:maxLength(20),
        },
        city:{
            required,
            minLength:minLength(3),
            maxLength:maxLength(20),
        },
        adress:{
            required,
            minLength:minLength(5),
            maxLength:maxLength(20),
        }
    },
    computed:{
        totalQuantity(){
            return this.$store.getters.totalQuantity
        },
        totalSum(){
            return this.$store.getters.totalSum
        }
    },
    methods:{
        setCustomer:function(){
            console.log("SET Customer")
             this.$http.interceptors.push((request, next) => {
                request.headers.set('X-CSRF-TOKEN', CoolApp.csrfToken);
                next();
            });


            
            let order ={}
            order.name = this.name
            order.phone = this.phone
            order.adress = this.adress
            order.mailindex = this.mailIndex
            order.city = this.city

             const resource = this.$resource('/api/v1/customers')
             resource.save({},order).then(res => {
                 this.setOrder(res.body.id)
             })

             
        },
        setOrder(customerId){
          
            

            const resource = this.$resource('/api/v1/order')
            let order ={}
            this.items.map(item =>{
                order ={
                    item: item.item,
                    item_id: item.id,
                    quantity: item.quantity,
                    customers_id: customerId,
                    price:item.price,
                    total: item.price * item.quantity
                }
                    console.log(order)
                 resource.save({},order).then(()=>{
                     //clearCart
                      this.$store.dispatch('clearCart')
                      this.$router.push('/orderdone')
                 })
            })
        }
    }
}
</script>