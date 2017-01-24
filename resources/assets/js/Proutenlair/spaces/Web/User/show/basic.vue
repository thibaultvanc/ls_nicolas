
    <style>

    </style>
    
    <template>
      <section>
    <!--<pre>
    object:  {{object }}
    </pre>-->

    <div class="well">
        <h2>{{ $t('Proutenlair.User.show') }}</h2>
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

    
      <div class="form-group firstname">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="firstname" class="col-sm-2 control-label">First Name</label>-->
      <label for="firstname" class="col-sm-2 control-label">{{ $t('Proutenlair.User.fields.firstname.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.firstname}} 

      </div>
      </div>
      </div>
      


      <div class="form-group lastname">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="lastname" class="col-sm-2 control-label">Name</label>-->
      <label for="lastname" class="col-sm-2 control-label">{{ $t('Proutenlair.User.fields.lastname.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.lastname}} 

      </div>
      </div>
      </div>
      


      <div class="form-group phone">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="phone" class="col-sm-2 control-label">Phone</label>-->
      <label for="phone" class="col-sm-2 control-label">{{ $t('Proutenlair.User.fields.phone.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.phone}} 

      </div>
      </div>
      </div>
      


      <div class="form-group email">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="email" class="col-sm-2 control-label">Email</label>-->
      <label for="email" class="col-sm-2 control-label">{{ $t('Proutenlair.User.fields.email.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.email}} 

      </div>
      </div>
      </div>
      


      <div class="form-group password">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="password" class="col-sm-2 control-label">Password</label>-->
      <label for="password" class="col-sm-2 control-label">{{ $t('Proutenlair.User.fields.password.label') }}</label>
      <div class="col-sm-10 ">
      		*****

      </div>
      </div>
      </div>
      


      <div class="form-group remember_token">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="remember_token" class="col-sm-2 control-label">Remember token</label>-->
      <label for="remember_token" class="col-sm-2 control-label">{{ $t('Proutenlair.User.fields.remember_token.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.remember_token}} 

      </div>
      </div>
      </div>
      


      <div class="form-group is_admin">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="is_admin" class="col-sm-2 control-label">Is admin</label>-->
      <label for="is_admin" class="col-sm-2 control-label">{{ $t('Proutenlair.User.fields.is_admin.label') }}</label>
      <div class="col-sm-10 ">
      		 <i :class="{'el-icon-circle-check' : object.is_admin, 'el-icon-circle-cross' : !object.is_admin, }" ></i> 

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
                            axios.get('/api/Proutenlair/user/'+this.getId).then(function (response) {
                                      vm.object = response.data.data
                                      vm.loading=false

                                  }, function (response) {
                                      // error callback
                                  });
                        },

                        edit (object){
                            window.location.replace('/Proutenlair/user/'+object.id+'/edit');
                        },

                     


                    cancel() {
                        this.$router.push(window.history.back())
                    },


                    larastrapEditionMode () {
                      return larastrapEditionMode
                    },

                    deleteObject(object) {
                        
                        var vm=this
                        axios.delete('/api/Proutenlair/user/'+getId, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          // vm.$router.push('/user')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            