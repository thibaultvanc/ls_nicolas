
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

            <!-- <h1>Show Item</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.item_id">
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



            
                        <div class="form-group item_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="item_id" class="col-sm-2 control-label">Item_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.item_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10 ">
                        		 {{object.name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group item_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="item_name" class="col-sm-2 control-label">Item_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.item_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group sku">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="sku" class="col-sm-2 control-label">Sku</label>
                        <div class="col-sm-10 ">
                        		 {{object.sku}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group image_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="image_name" class="col-sm-2 control-label">Image_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.image_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group status">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="status" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10 ">
                        		 {{object.status}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group source">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="source" class="col-sm-2 control-label">Source</label>
                        <div class="col-sm-10 ">
                        		 {{object.source}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_linked_with_zohocrm">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_linked_with_zohocrm" class="col-sm-2 control-label">Is_linked_with_zohocrm</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_linked_with_zohocrm, 'el-icon-circle-cross' : !object.is_linked_with_zohocrm, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group description">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10 ">
                        		 {{object.description}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group rate">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="rate" class="col-sm-2 control-label">Rate</label>
                        <div class="col-sm-10 ">
                        		 {{object.rate }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group tax_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="tax_id" class="col-sm-2 control-label">Tax_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.tax_id }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group tax_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="tax_name" class="col-sm-2 control-label">Tax_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.tax_name}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group tax_percentage">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="tax_percentage" class="col-sm-2 control-label">Tax_percentage</label>
                        <div class="col-sm-10 ">
                        		 {{object.tax_percentage }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group item_type">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="item_type" class="col-sm-2 control-label">Item_type</label>
                        <div class="col-sm-10 ">
                        		 {{object.item_type}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group created_time">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="created_time" class="col-sm-2 control-label">Created_time</label>
                        <div class="col-sm-10 ">
                        		 {{object.created_time}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group last_modified_time">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="last_modified_time" class="col-sm-2 control-label">Last_modified_time</label>
                        <div class="col-sm-10 ">
                        		 {{object.last_modified_time}} 

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
                        axios.get('/api/Arthes/item/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/item/'+object.item_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/item/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/item')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        