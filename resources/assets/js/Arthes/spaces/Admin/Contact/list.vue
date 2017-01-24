



                <template>

                <section>









                <!--<pre>
                except-list{{exceptList}}
                </pre>
                <pre>
                selectListId{{selectListId}}
                </pre>---
                <div v-show="larastrapEditionMode">
                  <a href="/admin/devis/2/tables/54/fields/create" class="btn ">Add columns</a>
                </div>

                <!-- <h1>Contact  List</h1>-->
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
                                                              <span v-show="!larastrapEditionMode">Contact_id</span>
                                                              <a href="/admin/devis/2/tables/54/fields/322/edit" v-show="larastrapEditionMode">Contact_id</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Contact_name</span>
                                                              <a href="/admin/devis/2/tables/54/fields/323/edit" v-show="larastrapEditionMode">Contact_name</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Company_name</span>
                                                              <a href="/admin/devis/2/tables/54/fields/324/edit" v-show="larastrapEditionMode">Company_name</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Contact_type</span>
                                                              <a href="/admin/devis/2/tables/54/fields/325/edit" v-show="larastrapEditionMode">Contact_type</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Status</span>
                                                              <a href="/admin/devis/2/tables/54/fields/326/edit" v-show="larastrapEditionMode">Status</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Source</span>
                                                              <a href="/admin/devis/2/tables/54/fields/327/edit" v-show="larastrapEditionMode">Source</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Is_linked_with_zohocrm</span>
                                                              <a href="/admin/devis/2/tables/54/fields/328/edit" v-show="larastrapEditionMode">Is_linked_with_zohocrm</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Payment_terms</span>
                                                              <a href="/admin/devis/2/tables/54/fields/329/edit" v-show="larastrapEditionMode">Payment_terms</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Payment_terms_label</span>
                                                              <a href="/admin/devis/2/tables/54/fields/330/edit" v-show="larastrapEditionMode">Payment_terms_label</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Currency_id</span>
                                                              <a href="/admin/devis/2/tables/54/fields/331/edit" v-show="larastrapEditionMode">Currency_id</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Currency_code</span>
                                                              <a href="/admin/devis/2/tables/54/fields/332/edit" v-show="larastrapEditionMode">Currency_code</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Outstanding_receivable_amount</span>
                                                              <a href="/admin/devis/2/tables/54/fields/333/edit" v-show="larastrapEditionMode">Outstanding_receivable_amount</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Outstanding_payable_amount</span>
                                                              <a href="/admin/devis/2/tables/54/fields/334/edit" v-show="larastrapEditionMode">Outstanding_payable_amount</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Unused_credits_receivable_amount</span>
                                                              <a href="/admin/devis/2/tables/54/fields/335/edit" v-show="larastrapEditionMode">Unused_credits_receivable_amount</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Unused_credits_payable_amount</span>
                                                              <a href="/admin/devis/2/tables/54/fields/336/edit" v-show="larastrapEditionMode">Unused_credits_payable_amount</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">First_name</span>
                                                              <a href="/admin/devis/2/tables/54/fields/337/edit" v-show="larastrapEditionMode">First_name</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Last_name</span>
                                                              <a href="/admin/devis/2/tables/54/fields/338/edit" v-show="larastrapEditionMode">Last_name</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Email</span>
                                                              <a href="/admin/devis/2/tables/54/fields/339/edit" v-show="larastrapEditionMode">Email</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Phone</span>
                                                              <a href="/admin/devis/2/tables/54/fields/340/edit" v-show="larastrapEditionMode">Phone</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Mobile</span>
                                                              <a href="/admin/devis/2/tables/54/fields/341/edit" v-show="larastrapEditionMode">Mobile</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Created_time</span>
                                                              <a href="/admin/devis/2/tables/54/fields/342/edit" v-show="larastrapEditionMode">Created_time</a>
                                                            </th>
 <th>
                                                              <span v-show="!larastrapEditionMode">Last_modified_time</span>
                                                              <a href="/admin/devis/2/tables/54/fields/343/edit" v-show="larastrapEditionMode">Last_modified_time</a>
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
                                    <td>		 {{object.contact_id }} 
</a></td><td>		 {{object.contact_name}} 
</a></td><td>		 {{object.company_name}} 
</a></td><td>		 {{object.contact_type}} 
</a></td><td>		 {{object.status}} 
</a></td><td>		 {{object.source}} 
</a></td><td>		 <i :class="{'el-icon-circle-check' : object.is_linked_with_zohocrm, 'el-icon-circle-cross' : !object.is_linked_with_zohocrm, }" ></i> 
</a></td><td>		 {{object.payment_terms }} 
</a></td><td>		 {{object.payment_terms_label}} 
</a></td><td>		 {{object.currency_id }} 
</a></td><td>		 {{object.currency_code}} 
</a></td><td>		 {{object.outstanding_receivable_amount }} 
</a></td><td>		 {{object.outstanding_payable_amount }} 
</a></td><td>		 {{object.unused_credits_receivable_amount }} 
</a></td><td>		 {{object.unused_credits_payable_amount }} 
</a></td><td>		 {{object.first_name}} 
</a></td><td>		 {{object.last_name}} 
</a></td><td>		 {{object.email}} 
</a></td><td>		 {{object.phone}} 
</a></td><td>		 {{object.mobile }} 
</a></td><td>		 {{object.created_time}} 
</a></td><td>		 {{object.last_modified_time}} 
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



                        <el-dialog title="Add new contacts" v-model="showmodal" size="large">
                            <contact-form force-mode="create" :value="strangerValue"></contact-form>
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

                	import contactForm from '../Contact/form.vue'


                    export default {
                        name: 'contact-list',
                    		components: {
                                				contactForm, 


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
                                    Event.$on('createdContact', function (createdObject) {
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
                                      this.selectListId = this.exceptList.map(x => x.contact_id)
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
                                        //     this.$router.push('/contact/create')
                                        // }
                                },

                                // clickAttach (){
                                //         if(this.$route.params.id){
                                //             this.showmodalAttach=!this.showmodalAttach
                                //         }else{
                                //             this.$router.push('/contact/create')
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
                                    axios.delete('/api/Arthes/contact/'+ object.contact_id).then(response=>{

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
                                    axios.post('/api/Arthes/contact/delete_many',this.selectListId).then(response=>{

                                      this.dataList = this.filterdDataList.filter(object=> this.selectListId.indexOf(object.contact_id)<0) //!this.selectListId.indexOf(object.id)<0
                                      this.selectListId=[]
                                      this.$message({
                                        type: 'success',
                                        message: 'Successfully deleted'
                                      });


                                    })


                                },



                                edit (object){
                                    window.location.replace('/Arthes/Admin/contact/'+object.contact_id+'/edit');
                                },

                                show (object){
                                    window.location.replace('/Arthes/Admin/contact/'+object.contact_id);
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
                                this.selectList.map(elem=>{elem=contact_id})
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
                                  return '/api/Arthes/contact'
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



        

