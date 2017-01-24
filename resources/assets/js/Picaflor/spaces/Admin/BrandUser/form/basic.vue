
    <style>
      /*123*/
    </style>
    
    <template >

    <section>



    <!--<pre>
        {{form}}
    </pre>-->

    <div class="well">
        <h2 v-show="mode=='update'">{{ $t('Picaflor.BrandUser.edit') }}</h2>
        <h2 v-show="mode=='create'">{{ $t('Picaflor.BrandUser.create') }}</h2>

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



        <form class="form-horizontal form-label-left" method="POST" action="/api/Picaflor/brand_user" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        

                    <div>
                        

    <div class="form-group brand_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="brand_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.BrandUser.fields.brand_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/13/fields/46/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.BrandUser.fields.brand_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="brand_id" v-model="form.brand_id" :placeholder="$t('Picaflor.BrandUser.fields.brand_id.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('brand_id')" v-text="form.errors.get('brand_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group user_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="user_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.BrandUser.fields.user_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/13/fields/47/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.BrandUser.fields.user_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="user_id" v-model="form.user_id" :placeholder="$t('Picaflor.BrandUser.fields.user_id.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('user_id')" v-text="form.errors.get('user_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group country_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="country_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.BrandUser.fields.country_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/13/fields/51/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.BrandUser.fields.country_id.label') }} <span class="text-danger">*</span>
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


                      

            <div class="col-sm-12">
                <!--<button @click="cancel"  class="btn btn-default pull-right">Cancel</button>-->
                <!--<button v-if="mode=='update'" @click.prevent="deleteObject(object)"  class="btn btn-danger pull-left">Delete</button>-->
                <el-button v-if="mode=='update'" icon="delete" @click.prevent="deleteObject(object)" tooltip="Delete" type="normal" color="danger" class="pull-left" ></el-button>


                <button @click.prevent="submit(object)" class="btn btn-primary pull-right" :disabled="form.errors.any()" >
                    <b v-if="mode=='create'">{{$t('core.create')}}</b>
                    <b v-if="mode=='update'">{{$t('core.update')}}</b>
                     BrandUser <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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





            export default {
                components: { 				countryForm,

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
brand_id:'',
user_id:'',
country_id:'',


                        }),



                        object:{},
                        
                        showForm_country : false,

                        createdCountry : {},

                        CountryList:[],




                    };
                },

                filters:{


                },
                computed : {



                },

                methods: {
                        fetchObject () {
                            var vm=this
                            axios.get('/api/Picaflor/brand_user/'+this.id).then(function (response) {
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
                    submit(object) {
                        this.sending=true

                        if(this.mode == 'create'){


                            this.form.submit('post','/api/Picaflor/brand_user')
                              .then(response => {

                                this.$notify({
                                  title: this.$t('core.saved'),
                                  message: this.$t('core.created'),
                                  type: 'success',
                                  offset: 100
                                });

                                  Event.$emit('createdBrandUser', response.data)

                                
                                if (!this.forceMode) {
                                        
                                                this.$router.push(window.history.back())
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

                              this.form.submit('put','/api/Picaflor/brand_user/'+this.form.id)
                                .then(response => {

                                    vm.$notify({
                                      title: this.$t('core.updated'),
                                      message: this.$t('successfullyUpdated'),
                                      type: 'success',
                                      offset: 100
                                    });

                                    vm.form = new VueForm(response.data)

                                    Event.$emit('createdBrandUser', response.data)

                                    // console.log('response', response)
                                    // console.log('response.data', response.data)
                                    // console.log('response.data.data', response.data.data)

                                    // vm.sending=false

                                    

                                    // vm.createdObject = response.data

                                    // vm.$router.push('/brand_user')
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
                        axios.delete('/api/Picaflor/brand_user/'+this.form.id, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          vm.$router.push('/brand_user')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            