
    <style>
      /*123*/
    </style>
    


      <template>

      <section>


      <div class="page-header">

        <h1>
        <small>
        <el-tag type="primary">invoices_product</el-tag>


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
<invoices-product-form v-if="mode=='form'" :id="getId"></invoices-product-form>
</transition>
<transition appear name="slide-fade">
<invoices-product-show v-if="mode=='show'" :id="getId"></invoices-product-show>
</transition>
</section>

</template>

<script>

        import Vue from 'vue'
        

	import invoicesProductForm from '../form/basic.vue'



        export default {
            components: {
				invoicesProductForm, 

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
              Event.$on('createdInvoicesProduct', function (createdObject) {
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
                    window.location.replace('/Picaflor/invoices_product')
                },
                getUrl(methodName){

                    return '/api/Picaflor/invoices_product/'+this.getId+'/'+methodName
                },


                fetchObject () {
                    var vm=this
                    axios.get('/api/Picaflor/invoices_product/'+this.getId).then(function (response) {

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

