
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
        <el-tag type="primary">transaction</el-tag>
        </small>


        
          {{ object.name }} 
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
<transaction-form v-if="mode=='form'" :id="getId"></transaction-form>
</transition>
<transition appear name="slide-fade">
<transaction-show v-if="mode=='show'" :id="getId"></transaction-show>
</transition>
</section>

</template>

<script>

        import Vue from 'vue'
        

	import transactionForm from '../form/basic.vue'



        export default {
            components: {
				transactionForm, 

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
              Event.$on('createdTransaction', function (createdObject) {
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
                    
                    showForm_invoices : false,

                    createdInvoices : {},

                    InvoicesList:[],

                    showForm_payment_provider : false,

                    createdPaymentProvider : {},

                    PaymentProviderList:[],


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
                    window.location.replace('/Picaflor/transaction')
                },
                getUrl(methodName){

                    return '/api/Picaflor/transaction/'+this.getId+'/'+methodName
                },


                fetchObject () {
                    var vm=this
                    axios.get('/api/Picaflor/transaction/'+this.getId).then(function (response) {

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

