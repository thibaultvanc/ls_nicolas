
    <style>

    </style>
    

            <template>
            <section>


            <div class="well">
                <h2>{{ $t('Picaflor.Permission.index') }}</h2>
            </div>



            <!--<pre>
            except-list{{exceptList}}
            </pre>
            <pre>
            selectListId{{selectListId}}
            </pre>---

            <!-- <h1>Permission  List</h1>-->
            <!--<pre>chooseMode : {{chooseMode}}</pre>
            <pre>exceptList : {{exceptList}}</pre>-->

            <div v-show="larastrapEditionMode">
            <a href="/admin/devis/5/tables/9/fields/create" class="btn ">{{ $t('larastrap.manageTable') }}</a>
            </div>

             <div v-if="loading">
                 <el-button type="primary" :loading="true">{{ $t('core.loading') }} ...</el-button>

             </div>

             <div v-else>
                <div class="pull-left">

                <el-dropdown v-if="!selectListId.length">
                 <span class="el-dropdown-link">
                   {{itemsPerPage}} {{ $t('core.perPage') }}<i class="el-icon-caret-bottom el-icon--right"></i>
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
                        <input type="text" v-model="search" class="form-control" :placeholder="$t('core.search')+'...'">
                    </div>

                    <el-button type="primary" @click="refresh" v-if="!selectListId.length">{{ $t('core.refresh') }}</el-button>


                    <!--
                      ** Information   ** // add this tag to show execpt when if the componnent is loaded from another componnent
                      v-if="! !!fromId"
                    -->
                    <span ><el-button type="primary" @click="clickAdd" icon="plus" v-if="!selectListId.length">{{ $t('core.add') }}</el-button></span>
                    

                                      <span v-if="!!fromId && from=='role'">
                                      <el-button type="primary" icon="plus" @click="clickAttach_permissions" v-if="!selectListId.length" >{{ $t('core.attach') }}  BTM</el-button>
                                      </span>


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
                     <h2>{{ $t('core.actions') }}</h2>
                     <p>
                        <b>{{selectListId.length}}</b> {{ $t('core.selected') }}
                     </p>

                     <el-button @click="clickDeleteSelectList" icon="delete" size="mini" ></el-button>

                 </div>

                 <div class="well" v-if="selectListId.length && chooseMode">

                     <p>
                        <b>{{selectListId.length}}</b> {{ $t('core.selected') }}
                     </p>
                     <el-button type="primary"  @click="submitAttachButton" icon="add" > {{ $t('core.attach') }}</el-button>

                 </div>



                 <el-checkbox-group v-model="selectListId">




                          <table class="table">
                             <thead>
                                   <tr>
                                         <th>{{ $t('core.actions') }}</th>  <th>
                                                          <span v-show="!larastrapEditionMode">Id</span>
                                                          <a href="/admin/devis/5/tables/9/fields/35/edit" v-show="larastrapEditionMode">
                                                          {{ $t('Picaflor.Permission.fields.id.label') }}
                                                          </a>
                                                        </th>
 <th>
                                                          <span v-show="!larastrapEditionMode">Name</span>
                                                          <a href="/admin/devis/5/tables/9/fields/36/edit" v-show="larastrapEditionMode">
                                                          {{ $t('Picaflor.Permission.fields.name.label') }}
                                                          </a>
                                                        </th>
 <th>
                                                          <span v-show="!larastrapEditionMode">Label</span>
                                                          <a href="/admin/devis/5/tables/9/fields/37/edit" v-show="larastrapEditionMode">
                                                          {{ $t('Picaflor.Permission.fields.label.label') }}
                                                          </a>
                                                        </th>

                                   </tr>
                           </thead>

                                <transition-group name="list" tag="tbody">
                                  <tr  v-for="object in filterdDataList" :key="object">
                                    <td>
                                        <el-button @click="edit(object)" icon="edit" size="mini" v-show="!chooseMode"></el-button>
                                        <el-button @click="show(object)" size="mini" v-show="!chooseMode"><i class="el-icon-caret-right"></i></el-button>
                                        <el-button @click="clickDelete(object)" icon="delete" size="mini" v-show="!chooseMode && !from" ></el-button>
                                        <el-button @click="clickDetach_Role(object)" icon="delete" size="mini"
                                                    v-show="!chooseMode && from && from=='role'" >{{ $t('core.detach') }} fromRole</el-button>


                                        &nbsp;&nbsp;&nbsp;
                                        <el-checkbox :label="object.id" ></el-checkbox>
                                    </td>
                                <td>		 {{object.id }} 
</a></td><td><a href="#" @click="edit(object)">		 {{object.name}} 
</a></td><td>		 {{object.label}} 
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



                    <el-dialog title="Add new permissions" v-model="showmodal" size="large">
                        <permission-form force-mode="create" :value="strangerValue"></permission-form>
                      <span slot="footer" class="dialog-footer">
                        <el-button @click="showmodal = false">{{ $t('core.cancel') }}</el-button>

                      </span>
                    </el-dialog>

                    
                            <el-dialog title="Attach Existing permissions" v-model="showmodalAttach_permissions" size="large">

                            <permission-list choose-mode :except-list.sync="dataList" :from="from" :from-id="fromId">
                              </permission-list>

                              <span slot="footer" class="dialog-footer">
                                <el-button @click="closemodalAttach_permissions">{{ $t('core.cancel') }}</el-button>
                                <!--<el-button type="primary" @click="showmodalAttach_permissions = false, showmodal = true">{{ $t('core.createNew') }} permissions</el-button>-->
                              </span>
                            </el-dialog>





                </section>
            </template>

            


                <script>
                import Vue from 'vue'
                window.Event=new Vue()

                	import permissionForm from '../form/basic.vue'
	import permissionList from './basic.vue'


                    export default {
                        name: 'permission-list',
                        components: {
                                				permissionForm, 
				permissionList, 


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
                                role:{
                              required:false,
                              type:Number
                            },


                                  chooseMode : {
                                    required:false,
                                    type:Boolean,
                                    default:false
                                  },
                                  exceptList : {
                                    required:false,
                                    type:Array
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
                                    Event.$on('createdPermission', function (createdObject) {
                                      console.log('New record has been fired')


                                      if (! vm.from) {
                                        vm.dataList.push(createdObject)
                                      }
                                        vm.showmodal = false

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
                                      this.selectListId = this.exceptList.map(x => x.id)
                                    }



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

                                    showmodalAttach_permissions:false


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
                                        //     this.$router.push('/permission/create')
                                        // }
                                },

                                // clickAttach (){
                                //         if(this.$route.params.id){
                                //             this.showmodalAttach=!this.showmodalAttach
                                //         }else{
                                //             this.$router.push('/permission/create')
                                //         }
                                // },



                                

                                    closemodalAttach_permissions (){
                                      this.fetchData(permissions)
                                      this.showmodalAttach_devis = false

                                    },

                                    clickAttach_permissions (){
                                            // if(this.$route.params.id){
                                                this.showmodalAttach_permissions=!this.showmodalAttach_permissions
                                            // }else{
                                                // this.$router.push('/permission/create')
                                            // }
                                    },

                                  submitAttachButton () {

                                    axios.post('/api/Picaflor/'+this.from+'/'+this.fromId+'/attach_permissions', this.selectListId).then(reponse=>{
                                      console.log('submitAttachButton')


                                      Event.$emit('attached', 'permissions')

                                    })

                                  },
                                  




                                clickSearch () {
                                    this.showFilters=!this.showFilters

                                },

                                refresh () {
                                    this.fetchData()


                                },

                                clickDeleteSelectList () {


                                  this.$confirm(this.$t('core.sureToDelete'), 'Warning', {
                                    confirmButtonText: this.$t('core.ok'),
                                    cancelButtonText: this.$t('core.cancel'),
                                    type: 'warning'
                                  }).then(() => {
                                      this.deleteMany()

                                  }).catch(() => {
                                    this.$message({
                                      type: 'info',
                                      message: this.$t('core.deleteCanceled')
                                    });
                                  });








                                },

                                clickDelete (object){

                                    this.$confirm('This will permanently delete the record. Continue?', 'Warning', {
                                      confirmButtonText: this.$t('core.ok'),
                                      cancelButtonText: this.$t('core.cancel'),
                                      type: 'warning'
                                    }).then(() => {
                                        this.delete(object)

                                    }).catch(() => {
                                      this.$message({
                                        type: 'info',
                                        message: this.$t('core.deleteCanceled')
                                      });
                                    });






                                },
                                
                                  clickDetach_Role (item) {




                                    this.$confirm('This will remove the permission in this '+this.from+'. Continue?', 'Warning', {
                                      confirmButtonText: this.$t('core.ok'),
                                      cancelButtonText: this.$t('core.cancel'),
                                      type: 'warning'
                                    }).then(() => {
                                      console.log('to detach', item)
                                      this.detach_Role (item)


                                    }).catch(() => {
                                      this.$message({
                                        type: 'info',
                                        message: this.$t('core.canceled')
                                      });
                                    });


                                  },

                                  detach_Role  (item){
                                    // alert('detaching !')
                                    console.log('detaching !', item)
                                    var vm = this
                                    axios.post('/api/Picaflor/role/'+ this.fromId + '/detach_permission/' + item.id).then(response=>{
                                      //Route::post("devis/{devis}/detach_product/1", "Arthes\Web\DevisApiController@attach_products");
                                      // var index = vm.dataList.indexOf(object)
                                      // vm.dataList.splice(index,1)
                                      // vm.refresh()

                                      Event.$emit('detached', 'permissions')


                                      this.$message({
                                        type: 'success',
                                        message: this.$t('core.successfullyRemoved')
                                      });



                                    })



                                  },

                                    


                                delete (object){
                                    var vm=this
                                    axios.delete('/api/Picaflor/permission/'+ object.id).then(response=>{

                                      var index = vm.dataList.indexOf(object)
                                      vm.dataList.splice(index,1)

                                      this.$message({
                                        type: 'success',
                                        message: this.$t('core.successfullyDeleted')
                                      });



                                    })


                                },

                                deleteMany (){
                                    var vm=this
                                    axios.post('/api/Picaflor/permission/delete_many',this.selectListId).then(response=>{

                                      this.dataList = this.filterdDataList.filter(object=> this.selectListId.indexOf(object.id)<0) //!this.selectListId.indexOf(object.id)<0
                                      this.selectListId=[]
                                      this.$message({
                                        type: 'success',
                                        message: this.$t('core.successfullyDeleted')
                                      });


                                    })


                                },



                                edit (object){
                                    window.location.replace('/Picaflor/Admin/permission/'+object.id+'/edit');
                                },

                                show (object){
                                    window.location.replace('/Picaflor/Admin/permission/'+object.id);
                                },

                                fetchData () {
                                    console.log('loaging : '+this.loading)
                                    this.loading=true
                                    var vm=this
                                    axios.get(this.fetchUrl).then(function (response) {
                                              vm.dataList = response.data.data
                                              vm.loading=!vm.loading
                                              // console.log(vm.loading)

                                          }, function (response) {
                                              // error callback
                                          });
                                },




                          },
                          computed:{

                              filterdDataList () {
                                  var self = this
                                  let search = this.search.toLowerCase().trim()
                                    return self.dataList.filter(function (item) {

                                        let is =[]
                                        Object.keys(item).forEach((key)=>{
                                            if (typeof(item[key]) == 'object' && item[key]) {
                                                Object.keys(item[key]).forEach((key2)=>{
                                                    if (typeof item[key][key2] == 'string') {
                                                        let val = item[key][key2].toLowerCase().trim()
                                                        let contains2 = val.indexOf(search) !== -1
                                                        is.push(contains2)
                                                    }
                                                })
                                            }
                                            else if (typeof(item[key]) == 'string' && item[key]) {
                                                let contains = item[key].indexOf(self.search) !== -1
                                                is.push(contains)
                                            }
                                            else if (typeof(item[key]) == 'number' && item[key]) {
                                                let contains = item[key].toString().indexOf(self.search) !== -1
                                                is.push(contains)
                                            }

                                        })
                                        return is.indexOf(true) !== -1

                                    })

                              },

                              selectListIdObject () {
                                this.selectList.map(elem=>{elem=id})
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
                                  return '/api/Picaflor/permission'
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



        