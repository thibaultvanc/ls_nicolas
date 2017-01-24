
    <style>
      /*123*/
    </style>
    
    <template >

    <section>



    <!--<pre>
        {{form}}
    </pre>-->

    <div class="well">
        <h2 v-show="mode=='update'">{{ $t('Picaflor.FirmFirm.edit') }}</h2>
        <h2 v-show="mode=='create'">{{ $t('Picaflor.FirmFirm.create') }}</h2>

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



        <form class="form-horizontal form-label-left" method="POST" action="/api/Picaflor/firm_firm" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        

                    <div>
                        

    <div class="form-group firm_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="firm_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.FirmFirm.fields.firm_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/34/fields/134/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.FirmFirm.fields.firm_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="firm_id" v-model="form.firm_id" :placeholder="$t('Picaflor.FirmFirm.fields.firm_id.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('firm_id')" v-text="form.errors.get('firm_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                     </div>


                      

                    <div>
                        

    <div class="form-group composedby_firm_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="composedby_firm_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t('Picaflor.FirmFirm.fields.composedby_firm_id.label') }} <span class="text-danger">*</span></span>
      <a href="/admin/devis/5/tables/34/fields/135/edit" v-show="larastrapEditionMode">
          {{ $t('Picaflor.FirmFirm.fields.composedby_firm_id.label') }} <span class="text-danger">*</span>
      </a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="composedby_firm_id" v-model="form.composedby_firm_id" :placeholder="$t('Picaflor.FirmFirm.fields.composedby_firm_id.placeholder')" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('composedby_firm_id')" v-text="form.errors.get('composedby_firm_id')"></span>
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
                     FirmFirm <i class="fa fa-spin fa-spinner" v-show="sending"></i>
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
firm_id:'',
composedby_firm_id:'',


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
                            axios.get('/api/Picaflor/firm_firm/'+this.id).then(function (response) {
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


                            this.form.submit('post','/api/Picaflor/firm_firm')
                              .then(response => {

                                this.$notify({
                                  title: this.$t('core.saved'),
                                  message: this.$t('core.created'),
                                  type: 'success',
                                  offset: 100
                                });

                                  Event.$emit('createdFirmFirm', response.data)

                                
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

                              this.form.submit('put','/api/Picaflor/firm_firm/'+this.form.id)
                                .then(response => {

                                    vm.$notify({
                                      title: this.$t('core.updated'),
                                      message: this.$t('successfullyUpdated'),
                                      type: 'success',
                                      offset: 100
                                    });

                                    vm.form = new VueForm(response.data)

                                    Event.$emit('createdFirmFirm', response.data)

                                    // console.log('response', response)
                                    // console.log('response.data', response.data)
                                    // console.log('response.data.data', response.data.data)

                                    // vm.sending=false

                                    

                                    // vm.createdObject = response.data

                                    // vm.$router.push('/firm_firm')
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
                        axios.delete('/api/Picaflor/firm_firm/'+this.form.id, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          vm.$router.push('/firm_firm')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            