
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

            <!-- <h1>Show Account</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.account_id">
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
                        


                        <div class="form-group account_code">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="account_code" class="col-sm-2 control-label">Account_code</label>
                        <div class="col-sm-10 ">
                        		 {{object.account_code}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group currency_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_id" class="col-sm-2 control-label">Currency_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group currency_code">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_code" class="col-sm-2 control-label">Currency_code</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_code}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group account_type">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="account_type" class="col-sm-2 control-label">Account_type</label>
                        <div class="col-sm-10 ">
                        		 {{object.account_type}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_active">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_active" class="col-sm-2 control-label">Is_active</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_active, 'el-icon-circle-cross' : !object.is_active, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group balance">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="balance" class="col-sm-2 control-label">Balance</label>
                        <div class="col-sm-10 ">
                        		 {{object.balance }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group bank_balance">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="bank_balance" class="col-sm-2 control-label">Bank_balance</label>
                        <div class="col-sm-10 ">
                        		 {{object.bank_balance }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group bcy_balance">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="bcy_balance" class="col-sm-2 control-label">Bcy_balance</label>
                        <div class="col-sm-10 ">
                        		 {{object.bcy_balance }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group bank_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="bank_name" class="col-sm-2 control-label">Bank_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.bank_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group routing_number">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="routing_number" class="col-sm-2 control-label">Routing_number</label>
                        <div class="col-sm-10 ">
                        		 {{object.routing_number}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_primary_account">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_primary_account" class="col-sm-2 control-label">Is_primary_account</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_primary_account, 'el-icon-circle-cross' : !object.is_primary_account, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_paypal_account">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_paypal_account" class="col-sm-2 control-label">Is_paypal_account</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_paypal_account, 'el-icon-circle-cross' : !object.is_paypal_account, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group paypal_email_address">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="paypal_email_address" class="col-sm-2 control-label">Paypal_email_address</label>
                        <div class="col-sm-10 ">
                        		 {{object.paypal_email_address}} 

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
                        axios.get('/api/Arthes/account/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/account/'+object.account_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/account/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/account')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        