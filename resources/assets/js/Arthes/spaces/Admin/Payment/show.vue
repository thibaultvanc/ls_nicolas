
        <style>
        .spacer{
            height: 50px;
            display: block;
        }
        </style>


        <template >

        <section>



        <!--<pre>
          object:  {{object }}
        </pre>-->

            <!-- <h1>Show Payment</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.payment_id">
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



            
                        <div class="form-group payment_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="payment_id" class="col-sm-2 control-label">Payment_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.payment_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group customer_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="customer_id" class="col-sm-2 control-label">Customer_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.customer_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group customer_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="customer_name" class="col-sm-2 control-label">Customer_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.customer_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group payment_mode">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="payment_mode" class="col-sm-2 control-label">Payment_mode</label>
                        <div class="col-sm-10 ">
                        		 {{object.payment_mode }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group date">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="date" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10 ">
                        		 {{object.date}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group account_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="account_id" class="col-sm-2 control-label">Account_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.account_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group account_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="account_name" class="col-sm-2 control-label">Account_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.account_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group exchange_rate">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="exchange_rate" class="col-sm-2 control-label">Exchange_rate</label>
                        <div class="col-sm-10 ">
                        		 {{object.exchange_rate }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group amount">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="amount" class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-10 ">
                        		 {{object.amount }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group bank_charges">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="bank_charges" class="col-sm-2 control-label">Bank_charges</label>
                        <div class="col-sm-10 ">
                        		 {{object.bank_charges }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group tax_account_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="tax_account_name" class="col-sm-2 control-label">Tax_account_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.tax_account_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group tax_amount_withheld">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="tax_amount_withheld" class="col-sm-2 control-label">Tax_amount_withheld</label>
                        <div class="col-sm-10 ">
                        		 {{object.tax_amount_withheld }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group description">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10 ">
                        		 {{object.description}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group reference_number">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="reference_number" class="col-sm-2 control-label">Reference_number</label>
                        <div class="col-sm-10 ">
                        		 {{object.reference_number}} 

                        </div>
                        </div>
                        </div>
                        






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
                
                id : {
        				required: true,
        				//type can be an object or an number
                }

            },


            created () {


                if (typeof this.id == 'number' || typeof this.id == 'string') {
                  this.fetchObject()
                }

                console.log('123 in show', this.id)


            },
            watch: {



            },

            data(){
                return {
                    //debug:true,

                    sending:false,
                    loading:false,
                    object:{},



                    



                };
            },

            filters:{


            },
            computed : {
              getId(){
                  if(this.object.id){
                    return this.object.id
                  }
                  return this.id
              }


            },

            methods: {
                    fetchObject () {
                        var vm=this
                        axios.get('/api/Arthes/payment/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/payment/'+object.payment_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/payment/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/payment')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        