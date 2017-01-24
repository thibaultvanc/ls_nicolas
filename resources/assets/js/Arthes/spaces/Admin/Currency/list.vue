



                <template>

                <section>









                <!--<pre>
                except-list{{exceptList}}
                </pre>
                <pre>
                selectListId{{selectListId}}
                </pre>---
                <div v-show="larastrapEditionMode">
                  <a href="/admin/devis/2/tables/55/fields/create" class="btn ">Add columns</a>
                </div>

                <!-- <h1>Currency  List</h1>-->
                <!--<pre>chooseMode : {{chooseMode}}</pre>
                <pre>exceptList : {{exceptList}}</pre>-->


                 <div v-if="loading">
                     <el-button type="primary" :loading="true">Loading</el-button>

                 </div>

                 <div v-else>
                    <div class="pull-left">

                    <el-dropdown v-if="!selectListId.length">
                     <span class="el-dropdown-link">
                       {{itemsPerPage}} per page<i class="el-icon-caret-bottom el-icon--right"></i>
                     </span>
                     <el-dropdown-menu slot="dropdown">
                       <el-dropdown-item @click.prevent="itemsPerPage=10, fetchData()">10</el-dropdown-item>
                       <el-dropdown-item @click.prevent="itemsPerPage=20, fetchData()">20</el-dropdown-item>
                       <el-dropdown-item @click.prevent="itemsPerPage=50, fetchData()">50</el-dropdown-item>
                       <el-dropdown-item @click.prevent="itemsPerPage=100, fetchData()">100</el-dropdown-item>
                       <el-dropdown-item @click.prevent="itemsPerPage=200, fetchData()">200</el-dropdown-item>
                     </el-dropdown-menu>
                    </el-dropdown>

                    </div>

                     <div class="pull-right">
                        <div class="form-group">
                            <input type="text" v-model="search" class="form-control" placeholder="search...">
                        </div>

                        <el-button type="primary" @click="refresh" v-if="!selectListId.length">Refresh</el-button>


                        <!--
                          ** Information   ** // add this tag to show execpt when if the componnent is loaded from another componnent
                          v-if="! !!fromId"
                        -->
                        <span ><el-button type="primary" @click="clickAdd" icon="plus" v-if="!selectListId.length">Add</el-button></span>
                        


                        <!--
                         <el-button icon="refresh" @click.prevent="refresh" tooltip="refresh" type="normal" color="default" v-show="!showFilters"></el-button>
                         <el-button icon="add" @click.prevent="clickAdd" tooltip="Add" type="normal" color="default" v-show="!showFilters"></el-button>
                         <el-button icon="search" @click.prevent="clickSearch" tooltip="message tooltip" type="normal" color="default"></el-button>
                         -->
                     </div>

                     <div class="well" v-if="showFilters">
                         <h2>Filters</h2>
                         <p>
                             ....
                         </p>
                     </div>


                     <div class="well" v-if="selectListId.length && !chooseMode">
                         <h2>Actions</h2>
                         <p>
                            <b>{{selectListId.length}}</b> selected
                         </p>
                         <el-button @click="clickDeleteSelectList" icon="delete" size="mini" ></el-button>

                     </div>

                     <div class="well" v-if="selectListId.length && chooseMode">

                         <p>
                            <b>{{selectListId.length}}</b> selected
                         </p>
                         <el-button type="primary"  @click="submitAttachButton" icon="add" > Attach</el-button>

                     </div>



                     <el-checkbox-group v-model="selectListId">




                              <table class="table">
                                 <thead>
                                       <tr>
                                             <th>Actions</th>  <th>
                                                              <span v-show="!larastrapEditionMode">Currency_id</span>
                                                              <a href="/admin/devis/2/tables/55/fields/344/edit" v-show="larastrapEditionMode">Currency_id</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Currency_code</span>
                                                              <a href="/admin/devis/2/tables/55/fields/345/edit" v-show="larastrapEditionMode">Currency_code</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Currency_name</span>
                                                              <a href="/admin/devis/2/tables/55/fields/346/edit" v-show="larastrapEditionMode">Currency_name</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Currency_symbol</span>
                                                              <a href="/admin/devis/2/tables/55/fields/347/edit" v-show="larastrapEditionMode">Currency_symbol</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Price_precision</span>
                                                              <a href="/admin/devis/2/tables/55/fields/348/edit" v-show="larastrapEditionMode">Price_precision</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Currency_format</span>
                                                              <a href="/admin/devis/2/tables/55/fields/349/edit" v-show="larastrapEditionMode">Currency_format</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Is_base_currency</span>
                                                              <a href="/admin/devis/2/tables/55/fields/350/edit" v-show="larastrapEditionMode">Is_base_currency</a>
                                                            </th>

                                       </tr>
                               </thead>

                                    <transition-group name="list" tag="tbody">
                                      <tr  v-for="object in filterdDataList" :key="object">
                                        <td>
                                            <el-button @click="edit(object)" icon="edit" size="mini" v-show="!chooseMode"></el-button>
                                            <el-button @click="show(object)" size="mini" v-show="!chooseMode"><i class="el-icon-caret-right"></i></el-button>
                                            <el-button @click="clickDelete(object)" icon="delete" size="mini" v-show="!chooseMode && !from" ></el-button>
                                            


                                            &nbsp;&nbsp;&nbsp;
                                            <el-checkbox :label="object.id" ></el-checkbox>
                                        </td>
                                    <td>		 {{object.currency_id }} 
</a></td><td>		 {{object.currency_code }} 
</a></td><td>		 {{object.currency_name}} 
</a></td><td>		 {{object.currency_symbol}} 
</a></td><td>		 {{object.price_precision }} 
</a></td><td>		 {{object.currency_format}} 
</a></td><td>		 <i :class="{'el-icon-circle-check' : object.is_base_currency, 'el-icon-circle-cross' : !object.is_base_currency, }" ></i> 
</a></td>
                                    </tr>

                               </transition-group>
                             </table>
                             </el-checkbox-group>

                            <!--<div>
                             <nav>
                               <ul class="pagination hidden">

                                  <li v-for="pageNumber in  totalPages">
                                   <a href="#" @click="setPage(pageNumber)" v-class="current: currentPage === pageNumber">{{ pageNumber+1 }}</a>
                                 </li>

                               </ul>
                             </nav>
                             </div>-->

                 </div>



                        <el-dialog title="Add new currencies" v-model="showmodal" size="large">
                            <currency-form force-mode="create" :value="strangerValue"></currency-form>
                          <span slot="footer" class="dialog-footer">
                            <el-button @click="showmodal = false">Cancel</el-button>
                            <!-- <el-button type="primary" @click="showmodal = false">Confirm</el-button> -->
                          </span>
                        </el-dialog>

                        





                    </section>
                </template>


                <script>
                import Vue from 'vue'
                window.Event=new Vue()

                	import currencyForm from '../Currency/form.vue'


                    export default {
                        name: 'currency-list',
                    		components: {
                                				currencyForm, 


                    		},

                    		props :{
                    			url:{
                    				required: false,
                    				type:String,
                                },
                    			from:{ //from table (name)
                    				required: false,
                    				type:String,
                          },

                          fromId:{
                    				required: false,
                    				type:Number,
                                },
                                


                            },
                            watch : {
                              exceptList : function (val) {
                                var vm = this
                                this.selectListId = val.map(x => x.id)
                                this.loading=!vm.loading

                                vm.loading=!vm.loading
                              }

                            },


                            mounted () {



                                    this.fetchData()

                                    var vm = this
                                    Event.$on('createdCurrency', function (createdObject) {
                                      console.log('New record has been fired')

                                      vm.showmodal = false
                                      vm.dataList.push(createdObject)

                                      console.log('created object -> ', createdObject);
                                      console.log('created object.id -> ', createdObject.id);
                                    })


                                    Event.$on('attached', function (fromtable) {
                                      console.log('attached has been fired')

                                      vm['showmodalAttach_'+fromtable] = false

                                      vm.refresh()
                                      // vm.exceptList=[]

                                    })

                                    Event.$on('detached', function (fromtable) {
                                      console.log('detached has been fired')

                                      vm.refresh()
                                      // vm.exceptList=[]

                                    })

                                    if(this.exceptList){
                                      this.selectListId = this.exceptList.map(x => x.currency_id)
                                    }









                                    this.refresh()



                            },

                            data(){
                                return {

                                    loading:false,
                                    showmodal:false,
                                    showmodalAttach:false,
                                    search:'',
                                    showFilters:false,
                                    // labelList:[],
                                    dataList:[],
                                    selectListId:[],

                                    currentPage: 0,
                                    itemsPerPage: 50,
                                    resultCount: 0,

                                    


                                };
                            },

                            filters:{
                                count: function (arr) {
                                  this.$set('total', arr.length)
                                  console.log(arr.length);
                                  return arr
                                },
                                paginate: function(list) {
                                      this.resultCount = list.length
                                      if (this.totalPages &&(this.currentPage >= this.totalPages)) {
                                          console.log(this.currentPage , this.totalPages);
                                          this.currentPage = this.totalPages - 1
                                      }
                                      var index = this.currentPage * this.itemsPerPage
                                      return list.slice(index, index + this.itemsPerPage)
                                  },

                            },

                            methods: {
                                setPage: function(pageNumber) {
                                  this.currentPage = pageNumber
                                },





                                clickAdd (){
                                        // if(this.$route.params.id){
                                            this.showmodal=!this.showmodal
                                        // }else{
                                        //     this.$router.push('/currency/create')
                                        // }
                                },

                                // clickAttach (){
                                //         if(this.$route.params.id){
                                //             this.showmodalAttach=!this.showmodalAttach
                                //         }else{
                                //             this.$router.push('/currency/create')
                                //         }
                                // },



                                




                                clickSearch () {
                                    this.showFilters=!this.showFilters

                                },

                                refresh () {
                                    this.fetchData()


                                },

                                clickDeleteSelectList () {


                                  this.$confirm('This will permanently delete theses records. Continue?', 'Warning', {
                                    confirmButtonText: 'OK',
                                    cancelButtonText: 'Cancel',
                                    type: 'warning'
                                  }).then(() => {
                                      this.deleteMany()

                                  }).catch(() => {
                                    this.$message({
                                      type: 'info',
                                      message: 'Delete canceled'
                                    });
                                  });








                                },

                                clickDelete (object){

                                    this.$confirm('This will permanently delete the record. Continue?', 'Warning', {
                                      confirmButtonText: 'OK',
                                      cancelButtonText: 'Cancel',
                                      type: 'warning'
                                    }).then(() => {
                                        this.delete(object)

                                    }).catch(() => {
                                      this.$message({
                                        type: 'info',
                                        message: 'Delete canceled'
                                      });
                                    });






                                },
                                


                                delete (object){
                                    var vm=this
                                    axios.delete('/api/Arthes/currency/'+ object.currency_id).then(response=>{

                                      var index = vm.dataList.indexOf(object)
                                      vm.dataList.splice(index,1)

                                      this.$message({
                                        type: 'success',
                                        message: 'Successfully deleted'
                                      });



                                    })


                                },

                                deleteMany (){
                                    var vm=this
                                    axios.post('/api/Arthes/currency/delete_many',this.selectListId).then(response=>{

                                      this.dataList = this.filterdDataList.filter(object=> this.selectListId.indexOf(object.currency_id)<0) //!this.selectListId.indexOf(object.id)<0
                                      this.selectListId=[]
                                      this.$message({
                                        type: 'success',
                                        message: 'Successfully deleted'
                                      });


                                    })


                                },



                                edit (object){
                                    window.location.replace('/Arthes/Admin/currency/'+object.currency_id+'/edit');
                                },

                                show (object){
                                    window.location.replace('/Arthes/Admin/currency/'+object.currency_id);
                                },

                                fetchData () {
                                    console.log('loaging : '+this.loading)
                                    this.loading=true


                                    console.log('loaging :' +this.loading)
                                    var vm=this
                                    axios.get(this.fetchUrl).then(function (response) {
                                              vm.dataList = response.data.data

                                              vm.loading=!vm.loading
                                              console.log(vm.loading)

                                          }, function (response) {
                                              // error callback
                                          });
                                },




                          },
                          computed:{

                              filterdDataList () {
                                  var self = this
                                    return self.dataList.filter(function (item) {

                                        let is =[]
                                        Object.keys(item).forEach((key)=>{
                                            if (typeof(item[key]) == 'object') {
                                                Object.keys(item[key]).forEach((key2)=>{
                                                    if (typeof item[key][key2] == 'string') {
                                                        let contains2 = item[key][key2].indexOf(self.search) !== -1
                                                        is.push(contains2)
                                                    }
                                                })
                                            }
                                            else if (typeof(item[key]) == 'string') {
                                                let contains = item[key].indexOf(self.search) !== -1
                                                is.push(contains)
                                            }
                                            else if (typeof(item[key]) == 'number') {
                                                let contains = item[key].toString().indexOf(self.search) !== -1
                                                is.push(contains)
                                            }

                                        })
                                        return is.indexOf(true) !== -1

                                    })

                              },

                              selectListIdObject () {
                                this.selectList.map(elem=>{elem=currency_id})
                              },



                              labelList (){
                                  var keys = [];
                                  for(var k in this.dataList[0]) keys.push(k);
                                  return keys;
                              },

                              totalPages: function() {
                                  return Math.ceil(this.resultCount / this.itemsPerPage)
                              },

                              fetchUrl (){
                                  if(this.url){
                                      return this.url
                                  }
                                  return '/api/Arthes/currency'
                              },

                              strangerValue (){
                                return ''
                                // return this.$route.params.id
                              },

                              larastrapEditionMode () {
                                return larastrapEditionMode
                              },


                          }

                    }


                </script>



        

