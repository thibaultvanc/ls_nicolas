
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

            <!-- <h1>Contact Form</h1>-->

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



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/contact" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group contact_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="contact_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Contact_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/322/edit" v-show="larastrapEditionMode">Contact_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="contact_id" v-model="form.contact_id" placeholder="contact_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('contact_id')" v-text="form.errors.get('contact_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group contact_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="contact_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Contact_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/323/edit" v-show="larastrapEditionMode">Contact_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="contact_name" v-model="form.contact_name" placeholder="contact_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('contact_name')" v-text="form.errors.get('contact_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group company_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="company_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Company_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/324/edit" v-show="larastrapEditionMode">Company_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="company_name" v-model="form.company_name" placeholder="company_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('company_name')" v-text="form.errors.get('company_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group contact_type">
    <div class="col-md-12 col-sm-12 ">
    <label for="contact_type" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Contact_type <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/325/edit" v-show="larastrapEditionMode">Contact_type <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="contact_type" v-model="form.contact_type" placeholder="contact_type" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('contact_type')" v-text="form.errors.get('contact_type')"></span>
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
      <a href="/admin/devis/2/tables/54/fields/326/edit" v-show="larastrapEditionMode">Status <span class="text-danger">*</span></a>

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
                            

    <div class="form-group source">
    <div class="col-md-12 col-sm-12 ">
    <label for="source" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Source <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/327/edit" v-show="larastrapEditionMode">Source <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="source" v-model="form.source" placeholder="source" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('source')" v-text="form.errors.get('source')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_linked_with_zohocrm">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_linked_with_zohocrm" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_linked_with_zohocrm <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/328/edit" v-show="larastrapEditionMode">Is_linked_with_zohocrm <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_linked_with_zohocrm" v-model="form.is_linked_with_zohocrm" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_linked_with_zohocrm" v-model="form.is_linked_with_zohocrm" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_linked_with_zohocrm" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_linked_with_zohocrm"
        @click="fetchObject"
        name="is_linked_with_zohocrm"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_linked_with_zohocrm')" v-text="form.errors.get('is_linked_with_zohocrm')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group payment_terms">
    <div class="col-md-12 col-sm-12 ">
    <label for="payment_terms" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Payment_terms <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/329/edit" v-show="larastrapEditionMode">Payment_terms <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="payment_terms" v-model="form.payment_terms" placeholder="payment_terms" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('payment_terms')" v-text="form.errors.get('payment_terms')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group payment_terms_label">
    <div class="col-md-12 col-sm-12 ">
    <label for="payment_terms_label" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Payment_terms_label <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/330/edit" v-show="larastrapEditionMode">Payment_terms_label <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="payment_terms_label" v-model="form.payment_terms_label" placeholder="payment_terms_label" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('payment_terms_label')" v-text="form.errors.get('payment_terms_label')"></span>
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
      <a href="/admin/devis/2/tables/54/fields/331/edit" v-show="larastrapEditionMode">Currency_id <span class="text-danger">*</span></a>

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
      <a href="/admin/devis/2/tables/54/fields/332/edit" v-show="larastrapEditionMode">Currency_code <span class="text-danger">*</span></a>

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
                            

    <div class="form-group outstanding_receivable_amount">
    <div class="col-md-12 col-sm-12 ">
    <label for="outstanding_receivable_amount" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Outstanding_receivable_amount <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/333/edit" v-show="larastrapEditionMode">Outstanding_receivable_amount <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="outstanding_receivable_amount" v-model="form.outstanding_receivable_amount" placeholder="outstanding_receivable_amount" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('outstanding_receivable_amount')" v-text="form.errors.get('outstanding_receivable_amount')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group outstanding_payable_amount">
    <div class="col-md-12 col-sm-12 ">
    <label for="outstanding_payable_amount" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Outstanding_payable_amount <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/334/edit" v-show="larastrapEditionMode">Outstanding_payable_amount <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="outstanding_payable_amount" v-model="form.outstanding_payable_amount" placeholder="outstanding_payable_amount" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('outstanding_payable_amount')" v-text="form.errors.get('outstanding_payable_amount')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group unused_credits_receivable_amount">
    <div class="col-md-12 col-sm-12 ">
    <label for="unused_credits_receivable_amount" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Unused_credits_receivable_amount <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/335/edit" v-show="larastrapEditionMode">Unused_credits_receivable_amount <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="unused_credits_receivable_amount" v-model="form.unused_credits_receivable_amount" placeholder="unused_credits_receivable_amount" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('unused_credits_receivable_amount')" v-text="form.errors.get('unused_credits_receivable_amount')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group unused_credits_payable_amount">
    <div class="col-md-12 col-sm-12 ">
    <label for="unused_credits_payable_amount" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Unused_credits_payable_amount <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/336/edit" v-show="larastrapEditionMode">Unused_credits_payable_amount <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="unused_credits_payable_amount" v-model="form.unused_credits_payable_amount" placeholder="unused_credits_payable_amount" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('unused_credits_payable_amount')" v-text="form.errors.get('unused_credits_payable_amount')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group first_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="first_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">First_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/337/edit" v-show="larastrapEditionMode">First_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="first_name" v-model="form.first_name" placeholder="first_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('first_name')" v-text="form.errors.get('first_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group last_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="last_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Last_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/338/edit" v-show="larastrapEditionMode">Last_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="last_name" v-model="form.last_name" placeholder="last_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('last_name')" v-text="form.errors.get('last_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group email">
    <div class="col-md-12 col-sm-12 ">
    <label for="email" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Email <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/339/edit" v-show="larastrapEditionMode">Email <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="email" class="form-control" name="email" v-model="form.email" placeholder="email" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group phone">
    <div class="col-md-12 col-sm-12 ">
    <label for="phone" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Phone <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/340/edit" v-show="larastrapEditionMode">Phone <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="phone" v-model="form.phone" placeholder="phone" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('phone')" v-text="form.errors.get('phone')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group mobile">
    <div class="col-md-12 col-sm-12 ">
    <label for="mobile" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Mobile <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/341/edit" v-show="larastrapEditionMode">Mobile <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="mobile" v-model="form.mobile" placeholder="mobile" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('mobile')" v-text="form.errors.get('mobile')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group created_time">
    <div class="col-md-12 col-sm-12 ">
    <label for="created_time" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Created_time <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/342/edit" v-show="larastrapEditionMode">Created_time <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		<input type="number" class="form-control datepicker" name="created_time" v-model="form.created_time" placeholder="created_time" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('created_time')" v-text="form.errors.get('created_time')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group last_modified_time">
    <div class="col-md-12 col-sm-12 ">
    <label for="last_modified_time" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Last_modified_time <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/54/fields/343/edit" v-show="larastrapEditionMode">Last_modified_time <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		<input type="number" class="form-control datepicker" name="last_modified_time" v-model="form.last_modified_time" placeholder="last_modified_time" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('last_modified_time')" v-text="form.errors.get('last_modified_time')"></span>
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
                         Contact <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
                // this.id=this.object.contact_id
                
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
                      contact_id:'',
contact_name:'',
company_name:'',
contact_type:'',
status:'',
source:'',
is_linked_with_zohocrm:false,
payment_terms:'',
payment_terms_label:'',
currency_id:'',
currency_code:'',
outstanding_receivable_amount:'',
outstanding_payable_amount:'',
unused_credits_receivable_amount:'',
unused_credits_payable_amount:'',
first_name:'',
last_name:'',
email:'',
phone:'',
mobile:'',
created_time:'',
last_modified_time:'',


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
                        axios.get('/api/Arthes/contact/'+this.id).then(function (response) {
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


                        this.form.submit('post','/api/Arthes/contact')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdContact', response.data)

                            
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

                          this.form.submit('put','/api/Arthes/contact/'+this.form.contact_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdContact', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/contact')
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
                    axios.delete('/api/Arthes/contact/'+this.form.contact_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/contact')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        