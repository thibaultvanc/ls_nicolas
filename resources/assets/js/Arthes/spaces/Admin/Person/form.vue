
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

            <!-- <h1>Person Form</h1>-->

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



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/person" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group contact_person_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="contact_person_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Contact_person_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/60/fields/424/edit" v-show="larastrapEditionMode">Contact_person_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="contact_person_id" v-model="form.contact_person_id" placeholder="contact_person_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('contact_person_id')" v-text="form.errors.get('contact_person_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group contact_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="contact_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Contact_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/60/fields/425/edit" v-show="larastrapEditionMode">Contact_id <span class="text-danger">*</span></a>

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
                            

    <div class="form-group salutation">
    <div class="col-md-12 col-sm-12 ">
    <label for="salutation" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Salutation <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/60/fields/426/edit" v-show="larastrapEditionMode">Salutation <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="salutation" v-model="form.salutation" placeholder="salutation" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('salutation')" v-text="form.errors.get('salutation')"></span>
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
      <a href="/admin/devis/2/tables/60/fields/427/edit" v-show="larastrapEditionMode">First_name <span class="text-danger">*</span></a>

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
      <a href="/admin/devis/2/tables/60/fields/428/edit" v-show="larastrapEditionMode">Last_name <span class="text-danger">*</span></a>

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
      <a href="/admin/devis/2/tables/60/fields/429/edit" v-show="larastrapEditionMode">Email <span class="text-danger">*</span></a>

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
      <a href="/admin/devis/2/tables/60/fields/430/edit" v-show="larastrapEditionMode">Phone <span class="text-danger">*</span></a>

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
      <a href="/admin/devis/2/tables/60/fields/431/edit" v-show="larastrapEditionMode">Mobile <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="mobile" v-model="form.mobile" placeholder="mobile" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('mobile')" v-text="form.errors.get('mobile')"></span>
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
                         Person <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
                // this.id=this.object.contact_person_id
                
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
                      contact_person_id:'',
contact_id:'',
salutation:'',
first_name:'',
last_name:'',
email:'',
phone:'',
mobile:'',


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
                        axios.get('/api/Arthes/person/'+this.id).then(function (response) {
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


                        this.form.submit('post','/api/Arthes/person')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdPerson', response.data)

                            
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

                          this.form.submit('put','/api/Arthes/person/'+this.form.contact_person_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdPerson', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/person')
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
                    axios.delete('/api/Arthes/person/'+this.form.contact_person_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/person')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        