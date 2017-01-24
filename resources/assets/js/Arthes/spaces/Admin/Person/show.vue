
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

            <!-- <h1>Show Person</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.contact_person_id">
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



            
                        <div class="form-group contact_person_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="contact_person_id" class="col-sm-2 control-label">Contact_person_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.contact_person_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group contact_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="contact_id" class="col-sm-2 control-label">Contact_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.contact_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group salutation">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="salutation" class="col-sm-2 control-label">Salutation</label>
                        <div class="col-sm-10 ">
                        		 {{object.salutation}} 

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
                        		 {{object.mobile}} 

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
                        axios.get('/api/Arthes/person/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/person/'+object.contact_person_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/person/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/person')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        