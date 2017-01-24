
    <style>
      /*123*/
    </style>
    
    <template >

    <section>



    <!--<pre>
        {{form}}
    </pre>-->

    <div class="well">
        <h2 v-show="mode=='update'">{{ $t('Picaflor.Plan.edit') }}</h2>
        <h2 v-show="mode=='create'">{{ $t('Picaflor.Plan.create') }}</h2>

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



        <form class="form-horizontal form-label-left" method="POST" action="/api/Picaflor/plan" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        

                    <div>
                        

    <div class="form-group name">
    <div class="col-md-12 col-sm-12 ">
    <label for="name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.name.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/69/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.name.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="name" v-model="form.name" :placeholder="$t('Picaflor.Plan.fields.name.placeholder')" >

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
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.site_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/83/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.site_id.label') }} <span class="text-danger">*</span>
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
                        

    <div class="form-group plan_family_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="plan_family_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.plan_family_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/89/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.plan_family_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_plan_family">

        <el-select v-model="form.plan_family_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="PlanFamily in PlanFamilyList"
            :label="PlanFamily.name + ' ' " :value="PlanFamily.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_plan_family"
        @click.prevent="showForm_plan_family= ! showForm_plan_family"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('plan_family_id')" v-text="form.errors.get('plan_family_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdPlanFamily.id"  >
        </span>


        <el-button v-if="showForm_plan_family"
        @click.prevent="showForm_plan_family= ! showForm_plan_family"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_plan_family">

        <div v-if="createdPlanFamily.id">
							<b>
          {{ createdPlanFamily.name }} 
        </b>

        </div>
        <div v-else>
        <plan-family-form force-mode="create" :created-object.sync="createdPlanFamily" ></plan-family-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group currency_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.currency_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/90/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.currency_id.label') }} <span class="text-danger">*</span>
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


                      

                    <div>
                        

    <div class="form-group plan_period_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="plan_period_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.plan_period_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/91/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.plan_period_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_plan_period">

        <el-select v-model="form.plan_period_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="PlanPeriod in PlanPeriodList"
            :label="PlanPeriod.name + ' ' " :value="PlanPeriod.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_plan_period"
        @click.prevent="showForm_plan_period= ! showForm_plan_period"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('plan_period_id')" v-text="form.errors.get('plan_period_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdPlanPeriod.id"  >
        </span>


        <el-button v-if="showForm_plan_period"
        @click.prevent="showForm_plan_period= ! showForm_plan_period"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_plan_period">

        <div v-if="createdPlanPeriod.id">
							<b>
          {{ createdPlanPeriod.name }} 
        </b>

        </div>
        <div v-else>
        <plan-period-form force-mode="create" :created-object.sync="createdPlanPeriod" ></plan-period-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group role_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="role_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.role_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/94/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.role_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_role">

        <el-select v-model="form.role_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="Role in RoleList"
            :label="Role.name + ' ' " :value="Role.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_role"
        @click.prevent="showForm_role= ! showForm_role"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('role_id')" v-text="form.errors.get('role_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdRole.id"  >
        </span>


        <el-button v-if="showForm_role"
        @click.prevent="showForm_role= ! showForm_role"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_role">

        <div v-if="createdRole.id">
							<b>
          {{ createdRole.name }} 
        </b>

        </div>
        <div v-else>
        <role-form force-mode="create" :created-object.sync="createdRole" ></role-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group plan_type_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="plan_type_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.plan_type_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/111/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.plan_type_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_plan_type">

        <el-select v-model="form.plan_type_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="PlanType in PlanTypeList"
            :label="PlanType.name + ' ' " :value="PlanType.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_plan_type"
        @click.prevent="showForm_plan_type= ! showForm_plan_type"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('plan_type_id')" v-text="form.errors.get('plan_type_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdPlanType.id"  >
        </span>


        <el-button v-if="showForm_plan_type"
        @click.prevent="showForm_plan_type= ! showForm_plan_type"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_plan_type">

        <div v-if="createdPlanType.id">
							<b>
          {{ createdPlanType.name }} 
        </b>

        </div>
        <div v-else>
        <plan-type-form force-mode="create" :created-object.sync="createdPlanType" ></plan-type-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group price_ht">
    <div class="col-md-12 col-sm-12 ">
    <label for="price_ht" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Plan.fields.price_ht.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/21/fields/119/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Plan.fields.price_ht.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="price_ht" v-model="form.price_ht" :placeholder="$t('Picaflor.Plan.fields.price_ht.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('price_ht')" v-text="form.errors.get('price_ht')"></span>
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
                     Plan <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
import planFamilyForm from '../../Family/form/basic.vue'
import currencyForm from '../../Currency/form/basic.vue'
import planPeriodForm from '../../Period/form/basic.vue'
import roleForm from '../../Role/form/basic.vue'
import planTypeForm from '../../Type/form/basic.vue'





            export default {
                components: { 				siteForm,
				planFamilyForm,
				currencyForm,
				planPeriodForm,
				roleForm,
				planTypeForm,

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
this.fetchPlanFamily()
this.fetchCurrency()
this.fetchPlanPeriod()
this.fetchRole()
this.fetchPlanType()




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



                    


                            Event.$on('createdPlanFamily', function (createdObject) {
                              console.log('PlanFamily has been fired')

                              vm.PlanFamilyList.push(createdObject)
                              vm.form.plan_family_id=createdObject.id


                              vm.showForm_plan_family=false

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



                    


                            Event.$on('createdPlanPeriod', function (createdObject) {
                              console.log('PlanPeriod has been fired')

                              vm.PlanPeriodList.push(createdObject)
                              vm.form.plan_period_id=createdObject.id


                              vm.showForm_plan_period=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    


                            Event.$on('createdRole', function (createdObject) {
                              console.log('Role has been fired')

                              vm.RoleList.push(createdObject)
                              vm.form.role_id=createdObject.id


                              vm.showForm_role=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    


                            Event.$on('createdPlanType', function (createdObject) {
                              console.log('PlanType has been fired')

                              vm.PlanTypeList.push(createdObject)
                              vm.form.plan_type_id=createdObject.id


                              vm.showForm_plan_type=false

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
plan_family_id:'',
currency_id:'',
plan_period_id:'',
role_id:'',
plan_type_id:'',
price_ht:'',


                        }),



                        object:{},
                        
                        showForm_site : false,

                        createdSite : {},

                        SiteList:[],

                        showForm_plan_family : false,

                        createdPlanFamily : {},

                        PlanFamilyList:[],

                        showForm_currency : false,

                        createdCurrency : {},

                        CurrencyList:[],

                        showForm_plan_period : false,

                        createdPlanPeriod : {},

                        PlanPeriodList:[],

                        showForm_role : false,

                        createdRole : {},

                        RoleList:[],

                        showForm_plan_type : false,

                        createdPlanType : {},

                        PlanTypeList:[],




                    };
                },

                filters:{


                },
                computed : {



                },

                methods: {
                        fetchObject () {
                            var vm=this
                            axios.get('/api/Picaflor/plan/'+this.id).then(function (response) {
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
                            fetchPlanFamily(){
                                    var vm=this
                                    axios.get('/api/Picaflor/plan_family').then(function (response) {
                                              vm.PlanFamilyList = response.data.data

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

                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchPlanPeriod(){
                                    var vm=this
                                    axios.get('/api/Picaflor/plan_period').then(function (response) {
                                              vm.PlanPeriodList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },

                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchRole(){
                                    var vm=this
                                    axios.get('/api/Picaflor/role').then(function (response) {
                                              vm.RoleList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },

                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchPlanType(){
                                    var vm=this
                                    axios.get('/api/Picaflor/plan_type').then(function (response) {
                                              vm.PlanTypeList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },
                    submit(object) {
                        this.sending=true

                        if(this.mode == 'create'){


                            this.form.submit('post','/api/Picaflor/plan')
                              .then(response => {

                                this.$notify({
                                  title: this.$t('core.saved'),
                                  message: this.$t('core.created'),
                                  type: 'success',
                                  offset: 100
                                });

                                  Event.$emit('createdPlan', response.data)

                                
                                if (!this.forceMode) {
                                        
                                                this.$router.push('/plan/'+this.form.id)
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

                              this.form.submit('put','/api/Picaflor/plan/'+this.form.id)
                                .then(response => {

                                    vm.$notify({
                                      title: this.$t('core.updated'),
                                      message: this.$t('successfullyUpdated'),
                                      type: 'success',
                                      offset: 100
                                    });

                                    vm.form = new VueForm(response.data)

                                    Event.$emit('createdPlan', response.data)

                                    // console.log('response', response)
                                    // console.log('response.data', response.data)
                                    // console.log('response.data.data', response.data.data)

                                    // vm.sending=false

                                    

                                    // vm.createdObject = response.data

                                    // vm.$router.push('/plan')
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
                        axios.delete('/api/Picaflor/plan/'+this.form.id, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          vm.$router.push('/plan')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            