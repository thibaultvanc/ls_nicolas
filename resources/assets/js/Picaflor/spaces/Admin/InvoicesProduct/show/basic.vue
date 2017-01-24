
    <style>

    </style>
    
    <template>
      <section>
    <!--<pre>
    object:  {{object }}
    </pre>-->

    <div class="well">
        <h2>{{ $t('Picaflor.InvoicesProduct.show') }}</h2>
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

    
      <div class="form-group invoices_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="invoices_id" class="col-sm-2 control-label">Invoices_id</label>-->
      <label for="invoices_id" class="col-sm-2 control-label">{{ $t('Picaflor.InvoicesProduct.fields.invoices_id.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.invoices_id }} 

      </div>
      </div>
      </div>
      


      <div class="form-group product_id">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="product_id" class="col-sm-2 control-label">Product_id</label>-->
      <label for="product_id" class="col-sm-2 control-label">{{ $t('Picaflor.InvoicesProduct.fields.product_id.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.product_id }} 

      </div>
      </div>
      </div>
      


      <div class="form-group quantity">
      <div class="col-md-12 col-sm-12 ">
      <!--<label for="quantity" class="col-sm-2 control-label">Quantity</label>-->
      <label for="quantity" class="col-sm-2 control-label">{{ $t('Picaflor.InvoicesProduct.fields.quantity.label') }}</label>
      <div class="col-sm-10 ">
      		 {{object.quantity }} 

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
                            axios.get('/api/Picaflor/invoices_product/'+this.getId).then(function (response) {
                                      vm.object = response.data.data
                                      vm.loading=false

                                  }, function (response) {
                                      // error callback
                                  });
                        },

                        edit (object){
                            window.location.replace('/Picaflor/invoices_product/'+object.id+'/edit');
                        },

                     


                    cancel() {
                        this.$router.push(window.history.back())
                    },


                    larastrapEditionMode () {
                      return larastrapEditionMode
                    },

                    deleteObject(object) {
                        
                        var vm=this
                        axios.delete('/api/Picaflor/invoices_product/'+getId, object).then(function (response) {
                        vm.sending=false

                          this.$notify({
                            title: this.$t('core.deleted'),
                            message: this.$t('core.successfullyDeleted'),
                            type: 'success',
                            offset: 100
                          });


                          // vm.$router.push('/invoices_product')
                    }, function (response) {
                        alert('erreur')
                        // setTimeout(function() { debugger; }, 10000)
                        throw new Error("Something went badly wrong!");
                    });
                    

                    },



                    },




            }



            </script>

            