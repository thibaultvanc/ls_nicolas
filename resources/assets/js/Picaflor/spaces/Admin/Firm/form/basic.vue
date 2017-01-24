
    <style>
      /*123*/
    </style>
    
    <template >

    <section>



    <!--<pre>
        {{form}}
    </pre>-->

    <div class="well">
        <h2 v-show="mode=='update'">{{ $t('Picaflor.Firm.edit') }}</h2>
        <h2 v-show="mode=='create'">{{ $t('Picaflor.Firm.create') }}</h2>

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



        <form class="form-horizontal form-label-left" method="POST" action="/api/Picaflor/firm" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        

                    <div>
                        

    <div class="form-group name">
    <div class="col-md-12 col-sm-12 ">
    <label for="name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.name.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/42/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.name.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="name" v-model="form.name" :placeholder="$t('Picaflor.Firm.fields.name.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group country_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="country_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.country_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/50/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.country_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_country">

        <el-select v-model="form.country_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="Country in CountryList"
            :label="Country.name + ' ' " :value="Country.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_country"
        @click.prevent="showForm_country= ! showForm_country"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('country_id')" v-text="form.errors.get('country_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdCountry.id"  >
        </span>


        <el-button v-if="showForm_country"
        @click.prevent="showForm_country= ! showForm_country"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_country">

        <div v-if="createdCountry.id">
							<b>
          {{ createdCountry.name }} 
        </b>

        </div>
        <div v-else>
        <country-form force-mode="create" :created-object.sync="createdCountry" ></country-form>
        </div>
        </div>
        

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group url_site">
    <div class="col-md-12 col-sm-12 ">
    <label for="url_site" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.url_site.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/106/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.url_site.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="url_site" v-model="form.url_site" :placeholder="$t('Picaflor.Firm.fields.url_site.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('url_site')" v-text="form.errors.get('url_site')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group url_blog">
    <div class="col-md-12 col-sm-12 ">
    <label for="url_blog" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.url_blog.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/107/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.url_blog.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="url_blog" v-model="form.url_blog" :placeholder="$t('Picaflor.Firm.fields.url_blog.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('url_blog')" v-text="form.errors.get('url_blog')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group url_facebook">
    <div class="col-md-12 col-sm-12 ">
    <label for="url_facebook" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.url_facebook.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/108/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.url_facebook.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="url_facebook" v-model="form.url_facebook" :placeholder="$t('Picaflor.Firm.fields.url_facebook.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('url_facebook')" v-text="form.errors.get('url_facebook')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group firm_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="firm_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.firm_name.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/128/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.firm_name.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="firm_name" v-model="form.firm_name" :placeholder="$t('Picaflor.Firm.fields.firm_name.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('firm_name')" v-text="form.errors.get('firm_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group tva_intra">
    <div class="col-md-12 col-sm-12 ">
    <label for="tva_intra" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.tva_intra.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/129/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.tva_intra.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="tva_intra" v-model="form.tva_intra" :placeholder="$t('Picaflor.Firm.fields.tva_intra.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('tva_intra')" v-text="form.errors.get('tva_intra')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group firm_type_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="firm_type_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.Firm.fields.firm_type_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/11/fields/132/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.Firm.fields.firm_type_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 


        <div v-if="!showForm_firm_type">

        <el-select v-model="form.firm_type_id" :placeholder="$t('core.select')" :no-data-text="$t('core.noResults')" :no-match-text="$t('core.noResults')" size="large" popper-class="fullwidth">
          <el-option
            v-for="FirmType in FirmTypeList"
            :label="FirmType.name + ' ' " :value="FirmType.id">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_firm_type"
        @click.prevent="showForm_firm_type= ! showForm_firm_type"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t('core.add') }}
        </el-button>

        
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('firm_type_id')" v-text="form.errors.get('firm_type_id')"></span>
          </div>
          </div>

        <span v-else>
        <input type="hidden" v-model="createdFirmType.id"  >
        </span>


        <el-button v-if="showForm_firm_type"
        @click.prevent="showForm_firm_type= ! showForm_firm_type"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t('core.cancel') }}</el-button>

        <div class="well" v-if="showForm_firm_type">

        <div v-if="createdFirmType.id">
							<b>
          {{ createdFirmType.name }} 
        </b>

        </div>
        <div v-else>
        <firm-type-form force-mode="create" :created-object.sync="createdFirmType" ></firm-type-form>
        </div>
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
                     Firm <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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




            
import countryForm from '../../Country/form/basic.vue'
import firmTypeForm from '../../Type/form/basic.vue'





            export default {
                components: { 				countryForm,
				firmTypeForm,

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

                    this.fetchCountry()
this.fetchFirmType()




                    console.log("label")
                    console.log(this.label)
                    console.log("value")
                    console.log(this.value)



                    var vm = this

                    


                            Event.$on('createdCountry', function (createdObject) {
                              console.log('Country has been fired')

                              vm.CountryList.push(createdObject)
                              vm.form.country_id=createdObject.id


                              vm.showForm_country=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    


                            Event.$on('createdFirmType', function (createdObject) {
                              console.log('FirmType has been fired')

                              vm.FirmTypeList.push(createdObject)
                              vm.form.firm_type_id=createdObject.id


                              vm.showForm_firm_type=false

                              console.log('created object -> ', createdObject);
                              console.log('created object.id -> ', createdObject.id);
                            })



                    
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
name:'',
country_id:'',
url_site:'',
url_blog:'',
url_facebook:'',
firm_name:'',
tva_intra:'',
firm_type_id:'',


                        }),



                        object:{},
                        
                        showForm_country : false,

                        createdCountry : {},

                        CountryList:[],

                        showForm_firm_type : false,

                        createdFirmType : {},

                        FirmTypeList:[],




                    };
                },

                filters:{


                },
                computed : {



                },

                methods: {
                        fetchObject () {
                            var vm=this
                            axios.get('/api/Picaflor/firm/'+this.id).then(function (response) {
                                      vm.object=response.data.data
                                      vm.form = new VueForm(response.data.data)
                                      vm.loading=false

                                  }, function (response) {
                                      // error callback
                                  });
                        },

                     


                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchCountry(){
                                    var vm=this
                                    axios.get('/api/Picaflor/country').then(function (response) {
                                              vm.CountryList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },

                            //retrouver les données du belong to pour afficher la liste déroulante
                            fetchFirmType(){
                                    var vm=this
                                    axios.get('/api/Picaflor/firm_type').then(function (response) {
                                              vm.FirmTypeList = response.data.data

                                          }, function (response) {
                                              // error callback
                                          });
                            },
                    submit(object) {
                        this.sending=true

                        if(this.mode == 'create'){


                            this.form.submit('post','/api/Picaflor/firm')
                              .then(response => {

                                this.$notify({
                                  title: this.$t('core.saved'),
                                  message: this.$t('core.created'),
                                  type: 'success',
                                  offset: 100
                                });

                                  Event.$emit('createdFirm', response.data)

                                
                                if (!this.forceMode) {
                                        
                                                this.$router.push('/firm/'+this.form.id)
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

                              this.form.submit('put','/api/Picaflor/firm/'+this.form.id)
                                .then(response => {

                                    vm.$notify({
                                      title: this.$t('core.updated'),
                                      message: this.$t('successfullyUpdated'),
                                      type: 'success',
                                      offset: 100
                                    });

                                    vm.form = new VueForm(response.data)

                                    Event.$emit('createdFirm', response.data)

                                    // console.log('response', response)
                                    // console.log('response.data', response.data)
                                    // console.log('response.data.data', response.data.data)

                                    // vm.sending=false

                                    

                                    // vm.createdObject = response.data

                                    // vm.$router.push('/firm')
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
                        axios.delete('/api/Picaflor/firm/'+this.form.id, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          vm.$router.push('/firm')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            