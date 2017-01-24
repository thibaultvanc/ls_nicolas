
    <style>
      /*123*/
    </style>
    
    <template >

    <section>



    <!--<pre>
        {{form}}
    </pre>-->

    <div class="well">
        <h2 v-show="mode=='update'">{{ $t('Picaflor.Invoices.edit') }}</h2>
        <h2 v-show="mode=='create'">{{ $t('Picaflor.Invoices.create') }}</h2>

    </div>
        <div v-if="loading">
            <el-button type="primary" :loading="true">{{$t('core.loading')}}</el-button>
        </div>

        <div class="row" v-if="!loading">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">


                    <!--<div class="row" v-if="mode=='update'">
                        <div class="col-md-12">
                            <div class="pull-right"><a @click="deleteObject(object)"> {{$t('core.delete')}}</a></div>
                        </div>
                    </div>-->
                </div>
                <div class="ibox-content">



        <form class="form-horizontal form-label-left" method="POST" action="/api/Picaflor/invoices" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        

                    <div>
                        

    <div class="form-group name">
    <div class="col-md-12 col-sm-12 ">
    <label for="name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Invoices.fields.name.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/16/fields/55/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Invoices.fields.name.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="name" v-model="form.name" :placeholder="$t('Picaflor.Invoices.fields.name.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group site_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="site_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Invoices.fields.site_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/16/fields/67/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Invoices.fields.site_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_site">

        <el-select v-model="form.site_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="Site in SiteList"
            :label="Site.name + ' ' " :value="Site.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_site"
        @click.prevent="showForm_site= ! showForm_site"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('site_id')" v-text="form.errors.get('site_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdSite.id"  >
        </span>


        <el-button v-if="showForm_site"
        @click.prevent="showForm_site= ! showForm_site"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_site">

        <div v-if="createdSite.id">
							<b>
          {{ createdSite.name }} 
        </b>

        </div>
        <div v-else>
        <site-form force-mode="create" :created-object.sync="createdSite" ></site-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group user_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="user_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Invoices.fields.user_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/16/fields/81/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Invoices.fields.user_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_user">

        <el-select v-model="form.user_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="User in UserList"
            :label="User.firstname + ' ' +User.lastname + ' ' " :value="User.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_user"
        @click.prevent="showForm_user= ! showForm_user"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('user_id')" v-text="form.errors.get('user_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdUser.id"  >
        </span>


        <el-button v-if="showForm_user"
        @click.prevent="showForm_user= ! showForm_user"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_user">

        <div v-if="createdUser.id">
							<b>
          {{ createdUser.firstname }} 
          {{ createdUser.lastname }} 
        </b>

        </div>
        <div v-else>
        <user-form force-mode="create" :created-object.sync="createdUser" ></user-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group organization_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="organization_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Invoices.fields.organization_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/16/fields/100/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Invoices.fields.organization_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="organization_id" v-model="form.organization_id" :placeholder="$t('Picaflor.Invoices.fields.organization_id.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('organization_id')" v-text="form.errors.get('organization_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group zoho_invoice_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="zoho_invoice_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Invoices.fields.zoho_invoice_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/16/fields/115/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Invoices.fields.zoho_invoice_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="zoho_invoice_id" v-model="form.zoho_invoice_id" :placeholder="$t('Picaflor.Invoices.fields.zoho_invoice_id.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('zoho_invoice_id')" v-text="form.errors.get('zoho_invoice_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group currency_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Invoices.fields.currency_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/16/fields/116/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Invoices.fields.currency_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_currency">

        <el-select v-model="form.currency_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="Currency in CurrencyList"
            :label="Currency.name + ' ' " :value="Currency.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_currency"
        @click.prevent="showForm_currency= ! showForm_currency"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_id')" v-text="form.errors.get('currency_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdCurrency.id"  >
        </span>


        <el-button v-if="showForm_currency"
        @click.prevent="showForm_currency= ! showForm_currency"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_currency">

        <div v-if="createdCurrency.id">
							<b>
          {{ createdCurrency.name }} 
        </b>

        </div>
        <div v-else>
        <currency-form force-mode="create" :created-object.sync="createdCurrency" ></currency-form>
        </div>
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
                    <b v-if="mode=='create'">{{$t('core.create')}}</b>
                    <b v-if="mode=='update'">{{$t('core.update')}}</b>
                     Invoices <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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

            import {VueForm} from '../../../../modules/vue-form.js'

            import Vue from 'vue'
            window.Event=new Vue()




            
import siteForm from '../../Site/form/basic.vue'
import userForm from '../../User/form/basic.vue'
import currencyForm from '../../Currency/form/basic.vue'





            export default {
                components: { 				siteForm,
				userForm,
				currencyForm,

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
                    // this.id=this.object.id
                    
                    // this.form = new VueForm(this.object)
                    
                    // this.loading=false
                  }
                  else{
                    // alert('a3')
                    this.mode='create'

                  }

                    this.fetchSite()
this.fetchUser()
this.fetchCurrency()




                    console.log("label")
                    console.log(this.label)
                    console.log("value")
                    console.log(this.value)



                    var vm = this

                    


                            Event.$on('createdSite', function (createdObject) {
                              console.log('Site has been fired')

                              vm.SiteList.push(createdObject)
                              vm.form.site_id=createdObject.id


                              vm.showForm_site=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    


                            Event.$on('createdUser', function (createdObject) {
                              console.log('User has been fired')

                              vm.UserList.push(createdObject)
                              vm.form.user_id=createdObject.id


                              vm.showForm_user=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    


                            Event.$on('createdCurrency', function (createdObject) {
                              console.log('Currency has been fired')

                              vm.CurrencyList.push(createdObject)
                              vm.form.currency_id=createdObject.id


                              vm.showForm_currency=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    
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
                          id:'',
name:'',
site_id:'',
user_id:'',
organization_id:'',
zoho_invoice_id:'',
currency_id:'',


                        }),



                        object:{},
                        
                        showForm_site : false,

                        createdSite : {},

                        SiteList:[],

                        showForm_user : false,

                        createdUser : {},

                        UserList:[],

                        showForm_currency : false,

                        createdCurrency : {},

                        CurrencyList:[],




                    };
                },

                filters:{


                },
                computed : {



                },

                methods: {
                        fetchObject () {
                            var vm=this
                            axios.get('/api/Picaflor/invoices/'+this.id).then(function (response) {
                                      vm.object=response.data.data
                                      vm.form = new VueForm(response.data.data)
                                      vm.loading=false

                                  }, function (response) {
                                      // error callback
                                  });
                        },

                     


                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchSite(){
                                    var vm=this
                                    axios.get('/api/Picaflor/site').then(function (response) {
                                              vm.SiteList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },

                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchUser(){
                                    var vm=this
                                    axios.get('/api/Picaflor/user').then(function (response) {
                                              vm.UserList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },

                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchCurrency(){
                                    var vm=this
                                    axios.get('/api/Picaflor/currency').then(function (response) {
                                              vm.CurrencyList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },
                    submit(object) {
                        this.sending=true

                        if(this.mode == 'create'){


                            this.form.submit('post','/api/Picaflor/invoices')
                              .then(response => {

                                this.$notify({
                                  title: this.$t('core.saved'),
                                  message: this.$t('core.created'),
                                  type: 'success',
                                  offset: 100
                                });

                                  Event.$emit('createdInvoices', response.data)

                                
                                if (!this.forceMode) {
                                        
                                                this.$router.push('/invoices/'+this.form.id)
                                }

                                
                              }).catch(response => {
                                this.$notify({
                                  title: this.$t('core.error'),
                                  message: this.$t('core.errorProcessing'),
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

                              this.form.submit('put','/api/Picaflor/invoices/'+this.form.id)
                                .then(response => {

                                    vm.$notify({
                                      title: this.$t('core.updated'),
                                      message: this.$t('successfullyUpdated'),
                                      type: 'success',
                                      offset: 100
                                    });

                                    vm.form = new VueForm(response.data)

                                    Event.$emit('createdInvoices', response.data)

                                    // console.log('response', response)
                                    // console.log('response.data', response.data)
                                    // console.log('response.data.data', response.data.data)

                                    // vm.sending=false

                                    

                                    // vm.createdObject = response.data

                                    // vm.$router.push('/invoices')
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
                        axios.delete('/api/Picaflor/invoices/'+this.form.id, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          vm.$router.push('/invoices')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            