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

	<h1>{{title}}  ({{fieldList.length}})	</h1>

	<div class="alert alert-{{alert.type}}" v-show="alert.show">
        {{alert.content}}
    </div>

        
        <a class=" pull-right btn btn-success btn-sm" v-show="!displayFieldForm"><i class="fa fa-excel"></i> Export</a>


        <a @click="refresh" class=" pull-right btn btn-success btn-sm" v-show="!displayFieldForm"><i class="fa fa-refresh"></i> reload</a>


        <button v-show="showCreateFieldButton" @click="showCreateFieldForm" class=" pull-right btn btn-primary btn-sm"><i class="{{addFieldButtonIcon}}"></i> {{addFieldButtonText}}</button>

        <button v-show="showEditFieldButton" @click="cancelEdit" class=" pull-right btn btn-success btn-sm"><i class="{{createFieldButtonIcon}}"></i> {{editFieldButtonText}}</button>
		<i class="fa fa-spin fa-spinner fa-2x" v-show="showAddLoader"></i>
		

        <div class="bg-warning" v-show="displayFieldForm" transition="expand">
            liste des champs de la table : {{table}}" <br>
			<form class="form-horizontal" @submit.prevent="prevent()" >
	            <div v-for="(key, fielda) in fields | show | mode mode ">

	                -{{fielda.type}}-
	                -{{idLabel}}-

					<div class="form-group" v-if="fielda.type=='string'">
							<div v-if="fielda.name==idLabel "> 
						               <label class="col-sm-3 control-ltypabel">{{fielda.name}}</label>
						               <div class="col-sm-6">
						                   <input type="text" class="form-control"  name="{{fielda.name}}"  value="{{fielda.value}}"   v-model="newFieldValue[fielda.name]" readonly>
						               </div>
							</div>
							<div v-else>
										<label class="col-sm-3 control-label">{{fielda.name}}</label>
										<div class="col-sm-6">
										    <input type="text" class="form-control"  name="{{fielda.name}}"  value="{{fielda.value}}"   v-model="newFieldValue[fielda.name]">
										</div>		
							</div>
					</div>	
	                


	                <div class="form-group" v-if="fielda.type=='hidden'">
	                		<div v-if="fielda.name==idLabel "> 
	                	               <label class="col-sm-3 control-ltypabel">{{fielda.name}}</label>
	                	               <div class="col-sm-6">
	                	                   <input type="hidden" class="form-control"  name="{{fielda.name}}"  value="{{fielda.value}}"  v-model="newFieldValue[fielda.name]" readonly>
	                	               </div>
	                		</div>
	                		<div v-else>
	                					<label class="col-sm-3 control-label">{{fielda.name}}</label>
	                					<div class="col-sm-6">
	                					    <input type="hidden" class="form-control"  name="{{fielda.name}}" value="{{fielda.value}}"  v-model="newFieldValue[fielda.name]">
	                					</div>		
	                		</div>
	                </div>	
	                            

					<div class="form-group" v-if="fielda.type=='integer'">
							<div v-if="fielda.name=='idLabel'">
						               <label class="col-sm-3 control-label">{{fielda.name}}</label>
						               <div class="col-sm-6">
						                   <input type="number" class="form-control"  name="{{fielda.name}}" value="{{fielda.value}}"  v-model="newFieldValue[fielda.name]" readonly>
						               </div>
							</div>
							<div v-else>
										<label class="col-sm-3 control-label">{{fielda.name}}</label>
										<div class="col-sm-6">
										    <input type="number" class="form-control"  name="{{fielda.name}}" value="{{fielda.value}}"  v-model="newFieldValue[fielda.name]">
										</div>		
							</div>
					</div>	
	                
					<div class="form-group" v-if="fielda.type=='text'">
					
			               <label class="col-sm-3 control-label">{{fielda.name}}</label>
			               <div class="col-sm-6">
			                  <textarea  class="form-control"  name="{{fielda.name}}" value="{{fielda.value}}"  v-model="newFieldValue[fielda.name]"></textarea>
			               </div>
					</div>	
					
	                
					<div class="form-group" v-if="fielda.type=='date'">

			               <label class="col-sm-3 control-label">{{fielda.name}}</label>DAT
			               <div class="col-sm-6">
			                   <input type="date" class="form-control"  name="{{fielda.name}}" value="{{fielda.value}}"  v-model="newFieldValue[fielda.name]">
			               </div>
					</div>	

					<div class="form-group" v-if="fielda.type=='email'">

			               <label class="col-sm-3 control-label">{{fielda.name}}</label>
			               <div class="col-sm-6">
			                   <input type="email" class="form-control"  name="{{fielda.name}}"  value="{{fielda.value}}"   v-model="newFieldValue[fielda.name]">
			               </div>
					</div>	
	                              
            		<div class="form-group" v-if="fielda.type=='wysiwyg'">
            		
                           <label class="col-sm-3 control-label">{{fielda.name}}</label>
                           <div class="col-sm-6">
                              <textarea  class="form-control wysiwyg"  name="{{fielda.name}}" value="{{fielda.value}}"    v-model="newFieldValue[fielda.name]"></textarea>
                           </div>
            		</div>	
	                                  
            		<div class="form-group" v-if="fielda.type=='select'">
            		
                           <label class="col-sm-3 control-label">{{fielda.name}}</label>
                           <div class="col-sm-6">
                              <select v-model="newFieldValue[fielda.name]" class="form-control">
                              		<option v-for="option in fielda.selectData" v-bind:value="option.key">{{option.label}}</option>
                              </select>	
                           </div>
            		</div>	
	                              
					<h1 v-if="fielda.type=='fieldGroup'">{{fielda.name}}</h1>
            		<div class="form-group" v-if="fielda.type=='fieldGroup'" v-for="(key2, fielda2) in fielda.fieldGroup ">
             

	                           <label class="col-sm-3 control-label">{{fielda2.label}}</label>
	                           <div class="col-sm-6">
	                              <input  class="form-control"  name="{{fielda2.name}}"  v-model="newFieldValue[fielda.name][fielda2.name]" placeholder="{{fielda2.placeholder}}">
	                           </div>
	                           

            		</div>	


					<h1 v-if="fielda.type=='fieldGroups'">{{fielda.name}} -> max{{fielda.max}}</h1>

					<span v-for="key in fielda.max">
						

						<div v-for="(key2, fielda2) in fielda.fieldGroup"  
							 v-show="(mode=='create' && key==0) || newFieldValue[fielda.name][key]" class="form-group bg-default">

						
							<label class="col-sm-3 control-label">{{fielda2.name}}</label>
							<div class="col-sm-6"> 
							   <input  class="form-control"  name="{{fielda2.name}}"  v-model="newFieldValue[fielda.name][key][fielda2.name]" placeholder="{{fielda2.placeholder}}">
							</div>
						</div>

						<button @click.prevent="newFieldValue[fielda.name][key+1]['name'] == '13'" 
								v-if="key < fielda.max-1  and newFieldValue[fielda.name][key] and !newFieldValue[fielda.name][key+1]">Ajouter</button>



						
					</span>


					<h1 v-if="fielda.type=='foreign'">{{fielda.name}}</h1>
            		<div class="form-group" v-if="fielda.type=='foreign'">
             

	                           <label class="col-sm-3 control-label">{{fielda.label}}</label>
	                           <div class="col-sm-6">
	                              <input  class="form-control"  name="{{fielda.name}}" value="{{fielda.value}}"  v-model="newFieldValue[fielda.name]" placeholder="{{fielda.placeholder}}">
	                           </div>
	                           

            		</div>	



                           

					                              

			</div> 


	            <button class="btn btn-default " @click.stop.prevent="cancelEdit">Annuler</button>
	            <button v-show="showCreateFieldButton" class="btn btn-primary " @click.stop.prevent="addField">{{{addFieldSubmitButtonText}}} 
	            	<i class="fa fa-spin fa-spinner" v-show="showAddLoader"></i>
	            </button>
	            <button v-show="showEditFieldButton" class="btn btn-primary " @click.stop.prevent="editField">{{{editFieldSubmitButtonText}}} 
	            	<i class="fa fa-spin fa-spinner" v-show="showAddLoader"></i>
	            </button>
           </form>
        </div>






        <br>
        <hr>
        <table class="table" v-show="! displayFieldForm && fieldList.length">

                    <tr v-for="field in fieldList" track-by="$index"  transition="expand">
                        	<td v-for="fielda in fields | inlist" style="margin-right:15px">{{field[fielda.name]}}</td>
                        	<td>
                               <button class="pull-right btn btn-danger btn-sm" @click="removeField(field)"><i class="fa fa-times"></i></button>
                               <button class="pull-right btn btn-primary btn-sm" @click="showEditFieldForm(field)"><i class="fa fa-edit"></i></button>
                        	</td>
                    </tr>
       </table>

       <p v-else>No records</p>
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
			          		fields:{
			          			required: true,
			          			type:Array
			          		},		
			          		idLabel:{
			          			required: false,
			          			default:'id',
			          			type:String
			          		},	
			          				
			          		title:{
			          			required: true,
			          			type:String
			          		},	
			          		
		          		},

		          data(){
		              return {
		                  newFieldValue:{}, 
		                  
		                  mode:'',
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

		                  fieldList:[], //car belongsTo Table
		                  alert : {show:false,type:'',content:'' }

		              };
		          },

		          filters:{
		          		inlist: function(fields, inlist){
		          			return fields.filter(function(field){
		          				//console.log( field.inList)
		          				return field.inList
		          			});
		          		},

		          		show: function(fields, show){
		          			return fields.filter(function(field){
		          				//console.log( field.inList)
		          				return field.show
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
		          		}
/*
		          		update: function(fields, mode){
		          			return fields.filter(function(field){
		          				console.log( field)
		          				return false
		          			});
		          		}
		          		*/
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

		          	this.fetchData()
		              

		          },

		          methods: {

		          	fetchData:function(){
		          		this.$http.get(this.route_list).then(function (fields) {
		          		          this.fieldList = fields.data
		          		    		console.log("fields", fields)

		          		      }, function (response) {
		          		          // error callback
		          		      });

		          	},

		              prevent : function(e){
		              	console.log('prevent')
		                  e.preventDefault;
		              },

		              refresh : function(){
		              		this.fetchData()
		              },

		              removeField : function(field){

		              	 var confirmation = confirm('sur ?')	
		                  
		              	 console.log(confirmation)

		              	 if (confirmation===true) {
			                  var delete_action = this.route_action
			                  if (this.delete_action) {
			                  	alert('a special_route_ delete action is passed !')
			                  	delete_action = this.this.delete_action
			                  }
			                  
			                  this.$http.delete(delete_action +field[this.idLabel]).then(function (response) {
			                      
			                      this.fieldList.$remove(field);
			                      this.alert = {show:true,type:'success',content:'deleted successfully' }
			                  })
		              	 	
		              	 }


		              },

		              showCreateFieldForm:function(){
		              	  this.mode = 'create'
		                  this.displayFieldForm = ! this.displayFieldForm
		                  if ( ! this.displayFieldForm) {
		                      this.addFieldButtonIcon = 'fa fa-minus'
		                  }
		                  this.newFieldValue = '' 
		              },

		              addField: function () {

		                  var fields = this.newFieldValue
		                  this.showAddLoader = true

		                  this.$http.post(this.route_action ,fields ,function(response){
		                  	console.log(response)
		                  	  //$.notify({ message: 'ajouté avec success'},{ type: 'success'});
		                      this.fieldList.push(response);
		                      this.newFieldValue = '' 
		                      this.displayFieldForm = false
		                      this.showAddLoader = false
		                      this.alert = {show:true,type:'success',content:'created successfully' }
		                  })
		              },

		              showEditFieldForm:function(field){


		              	  
		              	  this.mode = 'update'
		                  this.showEditFieldButton = true
		                  this.showCreateFieldButton = false
		                  this.displayFieldForm=true

		                  this.displayEditFieldForm = true
		                  this.editFieldButtonText = 'edit'

		                  this.newFieldValue=field


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