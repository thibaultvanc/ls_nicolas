
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

            <!-- <h1>Account Form</h1>-->

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



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/account" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group account_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="account_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Account_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/307/edit" v-show="larastrapEditionMode">Account_id <span class="text-danger">*</span></a>

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
      <a href="/admin/devis/2/tables/53/fields/308/edit" v-show="larastrapEditionMode">Account_name <span class="text-danger">*</span></a>

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
                            

    <div class="form-group account_code">
    <div class="col-md-12 col-sm-12 ">
    <label for="account_code" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Account_code <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/309/edit" v-show="larastrapEditionMode">Account_code <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="account_code" v-model="form.account_code" placeholder="account_code" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('account_code')" v-text="form.errors.get('account_code')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/310/edit" v-show="larastrapEditionMode">Currency_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="currency_id" v-model="form.currency_id" placeholder="currency_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_id')" v-text="form.errors.get('currency_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_code">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_code" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_code <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/311/edit" v-show="larastrapEditionMode">Currency_code <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="currency_code" v-model="form.currency_code" placeholder="currency_code" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_code')" v-text="form.errors.get('currency_code')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group account_type">
    <div class="col-md-12 col-sm-12 ">
    <label for="account_type" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Account_type <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/312/edit" v-show="larastrapEditionMode">Account_type <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="account_type" v-model="form.account_type" placeholder="account_type" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('account_type')" v-text="form.errors.get('account_type')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_active">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_active" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_active <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/313/edit" v-show="larastrapEditionMode">Is_active <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_active" v-model="form.is_active" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_active" v-model="form.is_active" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_active" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_active"
        @click="fetchObject"
        name="is_active"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_active')" v-text="form.errors.get('is_active')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group balance">
    <div class="col-md-12 col-sm-12 ">
    <label for="balance" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Balance <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/314/edit" v-show="larastrapEditionMode">Balance <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="balance" v-model="form.balance" placeholder="balance" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('balance')" v-text="form.errors.get('balance')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group bank_balance">
    <div class="col-md-12 col-sm-12 ">
    <label for="bank_balance" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Bank_balance <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/315/edit" v-show="larastrapEditionMode">Bank_balance <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="bank_balance" v-model="form.bank_balance" placeholder="bank_balance" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('bank_balance')" v-text="form.errors.get('bank_balance')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group bcy_balance">
    <div class="col-md-12 col-sm-12 ">
    <label for="bcy_balance" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Bcy_balance <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/316/edit" v-show="larastrapEditionMode">Bcy_balance <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="bcy_balance" v-model="form.bcy_balance" placeholder="bcy_balance" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('bcy_balance')" v-text="form.errors.get('bcy_balance')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group bank_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="bank_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Bank_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/317/edit" v-show="larastrapEditionMode">Bank_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="bank_name" v-model="form.bank_name" placeholder="bank_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('bank_name')" v-text="form.errors.get('bank_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group routing_number">
    <div class="col-md-12 col-sm-12 ">
    <label for="routing_number" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Routing_number <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/318/edit" v-show="larastrapEditionMode">Routing_number <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="routing_number" v-model="form.routing_number" placeholder="routing_number" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('routing_number')" v-text="form.errors.get('routing_number')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_primary_account">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_primary_account" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_primary_account <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/319/edit" v-show="larastrapEditionMode">Is_primary_account <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_primary_account" v-model="form.is_primary_account" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_primary_account" v-model="form.is_primary_account" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_primary_account" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_primary_account"
        @click="fetchObject"
        name="is_primary_account"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_primary_account')" v-text="form.errors.get('is_primary_account')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_paypal_account">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_paypal_account" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_paypal_account <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/320/edit" v-show="larastrapEditionMode">Is_paypal_account <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_paypal_account" v-model="form.is_paypal_account" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_paypal_account" v-model="form.is_paypal_account" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_paypal_account" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_paypal_account"
        @click="fetchObject"
        name="is_paypal_account"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_paypal_account')" v-text="form.errors.get('is_paypal_account')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group paypal_email_address">
    <div class="col-md-12 col-sm-12 ">
    <label for="paypal_email_address" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Paypal_email_address <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/53/fields/321/edit" v-show="larastrapEditionMode">Paypal_email_address <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="email" class="form-control" name="paypal_email_address" v-model="form.paypal_email_address" placeholder="paypal_email_address" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('paypal_email_address')" v-text="form.errors.get('paypal_email_address')"></span>
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
                         Account <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
                // this.id=this.object.account_id
                
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
                      account_id:'',
account_name:'',
account_code:'',
currency_id:'',
currency_code:'',
account_type:'',
is_active:false,
balance:'',
bank_balance:'',
bcy_balance:'',
bank_name:'',
routing_number:'',
is_primary_account:false,
is_paypal_account:false,
paypal_email_address:'',


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
                        axios.get('/api/Arthes/account/'+this.id).then(function (response) {
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


                        this.form.submit('post','/api/Arthes/account')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdAccount', response.data)

                            
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

                          this.form.submit('put','/api/Arthes/account/'+this.form.account_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdAccount', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/account')
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
                    axios.delete('/api/Arthes/account/'+this.form.account_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/account')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        