
    <style>
      /*123*/
    </style>
    


      <template>

      <section>


      <div class="page-header">

        <h1>
        <small>
        <el-tag type="primary">organization</el-tag>


        </small>
        
          {{ object.name }} 
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
      

          <div class="tabbable">
              <ul class="nav nav-pills nav-stacked col-md-3">
                  <li class="active"><a href="#general" data-toggle="tab">{{$t('core.general')}}</a></li>
                  <li class=""><a href="#users" data-toggle="tab">users**BTM**</a></li>
              </ul>
              <div class="tab-content col-md-8">
                  <div class="tab-pane fade in active" id="general">
                  <el-button v-if="mode=='show'" type="primary" @click="mode='form'">{{$t('core.edit')}}</el-button><el-button v-if="mode=='form'" @click="mode='show'">{{$t('core.cancel')}}</el-button><transition appear name="fade" mode="out-in"> <organization-form v-if="mode=='form'" :id="getId"></organization-form> </transition><transition appear name="fade" mode="in-out"> <organization-show v-if="mode=='show'" :id="getId"></organization-show> </transition>
                  </div>
                  
                                 <div class="tab-pane fade in" id="users">
                                    <users from="organization" :organization="id" :fromId="id" :url="getUrl('users')"></users>
                                 </div>

              </div><!--tab content-->
          </div>
          </section>

</template>

<script>

        import Vue from 'vue'
        

	import organizationForm from '../form/basic.vue'
import users from '../../User/list/basic.vue'



        export default {
            components: {
				organizationForm, 
				users, 

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
              Event.$on('createdOrganization', function (createdObject) {
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
                    window.location.replace('/Picaflor/organization')
                },
                getUrl(methodName){

                    return '/api/Picaflor/organization/'+this.getId+'/'+methodName
                },


                fetchObject () {
                    var vm=this
                    axios.get('/api/Picaflor/organization/'+this.getId).then(function (response) {

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

