
    <style>

    </style>
    
    <template>
      <section>
    <!--<pre>
    object:  {{object }}
    </pre>-->

    <div class="well">
        <h2>{{ $t('Picaflor.Subscription.show') }}</h2>
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
      <label for="name" class="col-sm-2 control-label">{{ $t('Picaflor.Subscription.fields.name.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.name}} 

      </div>
      </div>
      </div>
      


      <div class="form-group user_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="user_id" class="col-sm-2 control-label">User_id</label>-->
      <label for="user_id" class="col-sm-2 control-label">{{ $t('Picaflor.Subscription.fields.user_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.user.firstname }}
          

          {{ object.user.lastname }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group plan_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="plan_id" class="col-sm-2 control-label">Plan_id</label>-->
      <label for="plan_id" class="col-sm-2 control-label">{{ $t('Picaflor.Subscription.fields.plan_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.plan.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group starts_at">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="starts_at" class="col-sm-2 control-label">Starts at</label>-->
      <label for="starts_at" class="col-sm-2 control-label">{{ $t('Picaflor.Subscription.fields.starts_at.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.starts_at}} 

      </div>
      </div>
      </div>
      


      <div class="form-group ends_at">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="ends_at" class="col-sm-2 control-label">Ends at</label>-->
      <label for="ends_at" class="col-sm-2 control-label">{{ $t('Picaflor.Subscription.fields.ends_at.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.ends_at}} 

      </div>
      </div>
      </div>
      


      <div class="form-group zoho_contact_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="zoho_contact_id" class="col-sm-2 control-label">Zoho contact</label>-->
      <label for="zoho_contact_id" class="col-sm-2 control-label">{{ $t('Picaflor.Subscription.fields.zoho_contact_id.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.zoho_contact_id}} 

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
                            axios.get('/api/Picaflor/subscription/'+this.getId).then(function (response) {
                                      vm.object = response.data.data
                                      vm.loading=false

                                  }, function (response) {
                                      // error callback
                                  });
                        },

                        edit (object){
                            window.location.replace('/Picaflor/subscription/'+object.id+'/edit');
                        },

                     


                    cancel() {
                        this.$router.push(window.history.back())
                    },


                    larastrapEditionMode () {
                      return larastrapEditionMode
                    },

                    deleteObject(object) {
                        
                        var vm=this
                        axios.delete('/api/Picaflor/subscription/'+getId, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          // vm.$router.push('/subscription')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            