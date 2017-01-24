
    <style>

    </style>
    
    <template>
      <section>
    <!--<pre>
    object:  {{object }}
    </pre>-->

    <div class="well">
        <h2>{{ $t('Picaflor.Plan.show') }}</h2>
    </div>


    <div v-if="loading">
    <el-button type="primary" :loading="true">{{$t('core.loading')}}</el-button>
    </div>

    <div class="row" v-if="!loading && object.id">
    <div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="ibox-title">


    <div class="row" v-if="mode=='update'">
    <div class="col-md-12">
    <div class="pull-right"><a @click="deleteObject(object)"> {{$t('core.delete')}}</a></div>
    </div>
    </div>
    </div>
    <div class="ibox-content">

    
      <div class="form-group name">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="name" class="col-sm-2 control-label">Name</label>-->
      <label for="name" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.name.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.name}} 

      </div>
      </div>
      </div>
      


      <div class="form-group site_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="site_id" class="col-sm-2 control-label">Site_id</label>-->
      <label for="site_id" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.site_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.site.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group plan_family_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="plan_family_id" class="col-sm-2 control-label">Plan_family_id</label>-->
      <label for="plan_family_id" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.plan_family_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.plan_family.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group currency_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="currency_id" class="col-sm-2 control-label">Currency_id</label>-->
      <label for="currency_id" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.currency_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.currency.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group plan_period_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="plan_period_id" class="col-sm-2 control-label">Plan_period_id</label>-->
      <label for="plan_period_id" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.plan_period_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.plan_period.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group role_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="role_id" class="col-sm-2 control-label">Role_id</label>-->
      <label for="role_id" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.role_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.role.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group plan_type_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="plan_type_id" class="col-sm-2 control-label">Plan_type_id</label>-->
      <label for="plan_type_id" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.plan_type_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.plan_type.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group price_ht">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="price_ht" class="col-sm-2 control-label">Price</label>-->
      <label for="price_ht" class="col-sm-2 control-label">{{ $t('Picaflor.Plan.fields.price_ht.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.price_ht }} 

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

            import {VueForm} from '../../../../modules/vue-form.js'

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
                            axios.get('/api/Picaflor/plan/'+this.getId).then(function (response) {
                                      vm.object = response.data.data
                                      vm.loading=false

                                  }, function (response) {
                                      // error callback
                                  });
                        },

                        edit (object){
                            window.location.replace('/Picaflor/plan/'+object.id+'/edit');
                        },

                     


                    cancel() {
                        this.$router.push(window.history.back())
                    },


                    larastrapEditionMode () {
                      return larastrapEditionMode
                    },

                    deleteObject(object) {
                        
                        var vm=this
                        axios.delete('/api/Picaflor/plan/'+getId, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          // vm.$router.push('/plan')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            