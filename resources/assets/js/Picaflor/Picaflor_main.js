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
import UserList from './spaces/Admin/User/list/basic.vue'
Vue.component('UserList', UserList)
import UserForm from './spaces/Admin/User/form/basic.vue'
Vue.component('UserForm', UserForm)
import UserEdit from './spaces/Admin/User/edit/basic.vue'
Vue.component('UserEdit', UserEdit)
import UserShow from './spaces/Admin/User/show/basic.vue'
Vue.component('UserShow', UserShow)


import RoleUserList from './spaces/Admin/RoleUser/list/basic.vue'
Vue.component('RoleUserList', RoleUserList)
import RoleUserForm from './spaces/Admin/RoleUser/form/basic.vue'
Vue.component('RoleUserForm', RoleUserForm)
import RoleUserEdit from './spaces/Admin/RoleUser/edit/basic.vue'
Vue.component('RoleUserEdit', RoleUserEdit)
import RoleUserShow from './spaces/Admin/RoleUser/show/basic.vue'
Vue.component('RoleUserShow', RoleUserShow)


import RoleList from './spaces/Admin/Role/list/basic.vue'
Vue.component('RoleList', RoleList)
import RoleForm from './spaces/Admin/Role/form/basic.vue'
Vue.component('RoleForm', RoleForm)
import RoleEdit from './spaces/Admin/Role/edit/basic.vue'
Vue.component('RoleEdit', RoleEdit)
import RoleShow from './spaces/Admin/Role/show/basic.vue'
Vue.component('RoleShow', RoleShow)


import PermissionList from './spaces/Admin/Permission/list/basic.vue'
Vue.component('PermissionList', PermissionList)
import PermissionForm from './spaces/Admin/Permission/form/basic.vue'
Vue.component('PermissionForm', PermissionForm)
import PermissionEdit from './spaces/Admin/Permission/edit/basic.vue'
Vue.component('PermissionEdit', PermissionEdit)
import PermissionShow from './spaces/Admin/Permission/show/basic.vue'
Vue.component('PermissionShow', PermissionShow)


import PermissionRoleList from './spaces/Admin/PermissionRole/list/basic.vue'
Vue.component('PermissionRoleList', PermissionRoleList)
import PermissionRoleForm from './spaces/Admin/PermissionRole/form/basic.vue'
Vue.component('PermissionRoleForm', PermissionRoleForm)
import PermissionRoleEdit from './spaces/Admin/PermissionRole/edit/basic.vue'
Vue.component('PermissionRoleEdit', PermissionRoleEdit)
import PermissionRoleShow from './spaces/Admin/PermissionRole/show/basic.vue'
Vue.component('PermissionRoleShow', PermissionRoleShow)


import FirmList from './spaces/Admin/Firm/list/basic.vue'
Vue.component('FirmList', FirmList)
import FirmForm from './spaces/Admin/Firm/form/basic.vue'
Vue.component('FirmForm', FirmForm)
import FirmEdit from './spaces/Admin/Firm/edit/basic.vue'
Vue.component('FirmEdit', FirmEdit)
import FirmShow from './spaces/Admin/Firm/show/basic.vue'
Vue.component('FirmShow', FirmShow)


import BrandUserList from './spaces/Admin/BrandUser/list/basic.vue'
Vue.component('BrandUserList', BrandUserList)
import BrandUserForm from './spaces/Admin/BrandUser/form/basic.vue'
Vue.component('BrandUserForm', BrandUserForm)
import BrandUserEdit from './spaces/Admin/BrandUser/edit/basic.vue'
Vue.component('BrandUserEdit', BrandUserEdit)
import BrandUserShow from './spaces/Admin/BrandUser/show/basic.vue'
Vue.component('BrandUserShow', BrandUserShow)


import CountryList from './spaces/Admin/Country/list/basic.vue'
Vue.component('CountryList', CountryList)
import CountryForm from './spaces/Admin/Country/form/basic.vue'
Vue.component('CountryForm', CountryForm)
import CountryEdit from './spaces/Admin/Country/edit/basic.vue'
Vue.component('CountryEdit', CountryEdit)
import CountryShow from './spaces/Admin/Country/show/basic.vue'
Vue.component('CountryShow', CountryShow)


import CurrencyList from './spaces/Admin/Currency/list/basic.vue'
Vue.component('CurrencyList', CurrencyList)
import CurrencyForm from './spaces/Admin/Currency/form/basic.vue'
Vue.component('CurrencyForm', CurrencyForm)
import CurrencyEdit from './spaces/Admin/Currency/edit/basic.vue'
Vue.component('CurrencyEdit', CurrencyEdit)
import CurrencyShow from './spaces/Admin/Currency/show/basic.vue'
Vue.component('CurrencyShow', CurrencyShow)


import InvoicesList from './spaces/Admin/Invoices/list/basic.vue'
Vue.component('InvoicesList', InvoicesList)
import InvoicesForm from './spaces/Admin/Invoices/form/basic.vue'
Vue.component('InvoicesForm', InvoicesForm)
import InvoicesEdit from './spaces/Admin/Invoices/edit/basic.vue'
Vue.component('InvoicesEdit', InvoicesEdit)
import InvoicesShow from './spaces/Admin/Invoices/show/basic.vue'
Vue.component('InvoicesShow', InvoicesShow)


import ProductList from './spaces/Admin/Product/list/basic.vue'
Vue.component('ProductList', ProductList)
import ProductForm from './spaces/Admin/Product/form/basic.vue'
Vue.component('ProductForm', ProductForm)
import ProductEdit from './spaces/Admin/Product/edit/basic.vue'
Vue.component('ProductEdit', ProductEdit)
import ProductShow from './spaces/Admin/Product/show/basic.vue'
Vue.component('ProductShow', ProductShow)


import TransactionList from './spaces/Admin/Transaction/list/basic.vue'
Vue.component('TransactionList', TransactionList)
import TransactionForm from './spaces/Admin/Transaction/form/basic.vue'
Vue.component('TransactionForm', TransactionForm)
import TransactionEdit from './spaces/Admin/Transaction/edit/basic.vue'
Vue.component('TransactionEdit', TransactionEdit)
import TransactionShow from './spaces/Admin/Transaction/show/basic.vue'
Vue.component('TransactionShow', TransactionShow)


import SiteList from './spaces/Admin/Site/list/basic.vue'
Vue.component('SiteList', SiteList)
import SiteForm from './spaces/Admin/Site/form/basic.vue'
Vue.component('SiteForm', SiteForm)
import SiteEdit from './spaces/Admin/Site/edit/basic.vue'
Vue.component('SiteEdit', SiteEdit)
import SiteShow from './spaces/Admin/Site/show/basic.vue'
Vue.component('SiteShow', SiteShow)


import InvoicesProductList from './spaces/Admin/InvoicesProduct/list/basic.vue'
Vue.component('InvoicesProductList', InvoicesProductList)
import InvoicesProductForm from './spaces/Admin/InvoicesProduct/form/basic.vue'
Vue.component('InvoicesProductForm', InvoicesProductForm)
import InvoicesProductEdit from './spaces/Admin/InvoicesProduct/edit/basic.vue'
Vue.component('InvoicesProductEdit', InvoicesProductEdit)
import InvoicesProductShow from './spaces/Admin/InvoicesProduct/show/basic.vue'
Vue.component('InvoicesProductShow', InvoicesProductShow)


import PlanList from './spaces/Admin/Plan/list/basic.vue'
Vue.component('PlanList', PlanList)
import PlanForm from './spaces/Admin/Plan/form/basic.vue'
Vue.component('PlanForm', PlanForm)
import PlanEdit from './spaces/Admin/Plan/edit/basic.vue'
Vue.component('PlanEdit', PlanEdit)
import PlanShow from './spaces/Admin/Plan/show/basic.vue'
Vue.component('PlanShow', PlanShow)


import SubscriptionList from './spaces/Admin/Subscription/list/basic.vue'
Vue.component('SubscriptionList', SubscriptionList)
import SubscriptionForm from './spaces/Admin/Subscription/form/basic.vue'
Vue.component('SubscriptionForm', SubscriptionForm)
import SubscriptionEdit from './spaces/Admin/Subscription/edit/basic.vue'
Vue.component('SubscriptionEdit', SubscriptionEdit)
import SubscriptionShow from './spaces/Admin/Subscription/show/basic.vue'
Vue.component('SubscriptionShow', SubscriptionShow)


import PlanFamilyList from './spaces/Admin/PlanFamily/list/basic.vue'
Vue.component('PlanFamilyList', PlanFamilyList)
import PlanFamilyForm from './spaces/Admin/PlanFamily/form/basic.vue'
Vue.component('PlanFamilyForm', PlanFamilyForm)
import PlanFamilyEdit from './spaces/Admin/PlanFamily/edit/basic.vue'
Vue.component('PlanFamilyEdit', PlanFamilyEdit)
import PlanFamilyShow from './spaces/Admin/PlanFamily/show/basic.vue'
Vue.component('PlanFamilyShow', PlanFamilyShow)


import PlanPeriodList from './spaces/Admin/PlanPeriod/list/basic.vue'
Vue.component('PlanPeriodList', PlanPeriodList)
import PlanPeriodForm from './spaces/Admin/PlanPeriod/form/basic.vue'
Vue.component('PlanPeriodForm', PlanPeriodForm)
import PlanPeriodEdit from './spaces/Admin/PlanPeriod/edit/basic.vue'
Vue.component('PlanPeriodEdit', PlanPeriodEdit)
import PlanPeriodShow from './spaces/Admin/PlanPeriod/show/basic.vue'
Vue.component('PlanPeriodShow', PlanPeriodShow)


import PaymentProviderList from './spaces/Admin/PaymentProvider/list/basic.vue'
Vue.component('PaymentProviderList', PaymentProviderList)
import PaymentProviderForm from './spaces/Admin/PaymentProvider/form/basic.vue'
Vue.component('PaymentProviderForm', PaymentProviderForm)
import PaymentProviderEdit from './spaces/Admin/PaymentProvider/edit/basic.vue'
Vue.component('PaymentProviderEdit', PaymentProviderEdit)
import PaymentProviderShow from './spaces/Admin/PaymentProvider/show/basic.vue'
Vue.component('PaymentProviderShow', PaymentProviderShow)


import PlanTypeList from './spaces/Admin/PlanType/list/basic.vue'
Vue.component('PlanTypeList', PlanTypeList)
import PlanTypeForm from './spaces/Admin/PlanType/form/basic.vue'
Vue.component('PlanTypeForm', PlanTypeForm)
import PlanTypeEdit from './spaces/Admin/PlanType/edit/basic.vue'
Vue.component('PlanTypeEdit', PlanTypeEdit)
import PlanTypeShow from './spaces/Admin/PlanType/show/basic.vue'
Vue.component('PlanTypeShow', PlanTypeShow)


import ProductTypeList from './spaces/Admin/ProductType/list/basic.vue'
Vue.component('ProductTypeList', ProductTypeList)
import ProductTypeForm from './spaces/Admin/ProductType/form/basic.vue'
Vue.component('ProductTypeForm', ProductTypeForm)
import ProductTypeEdit from './spaces/Admin/ProductType/edit/basic.vue'
Vue.component('ProductTypeEdit', ProductTypeEdit)
import ProductTypeShow from './spaces/Admin/ProductType/show/basic.vue'
Vue.component('ProductTypeShow', ProductTypeShow)


import OrganizationList from './spaces/Admin/Organization/list/basic.vue'
Vue.component('OrganizationList', OrganizationList)
import OrganizationForm from './spaces/Admin/Organization/form/basic.vue'
Vue.component('OrganizationForm', OrganizationForm)
import OrganizationEdit from './spaces/Admin/Organization/edit/basic.vue'
Vue.component('OrganizationEdit', OrganizationEdit)
import OrganizationShow from './spaces/Admin/Organization/show/basic.vue'
Vue.component('OrganizationShow', OrganizationShow)


import OrganizationUserList from './spaces/Admin/OrganizationUser/list/basic.vue'
Vue.component('OrganizationUserList', OrganizationUserList)
import OrganizationUserForm from './spaces/Admin/OrganizationUser/form/basic.vue'
Vue.component('OrganizationUserForm', OrganizationUserForm)
import OrganizationUserEdit from './spaces/Admin/OrganizationUser/edit/basic.vue'
Vue.component('OrganizationUserEdit', OrganizationUserEdit)
import OrganizationUserShow from './spaces/Admin/OrganizationUser/show/basic.vue'
Vue.component('OrganizationUserShow', OrganizationUserShow)


import AdressList from './spaces/Admin/Adress/list/basic.vue'
Vue.component('AdressList', AdressList)
import AdressForm from './spaces/Admin/Adress/form/basic.vue'
Vue.component('AdressForm', AdressForm)
import AdressEdit from './spaces/Admin/Adress/edit/basic.vue'
Vue.component('AdressEdit', AdressEdit)
import AdressShow from './spaces/Admin/Adress/show/basic.vue'
Vue.component('AdressShow', AdressShow)


import FirmTypeList from './spaces/Admin/FirmType/list/basic.vue'
Vue.component('FirmTypeList', FirmTypeList)
import FirmTypeForm from './spaces/Admin/FirmType/form/basic.vue'
Vue.component('FirmTypeForm', FirmTypeForm)
import FirmTypeEdit from './spaces/Admin/FirmType/edit/basic.vue'
Vue.component('FirmTypeEdit', FirmTypeEdit)
import FirmTypeShow from './spaces/Admin/FirmType/show/basic.vue'
Vue.component('FirmTypeShow', FirmTypeShow)


import FirmFirmList from './spaces/Admin/FirmFirm/list/basic.vue'
Vue.component('FirmFirmList', FirmFirmList)
import FirmFirmForm from './spaces/Admin/FirmFirm/form/basic.vue'
Vue.component('FirmFirmForm', FirmFirmForm)
import FirmFirmEdit from './spaces/Admin/FirmFirm/edit/basic.vue'
Vue.component('FirmFirmEdit', FirmFirmEdit)
import FirmFirmShow from './spaces/Admin/FirmFirm/show/basic.vue'
Vue.component('FirmFirmShow', FirmFirmShow)



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
        axios.post('/Picaflor/choose_language', this.locale).then(function (response) {
                  // vm.lang=false
                  vm.locale.loading=true
                  window.location.replace("");
              }, function (response) {
                  // error callback
              });
      }
    },

}).$mount('#app')

