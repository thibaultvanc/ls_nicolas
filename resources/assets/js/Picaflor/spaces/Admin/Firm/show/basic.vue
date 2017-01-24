
    <style>

    </style>
    
    <template>
      <section>
    <!--<pre>
    object:  {{object }}
    </pre>-->

    <div class="well">
        <h2>{{ $t('Picaflor.Firm.show') }}</h2>
    </div>


    <div v-if="loading">
    <el-button type="primary" :loading="true">{{$t('core.loading')}}</el-button>
    </div>

    <div class="row" v-if="!loading && object.id">
    <div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="ibox-title">


    <div class="row" v-if="mode=='update'">
    <div class="col-md-12">
    <div class="pull-right"><a @click="deleteObject(object)"> {{$t('core.delete')}}</a></div>
    </div>
    </div>
    </div>
    <div class="ibox-content">

    
      <div class="form-group name">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="name" class="col-sm-2 control-label">Nom de la marque</label>-->
      <label for="name" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.name.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.name}} 

      </div>
      </div>
      </div>
      


      <div class="form-group country_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="country_id" class="col-sm-2 control-label">Pays d'origine de la marque</label>-->
      <label for="country_id" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.country_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.country.name }}
          

      </div>
      </div>
      </div>
      


      <div class="form-group url_site">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="url_site" class="col-sm-2 control-label">Site internet</label>-->
      <label for="url_site" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.url_site.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.url_site}} 

      </div>
      </div>
      </div>
      


      <div class="form-group url_blog">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="url_blog" class="col-sm-2 control-label">Blog</label>-->
      <label for="url_blog" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.url_blog.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.url_blog}} 

      </div>
      </div>
      </div>
      


      <div class="form-group url_facebook">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="url_facebook" class="col-sm-2 control-label">Facebook</label>-->
      <label for="url_facebook" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.url_facebook.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.url_facebook}} 

      </div>
      </div>
      </div>
      


      <div class="form-group firm_name">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="firm_name" class="col-sm-2 control-label">Raison sociale</label>-->
      <label for="firm_name" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.firm_name.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.firm_name}} 

      </div>
      </div>
      </div>
      


      <div class="form-group tva_intra">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="tva_intra" class="col-sm-2 control-label">TVA intra communautaire</label>-->
      <label for="tva_intra" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.tva_intra.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.tva_intra}} 

      </div>
      </div>
      </div>
      


      <div class="form-group firm_type_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="firm_type_id" class="col-sm-2 control-label">Firm_type_id</label>-->
      <label for="firm_type_id" class="col-sm-2 control-label">{{ $t('Picaflor.Firm.fields.firm_type_id.label') }}</label>
      <div class="col-sm-10 ">
      
          {{ object.firm_type.name }}
          

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

            import {VueForm} from '../../../../modules/vue-form.js'

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
                            axios.get('/api/Picaflor/firm/'+this.getId).then(function (response) {
                                      vm.object = response.data.data
                                      vm.loading=false

                                  }, function (response) {
                                      // error callback
                                  });
                        },

                        edit (object){
                            window.location.replace('/Picaflor/firm/'+object.id+'/edit');
                        },

                     


                    cancel() {
                        this.$router.push(window.history.back())
                    },


                    larastrapEditionMode () {
                      return larastrapEditionMode
                    },

                    deleteObject(object) {
                        
                        var vm=this
                        axios.delete('/api/Picaflor/firm/'+getId, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          // vm.$router.push('/firm')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            