

var Vue = require('vue');

import alert from './components/alert.vue';
import messages from './components/messages.vue';
import crud from './components/crud.vue';
import settingsClient from './components/settings_client.vue';
import settingsUsers from './components/settings_users.vue';
import bootstrapping from './components/bootstrapping.vue';
import setFixedValues from './components/setFixedValues.vue';
import editTableData from './components/editTableData.vue';
import editBelongsToMany from './components/editBelongsToMany.vue';




import VueResource from 'vue-resource';
Vue.use(VueResource);


Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('token').getAttribute('content');


new Vue({
	el:'body',
	components:{
		 alert, messages, crud, settingsUsers, settingsClient, bootstrapping, setFixedValues, editTableData, editBelongsToMany
	},
	ready(){
		//console.log('hello vue 22');
	},
	data:{
		parentdata:'main',
	},
	methods: {

	}
})


Vue.transition('fade', {
  enterClass: 'bounceInLeft',
  leaveClass: 'bounceOutRight'
})
