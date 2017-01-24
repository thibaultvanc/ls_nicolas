
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

            <!-- <h1>Currency Form</h1>-->

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



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/currency" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group currency_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/55/fields/344/edit" v-show="larastrapEditionMode">Currency_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="currency_id" v-model="form.currency_id" placeholder="currency_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_id')" v-text="form.errors.get('currency_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_code">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_code" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_code <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/55/fields/345/edit" v-show="larastrapEditionMode">Currency_code <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="currency_code" v-model="form.currency_code" placeholder="currency_code" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_code')" v-text="form.errors.get('currency_code')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/55/fields/346/edit" v-show="larastrapEditionMode">Currency_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="currency_name" v-model="form.currency_name" placeholder="currency_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_name')" v-text="form.errors.get('currency_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_symbol">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_symbol" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_symbol <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/55/fields/347/edit" v-show="larastrapEditionMode">Currency_symbol <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="currency_symbol" v-model="form.currency_symbol" placeholder="currency_symbol" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_symbol')" v-text="form.errors.get('currency_symbol')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group price_precision">
    <div class="col-md-12 col-sm-12 ">
    <label for="price_precision" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Price_precision <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/55/fields/348/edit" v-show="larastrapEditionMode">Price_precision <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="price_precision" v-model="form.price_precision" placeholder="price_precision" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('price_precision')" v-text="form.errors.get('price_precision')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_format">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_format" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_format <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/55/fields/349/edit" v-show="larastrapEditionMode">Currency_format <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="currency_format" v-model="form.currency_format" placeholder="currency_format" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_format')" v-text="form.errors.get('currency_format')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_base_currency">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_base_currency" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_base_currency <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/55/fields/350/edit" v-show="larastrapEditionMode">Is_base_currency <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_base_currency" v-model="form.is_base_currency" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_base_currency" v-model="form.is_base_currency" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_base_currency" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_base_currency"
        @click="fetchObject"
        name="is_base_currency"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_base_currency')" v-text="form.errors.get('is_base_currency')"></span>
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
                         Currency <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
                // this.id=this.object.currency_id
                
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
                      currency_id:'',
currency_code:'',
currency_name:'',
currency_symbol:'',
price_precision:'',
currency_format:'',
is_base_currency:false,


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
                        axios.get('/api/Arthes/currency/'+this.id).then(function (response) {
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


                        this.form.submit('post','/api/Arthes/currency')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdCurrency', response.data)

                            
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

                          this.form.submit('put','/api/Arthes/currency/'+this.form.currency_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdCurrency', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/currency')
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
                    axios.delete('/api/Arthes/currency/'+this.form.currency_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/currency')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        