
    <style>
      /*123*/
    </style>
    


      <template>

      <section>


      <div class="page-header">

        <h1>
        <small>
        <el-tag type="primary">firm_firm</el-tag>


        </small>
        
        </h1>
      </div>


      <div class="row">

        <!--
        <pre>{{object}}</pre>
        <el-button icon="el-icon-arrow-left" @click.prevent="goBack" tooltip="Go back" type="primary" color="default" class="pull-left" >
          <i class="el-icon-arrow-left"></i> {{$t('core.back')}}
        </el-button>
        -->

      </div>
      <br>
      
<el-button v-if="mode=='show'" type="primary" @click="mode='form'">{{$t('core.edit')}}</el-button>
<el-button v-if="mode=='form'" @click="mode='show'">{{$t('core.cancel')}}</el-button>
<transition appear name="slide-fade">
<firm-firm-form v-if="mode=='form'" :id="getId"></firm-firm-form>
</transition>
<transition appear name="slide-fade">
<firm-firm-show v-if="mode=='show'" :id="getId"></firm-firm-show>
</transition>
</section>

</template>

<script>

        import Vue from 'vue'
        

	import firmFirmForm from '../form/basic.vue'



        export default {
            components: {
				firmFirmForm, 

            },

            props :{
                
                id : {
                required: true,
                type : Number

                }

            },

            created () {
              console.log('this.id -> ', this.id);

              if (typeof this.id == 'number' || typeof this.id == 'string') {
                // this.id=this.object
                this.fetchObject()
              }
              else if (typeof this.id == 'object') {
                // this.id=this.getId

              }


              var vm = this
              Event.$on('createdFirmFirm', function (createdObject) {
                console.log('New record has been fired')
                console.log('created object -> ', createdObject);

                  vm.object=createdObject
                  vm.mode='show'

                console.log('created object.id -> ', createdObject.id);
              })





            },
            watch: {


            },

            data(){
                return {
                    mode:'show', // show | form

                    object:'{}',
                    

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
                goBack(){
                    window.location.replace('/Picaflor/firm_firm')
                },
                getUrl(methodName){

                    return '/api/Picaflor/firm_firm/'+this.getId+'/'+methodName
                },


                fetchObject () {
                    var vm=this
                    axios.get('/api/Picaflor/firm_firm/'+this.getId).then(function (response) {

                              vm.object = response.data.data

                              vm.loading=false

                          }, function (response) {
                              // error callback
                          });
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

            },
        }

        </script>

