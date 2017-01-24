
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

            <!-- <h1>Show Contact</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.contact_id">
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



            
                        <div class="form-group contact_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="contact_id" class="col-sm-2 control-label">Contact_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.contact_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group contact_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="contact_name" class="col-sm-2 control-label">Contact_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.contact_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group company_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="company_name" class="col-sm-2 control-label">Company_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.company_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group contact_type">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="contact_type" class="col-sm-2 control-label">Contact_type</label>
                        <div class="col-sm-10 ">
                        		 {{object.contact_type}} 

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
                        


                        <div class="form-group source">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="source" class="col-sm-2 control-label">Source</label>
                        <div class="col-sm-10 ">
                        		 {{object.source}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_linked_with_zohocrm">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_linked_with_zohocrm" class="col-sm-2 control-label">Is_linked_with_zohocrm</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_linked_with_zohocrm, 'el-icon-circle-cross' : !object.is_linked_with_zohocrm, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group payment_terms">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="payment_terms" class="col-sm-2 control-label">Payment_terms</label>
                        <div class="col-sm-10 ">
                        		 {{object.payment_terms }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group payment_terms_label">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="payment_terms_label" class="col-sm-2 control-label">Payment_terms_label</label>
                        <div class="col-sm-10 ">
                        		 {{object.payment_terms_label}} 

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
                        


                        <div class="form-group outstanding_receivable_amount">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="outstanding_receivable_amount" class="col-sm-2 control-label">Outstanding_receivable_amount</label>
                        <div class="col-sm-10 ">
                        		 {{object.outstanding_receivable_amount }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group outstanding_payable_amount">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="outstanding_payable_amount" class="col-sm-2 control-label">Outstanding_payable_amount</label>
                        <div class="col-sm-10 ">
                        		 {{object.outstanding_payable_amount }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group unused_credits_receivable_amount">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="unused_credits_receivable_amount" class="col-sm-2 control-label">Unused_credits_receivable_amount</label>
                        <div class="col-sm-10 ">
                        		 {{object.unused_credits_receivable_amount }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group unused_credits_payable_amount">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="unused_credits_payable_amount" class="col-sm-2 control-label">Unused_credits_payable_amount</label>
                        <div class="col-sm-10 ">
                        		 {{object.unused_credits_payable_amount }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group first_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="first_name" class="col-sm-2 control-label">First_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.first_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group last_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="last_name" class="col-sm-2 control-label">Last_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.last_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group email">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10 ">
                        		 {{object.email}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group phone">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10 ">
                        		 {{object.phone}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group mobile">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                        <div class="col-sm-10 ">
                        		 {{object.mobile }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group created_time">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="created_time" class="col-sm-2 control-label">Created_time</label>
                        <div class="col-sm-10 ">
                        		 {{object.created_time}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group last_modified_time">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="last_modified_time" class="col-sm-2 control-label">Last_modified_time</label>
                        <div class="col-sm-10 ">
                        		 {{object.last_modified_time}} 

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
                        axios.get('/api/Arthes/contact/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/contact/'+object.contact_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/contact/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/contact')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        