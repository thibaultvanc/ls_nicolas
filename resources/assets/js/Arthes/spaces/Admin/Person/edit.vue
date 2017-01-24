

          <style>





        </style>

        <template>

        <section>

         <transition name="slide-fade" appear mode="out-in">
          <div v-if="mode=='form'" class="bg-primary" key="mode=='form'">
          DIVE TSET
          </div>

          <div v-else class="bg-success" key="mode='show'">
          DIVE TSET
          </div>
          </transition>


        <div class="page-header">

          <h1>
          <small>
          <el-tag type="primary">person</el-tag>


          </small>
          
          </h1>
        </div>


        <div class="row">

          <!--
          <pre>{{object}}</pre>
          <el-button icon="el-icon-arrow-left" @click.prevent="goBack" tooltip="Go back" type="primary" color="default" class="pull-left" >
            <i class="el-icon-arrow-left"></i> Back
          </el-button>
          -->

        </div>
        <br>
        
<el-button v-if="mode=='show'" type="primary" @click="mode='form'">Edit</el-button>
<el-button v-if="mode=='form'" @click="mode='show'">Cancel</el-button>
<transition appear name="slide-fade">
<person-form v-if="mode=='form'" :id="getId"></person-form>
</transition>
<transition appear name="slide-fade">
<person-show v-if="mode=='show'" :id="getId"></person-show>
</transition>
</section>

</template>



<script>

        import Vue from 'vue'
        

	import personForm from '../Person/form.vue'



        export default {
            components: {
				personForm, 

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
              Event.$on('createdPerson', function (createdObject) {
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
                    window.location.replace('/Arthes/person')
                },
                getUrl(methodName){

                    return '/api/Arthes/person/'+this.getId+'/'+methodName
                },


                fetchObject () {
                    var vm=this
                    axios.get('/api/Arthes/person/'+this.getId).then(function (response) {

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

