<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
	Route::get('users-all', ['uses' => 'UsersController@getAPIUsersAll']);
	});



Route::get('/charts',['uses' => 'AdminsController@getKnsseCharts']);

//THE WEB MIDDLEWARE IS ADDED BY L5.2
Route::group(['middleware' => ['web','beforeFilter']], function () {
	Route::get('resources/qrcode',  ['as' => 'qr_index','uses' => 'ResourcesController@getQrIndex']);
	Route::get('resources/qrcode-emp',  ['as' => 'qr_index_emp','uses' => 'ResourcesController@getQrIndexEmp']);
	Route::get('resources/generate-qrcode',  ['as' => 'gen_qrcode','uses' => 'ResourcesController@getGenQRCode']);
	Route::get('resources/generate-qrcode-emp',  ['as' => 'gen_qrcode_emp','uses' => 'ResourcesController@getGenQRCodeEmp']);
	
	//HOME ROUTE
	Route::get('/', ['as'=>'home_index', 'uses' => 'HomeController@home']);
	Route::get('registration', ['as'=>'registration_view','uses'=>'UsersController@getRegistration']);
	Route::post('registration', ['uses'=>'UsersController@postRegistration']);
	Route::post('users/return-users',  ['uses' => 'UsersController@postReturnUsers', 'middleware' => ['acl:admins/acl/view']]);
	//USER PREFIX
	Route::group(['prefix' => 'users'], function () {
		Route::get('login', ['as'=>'users_login','uses'=>'UsersController@getLogin']);
		Route::post('login',['uses'=>'UsersController@postLogin']);
		Route::post('login-modal', ['uses'=>'UsersController@postLoginModal']);
		Route::get('profile/{username}',  ['as'=>'users_profile','uses' => 'UsersController@getProfile', function ($username) {}]);
		Route::post('profile',  ['as'=>'users_profile_post','uses' => 'UsersController@postProfile']);
		Route::post('user-auth', ['uses'=>'UsersController@postUserAuth']);
		Route::post('send-file', ['uses'=>'UsersController@postSendFile']);
		Route::post('validate', ['uses'=>'UsersController@postValidate']);
		Route::post('send-file-temp', ['uses'=>'UsersController@postSendFileTemp']);
		Route::post('request-users','UsersController@postRequestUsers');
		Route::post('request-user-information','UsersController@postRequestUserInformation');
	});	

	//ADMIN PREFIX
	Route::group(['prefix' => 'admins'], function () {
		Route::get('login', 'AdminsController@getLogin');
		Route::post('login', 'AdminsController@postLogin');
		Route::get('logout', 'AdminsController@getLogout');			
	});

	Route::get('/reminders/forgot', 'RemindersController@getForgot');
	Route::post('/reminders/forgot', 'RemindersController@postForgot');
	Route::get('/reminders/reset/{token}', 'RemindersController@getReset');
	Route::post('/reminders/reset', 'RemindersController@postReset');

	/** AUTH GROUP **/
	Route::group(['middleware' => ['auth']], function(){
		/** ADMINS ACL GROUP **/
		Route::group(['prefix' => 'admins','middleware' => 'admins_acl'], function () {
			Route::get('',  ['as'=>'admins_index', 'uses' => 'AdminsController@getIndex']);

			//K-NSSE
			Route::get('k-nsse-upload',  ['as' => 'k_upload','uses' => 'AdminsController@getKNSSEIndex']);
			Route::post('knsse-file-upload',  ['uses' => 'AdminsController@postKNSSEFileUpload']);
			//COMPANIES
			Route::get('companies',  ['as' => 'companies_index','uses' => 'CompaniesController@getIndex']);
			Route::get('companies/add',  ['as' => 'companies_add','uses' => 'CompaniesController@getAdd']);
			Route::post('companies/add',  ['uses' => 'CompaniesController@postAdd']);
			Route::get('companies/edit/{id}',  ['as' => 'companies_edit','uses' => 'CompaniesController@getEdit']);
			Route::post('companies/edit',  ['uses' => 'CompaniesController@postEdit']);
			Route::get('companies/view',  ['as' => 'companies_view','uses' => 'CompaniesController@getView']);
			Route::post('companies/view',  ['uses' => 'CompaniesController@postView']);
			Route::post('companies/delete',  ['uses' => 'CompaniesController@postDelete']);
			
			//RESOURCES
			Route::get('resources',  ['as' => 'resources_index','uses' => 'ResourcesController@getIndex']);
			Route::get('resources/render-excel/{src}',  ['as' => 'resources_download_excel','uses' => 'ResourcesController@getViewExcel']);
			Route::get('resources/add',  ['as' => 'resources_add','uses' => 'ResourcesController@getAdd']);
			Route::post('resources/add',  ['uses' => 'ResourcesController@postAdd']);
			Route::get('resources/edit',  ['as' => 'resources_edit','uses' => 'ResourcesController@getEdit']);
			Route::post('resources/edit',  ['uses' => 'ResourcesController@postEdit']);
			Route::get('resources/view/{id}',  ['as' => 'resources_view','uses' => 'ResourcesController@getView']);
			Route::post('resources/view',  ['uses' => 'ResourcesController@postView']);
			Route::post('resources/delete',  ['uses' => 'ResourcesController@postDelete']);
			Route::post('resources/file-upload',  ['uses' => 'ResourcesController@postFileupload']);
			Route::post('resources/file-upload-replace',  ['uses' => 'ResourcesController@postFileuploadReplace']);

			Route::get('costs',  ['as' => 'costs_index','uses' => 'CostsController@getIndex']);
			Route::get('costs/{id}',  ['as' => 'costs_index_name','uses' => 'CostsController@getIndexName']);
			Route::get('costs/add',  ['as' => 'costs_add','uses' => 'CostsController@getAdd']);
			Route::post('costs/add',  ['uses' => 'CostsController@postAdd']);
			Route::get('costs/edit',  ['as' => 'costs_edit','uses' => 'CostsController@getEdit']);
			Route::post('costs/edit',  ['uses' => 'CostsController@postEdit']);
			Route::get('costs/view/{id}',  ['as' => 'costs_view','uses' => 'CostsController@getView']);
			Route::post('costs/view',  ['uses' => 'CostsController@postView']);
			Route::post('costs/delete',  ['uses' => 'CostsController@postDelete']);
			Route::get('c/generate-pdf-popup',  ['as' => 'gen_pdf_link','uses' => 'CostsController@getGenPdf']);
			Route::get('c/generate-excel-popup',  ['as' => 'gen_excel_link','uses' => 'CostsController@getGenExcel']);
			Route::get('c/generate-print-popup',  ['as' => 'gen_print_link','uses' => 'CostsController@getGenPrint']);
			Route::post('costs/update-report',  ['uses' => 'CostsController@postUpdateReport']);

			//ROLES
			Route::get('roles',  ['as'=>'roles_index', 'uses' => 'RolesController@getIndex']);
			Route::get('roles/add',  ['as'=>'roles_add', 'uses' => 'RolesController@getAdd']);
			Route::post('roles/add',  ['uses' => 'RolesController@postAdd']);
			Route::get('roles/edit/{id}',  ['as'=>'roles_edit', 'uses' => 'RolesController@getEdit']);
			Route::post('roles/edit',  ['as'=>'roles_update','uses' => 'RolesController@postEdit']);
			Route::get('roles/delete-data/{id}',  ['as'=>'roles_delete', 'uses' => 'RolesController@getDelete']);

			//PERMISSIONS
			Route::get('permissions',  ['as'=>'permissions_index', 'uses' => 'PermissionsController@getIndex']);
			Route::get('permissions/add',  ['as'=>'permissions_add','uses' => 'PermissionsController@getAdd']);
			Route::post('permissions/add',  ['uses' => 'PermissionsController@postAdd']);
			Route::get('permissions/edit/{id}', ['as' => 'permissions_edit', 'uses' => 'PermissionsController@getEdit']);
			Route::post('permissions/edit',  ['uses' => 'PermissionsController@postEdit']);
			Route::get('permissions/delete-data/{id}',  ['as'=>'permissions_delete','uses' => 'PermissionsController@getDelete']);

			//PERMISSIONS ROLES
			Route::get('permission-roles',  ['as'=>'permission_roles_index', 'uses' => 'PermissionRolesController@getIndex']);
			Route::get('permission-roles/add',  ['as'=>'permission_roles_add', 'uses' => 'PermissionRolesController@getAdd']);
			Route::post('permission-roles/add',  ['uses' => 'PermissionRolesController@postAdd']);
			Route::get('permission-roles/edit/{id}',  ['as'=>'permission_roles_edit', 'uses' => 'PermissionRolesController@getEdit']);
			Route::post('permission-roles/edit',  ['uses' => 'PermissionRolesController@postEdit']);
			Route::get('permission-roles/delete-data/{id}',  ['as'=>'permission_roles_delete', 'uses' => 'PermissionRolesController@getDelete']);

			//USER ROUTE
			Route::get('users',  ['as' => 'users_index','uses' => 'UsersController@getIndex']);
			Route::get('users/add',  ['as' => 'users_add','uses' => 'UsersController@getAdd']);
			Route::post('users/add',  ['uses' => 'UsersController@postAdd']);
			Route::get('users/edit/{id}',  ['as' => 'users_edit','uses' => 'UsersController@getEdit']);
			Route::post('users/edit',  ['uses' => 'UsersController@postEdit']);
			Route::get('users/view/{id}',  ['as' => 'users_view','uses' => 'UsersController@getView']);
			Route::post('users/view',  ['uses' => 'UsersController@postView']);
			Route::post('users/delete',  ['uses' => 'UsersController@postDelete']);
			Route::post('users/invoice-users',  ['uses' => 'UsersController@postInvoiceUsers']);
			Route::post('users/user-info',  ['uses' => 'UsersController@postUserInfo']);
		});

		/** EMPLOYEE ACL GROUP **/
		Route::group(['prefix' => 'employees','middleware' => 'employee_acl'], function () {
			Route::get('',  ['as'=>'employees_index', 'uses' => 'EmployeesController@getIndex']);
			Route::get('check-sheet-view',  ['as'=>'check_sheet_view', 'uses' => 'EmployeesController@getCheckSheetView']);

			//GENS
			Route::get('generate-print-popup',  ['as' => 'gen_print_link_emp','uses' => 'EmployeesController@getGenPrint']);
			Route::get('generate-pdf-popup',  ['as' => 'gen_pdf_link_emp','uses' => 'EmployeesController@getGenPdf']);
		});
	});

	//PERMISSIONS ROUTE
	Route::group(['prefix' => 'permissions'], function () {
		Route::get('auto-update', ['uses'=>'PermissionsController@getAutoUpdate']);
	});
});
