

export default [

	{path : '/account',  component: require('./spaces/Admin/Account/list.vue') },
	{path : '/account/create',  component: require('./spaces/Admin/Account/form.vue') },
	{path : '/account/:id',  component: require('./spaces/Admin/Account/edit.vue') },
	{path : '/account/:id',  component: require('./spaces/Admin/Account/show.vue') },


	{path : '/contact',  component: require('./spaces/Admin/Contact/list.vue') },
	{path : '/contact/create',  component: require('./spaces/Admin/Contact/form.vue') },
	{path : '/contact/:id',  component: require('./spaces/Admin/Contact/edit.vue') },
	{path : '/contact/:id',  component: require('./spaces/Admin/Contact/show.vue') },


	{path : '/currency',  component: require('./spaces/Admin/Currency/list.vue') },
	{path : '/currency/create',  component: require('./spaces/Admin/Currency/form.vue') },
	{path : '/currency/:id',  component: require('./spaces/Admin/Currency/edit.vue') },
	{path : '/currency/:id',  component: require('./spaces/Admin/Currency/show.vue') },


	{path : '/invoice',  component: require('./spaces/Admin/Invoice/list.vue') },
	{path : '/invoice/create',  component: require('./spaces/Admin/Invoice/form.vue') },
	{path : '/invoice/:id',  component: require('./spaces/Admin/Invoice/edit.vue') },
	{path : '/invoice/:id',  component: require('./spaces/Admin/Invoice/show.vue') },


	{path : '/item',  component: require('./spaces/Admin/Item/list.vue') },
	{path : '/item/create',  component: require('./spaces/Admin/Item/form.vue') },
	{path : '/item/:id',  component: require('./spaces/Admin/Item/edit.vue') },
	{path : '/item/:id',  component: require('./spaces/Admin/Item/show.vue') },


	{path : '/organization',  component: require('./spaces/Admin/Organization/list.vue') },
	{path : '/organization/create',  component: require('./spaces/Admin/Organization/form.vue') },
	{path : '/organization/:id',  component: require('./spaces/Admin/Organization/edit.vue') },
	{path : '/organization/:id',  component: require('./spaces/Admin/Organization/show.vue') },


	{path : '/payment',  component: require('./spaces/Admin/Payment/list.vue') },
	{path : '/payment/create',  component: require('./spaces/Admin/Payment/form.vue') },
	{path : '/payment/:id',  component: require('./spaces/Admin/Payment/edit.vue') },
	{path : '/payment/:id',  component: require('./spaces/Admin/Payment/show.vue') },


	{path : '/person',  component: require('./spaces/Admin/Person/list.vue') },
	{path : '/person/create',  component: require('./spaces/Admin/Person/form.vue') },
	{path : '/person/:id',  component: require('./spaces/Admin/Person/edit.vue') },
	{path : '/person/:id',  component: require('./spaces/Admin/Person/show.vue') },



]
