
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
 

<template>

	<div class="alert alert-{{alert.type}}" v-show="alert.show">
		{{alert.content}}
	</div>
       
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>Client  informations</h5>
			<div class="ibox-tools">
				<a class="collapse-link">
					<i class="fa fa-chevron-up"></i>
				</a>
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="ibox-content">
		<form id="link" name="link" value="categories" method="POST"  @submit.prevent="prevent()" enctype="multipart/form-data">
		         <div class="form-group">
		             <label class="col-sm-2 control-label" for="name">
		                 Client Name:
		             </label>
		             <input type="text" name="name" id="name" class="form-control" v-model="fieldList.name">
		         </div>
		         <div class="form-group">
		             <label for="image" class="col-sm-2 control-label">
		                 Client Logo: <small><i>200 x 200 pixels</i></small>
		             </label>
		             <img src="/uploads/clients/{{fieldList.id}}.{{fieldList.logo_extension}}" v-show="fieldList.image || fieldList.logo_extension" class="organisation_logo img-thumbnail" style="height:150px" />
		             

		             <input type="file" name="image" id="image" class="form-control" v-model="fieldList.image" >
		         </div>
		         <div class="form-group">
		             <button type="submit" class="btn btn-default" @click.stop.prevent="cancelEdit">
		                 Cancel
		             </button>
		             <button type="submit" class="btn btn-primary" @click.stop.prevent="onSubmitForm">
		                 Submit
		             </button>
		            
		         </div>
		     </form>


 

		</div>
	</div>
    
</template>

<script>


	export default {
		          
		          props :{
		          	/*
			          		route_list:{
			          			required: true,
			          			type:String
			          		},
			        */  		
			          		 
			          		
		          		},

		          data(){
		              return {
		                  //newFieldValue:{}, 
		                  fieldList:{},
		                  addFieldButtonText:'Ajouter',
		                  dispalayFileInput:false,
		                  showAddLoader:false,
		                  editFieldSubmitButtonText:'Mettre à jour',
		                  loader:'<i class="fa fa-spin fa-spinner"></i>',
		                  fieldList:[], //car belongsTo Table

		                  alert : {show:false,type:'',content:'' }

		                  
		              };
		          },

		          filters:{
		          		
		          },



		          computed:{

		            

		        
		          },

		          ready(){
		             this.fetchData()
		          },

		          methods: {

		          	  fetchData : function(){
		          	  	this.$http.get('/api/client/current').then(function (response) {
		          	  	
	          	  	        this.fieldList = response.data
	          	  	    	console.log("fields", response)
	          	  	    		

	          	  	      }, function (response) {

	          	  	          // error callback
	          	  	      });

		          	  },

		              prevent : function(e){
		              	console.log('prevent')
		                  e.preventDefault;
		              },

		              onSubmitForm: function(e) {

		                  e.preventDefault();

		                  var form = document.querySelector('#image');
		                          var file = form.files[0];
		                          var oData = new FormData();
		                          var im = oData.append("image", file)

		                          console.log(form)
		                          console.log(file)
		                          console.log('oData',oData)
		                          console.log(im)

		                          this.$http.post('/api/client/' + this.fieldList.id + '/update_logo' ,oData).then(
		                          	//setTimeout(function(){
		                          		this.alert = {show:true,type:'success',content:'logo Updated successfully' }

		                          	//}, 2) 
		                          );

		                          this.$http.put('/api/client/'+this.fieldList.id,this.fieldList).then(
		                          	//setTimeout(function(){
		                          		this.alert = {show:true,type:'success',content:'Updated successfully' }

		                          	//}, 2)
		                          );



/*
		                  var input = this.fieldList;
		                  this.fieldList = { name: '', image: ''};
		                  //var category = {
		                  //    text : input.name,
		                  //};
		                  input.image = this.$.fileInput.files; // Get the input as the DOM and get the files, With the v-model you are getting the name of the file
		                  console.log(input);
		                  //this.Categories.push(category);
		                  console.log('input', input);
		                  console.log('link', this.link);
		                  alert(this.link)
		                  alert(input)
		                  this.$http.post(this.link,input);
*/
		              },



		        

		               cancelEdit:function(){
		                  this.fieldList=this.fetchData()
		               },


		            


		          },
		
	}

</script>


