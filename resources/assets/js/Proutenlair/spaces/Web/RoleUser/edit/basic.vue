
    <style>
      /*123*/
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
        <el-tag type="primary">role_user</el-tag>
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
<role-user-form v-if="mode=='form'" :id="getId"></role-user-form>
</transition>
<transition appear name="slide-fade">
<role-user-show v-if="mode=='show'" :id="getId"></role-user-show>
</transition>
</section>

</template>

<script>

        import Vue from 'vue'
        

	import roleUserForm from '../form/basic.vue'



        export default {
            components: {
				roleUserForm, 

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
              Event.$on('createdRoleUser', function (createdObject) {
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
                    window.location.replace('/Proutenlair/role_user')
                },
                getUrl(methodName){

                    return '/api/Proutenlair/role_user/'+this.getId+'/'+methodName
                },


                fetchObject () {
                    var vm=this
                    axios.get('/api/Proutenlair/role_user/'+this.getId).then(function (response) {

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

