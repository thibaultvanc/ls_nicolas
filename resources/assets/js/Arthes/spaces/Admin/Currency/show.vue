
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

            <!-- <h1>Show Currency</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.currency_id">
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



            
                        <div class="form-group currency_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_id" class="col-sm-2 control-label">Currency_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group currency_code">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_code" class="col-sm-2 control-label">Currency_code</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_code }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group currency_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_name" class="col-sm-2 control-label">Currency_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group currency_symbol">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_symbol" class="col-sm-2 control-label">Currency_symbol</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_symbol}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group price_precision">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="price_precision" class="col-sm-2 control-label">Price_precision</label>
                        <div class="col-sm-10 ">
                        		 {{object.price_precision }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group currency_format">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_format" class="col-sm-2 control-label">Currency_format</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_format}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_base_currency">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_base_currency" class="col-sm-2 control-label">Is_base_currency</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_base_currency, 'el-icon-circle-cross' : !object.is_base_currency, }" ></i> 

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
                        axios.get('/api/Arthes/currency/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/currency/'+object.currency_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/currency/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/currency')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        