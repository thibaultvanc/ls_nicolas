

export default [

	{path : '/user',  component: require('./spaces/Admin/User/list.vue') },
	{path : '/user/create',  component: require('./spaces/Admin/User/form.vue') },
	{path : '/user/:id',  component: require('./spaces/Admin/User/edit.vue') },
	{path : '/user/:id',  component: require('./spaces/Admin/User/show.vue') },


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


	{path : '/role',  component: require('./spaces/Admin/Role/list.vue') },
	{path : '/role/create',  component: require('./spaces/Admin/Role/form.vue') },
	{path : '/role/:id',  component: require('./spaces/Admin/Role/edit.vue') },
	{path : '/role/:id',  component: require('./spaces/Admin/Role/show.vue') },


	{path : '/permission',  component: require('./spaces/Admin/Permission/list.vue') },
	{path : '/permission/create',  component: require('./spaces/Admin/Permission/form.vue') },
	{path : '/permission/:id',  component: require('./spaces/Admin/Permission/edit.vue') },
	{path : '/permission/:id',  component: require('./spaces/Admin/Permission/show.vue') },


	{path : '/role_user',  component: require('./spaces/Admin/RoleUser/list.vue') },
	{path : '/role_user/create',  component: require('./spaces/Admin/RoleUser/form.vue') },
	{path : '/role_user/:id',  component: require('./spaces/Admin/RoleUser/edit.vue') },
	{path : '/role_user/:id',  component: require('./spaces/Admin/RoleUser/show.vue') },


	{path : '/permission_role',  component: require('./spaces/Admin/PermissionRole/list.vue') },
	{path : '/permission_role/create',  component: require('./spaces/Admin/PermissionRole/form.vue') },
	{path : '/permission_role/:id',  component: require('./spaces/Admin/PermissionRole/edit.vue') },
	{path : '/permission_role/:id',  component: require('./spaces/Admin/PermissionRole/show.vue') },



]
