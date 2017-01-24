

export default [

	{path : '/user',  component: require('./spaces/Web/User/list.vue') },
	{path : '/user/create',  component: require('./spaces/Web/User/form.vue') },
	{path : '/user/:id',  component: require('./spaces/Web/User/edit.vue') },
	{path : '/user/:id',  component: require('./spaces/Web/User/show.vue') },


	{path : '/role_user',  component: require('./spaces/Web/RoleUser/list.vue') },
	{path : '/role_user/create',  component: require('./spaces/Web/RoleUser/form.vue') },
	{path : '/role_user/:id',  component: require('./spaces/Web/RoleUser/edit.vue') },
	{path : '/role_user/:id',  component: require('./spaces/Web/RoleUser/show.vue') },


	{path : '/role',  component: require('./spaces/Web/Role/list.vue') },
	{path : '/role/create',  component: require('./spaces/Web/Role/form.vue') },
	{path : '/role/:id',  component: require('./spaces/Web/Role/edit.vue') },
	{path : '/role/:id',  component: require('./spaces/Web/Role/show.vue') },


	{path : '/permission',  component: require('./spaces/Web/Permission/list.vue') },
	{path : '/permission/create',  component: require('./spaces/Web/Permission/form.vue') },
	{path : '/permission/:id',  component: require('./spaces/Web/Permission/edit.vue') },
	{path : '/permission/:id',  component: require('./spaces/Web/Permission/show.vue') },


	{path : '/permission_role',  component: require('./spaces/Web/PermissionRole/list.vue') },
	{path : '/permission_role/create',  component: require('./spaces/Web/PermissionRole/form.vue') },
	{path : '/permission_role/:id',  component: require('./spaces/Web/PermissionRole/edit.vue') },
	{path : '/permission_role/:id',  component: require('./spaces/Web/PermissionRole/show.vue') },



]
