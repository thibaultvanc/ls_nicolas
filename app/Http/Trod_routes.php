<?php
Route::group(['prefix'=>'Trod'], function () { 
Route::post('/choose_language', 'LanguageController@choose');

 

	Route::auth();
	Route::group(['prefix'=>'Admin'], function () {
		Route::get('/', 'AdminController@home');

	});


		Route::get('/', 'WebController@home');

	Route::resource("user", "Web\UserController");
	Route::resource("role_user", "Web\RoleUserController");
	Route::resource("role", "Web\RoleController");
	Route::resource("permission", "Web\PermissionController");
	Route::resource("permission_role", "Web\PermissionRoleController");
});