
    <style>
      /*123*/
    </style>
    
    <template >

    <section>



    <!--<pre>
        {{form}}
    </pre>-->

    <div class="well">
        <h2 v-show="mode=='update'">{{ $t('Proutenlair.User.edit') }}</h2>
        <h2 v-show="mode=='create'">{{ $t('Proutenlair.User.create') }}</h2>

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



        <form class="form-horizontal form-label-left" method="POST" action="/api/Proutenlair/user" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        

                    <div>
                        

    <div class="form-group firstname">
    <div class="col-md-12 col-sm-12 ">
    <label for="firstname" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Proutenlair.User.fields.firstname.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/18/tables/63/fields/241/edit" v-show="larastrapEditionMode">
          {{ $t('Proutenlair.User.fields.firstname.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="firstname" v-model="form.firstname" :placeholder="$t('Proutenlair.User.fields.firstname.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('firstname')" v-text="form.errors.get('firstname')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group lastname">
    <div class="col-md-12 col-sm-12 ">
    <label for="lastname" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Proutenlair.User.fields.lastname.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/18/tables/63/fields/242/edit" v-show="larastrapEditionMode">
          {{ $t('Proutenlair.User.fields.lastname.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="lastname" v-model="form.lastname" :placeholder="$t('Proutenlair.User.fields.lastname.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('lastname')" v-text="form.errors.get('lastname')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group phone">
    <div class="col-md-12 col-sm-12 ">
    <label for="phone" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Proutenlair.User.fields.phone.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/18/tables/63/fields/243/edit" v-show="larastrapEditionMode">
          {{ $t('Proutenlair.User.fields.phone.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="phone" v-model="form.phone" :placeholder="$t('Proutenlair.User.fields.phone.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('phone')" v-text="form.errors.get('phone')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group email">
    <div class="col-md-12 col-sm-12 ">
    <label for="email" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Proutenlair.User.fields.email.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/18/tables/63/fields/244/edit" v-show="larastrapEditionMode">
          {{ $t('Proutenlair.User.fields.email.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="email" class="form-control" name="email" v-model="form.email" :placeholder="$t('Proutenlair.User.fields.email.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group password">
    <div class="col-md-12 col-sm-12 ">
    <label for="password" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Proutenlair.User.fields.password.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/18/tables/63/fields/245/edit" v-show="larastrapEditionMode">
          {{ $t('Proutenlair.User.fields.password.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="password" class="form-control" name="password" v-model="form.password" :placeholder="$t('Proutenlair.User.fields.password.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('password')" v-text="form.errors.get('password')"></span>
          </div>

            

    </div>
    </div>
    </div>
    


      <div class="form-group password">
        <div class="col-md-12 col-sm-12 ">
          <label for="password" class="col-sm-2 control-label">
                 {{$t('core.confirmation')}}
          </label>
          <div class="col-sm-10 ">
              <input type="password" class="form-control" name="password_confirmation" v-model="form.password_confirmation" :placeholder="$t('core.confirmPassword')">

          </div>
        </div>
      </div>
                     </div>


                      

                    <div>
                        

    <div class="form-group remember_token">
    <div class="col-md-12 col-sm-12 ">
    <label for="remember_token" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Proutenlair.User.fields.remember_token.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/18/tables/63/fields/246/edit" v-show="larastrapEditionMode">
          {{ $t('Proutenlair.User.fields.remember_token.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="remember_token" v-model="form.remember_token" :placeholder="$t('Proutenlair.User.fields.remember_token.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('remember_token')" v-text="form.errors.get('remember_token')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group is_admin">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_admin" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Proutenlair.User.fields.is_admin.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/18/tables/63/fields/247/edit" v-show="larastrapEditionMode">
          {{ $t('Proutenlair.User.fields.is_admin.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_admin" v-model="form.is_admin" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_admin" v-model="form.is_admin" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_admin" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_admin"
        @click="fetchObject"
        name="is_admin"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_admin')" v-text="form.errors.get('is_admin')"></span>
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
                     User <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
                    // this.id=this.object.id
                    
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
                          id:'',
firstname:'',
lastname:'',
phone:'',
email:'',
password:'',
password_confirmation:'',
remember_token:'',
is_admin:false,


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
                            axios.get('/api/Proutenlair/user/'+this.id).then(function (response) {
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


                            this.form.submit('post','/api/Proutenlair/user')
                              .then(response => {

                                this.$notify({
                                  title: this.$t('core.saved'),
                                  message: this.$t('core.created'),
                                  type: 'success',
                                  offset: 100
                                });

                                  Event.$emit('createdUser', response.data)

                                
                                if (!this.forceMode) {
                                        
                                                this.$router.push('/user/'+this.form.id)
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

                              this.form.submit('put','/api/Proutenlair/user/'+this.form.id)
                                .then(response => {

                                    vm.$notify({
                                      title: this.$t('core.updated'),
                                      message: this.$t('successfullyUpdated'),
                                      type: 'success',
                                      offset: 100
                                    });

                                    vm.form = new VueForm(response.data)

                                    Event.$emit('createdUser', response.data)

                                    // console.log('response', response)
                                    // console.log('response.data', response.data)
                                    // console.log('response.data.data', response.data.data)

                                    // vm.sending=false

                                    

                                    // vm.createdObject = response.data

                                    // vm.$router.push('/user')
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
                        axios.delete('/api/Proutenlair/user/'+this.form.id, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          vm.$router.push('/user')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            