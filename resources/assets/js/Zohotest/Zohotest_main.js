//integrer le fichier bootstrap.js #v2#
//require('./bootstrap');
var Vue = require('vue')
var VueValidator = require('vue-validator')
var ui = require('element-ui');
var axios = require('axios');

window.axios = require('axios');
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
		'X-CSRF-TOKEN': Laravel.csrfToken
};
window.larastrapEditionMode=true
import UserList from './spaces/Admin/User/list/list.vue'
Vue.component('UserList', UserList)
import UserForm from './spaces/Admin/User/form/form.vue'
Vue.component('UserForm', UserForm)
import UserEdit from './spaces/Admin/User/edit/edit.vue'
Vue.component('UserEdit', UserEdit)
import UserShow from './spaces/Admin/User/show/show.vue'
Vue.component('UserShow', UserShow)


import AccountList from './spaces/Admin/Account/list/list.vue'
Vue.component('AccountList', AccountList)
import AccountForm from './spaces/Admin/Account/form/form.vue'
Vue.component('AccountForm', AccountForm)
import AccountEdit from './spaces/Admin/Account/edit/edit.vue'
Vue.component('AccountEdit', AccountEdit)
import AccountShow from './spaces/Admin/Account/show/show.vue'
Vue.component('AccountShow', AccountShow)


import ContactList from './spaces/Admin/Contact/list/list.vue'
Vue.component('ContactList', ContactList)
import ContactForm from './spaces/Admin/Contact/form/form.vue'
Vue.component('ContactForm', ContactForm)
import ContactEdit from './spaces/Admin/Contact/edit/edit.vue'
Vue.component('ContactEdit', ContactEdit)
import ContactShow from './spaces/Admin/Contact/show/show.vue'
Vue.component('ContactShow', ContactShow)


import CurrencyList from './spaces/Admin/Currency/list/list.vue'
Vue.component('CurrencyList', CurrencyList)
import CurrencyForm from './spaces/Admin/Currency/form/form.vue'
Vue.component('CurrencyForm', CurrencyForm)
import CurrencyEdit from './spaces/Admin/Currency/edit/edit.vue'
Vue.component('CurrencyEdit', CurrencyEdit)
import CurrencyShow from './spaces/Admin/Currency/show/show.vue'
Vue.component('CurrencyShow', CurrencyShow)


import InvoiceList from './spaces/Admin/Invoice/list/list.vue'
Vue.component('InvoiceList', InvoiceList)
import InvoiceForm from './spaces/Admin/Invoice/form/form.vue'
Vue.component('InvoiceForm', InvoiceForm)
import InvoiceEdit from './spaces/Admin/Invoice/edit/edit.vue'
Vue.component('InvoiceEdit', InvoiceEdit)
import InvoiceShow from './spaces/Admin/Invoice/show/show.vue'
Vue.component('InvoiceShow', InvoiceShow)


import ItemList from './spaces/Admin/Item/list/list.vue'
Vue.component('ItemList', ItemList)
import ItemForm from './spaces/Admin/Item/form/form.vue'
Vue.component('ItemForm', ItemForm)
import ItemEdit from './spaces/Admin/Item/edit/edit.vue'
Vue.component('ItemEdit', ItemEdit)
import ItemShow from './spaces/Admin/Item/show/show.vue'
Vue.component('ItemShow', ItemShow)


import OrganizationList from './spaces/Admin/Organization/list/list.vue'
Vue.component('OrganizationList', OrganizationList)
import OrganizationForm from './spaces/Admin/Organization/form/form.vue'
Vue.component('OrganizationForm', OrganizationForm)
import OrganizationEdit from './spaces/Admin/Organization/edit/edit.vue'
Vue.component('OrganizationEdit', OrganizationEdit)
import OrganizationShow from './spaces/Admin/Organization/show/show.vue'
Vue.component('OrganizationShow', OrganizationShow)


import PaymentList from './spaces/Admin/Payment/list/list.vue'
Vue.component('PaymentList', PaymentList)
import PaymentForm from './spaces/Admin/Payment/form/form.vue'
Vue.component('PaymentForm', PaymentForm)
import PaymentEdit from './spaces/Admin/Payment/edit/edit.vue'
Vue.component('PaymentEdit', PaymentEdit)
import PaymentShow from './spaces/Admin/Payment/show/show.vue'
Vue.component('PaymentShow', PaymentShow)


import PersonList from './spaces/Admin/Person/list/list.vue'
Vue.component('PersonList', PersonList)
import PersonForm from './spaces/Admin/Person/form/form.vue'
Vue.component('PersonForm', PersonForm)
import PersonEdit from './spaces/Admin/Person/edit/edit.vue'
Vue.component('PersonEdit', PersonEdit)
import PersonShow from './spaces/Admin/Person/show/show.vue'
Vue.component('PersonShow', PersonShow)


import RoleList from './spaces/Admin/Role/list/list.vue'
Vue.component('RoleList', RoleList)
import RoleForm from './spaces/Admin/Role/form/form.vue'
Vue.component('RoleForm', RoleForm)
import RoleEdit from './spaces/Admin/Role/edit/edit.vue'
Vue.component('RoleEdit', RoleEdit)
import RoleShow from './spaces/Admin/Role/show/show.vue'
Vue.component('RoleShow', RoleShow)


import PermissionList from './spaces/Admin/Permission/list/list.vue'
Vue.component('PermissionList', PermissionList)
import PermissionForm from './spaces/Admin/Permission/form/form.vue'
Vue.component('PermissionForm', PermissionForm)
import PermissionEdit from './spaces/Admin/Permission/edit/edit.vue'
Vue.component('PermissionEdit', PermissionEdit)
import PermissionShow from './spaces/Admin/Permission/show/show.vue'
Vue.component('PermissionShow', PermissionShow)


import RoleUserList from './spaces/Admin/RoleUser/list/list.vue'
Vue.component('RoleUserList', RoleUserList)
import RoleUserForm from './spaces/Admin/RoleUser/form/form.vue'
Vue.component('RoleUserForm', RoleUserForm)
import RoleUserEdit from './spaces/Admin/RoleUser/edit/edit.vue'
Vue.component('RoleUserEdit', RoleUserEdit)
import RoleUserShow from './spaces/Admin/RoleUser/show/show.vue'
Vue.component('RoleUserShow', RoleUserShow)


import PermissionRoleList from './spaces/Admin/PermissionRole/list/list.vue'
Vue.component('PermissionRoleList', PermissionRoleList)
import PermissionRoleForm from './spaces/Admin/PermissionRole/form/form.vue'
Vue.component('PermissionRoleForm', PermissionRoleForm)
import PermissionRoleEdit from './spaces/Admin/PermissionRole/edit/edit.vue'
Vue.component('PermissionRoleEdit', PermissionRoleEdit)
import PermissionRoleShow from './spaces/Admin/PermissionRole/show/show.vue'
Vue.component('PermissionRoleShow', PermissionRoleShow)


Vue.use(VueValidator)
Vue.use(ui)
Vue.use(require('vue-moment'))




Vue.validator('email', function (val) {
	return /^(([^<>()[\]\.,;:\s@"]+(\.[^<>()[\]\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(val)
})

Vue.validator('url', function (val) {
	return /^(http\:\/\/|https\:\/\/)(.{4,})$/.test(val)
})

Vue.validator('number', function (val) {
	return /^[-+]?[0-9]+$/.test(val)
})

        // import store from './vuex/store.js';





const app = new Vue({
  

}).$mount('#app')

