@extends('layouts.admin')

@section('content')

<div class=" alert alert-info"><b>Pour modifier cette Page</b><br>organit > resources/views/admin/cheatsheet/dev_cheatsheet_Vue</div>



<h2>Passer variable PHP a vue.js</h2>
<pre>
	<?php
		$devis = \App\Devis::find(22);
	?>

	<bootstrapping :devis="{{$devis}}"></bootstrapping>


	....

    props :{
		devis:{
			required: false,
			type:Object,
			}
    },

</pre>




<h2>inserer un component dans un autre</h2>
<pre>
import selectProvider from './select_provider.vue';
import alert from './alert.vue';

export default {
		components: {
			selectProvider, alert
		},

		props :{
			route_list:{
				required: true,
				type:String
				...

...
</pre>
--> et l'utiser normalement. il est important par default
<pre><xmp><alert important="false" type="error">Message de l'alert</alert>
		 - ou -
<select-provider service="contact" user="1" v-show="displaySelectProvider"></select-provider></xmp></pre>
<i>Exemple de mise en place : <b>crm-middle->resource/assets/js/components/contact.vue</b></i>




<h2>utilisation component Alert</h2>

<h3>use : </h3>
inside a componenent :
<pre><xmp><alert :type="alert.type" :show="alert.show" :important="alert.important">@{{ '{{'}} alert.content @{{ }} }}</alert></xmp>&#125;</pre>
normalement :
<pre><xmp><alert type="success" important="false">Message blah blah</alert></xmp></pre>
declaration dans data :
<pre>
 alert : {show:false, type:'', important:true ,content:'' },
</pre>
 method (ici ready)
    <pre>
	<i>
                      this.$http.get(this.route_list).then(function (</i><b><em>response</em></b><i>) {

                            if (response.data.status == 'error') {</i><b>
                              <em>this.alert = {show:true,type:'error',important:true,content:response.data.msg }</em></b><i>
                              this.displayComponent = false
                              if (response.data.ref == 'no_contact_provider_selected') {
                                this.displaySelectProvider = true
                              }
                            }

                            this.fieldList = response.data
                            this.mainLoader.show=false;


                          }, function (response) {

                              // error callback
                          });

    </i>
    </pre>


 <h2>Filtrer des listes</h2>
 <p>dans data: ce doit être un array [] </p>
 <pre><xmp>
   <ul>
    <li v-for="provider in providerList | withToken tokenUserList" ><a href="#">  ...  </a></li>
   </ul>
</xmp>
 </pre>
 <pre>
  filters: {
        withoutToken:function (providers, tokenList){
          //console.log(providers)
          //console.log(tokenList)
          return providers.filter(function(provider){

              var userTokenArray=[]
              for (index in tokenList){
                userTokenArray.push(parseInt(tokenList[index].provider_id))
              }
              //console.log(userTokenArray)
              //console.log(provider.id)
              return userTokenArray.indexOf(parseInt(provider.id)) < 0

          })
        },

  },
 </pre>
@endsection
