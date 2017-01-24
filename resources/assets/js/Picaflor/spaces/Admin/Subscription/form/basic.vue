
    <style>
      /*123*/
    </style>
    
    <template >

    <section>



    <!--<pre>
        {{form}}
    </pre>-->

    <div class="well">
        <h2 v-show="mode=='update'">{{ $t('Picaflor.Subscription.edit') }}</h2>
        <h2 v-show="mode=='create'">{{ $t('Picaflor.Subscription.create') }}</h2>

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



        <form class="form-horizontal form-label-left" method="POST" action="/api/Picaflor/subscription" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        

                    <div>
                        

    <div class="form-group name">
    <div class="col-md-12 col-sm-12 ">
    <label for="name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Subscription.fields.name.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/22/fields/71/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Subscription.fields.name.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="name" v-model="form.name" :placeholder="$t('Picaflor.Subscription.fields.name.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group user_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="user_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Subscription.fields.user_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/22/fields/76/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Subscription.fields.user_id.label') }} <span class="text-danger">*</span>
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
                        

    <div class="form-group plan_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="plan_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Subscription.fields.plan_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/22/fields/82/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Subscription.fields.plan_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_plan">

        <el-select v-model="form.plan_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="Plan in PlanList"
            :label="Plan.name + ' ' " :value="Plan.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_plan"
        @click.prevent="showForm_plan= ! showForm_plan"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('plan_id')" v-text="form.errors.get('plan_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdPlan.id"  >
        </span>


        <el-button v-if="showForm_plan"
        @click.prevent="showForm_plan= ! showForm_plan"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_plan">

        <div v-if="createdPlan.id">
							<b>
          {{ createdPlan.name }} 
        </b>

        </div>
        <div v-else>
        <plan-form force-mode="create" :created-object.sync="createdPlan" ></plan-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group starts_at">
    <div class="col-md-12 col-sm-12 ">
    <label for="starts_at" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Subscription.fields.starts_at.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/22/fields/112/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Subscription.fields.starts_at.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
          <!--<input type="number" class="form-control " name="starts_at" v-model="form.starts_at" :placeholder="$t('Picaflor.Subscription.fields.starts_at.placeholder')" >-->
          <el-date-picker
            v-model="form.starts_at"
            type="date"
            format="yyyy/MM/dd"
            :placeholder="$t('Picaflor.Subscription.fields.starts_at.placeholder')">
          </el-date-picker>
        

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('starts_at')" v-text="form.errors.get('starts_at')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group ends_at">
    <div class="col-md-12 col-sm-12 ">
    <label for="ends_at" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Subscription.fields.ends_at.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/22/fields/113/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Subscription.fields.ends_at.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
          <!--<input type="number" class="form-control " name="ends_at" v-model="form.ends_at" :placeholder="$t('Picaflor.Subscription.fields.ends_at.placeholder')" >-->
          <el-date-picker
            v-model="form.ends_at"
            type="date"
            format="yyyy/MM/dd"
            :placeholder="$t('Picaflor.Subscription.fields.ends_at.placeholder')">
          </el-date-picker>
        

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('ends_at')" v-text="form.errors.get('ends_at')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group zoho_contact_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="zoho_contact_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Subscription.fields.zoho_contact_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/22/fields/114/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Subscription.fields.zoho_contact_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="zoho_contact_id" v-model="form.zoho_contact_id" :placeholder="$t('Picaflor.Subscription.fields.zoho_contact_id.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('zoho_contact_id')" v-text="form.errors.get('zoho_contact_id')"></span>
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
                     Subscription <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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




            
import userForm from '../../User/form/basic.vue'
import planForm from '../../Plan/form/basic.vue'





            export default {
                components: { 				userForm,
				planForm,

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

                    this.fetchUser()
this.fetchPlan()




                    console.log("label")
                    console.log(this.label)
                    console.log("value")
                    console.log(this.value)



                    var vm = this

                    


                            Event.$on('createdUser', function (createdObject) {
                              console.log('User has been fired')

                              vm.UserList.push(createdObject)
                              vm.form.user_id=createdObject.id


                              vm.showForm_user=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    


                            Event.$on('createdPlan', function (createdObject) {
                              console.log('Plan has been fired')

                              vm.PlanList.push(createdObject)
                              vm.form.plan_id=createdObject.id


                              vm.showForm_plan=false

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
user_id:'',
plan_id:'',
starts_at:'',
ends_at:'',
zoho_contact_id:'',


                        }),



                        object:{},
                        
                        showForm_user : false,

                        createdUser : {},

                        UserList:[],

                        showForm_plan : false,

                        createdPlan : {},

                        PlanList:[],




                    };
                },

                filters:{


                },
                computed : {



                },

                methods: {
                        fetchObject () {
                            var vm=this
                            axios.get('/api/Picaflor/subscription/'+this.id).then(function (response) {
                                      vm.object=response.data.data
                                      vm.form = new VueForm(response.data.data)
                                      vm.loading=false

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
                            fetchPlan(){
                                    var vm=this
                                    axios.get('/api/Picaflor/plan').then(function (response) {
                                              vm.PlanList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },
                    submit(object) {
                        this.sending=true

                        if(this.mode == 'create'){


                            this.form.submit('post','/api/Picaflor/subscription')
                              .then(response => {

                                this.$notify({
                                  title: this.$t('core.saved'),
                                  message: this.$t('core.created'),
                                  type: 'success',
                                  offset: 100
                                });

                                  Event.$emit('createdSubscription', response.data)

                                
                                if (!this.forceMode) {
                                        
                                                this.$router.push(window.history.back())
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

                              this.form.submit('put','/api/Picaflor/subscription/'+this.form.id)
                                .then(response => {

                                    vm.$notify({
                                      title: this.$t('core.updated'),
                                      message: this.$t('successfullyUpdated'),
                                      type: 'success',
                                      offset: 100
                                    });

                                    vm.form = new VueForm(response.data)

                                    Event.$emit('createdSubscription', response.data)

                                    // console.log('response', response)
                                    // console.log('response.data', response.data)
                                    // console.log('response.data.data', response.data.data)

                                    // vm.sending=false

                                    

                                    // vm.createdObject = response.data

                                    // vm.$router.push('/subscription')
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
                        axios.delete('/api/Picaflor/subscription/'+this.form.id, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          vm.$router.push('/subscription')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            