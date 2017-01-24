
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

            <!-- <h1>Item Form</h1>-->

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



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/item" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group item_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="item_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Item_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/367/edit" v-show="larastrapEditionMode">Item_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="item_id" v-model="form.item_id" placeholder="item_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('item_id')" v-text="form.errors.get('item_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group name">
    <div class="col-md-12 col-sm-12 ">
    <label for="name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/368/edit" v-show="larastrapEditionMode">Name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="name" v-model="form.name" placeholder="name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group item_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="item_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Item_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/369/edit" v-show="larastrapEditionMode">Item_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="item_name" v-model="form.item_name" placeholder="item_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('item_name')" v-text="form.errors.get('item_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group sku">
    <div class="col-md-12 col-sm-12 ">
    <label for="sku" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Sku <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/370/edit" v-show="larastrapEditionMode">Sku <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="sku" v-model="form.sku" placeholder="sku" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('sku')" v-text="form.errors.get('sku')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group image_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="image_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Image_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/371/edit" v-show="larastrapEditionMode">Image_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="image_name" v-model="form.image_name" placeholder="image_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('image_name')" v-text="form.errors.get('image_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group status">
    <div class="col-md-12 col-sm-12 ">
    <label for="status" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Status <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/372/edit" v-show="larastrapEditionMode">Status <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="status" v-model="form.status" placeholder="status" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('status')" v-text="form.errors.get('status')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group source">
    <div class="col-md-12 col-sm-12 ">
    <label for="source" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Source <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/373/edit" v-show="larastrapEditionMode">Source <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="source" v-model="form.source" placeholder="source" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('source')" v-text="form.errors.get('source')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_linked_with_zohocrm">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_linked_with_zohocrm" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_linked_with_zohocrm <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/374/edit" v-show="larastrapEditionMode">Is_linked_with_zohocrm <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_linked_with_zohocrm" v-model="form.is_linked_with_zohocrm" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_linked_with_zohocrm" v-model="form.is_linked_with_zohocrm" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_linked_with_zohocrm" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_linked_with_zohocrm"
        @click="fetchObject"
        name="is_linked_with_zohocrm"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_linked_with_zohocrm')" v-text="form.errors.get('is_linked_with_zohocrm')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group description">
    <div class="col-md-12 col-sm-12 ">
    <label for="description" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Description <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/375/edit" v-show="larastrapEditionMode">Description <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="description" v-model="form.description" placeholder="description" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group rate">
    <div class="col-md-12 col-sm-12 ">
    <label for="rate" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Rate <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/376/edit" v-show="larastrapEditionMode">Rate <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="rate" v-model="form.rate" placeholder="rate" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('rate')" v-text="form.errors.get('rate')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group tax_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="tax_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Tax_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/377/edit" v-show="larastrapEditionMode">Tax_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="tax_id" v-model="form.tax_id" placeholder="tax_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('tax_id')" v-text="form.errors.get('tax_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group tax_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="tax_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Tax_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/378/edit" v-show="larastrapEditionMode">Tax_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="tax_name" v-model="form.tax_name" placeholder="tax_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('tax_name')" v-text="form.errors.get('tax_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group tax_percentage">
    <div class="col-md-12 col-sm-12 ">
    <label for="tax_percentage" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Tax_percentage <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/379/edit" v-show="larastrapEditionMode">Tax_percentage <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="tax_percentage" v-model="form.tax_percentage" placeholder="tax_percentage" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('tax_percentage')" v-text="form.errors.get('tax_percentage')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group item_type">
    <div class="col-md-12 col-sm-12 ">
    <label for="item_type" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Item_type <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/380/edit" v-show="larastrapEditionMode">Item_type <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="item_type" v-model="form.item_type" placeholder="item_type" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('item_type')" v-text="form.errors.get('item_type')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group created_time">
    <div class="col-md-12 col-sm-12 ">
    <label for="created_time" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Created_time <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/381/edit" v-show="larastrapEditionMode">Created_time <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		<input type="number" class="form-control datepicker" name="created_time" v-model="form.created_time" placeholder="created_time" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('created_time')" v-text="form.errors.get('created_time')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group last_modified_time">
    <div class="col-md-12 col-sm-12 ">
    <label for="last_modified_time" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Last_modified_time <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/57/fields/382/edit" v-show="larastrapEditionMode">Last_modified_time <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		<input type="number" class="form-control datepicker" name="last_modified_time" v-model="form.last_modified_time" placeholder="last_modified_time" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('last_modified_time')" v-text="form.errors.get('last_modified_time')"></span>
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
                         Item <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
                // this.id=this.object.item_id
                
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
                      item_id:'',
name:'',
item_name:'',
sku:'',
image_name:'',
status:'',
source:'',
is_linked_with_zohocrm:false,
description:'',
rate:'',
tax_id:'',
tax_name:'',
tax_percentage:'',
item_type:'',
created_time:'',
last_modified_time:'',


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
                        axios.get('/api/Arthes/item/'+this.id).then(function (response) {
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


                        this.form.submit('post','/api/Arthes/item')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdItem', response.data)

                            
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

                          this.form.submit('put','/api/Arthes/item/'+this.form.item_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdItem', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/item')
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
                    axios.delete('/api/Arthes/item/'+this.form.item_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/item')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        