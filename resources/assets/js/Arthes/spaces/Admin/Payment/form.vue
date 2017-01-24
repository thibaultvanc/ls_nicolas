
        <style>
        .spacer{
            height: 50px;
            display: block;
        }
        .fullwidth{
            background-color: 'yellowgreen'
        }
        </style>


        <template >

        <section>



        <!--<pre>
            {{form}}
        </pre>-->

            <!-- <h1>Payment Form</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">


                        <!--<div class="row" v-if="mode=='update'">
                            <div class="col-md-12">
                                <div class="pull-right"><a @click="deleteObject(object)"> Detete</a></div>
                            </div>
                        </div>-->
                    </div>
                    <div class="ibox-content">



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/payment" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group payment_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="payment_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Payment_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/410/edit" v-show="larastrapEditionMode">Payment_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="payment_id" v-model="form.payment_id" placeholder="payment_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('payment_id')" v-text="form.errors.get('payment_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group customer_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="customer_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Customer_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/411/edit" v-show="larastrapEditionMode">Customer_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="customer_id" v-model="form.customer_id" placeholder="customer_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('customer_id')" v-text="form.errors.get('customer_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group customer_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="customer_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Customer_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/412/edit" v-show="larastrapEditionMode">Customer_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="customer_name" v-model="form.customer_name" placeholder="customer_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('customer_name')" v-text="form.errors.get('customer_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group payment_mode">
    <div class="col-md-12 col-sm-12 ">
    <label for="payment_mode" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Payment_mode <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/413/edit" v-show="larastrapEditionMode">Payment_mode <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="payment_mode" v-model="form.payment_mode" placeholder="payment_mode" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('payment_mode')" v-text="form.errors.get('payment_mode')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group date">
    <div class="col-md-12 col-sm-12 ">
    <label for="date" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Date <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/414/edit" v-show="larastrapEditionMode">Date <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		<input type="number" class="form-control datepicker" name="date" v-model="form.date" placeholder="date" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('date')" v-text="form.errors.get('date')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group account_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="account_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Account_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/415/edit" v-show="larastrapEditionMode">Account_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="account_id" v-model="form.account_id" placeholder="account_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('account_id')" v-text="form.errors.get('account_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group account_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="account_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Account_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/416/edit" v-show="larastrapEditionMode">Account_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="account_name" v-model="form.account_name" placeholder="account_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('account_name')" v-text="form.errors.get('account_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group exchange_rate">
    <div class="col-md-12 col-sm-12 ">
    <label for="exchange_rate" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Exchange_rate <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/417/edit" v-show="larastrapEditionMode">Exchange_rate <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="exchange_rate" v-model="form.exchange_rate" placeholder="exchange_rate" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('exchange_rate')" v-text="form.errors.get('exchange_rate')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group amount">
    <div class="col-md-12 col-sm-12 ">
    <label for="amount" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Amount <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/418/edit" v-show="larastrapEditionMode">Amount <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="amount" v-model="form.amount" placeholder="amount" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('amount')" v-text="form.errors.get('amount')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group bank_charges">
    <div class="col-md-12 col-sm-12 ">
    <label for="bank_charges" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Bank_charges <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/419/edit" v-show="larastrapEditionMode">Bank_charges <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="bank_charges" v-model="form.bank_charges" placeholder="bank_charges" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('bank_charges')" v-text="form.errors.get('bank_charges')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group tax_account_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="tax_account_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Tax_account_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/420/edit" v-show="larastrapEditionMode">Tax_account_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="tax_account_name" v-model="form.tax_account_name" placeholder="tax_account_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('tax_account_name')" v-text="form.errors.get('tax_account_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group tax_amount_withheld">
    <div class="col-md-12 col-sm-12 ">
    <label for="tax_amount_withheld" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Tax_amount_withheld <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/421/edit" v-show="larastrapEditionMode">Tax_amount_withheld <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="tax_amount_withheld" v-model="form.tax_amount_withheld" placeholder="tax_amount_withheld" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('tax_amount_withheld')" v-text="form.errors.get('tax_amount_withheld')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group description">
    <div class="col-md-12 col-sm-12 ">
    <label for="description" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Description <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/422/edit" v-show="larastrapEditionMode">Description <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <textarea class="form-control" name="description" v-model="form.description" placeholder="description" ></textarea>

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group reference_number">
    <div class="col-md-12 col-sm-12 ">
    <label for="reference_number" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Reference_number <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/59/fields/423/edit" v-show="larastrapEditionMode">Reference_number <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="reference_number" v-model="form.reference_number" placeholder="reference_number" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('reference_number')" v-text="form.errors.get('reference_number')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                <div class="col-sm-12">
                    <!--<button @click="cancel"  class="btn btn-default pull-right">Cancel</button>-->
                    <!--<button v-if="mode=='update'" @click.prevent="deleteObject(object)"  class="btn btn-danger pull-left">Delete</button>-->
                    <el-button v-if="mode=='update'" icon="delete" @click.prevent="deleteObject(object)" tooltip="Delete" type="normal" color="danger" class="pull-left" ></el-button>


                    <button @click.prevent="submit(object)" class="btn btn-primary pull-right" :disabled="form.errors.any()" >
                        <b v-if="mode=='create'">Create</b>
                        <b v-if="mode=='update'">Update</b>
                         Payment <i class="fa fa-spin fa-spinner" v-show="sending"></i>
                     </button>

                </div>

            </form>



                    </div>
                </div>
            </div>
        </div>

            </section>
        </template>





        <script>

        import {VueForm} from '../../../modules/vue-form.js'

        import Vue from 'vue'
        window.Event=new Vue()




        





        export default {
            components: { 
            },

            props :{
                forceMode : {
        				required: false,
        				type:String,
                },
                createdObject : {
        				required: false,
        				type:Object,
                },
                // label : {
        				// required: false,
        				// type:String,
                // },
                // value : {
        				// required: false,
        				// type:String,
                // },
                id : {
        				required: false,
        				//type can be an object or an number
                },



            },


            created () {

              this.loading=true
              console.log('typeof this.id', typeof this.id)
              console.log('this.id', this.id)
              if (typeof this.id == 'number' || typeof this.id == 'string') {
                // alert('a1')
                this.mode='update'
                // this.id=this.object
                this.fetchObject()


              }
              else if (typeof this.id == 'object') {
                // alert('a2')

                alert('please give a number for prop')
                // this.fetchObject()
                // this.mode='update'
                // this.id=this.object.payment_id
                
                // this.form = new VueForm(this.object)
                
                // this.loading=false
              }
              else{
                // alert('a3')
                this.mode='create'

              }

                



                console.log("label")
                console.log(this.label)
                console.log("value")
                console.log(this.value)



                var vm = this

                
                this.loading=false


            },
            watch: {



            },

            data(){
                return {
                    //debug:true,
                    activityList:[],
                    sending:false,
                    loading:false,
                    mode:'',
                    form: new VueForm({
                      payment_id:'',
customer_id:'',
customer_name:'',
payment_mode:'',
date:'',
account_id:'',
account_name:'',
exchange_rate:'',
amount:'',
bank_charges:'',
tax_account_name:'',
tax_amount_withheld:'',
description:'',
reference_number:'',


                    }),



                    object:{},
                    



                };
            },

            filters:{


            },
            computed : {



            },

            methods: {
                    fetchObject () {
                        var vm=this
                        axios.get('/api/Arthes/payment/'+this.id).then(function (response) {
                                  vm.object=response.data.data
                                  vm.form = new VueForm(response.data.data)
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                 

                submit(object) {
                    this.sending=true

                    if(this.mode == 'create'){


                        this.form.submit('post','/api/Arthes/payment')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdPayment', response.data)

                            
                            if (!this.forceMode) {
                                    
                                            this.$router.push(window.history.back())
                            }

                            
                          }).catch(response => {
                            this.$notify({
                              title: 'Error',
                              message: 'Error while processing the request',
                              type: 'error',
                              offset: 100
                            });



                            // alert('error')
                          });







                        

                        // }, function (response) {
                        //     // alert('erreur')
                        //     // setTimeout(function() { debugger; }, 10000)
                        //     throw new Error("Something went badly wrong!");
                        // });

                    }// endif mode create


                    else if (this.mode == 'update'){

                        console.log('update')
                        
                        var vm=this

                          this.form.submit('put','/api/Arthes/payment/'+this.form.payment_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdPayment', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/payment')
                    });
                    

                }//endif mode update


                this.sending=false

                },
                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/payment/'+this.form.payment_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/payment')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        