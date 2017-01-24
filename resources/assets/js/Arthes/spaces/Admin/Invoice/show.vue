
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

            <!-- <h1>Show Invoice</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.invoice_id">
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



            
                        <div class="form-group invoice_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="invoice_id" class="col-sm-2 control-label">Invoice_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.invoice_id }} 

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
                        


                        <div class="form-group customer_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="customer_id" class="col-sm-2 control-label">Customer_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.customer_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group status">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="status" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10 ">
                        		 {{object.status}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group invoice_number">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="invoice_number" class="col-sm-2 control-label">Invoice_number</label>
                        <div class="col-sm-10 ">
                        		 {{object.invoice_number}} 

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
                        


                        <div class="form-group date">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="date" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10 ">
                        		 {{object.date}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group due_date">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="due_date" class="col-sm-2 control-label">Due_date</label>
                        <div class="col-sm-10 ">
                        		 {{object.due_date}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group due_days">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="due_days" class="col-sm-2 control-label">Due_days</label>
                        <div class="col-sm-10 ">
                        		 {{object.due_days }} 

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
                        


                        <div class="form-group is_viewed_by_client">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_viewed_by_client" class="col-sm-2 control-label">Is_viewed_by_client</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_viewed_by_client, 'el-icon-circle-cross' : !object.is_viewed_by_client, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group total">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="total" class="col-sm-2 control-label">Total</label>
                        <div class="col-sm-10 ">
                        		 {{object.total }} 

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
                        


                        <div class="form-group is_emailed">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_emailed" class="col-sm-2 control-label">Is_emailed</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_emailed, 'el-icon-circle-cross' : !object.is_emailed, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group reminders_sent">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="reminders_sent" class="col-sm-2 control-label">Reminders_sent</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.reminders_sent, 'el-icon-circle-cross' : !object.reminders_sent, }" ></i> 

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
                        axios.get('/api/Arthes/invoice/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/invoice/'+object.invoice_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/invoice/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/invoice')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        