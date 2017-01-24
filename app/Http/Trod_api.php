<?php

Route::group(['prefix'=>'Trod'], function () {
	Route::resource("user", "Web\UserApiController");
		Route::post("user/delete_many", "Web\UserApiController@deleteMany");
		Route::get("user/{user}/roles", "Web\UserApiController@roles");
		Route::post("user/{user}/attach_roles", "Web\UserApiController@attach_roles");
		Route::post("user/{user}/detach_role/{value}", "Web\UserApiController@detach_roles");


	Route::resource("role_user", "Web\RoleUserApiController");
		Route::post("role_user/delete_many", "Web\RoleUserApiController@deleteMany");


	Route::resource("role", "Web\RoleApiController");
		Route::post("role/delete_many", "Web\RoleApiController@deleteMany");
		Route::get("role/{role}/users", "Web\RoleApiController@users");
		Route::post("role/{role}/attach_users", "Web\RoleApiController@attach_users");
		Route::post("role/{role}/detach_user/{value}", "Web\RoleApiController@detach_users");
		Route::get("role/{role}/permissions", "Web\RoleApiController@permissions");
		Route::post("role/{role}/attach_permissions", "Web\RoleApiController@attach_permissions");
		Route::post("role/{role}/detach_permission/{value}", "Web\RoleApiController@detach_permissions");


	Route::resource("permission", "Web\PermissionApiController");
		Route::post("permission/delete_many", "Web\PermissionApiController@deleteMany");
		Route::get("permission/{permission}/roles", "Web\PermissionApiController@roles");
		Route::post("permission/{permission}/attach_roles", "Web\PermissionApiController@attach_roles");
		Route::post("permission/{permission}/detach_role/{value}", "Web\PermissionApiController@detach_roles");


	Route::resource("permission_role", "Web\PermissionRoleApiController");
		Route::post("permission_role/delete_many", "Web\PermissionRoleApiController@deleteMany");


});