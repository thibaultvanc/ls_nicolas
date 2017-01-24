<style>
  /* always present */
  .expand-transition {
    transition: all 1s ease;
    overflow: hidden;
  }


  .expand-enter, .expand-leave {
    height: 0;
    opacity: 0;
  }

</style>

 
<template><!--id="crud-template"-->
<center>
  <h1 v-show="displayFieldForm">{{newFieldValue.surname}} <b>{{newFieldValue.name}}</b></h1>
  <h1 v-show="!displayFieldForm">User List</h1>
</center>

  <div class="alert alert-{{alert.type}}" v-show="alert.show">
        {{alert.content}}
  </div>

<center>
        <i class="fa fa-spin fa-spinner fa-4x" v-show="mainLoader"></i>
</center>
        
        <a class=" pull-right btn btn-success btn-sm" v-show="!displayFieldForm"><i class="fa fa-excel"></i> Export excel</a>


        <button v-show="showCreateFieldButton" @click="showCreateFieldForm" class=" pull-right btn btn-primary btn-sm">
          <i class="{{addFieldButtonIcon}}"></i> {{addFieldButtonText}}
        </button>

        <button v-show="showEditFieldButton" @click="cancelEdit" class=" pull-right btn btn-success btn-sm">
          <i class="{{createFieldButtonIcon}}"></i> {{editFieldButtonText}}
        </button>

        <i class="fa fa-spin fa-spinner fa-2x" v-show="showAddLoader"></i>





        <div v-show="newFieldValue.id || showEditRoleAction">
                  <h2>Roles</h2>
          
                  <p  v-show="!showEditRoleAction">
                    <span v-for="user_role in newFieldValue.roles">{{user_role.name}}, </span>
                  </p>
                   
                   <button @click="showEditRoleAction=!showEditRoleAction" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Roles for {{newFieldValue.surname}} {{newFieldValue.name}}</button>
                  
                  <table class="table" v-show="showEditRoleAction">
                    <tr v-for="user_role in newFieldValue.roles">
                       <td><i class="fa fa-check text-primary"></i> {{user_role.name}}</td>
                      <td>
                         <a class="pull-right" @click="removeRole(newFieldValue, user_role)"><i class="fa fa-times"></i> Remove</a>
                      </td>
                   </tr>
                  </table>
          
                   <div v-show="showEditRoleAction">

                      <table class="table table-striped" >
                        <tr v-for="role in roleList | available newFieldValue.roles" >
                            <td><i class="fa fa-times text-default"></i> {{role.name}}</td>
                            <td><a class="btn btn-primary btn-sm pull-right " @click="assignRole(newFieldValue, role)">Add <b>{{role.name}}</b> Role</a></td>
                        </tr>
                      </table>
                    </div>
          
                  <hr>
        </div>
    

        <div class="bg-warning" v-show="displayFieldForm" transition="expand">
        
        <hr>



        
  



      <form class="form-horizontal" @submit.prevent="prevent()" >

 
                <div class="form-group"  v-if="mode=='update' ">
                    <div> 
                                 <label class="col-sm-3 control-label">id</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="id"   v-model="newFieldValue.id" readonly>
                                 </div>
                    </div>
                    
                </div>  

 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">surname</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="surname"   v-model="newFieldValue.surname" >
                                 </div>
                    </div>
                    
                </div>  


 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">name</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="name"   v-model="newFieldValue.name" >
                                 </div>
                    </div>
                    
                </div>  


 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">birthdate</label>
                                 <div class="col-sm-6">
                                     <input type="date" class="form-control"  name="birthdate"   v-model="newFieldValue.birthdate" >
                                 </div>
                    </div>
                    
                </div>  



 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">email</label>
                                 <div class="col-sm-6">
                                     <input type="email" class="form-control"  name="email"   v-model="newFieldValue.email" >
                                 </div>
                    </div>
                    
                </div>  


 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">address</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="address"   v-model="newFieldValue.address" >
                                 </div>
                    </div>
                    
                </div>  


 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">zip</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="zip"   v-model="newFieldValue.zip" >
                                 </div>
                    </div>
                    
                </div>  



 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">city</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="city"   v-model="newFieldValue.city" >
                                 </div>
                    </div>
                    
                </div>  



 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">city</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="city"   v-model="newFieldValue.city" >
                                 </div>
                    </div>
                    
                </div>  


 
                <div class="form-group">
                    <div> 
                                 <label class="col-sm-3 control-label">country</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control"  name="country"   v-model="newFieldValue.country" >
                                 </div>
                    </div>
                    
                </div>  

 


                <div class="form-group">
                  <div> 
                   <label class="col-sm-3 control-label">mail_provider</label>
                   <div class="col-sm-6">
                     <select v-model="newFieldValue.mail_provider" class="form-control">
                         <option v-for="provider in providerList | provider 'mail'"  v-bind:value="provider.id"  :selected="newFieldValue.mail_provider==provider.id" >{{provider.name}} </option>
                    </select>
                  </div>
                </div>

              </div>  



                <div class="form-group">
                  <div> 
                   <label class="col-sm-3 control-label">contact_provider</label>
                   <div class="col-sm-6">
                     <select v-model="newFieldValue.contact_provider" class="form-control">
                         <option v-for="provider in providerList | provider 'contact'"  v-bind:value="provider.id"  :selected="newFieldValue.contact_provider==provider.id" >{{provider.name}} </option>
                    </select>
                  </div>
                </div>

              </div>  



                <div class="form-group">
                  <div> 
                   <label class="col-sm-3 control-label">task_provider</label>
                   <div class="col-sm-6">
                     <select v-model="newFieldValue.task_provider" class="form-control">
                         <option v-for="provider in providerList | provider 'task'"  v-bind:value="provider.id"  :selected="newFieldValue.task_provider==provider.id" >{{provider.name}} </option>
                    </select>
                  </div>
                </div>

              </div>  



                <div class="form-group">
                  <div> 
                   <label class="col-sm-3 control-label">event</label>
                   <div class="col-sm-6">
                     <select v-model="newFieldValue.event_provider" class="form-control">
                         <option v-for="provider in providerList | provider 'calendar'"  v-bind:value="provider.id"  :selected="newFieldValue.event_provider==provider.id" >{{provider.name}} </option>
                    </select>
                  </div>
                </div>

              </div>  



              <input type="text" class="form-control"  name="client_id"  v-model="newFieldValue.client_id">



              <button class="btn btn-default " @click.stop.prevent="cancelEdit">Annuler</button>
              <button v-show="showCreateFieldButton" class="btn btn-primary " @click.stop.prevent="addField">{{{addFieldSubmitButtonText}}} 
                <i class="fa fa-spin fa-spinner" v-show="showAddLoader"></i>
              </button>
              <button v-show="showEditFieldButton" class="btn btn-primary " @click.stop.prevent="editField">{{{editFieldSubmitButtonText}}} 
                <i class="fa fa-spin fa-spinner" v-show="showAddLoader"></i>
              </button>

              <button class="pull-right btn btn-danger btn-sm" @click="removeField(newFieldValue).stop.prevent"><i class="fa fa-times"></i></button>
           </form>
        </div>






        <br>
     
       
       <table class="table table-striped" v-show="! displayFieldForm">
          
           <tr v-for="field in fieldList" track-by="$index"  transition="expand" style="cursor:pointer" @click="showEditFieldForm(field)">
               <td><span style="margin-right:15px">{{field.email}}</span></td>
               <td>
                 
                 <button class="pull-right btn btn-primary btn-sm" @click="showEditFieldForm(field)"><i class="fa fa-edit"></i></button>
               </td>
             
           </tr>
       </table>
</template>

<script>


  export default {
              
              props :{
                    route_list:{
                      required: true,
                      type:String
                    },
                    route_action:{
                      required: true,
                      type:String
                    },  
                    delete_action:{
                      required: false,
                      type:String
                    }, 
                    idLabel:{
                      required: false,
                      default:'id',
                      type:String
                    },
                    client_id:{
                      required:true,
                      type:String
                    }

                    
                  },

              data(){
                  return {
                      newFieldValue:{}, 
                      
                      mode:'',

                      providerList:[],

                      mainLoader:true,

                      showEditRoleAction:false,
                      showCreateFieldButton:true,
                      addFieldButtonIconClose:'fa fa-minus',
                      addFieldButtonIconOpen:'fa fa-plus',
                      addFieldButtonText:'Ajouter',
                      addFieldSubmitButtonText:'Créer maintenant',
                      showAddLoader:false,


                      showEditFieldButton: false,    
                      editFieldButtonIconClose:'fa fa-minus',
                      editFieldButtonIconOpen:'fa fa-plus',
                      editFieldButtonText:'Editer',
                      editFieldSubmitButtonText:'Mettre à jour',

                      editFieldSubmitButtonTextCache:'',
                     
                      loader:'<i class="fa fa-spin fa-spinner"></i>',
                      displayFieldForm :false,

                      fieldList:[], 
                      roleList:[],
                      alert : {show:false,type:'',content:'' },

                     
                      

                  };
              },

              filters:{
                  provider: function(providerList, type){
                    return providerList.filter(function(provider){
                       return provider['is_'+type+'_manager']
                    });
                  },




                
                  available: function(roles, user_roles){
                    console.log(roles)
                    return roles.filter(function(role){

                      if (this.newFieldValue) {
                        user_roles  = this.newFieldValue.roles
                      }
                       var user_roles_list = []
                      //console.log('Role ='+role.id + ' ( '+role.name+')')
                      for (index in user_roles){
                        user_roles_list.push(parseInt(user_roles[index].id))
                      }
                        console.log (user_roles_list)
                        //console.log ( user_roles_list.indexOf(parseInt(role.id))<0)
                        return user_roles_list.indexOf(parseInt(role.id)) < 0

                    });
                  },



                

                  mode: function(fields, mode){

                    if (mode == 'create') {
                      return fields.filter(function(field){
                        return field.name!=this.idLabel && field.name!='created_at' && field.name!='updated_at'
                      });
                    }else if(mode=='update'){
                      return fields.filter(function(field){
                        return true
                      });
                    }
                  },


              },



              computed:{

                 addFieldButtonIcon: function () {
                     
                      if (this.displayFieldForm) {
                          return this.addFieldButtonIconClose
                      }
                      else{
                          return this.addFieldButtonIconOpen
                      }
                    },

                 createFieldButtonIcon: function () {
                     
                      if (this.displayFieldForm) {
                          return this.addFieldButtonIconClose
                      }
                      else{
                          return this.addFieldButtonIconOpen
                      }
                    }

            
              },

              ready(){

                  //console.log("fields", this.fields.data);
                  

                  this.$http.get(this.route_list).then(function (fields) {
                           this.fieldList = fields.data
                            this.mainLoader=false
                        }, function (response) {
                            // error callback
                        });

                  this.$http.get('/api/roles').then(function (roles) {
                           this.roleList = roles.data
                        }, function (response) {
                            // error callback
                        });


                  this.$http.get('/api/provider').then(function (provider) {
                           this.providerList = provider.data
                        }, function (response) {
                            // error callback
                        });

                    

              },

              methods: {

                  prevent : function(e){
                    console.log('prevent')
                      e.preventDefault;
                  },

                  removeField : function(field){

                    
                      var delete_action = this.route_action

                      if (this.delete_action) {
                        //alert('a special_route_ delete action is passed !')
                        delete_action = this.delete_action
                      }
                      

                      this.$http.delete(delete_action +field[this.idLabel]).then(function (response) {
                          
                          this.displayFieldForm=false
                          this.fieldList.$remove(field);
                          //this.displayFieldForm=false
                          this.alert = {show:true,type:'success',content:'deleted successfully' }
                      })



                  },

                  removeRole : function(user, role){

                    this.$http.post('/api/user/'+user.id+'/removeRole/'+role.id).then(function (response) {
                        
                        this.newFieldValue.roles.$remove(role);
                        this.alert = {show:true,type:'success',content:'role removed successfully' }
                    })
                  },


                  assignRole : function(user, role){
                    console.log(user)
                    console.log(role)
                        this.newFieldValue.roles.push(role);

                    this.$http.post('/api/user/'+user.id+'/assignRole/'+role.id).then(function (response) {
                        
                        console.log(response)


                        //this.newFieldValue.roles.push(role);
                        this.alert = {show:true,type:'success',content:'role added successfully' }
                    }.bind(this))
                  },

                  showCreateFieldForm:function(){
                      this.mode = 'create'
                      this.showEditRoleAction=false
                      this.displayFieldForm = ! this.displayFieldForm
                      if ( ! this.displayFieldForm) {
                          this.addFieldButtonIcon = 'fa fa-minus'
                      }
                      this.newFieldValue = '' 
                      
                  },

                  addField: function () {

                      var fields = this.newFieldValue
                      fields.client_id = this.client_id 
                      this.showAddLoader = true

                      this.$http.post(this.route_action ,fields ,function(response){
                        console.log(response)
                          //$.notify({ message: 'ajouté avec success'},{ type: 'success'});

                           //this.fieldList.push(response);
                           console.log(response.id)
                           this.newFieldValue.id = response.id 
                           this.showEditRoleAction= true  
                           this.newFieldValue.roles=[]                        //this.newFieldValue = '' 
                          //this.displayFieldForm = false
                          this.showAddLoader = false
                          this.alert = {show:true,type:'success',content:'created successfully' }
                      }.bind(this))
                  },

                  showEditFieldForm:function(field){


                      
                      this.mode = 'update'
                      this.showEditFieldButton = true
                      this.showCreateFieldButton = false
                      this.displayFieldForm=true

                      this.displayEditFieldForm = true
                      this.editFieldButtonText = 'edit'
                      this.showEditRoleAction=false

                      this.newFieldValue=field
                      this.newFieldValue.client_id = this.client_id 


                  },
             

                   cancelEdit:function(){
                      this.showEditFieldButton = false
                      this.showCreateFieldButton = true
                      this.displayFieldForm=false
                      //this.newFieldValue = '' 
                   },


                  editField : function(){

                    console.log(this.idLabel)
                    var id = this.idLabel
                    console.log(id)
                      console.log("editing", this.newFieldValue["'"+id+"'"])
                      console.log("newFieldValue[Id]", this.newFieldValue[id])
                     // console.log("--->", this.newFieldValue.this.idLabel)

                      this.editFieldSubmitButtonTextCache = this.editFieldSubmitButtonText
                      this.editFieldSubmitButtonText = this.loader

                      this.$http.put(this.route_action+this.newFieldValue[id] ,this.newFieldValue).then(function (response) {

                          console.log(response)
                          //this.fieldList.push(response);
                          //this.fieldList.$remove(this.newFieldValue);
                          
                          this.editFieldSubmitButtonText = this.editFieldSubmitButtonTextCache
                          this.newFieldValue = '' 
                          this.displayFieldForm = false
                          this.alert = {show:true,type:'success',content:'Updated successfully' }

                      })

                   }

              },
    
  }

</script>



<!--
                <div v-if="fielda.type=='fieldGroups' && mode=='update'" v-for="(key3, fielda3) in newFieldValue[fielda.name] ">
            <div v-for="(key2, fielda2) in fielda.fieldGroup" class="form-group">
            
              <label class="col-sm-3 control-label">{{fielda2.name}}</label>
              <div class="col-sm-6"> {{fielda3[fielda2.name]}}
                 <input  class="form-control"  name="{{fielda3.name}}"  v-model="newFieldValue[fielda.name][key3][fielda2.name]" placeholder="{{fielda3.placeholder}}">
              </div>
            </div>
                </div>  
                               
                <div v-if="fielda.type=='fieldGroups' && mode=='create'" >
            <div v-for="(key2, fielda2) in fielda.fieldGroup" class="form-group">
            
              <label class="col-sm-3 control-label">{{fielda2.name}}</label>
              <div class="col-sm-6"> {{fielda3[fielda2.name]}}
                 <input  class="form-control"  name="{{fielda3.name}}"  v-model="newFieldValue[fielda.name][0][fielda2.name]" placeholder="{{fielda3.placeholder}}">
              </div>
            </div>
                </div>  
  -->   