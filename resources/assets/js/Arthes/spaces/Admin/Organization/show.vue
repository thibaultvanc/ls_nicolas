
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

            <!-- <h1>Show Organization</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading && object.organization_id">
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



            
                        <div class="form-group isOrgNotSupported">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="isOrgNotSupported" class="col-sm-2 control-label">IsOrgNotSupported</label>
                        <div class="col-sm-10 ">
                        		 {{object.isOrgNotSupported }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group organization_id">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="organization_id" class="col-sm-2 control-label">Organization_id</label>
                        <div class="col-sm-10 ">
                        		 {{object.organization_id }} 

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
                        


                        <div class="form-group contact_name">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="contact_name" class="col-sm-2 control-label">Contact_name</label>
                        <div class="col-sm-10 ">
                        		 {{object.contact_name}} 

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
                        


                        <div class="form-group source">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="source" class="col-sm-2 control-label">Source</label>
                        <div class="col-sm-10 ">
                        		 {{object.source}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group country">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10 ">
                        		 {{object.country}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group org_settings">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="org_settings" class="col-sm-2 control-label">Org_settings</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.org_settings, 'el-icon-circle-cross' : !object.org_settings, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_ziedition">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_ziedition" class="col-sm-2 control-label">Is_ziedition</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_ziedition, 'el-icon-circle-cross' : !object.is_ziedition, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_sku_enabled">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_sku_enabled" class="col-sm-2 control-label">Is_sku_enabled</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_sku_enabled, 'el-icon-circle-cross' : !object.is_sku_enabled, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group version">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="version" class="col-sm-2 control-label">Version</label>
                        <div class="col-sm-10 ">
                        		 {{object.version}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group version_formatted">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="version_formatted" class="col-sm-2 control-label">Version_formatted</label>
                        <div class="col-sm-10 ">
                        		 {{object.version_formatted}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_moss_enabled">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_moss_enabled" class="col-sm-2 control-label">Is_moss_enabled</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_moss_enabled, 'el-icon-circle-cross' : !object.is_moss_enabled, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_sales_inclusive_tax_enabled">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_sales_inclusive_tax_enabled" class="col-sm-2 control-label">Is_sales_inclusive_tax_enabled</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_sales_inclusive_tax_enabled, 'el-icon-circle-cross' : !object.is_sales_inclusive_tax_enabled, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group tax_group_enabled">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="tax_group_enabled" class="col-sm-2 control-label">Tax_group_enabled</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.tax_group_enabled, 'el-icon-circle-cross' : !object.tax_group_enabled, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group language_code">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="language_code" class="col-sm-2 control-label">Language_code</label>
                        <div class="col-sm-10 ">
                        		 {{object.language_code}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group fiscal_year_start_month">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="fiscal_year_start_month" class="col-sm-2 control-label">Fiscal_year_start_month</label>
                        <div class="col-sm-10 ">
                        		 {{object.fiscal_year_start_month }} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group time_zone">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="time_zone" class="col-sm-2 control-label">Time_zone</label>
                        <div class="col-sm-10 ">
                        		 {{object.time_zone}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group field_separator">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="field_separator" class="col-sm-2 control-label">Field_separator</label>
                        <div class="col-sm-10 ">
                        		 {{object.field_separator}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group time_zone_formatted">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="time_zone_formatted" class="col-sm-2 control-label">Time_zone_formatted</label>
                        <div class="col-sm-10 ">
                        		 {{object.time_zone_formatted}} 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group is_trip_enabled">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="is_trip_enabled" class="col-sm-2 control-label">Is_trip_enabled</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.is_trip_enabled, 'el-icon-circle-cross' : !object.is_trip_enabled, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


                        <div class="form-group can_show_document_tab">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="can_show_document_tab" class="col-sm-2 control-label">Can_show_document_tab</label>
                        <div class="col-sm-10 ">
                        		 <i :class="{'el-icon-circle-check' : object.can_show_document_tab, 'el-icon-circle-cross' : !object.can_show_document_tab, }" ></i> 

                        </div>
                        </div>
                        </div>
                        


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
                        		 {{object.currency_code}} 

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
                        


                        <div class="form-group currency_format">
                        <div class="col-md-12 col-sm-12 ">
                        <label for="currency_format" class="col-sm-2 control-label">Currency_format</label>
                        <div class="col-sm-10 ">
                        		 {{object.currency_format}} 

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
                        axios.get('/api/Arthes/organization/'+this.getId).then(function (response) {
                                  vm.object = response.data.data
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                    edit (object){
                        window.location.replace('/Arthes/organization/'+object.organization_id+'/edit');
                    },

                 


                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/organization/'+getId, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      // vm.$router.push('/organization')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        