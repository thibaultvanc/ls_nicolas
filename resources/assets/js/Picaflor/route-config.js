

export default [

	{path : '/user',  component: require('./spaces/Admin/User/list.vue') },
	{path : '/user/create',  component: require('./spaces/Admin/User/form.vue') },
	{path : '/user/:id',  component: require('./spaces/Admin/User/edit.vue') },
	{path : '/user/:id',  component: require('./spaces/Admin/User/show.vue') },


	{path : '/role_user',  component: require('./spaces/Admin/RoleUser/list.vue') },
	{path : '/role_user/create',  component: require('./spaces/Admin/RoleUser/form.vue') },
	{path : '/role_user/:id',  component: require('./spaces/Admin/RoleUser/edit.vue') },
	{path : '/role_user/:id',  component: require('./spaces/Admin/RoleUser/show.vue') },


	{path : '/role',  component: require('./spaces/Admin/Role/list.vue') },
	{path : '/role/create',  component: require('./spaces/Admin/Role/form.vue') },
	{path : '/role/:id',  component: require('./spaces/Admin/Role/edit.vue') },
	{path : '/role/:id',  component: require('./spaces/Admin/Role/show.vue') },


	{path : '/permission',  component: require('./spaces/Admin/Permission/list.vue') },
	{path : '/permission/create',  component: require('./spaces/Admin/Permission/form.vue') },
	{path : '/permission/:id',  component: require('./spaces/Admin/Permission/edit.vue') },
	{path : '/permission/:id',  component: require('./spaces/Admin/Permission/show.vue') },


	{path : '/permission_role',  component: require('./spaces/Admin/PermissionRole/list.vue') },
	{path : '/permission_role/create',  component: require('./spaces/Admin/PermissionRole/form.vue') },
	{path : '/permission_role/:id',  component: require('./spaces/Admin/PermissionRole/edit.vue') },
	{path : '/permission_role/:id',  component: require('./spaces/Admin/PermissionRole/show.vue') },


	{path : '/firm',  component: require('./spaces/Admin/Firm/list.vue') },
	{path : '/firm/create',  component: require('./spaces/Admin/Firm/form.vue') },
	{path : '/firm/:id',  component: require('./spaces/Admin/Firm/edit.vue') },
	{path : '/firm/:id',  component: require('./spaces/Admin/Firm/show.vue') },


	{path : '/brand_user',  component: require('./spaces/Admin/BrandUser/list.vue') },
	{path : '/brand_user/create',  component: require('./spaces/Admin/BrandUser/form.vue') },
	{path : '/brand_user/:id',  component: require('./spaces/Admin/BrandUser/edit.vue') },
	{path : '/brand_user/:id',  component: require('./spaces/Admin/BrandUser/show.vue') },


	{path : '/country',  component: require('./spaces/Admin/Country/list.vue') },
	{path : '/country/create',  component: require('./spaces/Admin/Country/form.vue') },
	{path : '/country/:id',  component: require('./spaces/Admin/Country/edit.vue') },
	{path : '/country/:id',  component: require('./spaces/Admin/Country/show.vue') },


	{path : '/currency',  component: require('./spaces/Admin/Currency/list.vue') },
	{path : '/currency/create',  component: require('./spaces/Admin/Currency/form.vue') },
	{path : '/currency/:id',  component: require('./spaces/Admin/Currency/edit.vue') },
	{path : '/currency/:id',  component: require('./spaces/Admin/Currency/show.vue') },


	{path : '/invoices',  component: require('./spaces/Admin/Invoices/list.vue') },
	{path : '/invoices/create',  component: require('./spaces/Admin/Invoices/form.vue') },
	{path : '/invoices/:id',  component: require('./spaces/Admin/Invoices/edit.vue') },
	{path : '/invoices/:id',  component: require('./spaces/Admin/Invoices/show.vue') },


	{path : '/product',  component: require('./spaces/Admin/Product/list.vue') },
	{path : '/product/create',  component: require('./spaces/Admin/Product/form.vue') },
	{path : '/product/:id',  component: require('./spaces/Admin/Product/edit.vue') },
	{path : '/product/:id',  component: require('./spaces/Admin/Product/show.vue') },


	{path : '/transaction',  component: require('./spaces/Admin/Transaction/list.vue') },
	{path : '/transaction/create',  component: require('./spaces/Admin/Transaction/form.vue') },
	{path : '/transaction/:id',  component: require('./spaces/Admin/Transaction/edit.vue') },
	{path : '/transaction/:id',  component: require('./spaces/Admin/Transaction/show.vue') },


	{path : '/site',  component: require('./spaces/Admin/Site/list.vue') },
	{path : '/site/create',  component: require('./spaces/Admin/Site/form.vue') },
	{path : '/site/:id',  component: require('./spaces/Admin/Site/edit.vue') },
	{path : '/site/:id',  component: require('./spaces/Admin/Site/show.vue') },


	{path : '/invoices_product',  component: require('./spaces/Admin/InvoicesProduct/list.vue') },
	{path : '/invoices_product/create',  component: require('./spaces/Admin/InvoicesProduct/form.vue') },
	{path : '/invoices_product/:id',  component: require('./spaces/Admin/InvoicesProduct/edit.vue') },
	{path : '/invoices_product/:id',  component: require('./spaces/Admin/InvoicesProduct/show.vue') },


	{path : '/plan',  component: require('./spaces/Admin/Plan/list.vue') },
	{path : '/plan/create',  component: require('./spaces/Admin/Plan/form.vue') },
	{path : '/plan/:id',  component: require('./spaces/Admin/Plan/edit.vue') },
	{path : '/plan/:id',  component: require('./spaces/Admin/Plan/show.vue') },


	{path : '/subscription',  component: require('./spaces/Admin/Subscription/list.vue') },
	{path : '/subscription/create',  component: require('./spaces/Admin/Subscription/form.vue') },
	{path : '/subscription/:id',  component: require('./spaces/Admin/Subscription/edit.vue') },
	{path : '/subscription/:id',  component: require('./spaces/Admin/Subscription/show.vue') },


	{path : '/plan_family',  component: require('./spaces/Admin/PlanFamily/list.vue') },
	{path : '/plan_family/create',  component: require('./spaces/Admin/PlanFamily/form.vue') },
	{path : '/plan_family/:id',  component: require('./spaces/Admin/PlanFamily/edit.vue') },
	{path : '/plan_family/:id',  component: require('./spaces/Admin/PlanFamily/show.vue') },


	{path : '/plan_period',  component: require('./spaces/Admin/PlanPeriod/list.vue') },
	{path : '/plan_period/create',  component: require('./spaces/Admin/PlanPeriod/form.vue') },
	{path : '/plan_period/:id',  component: require('./spaces/Admin/PlanPeriod/edit.vue') },
	{path : '/plan_period/:id',  component: require('./spaces/Admin/PlanPeriod/show.vue') },


	{path : '/payment_provider',  component: require('./spaces/Admin/PaymentProvider/list.vue') },
	{path : '/payment_provider/create',  component: require('./spaces/Admin/PaymentProvider/form.vue') },
	{path : '/payment_provider/:id',  component: require('./spaces/Admin/PaymentProvider/edit.vue') },
	{path : '/payment_provider/:id',  component: require('./spaces/Admin/PaymentProvider/show.vue') },


	{path : '/plan_type',  component: require('./spaces/Admin/PlanType/list.vue') },
	{path : '/plan_type/create',  component: require('./spaces/Admin/PlanType/form.vue') },
	{path : '/plan_type/:id',  component: require('./spaces/Admin/PlanType/edit.vue') },
	{path : '/plan_type/:id',  component: require('./spaces/Admin/PlanType/show.vue') },


	{path : '/product_type',  component: require('./spaces/Admin/ProductType/list.vue') },
	{path : '/product_type/create',  component: require('./spaces/Admin/ProductType/form.vue') },
	{path : '/product_type/:id',  component: require('./spaces/Admin/ProductType/edit.vue') },
	{path : '/product_type/:id',  component: require('./spaces/Admin/ProductType/show.vue') },


	{path : '/organization',  component: require('./spaces/Admin/Organization/list.vue') },
	{path : '/organization/create',  component: require('./spaces/Admin/Organization/form.vue') },
	{path : '/organization/:id',  component: require('./spaces/Admin/Organization/edit.vue') },
	{path : '/organization/:id',  component: require('./spaces/Admin/Organization/show.vue') },


	{path : '/organization_user',  component: require('./spaces/Admin/OrganizationUser/list.vue') },
	{path : '/organization_user/create',  component: require('./spaces/Admin/OrganizationUser/form.vue') },
	{path : '/organization_user/:id',  component: require('./spaces/Admin/OrganizationUser/edit.vue') },
	{path : '/organization_user/:id',  component: require('./spaces/Admin/OrganizationUser/show.vue') },


	{path : '/adress',  component: require('./spaces/Admin/Adress/list.vue') },
	{path : '/adress/create',  component: require('./spaces/Admin/Adress/form.vue') },
	{path : '/adress/:id',  component: require('./spaces/Admin/Adress/edit.vue') },
	{path : '/adress/:id',  component: require('./spaces/Admin/Adress/show.vue') },


	{path : '/firm_type',  component: require('./spaces/Admin/FirmType/list.vue') },
	{path : '/firm_type/create',  component: require('./spaces/Admin/FirmType/form.vue') },
	{path : '/firm_type/:id',  component: require('./spaces/Admin/FirmType/edit.vue') },
	{path : '/firm_type/:id',  component: require('./spaces/Admin/FirmType/show.vue') },


	{path : '/firm_firm',  component: require('./spaces/Admin/FirmFirm/list.vue') },
	{path : '/firm_firm/create',  component: require('./spaces/Admin/FirmFirm/form.vue') },
	{path : '/firm_firm/:id',  component: require('./spaces/Admin/FirmFirm/edit.vue') },
	{path : '/firm_firm/:id',  component: require('./spaces/Admin/FirmFirm/show.vue') },



]
