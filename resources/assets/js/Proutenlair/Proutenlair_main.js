//integrer le fichier bootstrap.js #v2#
//require('./bootstrap');
var Vue = require('vue')
import VueI18n from 'vue-i18n'
import enLocale from 'element-ui/lib/locale/lang/en'
import jaLocale from 'element-ui/lib/locale/lang/ja'
import frLocale from 'element-ui/lib/locale/lang/fr'
import Locales from '../vue-i18n-locales.generated.js'
var ElementUI = require('element-ui');
var axios = require('axios');

window.axios = require('axios');
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
		'X-CSRF-TOKEN': Laravel.csrfToken
};
window.larastrapEditionMode=true
Vue.use(VueI18n)
Vue.use(ElementUI)
Vue.use(require('vue-moment'))



Vue.config.lang = Laravel.lang
Vue.locale('ja', jaLocale)
Vue.locale('fr', frLocale)
Vue.locale('en', enLocale)
Object.keys(Locales).forEach(function (lang) {
Vue.locale(lang, Locales[lang])
});
import UserList from './spaces/Web/User/list/basic.vue'
Vue.component('UserList', UserList)
import UserForm from './spaces/Web/User/form/basic.vue'
Vue.component('UserForm', UserForm)
import UserEdit from './spaces/Web/User/edit/basic.vue'
Vue.component('UserEdit', UserEdit)
import UserShow from './spaces/Web/User/show/basic.vue'
Vue.component('UserShow', UserShow)


import RoleUserList from './spaces/Web/RoleUser/list/basic.vue'
Vue.component('RoleUserList', RoleUserList)
import RoleUserForm from './spaces/Web/RoleUser/form/basic.vue'
Vue.component('RoleUserForm', RoleUserForm)
import RoleUserEdit from './spaces/Web/RoleUser/edit/basic.vue'
Vue.component('RoleUserEdit', RoleUserEdit)
import RoleUserShow from './spaces/Web/RoleUser/show/basic.vue'
Vue.component('RoleUserShow', RoleUserShow)


import RoleList from './spaces/Web/Role/list/basic.vue'
Vue.component('RoleList', RoleList)
import RoleForm from './spaces/Web/Role/form/basic.vue'
Vue.component('RoleForm', RoleForm)
import RoleEdit from './spaces/Web/Role/edit/basic.vue'
Vue.component('RoleEdit', RoleEdit)
import RoleShow from './spaces/Web/Role/show/basic.vue'
Vue.component('RoleShow', RoleShow)


import PermissionList from './spaces/Web/Permission/list/basic.vue'
Vue.component('PermissionList', PermissionList)
import PermissionForm from './spaces/Web/Permission/form/basic.vue'
Vue.component('PermissionForm', PermissionForm)
import PermissionEdit from './spaces/Web/Permission/edit/basic.vue'
Vue.component('PermissionEdit', PermissionEdit)
import PermissionShow from './spaces/Web/Permission/show/basic.vue'
Vue.component('PermissionShow', PermissionShow)


import PermissionRoleList from './spaces/Web/PermissionRole/list/basic.vue'
Vue.component('PermissionRoleList', PermissionRoleList)
import PermissionRoleForm from './spaces/Web/PermissionRole/form/basic.vue'
Vue.component('PermissionRoleForm', PermissionRoleForm)
import PermissionRoleEdit from './spaces/Web/PermissionRole/edit/basic.vue'
Vue.component('PermissionRoleEdit', PermissionRoleEdit)
import PermissionRoleShow from './spaces/Web/PermissionRole/show/basic.vue'
Vue.component('PermissionRoleShow', PermissionRoleShow)



        // import store from './vuex/store.js';





const app = new Vue({
  
    data : {
      showSettingMenu:false,
      locale:{
        lang:Laravel.lang,
        loading:false
      },
      langs:[
        {slug : 'en', name :'English'},
        {slug : 'fr', name :'Français'},
        {slug : 'ja', name :'Japonnais'},
      ],
    },
    methods : {
      changeLang () {
        var vm=this
        axios.post('/Proutenlair/choose_language', this.locale).then(function (response) {
                  // vm.lang=false
                  vm.locale.loading=true
                  window.location.replace("");
              }, function (response) {
                  // error callback
              });
      }
    },

}).$mount('#app')

