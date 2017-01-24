
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

            <!-- <h1>Invoice Form</h1>-->

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



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/invoice" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group invoice_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="invoice_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Invoice_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/351/edit" v-show="larastrapEditionMode">Invoice_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="invoice_id" v-model="form.invoice_id" placeholder="invoice_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('invoice_id')" v-text="form.errors.get('invoice_id')"></span>
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
      <a href="/admin/devis/2/tables/56/fields/352/edit" v-show="larastrapEditionMode">Customer_name <span class="text-danger">*</span></a>

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
                            

    <div class="form-group customer_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="customer_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Customer_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/353/edit" v-show="larastrapEditionMode">Customer_id <span class="text-danger">*</span></a>

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
                            

    <div class="form-group status">
    <div class="col-md-12 col-sm-12 ">
    <label for="status" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Status <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/354/edit" v-show="larastrapEditionMode">Status <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="status" v-model="form.status" placeholder="status" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('status')" v-text="form.errors.get('status')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group invoice_number">
    <div class="col-md-12 col-sm-12 ">
    <label for="invoice_number" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Invoice_number <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/355/edit" v-show="larastrapEditionMode">Invoice_number <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="invoice_number" v-model="form.invoice_number" placeholder="invoice_number" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('invoice_number')" v-text="form.errors.get('invoice_number')"></span>
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
      <a href="/admin/devis/2/tables/56/fields/356/edit" v-show="larastrapEditionMode">Reference_number <span class="text-danger">*</span></a>

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


                          

                        <div >
                            

    <div class="form-group date">
    <div class="col-md-12 col-sm-12 ">
    <label for="date" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Date <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/357/edit" v-show="larastrapEditionMode">Date <span class="text-danger">*</span></a>

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
                            

    <div class="form-group due_date">
    <div class="col-md-12 col-sm-12 ">
    <label for="due_date" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Due_date <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/358/edit" v-show="larastrapEditionMode">Due_date <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		<input type="number" class="form-control datepicker" name="due_date" v-model="form.due_date" placeholder="due_date" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('due_date')" v-text="form.errors.get('due_date')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group due_days">
    <div class="col-md-12 col-sm-12 ">
    <label for="due_days" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Due_days <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/359/edit" v-show="larastrapEditionMode">Due_days <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="due_days" v-model="form.due_days" placeholder="due_days" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('due_days')" v-text="form.errors.get('due_days')"></span>
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
      <a href="/admin/devis/2/tables/56/fields/360/edit" v-show="larastrapEditionMode">Currency_id <span class="text-danger">*</span></a>

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
      <a href="/admin/devis/2/tables/56/fields/361/edit" v-show="larastrapEditionMode">Currency_code <span class="text-danger">*</span></a>

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
                            

    <div class="form-group is_viewed_by_client">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_viewed_by_client" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_viewed_by_client <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/362/edit" v-show="larastrapEditionMode">Is_viewed_by_client <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_viewed_by_client" v-model="form.is_viewed_by_client" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_viewed_by_client" v-model="form.is_viewed_by_client" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_viewed_by_client" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_viewed_by_client"
        @click="fetchObject"
        name="is_viewed_by_client"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_viewed_by_client')" v-text="form.errors.get('is_viewed_by_client')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group total">
    <div class="col-md-12 col-sm-12 ">
    <label for="total" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Total <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/363/edit" v-show="larastrapEditionMode">Total <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="total" v-model="form.total" placeholder="total" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('total')" v-text="form.errors.get('total')"></span>
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
      <a href="/admin/devis/2/tables/56/fields/364/edit" v-show="larastrapEditionMode">Balance <span class="text-danger">*</span></a>

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
                            

    <div class="form-group is_emailed">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_emailed" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_emailed <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/365/edit" v-show="larastrapEditionMode">Is_emailed <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_emailed" v-model="form.is_emailed" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_emailed" v-model="form.is_emailed" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_emailed" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_emailed"
        @click="fetchObject"
        name="is_emailed"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_emailed')" v-text="form.errors.get('is_emailed')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group reminders_sent">
    <div class="col-md-12 col-sm-12 ">
    <label for="reminders_sent" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Reminders_sent <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/56/fields/366/edit" v-show="larastrapEditionMode">Reminders_sent <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="reminders_sent" v-model="form.reminders_sent" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="reminders_sent" v-model="form.reminders_sent" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.reminders_sent" label="" ></ui-switch>-->

        <el-switch
        v-model="form.reminders_sent"
        @click="fetchObject"
        name="reminders_sent"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('reminders_sent')" v-text="form.errors.get('reminders_sent')"></span>
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
                         Invoice <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
                // this.id=this.object.invoice_id
                
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
                      invoice_id:'',
customer_name:'',
customer_id:'',
status:'',
invoice_number:'',
reference_number:'',
date:'',
due_date:'',
due_days:'',
currency_id:'',
currency_code:'',
is_viewed_by_client:false,
total:'',
balance:'',
is_emailed:false,
reminders_sent:false,


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
                        axios.get('/api/Arthes/invoice/'+this.id).then(function (response) {
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


                        this.form.submit('post','/api/Arthes/invoice')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdInvoice', response.data)

                            
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

                          this.form.submit('put','/api/Arthes/invoice/'+this.form.invoice_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdInvoice', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/invoice')
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
                    axios.delete('/api/Arthes/invoice/'+this.form.invoice_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/invoice')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        