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
import AccountList from './spaces/Admin/Account/list.vue'
Vue.component('AccountList', AccountList)
import AccountForm from './spaces/Admin/Account/form.vue'
Vue.component('AccountForm', AccountForm)
import AccountEdit from './spaces/Admin/Account/edit.vue'
Vue.component('AccountEdit', AccountEdit)
import AccountShow from './spaces/Admin/Account/show.vue'
Vue.component('AccountShow', AccountShow)


import ContactList from './spaces/Admin/Contact/list.vue'
Vue.component('ContactList', ContactList)
import ContactForm from './spaces/Admin/Contact/form.vue'
Vue.component('ContactForm', ContactForm)
import ContactEdit from './spaces/Admin/Contact/edit.vue'
Vue.component('ContactEdit', ContactEdit)
import ContactShow from './spaces/Admin/Contact/show.vue'
Vue.component('ContactShow', ContactShow)


import CurrencyList from './spaces/Admin/Currency/list.vue'
Vue.component('CurrencyList', CurrencyList)
import CurrencyForm from './spaces/Admin/Currency/form.vue'
Vue.component('CurrencyForm', CurrencyForm)
import CurrencyEdit from './spaces/Admin/Currency/edit.vue'
Vue.component('CurrencyEdit', CurrencyEdit)
import CurrencyShow from './spaces/Admin/Currency/show.vue'
Vue.component('CurrencyShow', CurrencyShow)


import InvoiceList from './spaces/Admin/Invoice/list.vue'
Vue.component('InvoiceList', InvoiceList)
import InvoiceForm from './spaces/Admin/Invoice/form.vue'
Vue.component('InvoiceForm', InvoiceForm)
import InvoiceEdit from './spaces/Admin/Invoice/edit.vue'
Vue.component('InvoiceEdit', InvoiceEdit)
import InvoiceShow from './spaces/Admin/Invoice/show.vue'
Vue.component('InvoiceShow', InvoiceShow)


import ItemList from './spaces/Admin/Item/list.vue'
Vue.component('ItemList', ItemList)
import ItemForm from './spaces/Admin/Item/form.vue'
Vue.component('ItemForm', ItemForm)
import ItemEdit from './spaces/Admin/Item/edit.vue'
Vue.component('ItemEdit', ItemEdit)
import ItemShow from './spaces/Admin/Item/show.vue'
Vue.component('ItemShow', ItemShow)


import OrganizationList from './spaces/Admin/Organization/list.vue'
Vue.component('OrganizationList', OrganizationList)
import OrganizationForm from './spaces/Admin/Organization/form.vue'
Vue.component('OrganizationForm', OrganizationForm)
import OrganizationEdit from './spaces/Admin/Organization/edit.vue'
Vue.component('OrganizationEdit', OrganizationEdit)
import OrganizationShow from './spaces/Admin/Organization/show.vue'
Vue.component('OrganizationShow', OrganizationShow)


import PaymentList from './spaces/Admin/Payment/list.vue'
Vue.component('PaymentList', PaymentList)
import PaymentForm from './spaces/Admin/Payment/form.vue'
Vue.component('PaymentForm', PaymentForm)
import PaymentEdit from './spaces/Admin/Payment/edit.vue'
Vue.component('PaymentEdit', PaymentEdit)
import PaymentShow from './spaces/Admin/Payment/show.vue'
Vue.component('PaymentShow', PaymentShow)


import PersonList from './spaces/Admin/Person/list.vue'
Vue.component('PersonList', PersonList)
import PersonForm from './spaces/Admin/Person/form.vue'
Vue.component('PersonForm', PersonForm)
import PersonEdit from './spaces/Admin/Person/edit.vue'
Vue.component('PersonEdit', PersonEdit)
import PersonShow from './spaces/Admin/Person/show.vue'
Vue.component('PersonShow', PersonShow)


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

