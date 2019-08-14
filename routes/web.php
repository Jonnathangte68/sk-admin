<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * Auth routes
 */
Route::group(['namespace' => 'Auth'], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    
    if (config('auth.users.registration')) {
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');
    }

    // Password Reset Routes...
    
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
    

    // Confirmation Routes...
    
    if (config('auth.users.confirm_email')) {
        Route::get('confirm/{user_by_code}', 'ConfirmController@confirm')->name('confirm');
        Route::get('confirm/resend/{user_by_email}', 'ConfirmController@sendEmail')->name('confirm.send');
    }
    

    // Social Authentication Routes...
    
    Route::get('social/redirect/{provider}', 'SocialLoginController@redirect')->name('social.redirect');
    Route::get('social/login/{provider}', 'SocialLoginController@login')->name('social.login');
    
});

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

    // Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('/countries', 'PaisController@index')->name('countries');
    Route::get('/countries/create', 'PaisController@create')->name('countries.create');
    Route::post('/countries/store', 'PaisController@store')->name('countries.store');
    Route::get('/countries/show/{id}', 'PaisController@show')->name('countries.show');
    Route::get('/countries/edit/{id}', 'PaisController@edit')->name('countries.edit');
    Route::post('/countries/update/{id}', 'PaisController@update')->name('countries.update');
    Route::get('/countries/delete/{id}', 'PaisController@destroy')->name('countries.delete');

    Route::get('/estados', 'EstadoController@index')->name('estados');
    Route::get('/estados/create', 'EstadoController@create')->name('estados.create');
    Route::post('/estados/store', 'EstadoController@store')->name('estados.store');
    Route::get('/estados/show/{id}', 'EstadoController@show')->name('estados.show');
    Route::get('/estados/edit/{id}', 'EstadoController@edit')->name('estados.edit');
    Route::post('/estados/update/{id}', 'EstadoController@update')->name('estados.update');
    Route::get('/estados/delete/{id}', 'EstadoController@destroy')->name('estados.delete');

    Route::get('/text-management', 'TextController@index')->name('text_management');
    Route::post('/text-management', 'TextController@create')->name('text_management.store');

    Route::get('/ciudades', 'CiudadController@index')->name('ciudades');
    Route::get('/ciudades/create', 'CiudadController@create')->name('ciudades.create');
    Route::post('/ciudades/store', 'CiudadController@store')->name('ciudades.store');
    Route::get('/ciudades/show/{id}', 'CiudadController@show')->name('ciudades.show');
    Route::get('/ciudades/edit/{id}', 'CiudadController@edit')->name('ciudades.edit');
    Route::post('/ciudades/update/{id}', 'CiudadController@update')->name('ciudades.update');
    Route::get('/ciudades/delete/{id}', 'CiudadController@destroy')->name('ciudades.delete');

    Route::get('/niveles', 'NivelController@index')->name('niveles');
    Route::get('/niveles/create', 'NivelController@create')->name('niveles.create');
    Route::post('/niveles/store', 'NivelController@store')->name('niveles.store');
    Route::get('/niveles/show/{id}', 'NivelController@show')->name('niveles.show');
    Route::get('/niveles/edit/{id}', 'NivelController@edit')->name('niveles.edit');
    Route::post('/niveles/update/{id}', 'NivelController@update')->name('niveles.update');
    Route::get('/niveles/delete/{id}', 'NivelController@destroy')->name('niveles.delete');

    Route::get('/categorias', 'CategoriaController@index')->name('categorias');
    Route::get('/categorias/create', 'CategoriaController@create')->name('categorias.create');
    Route::post('/categorias/store', 'CategoriaController@store')->name('categorias.store');
    Route::get('/categorias/show/{id}', 'CategoriaController@show')->name('categorias.show');
    Route::get('/categorias/edit/{id}', 'CategoriaController@edit')->name('categorias.edit');
    Route::post('/categorias/update/{id}', 'CategoriaController@update')->name('categorias.update');
    Route::get('/categorias/delete/{id}', 'CategoriaController@destroy')->name('categorias.delete');

    Route::get('/paginas', 'PaginaController@index')->name('paginas');
    Route::get('/paginas/create', 'PaginaController@create')->name('paginas.create');
    Route::post('/paginas/store', 'PaginaController@store')->name('paginas.store');
    Route::get('/paginas/show/{id}', 'PaginaController@show')->name('paginas.show');
    Route::get('/paginas/edit/{id}', 'Paginaontroller@edit')->name('paginas.edit');
    Route::post('/paginas/update/{id}', 'PaginaController@update')->name('paginas.update');
    Route::get('/paginas/delete/{id}', 'PaginaController@destroy')->name('paginas.delete');

    Route::get('/publicidades', 'PublicidadController@index')->name('publicidades');
    Route::get('/publicidades/create', 'PublicidadController@create')->name('publicidades.create');
    Route::post('/publicidades/store', 'PublicidadController@store')->name('publicidades.store');
    Route::get('/publicidades/show/{id}', 'PublicidadController@show')->name('publicidades.show');
    Route::get('/publicidades/edit/{id}', 'PublicidadController@edit')->name('publicidades.edit');
    Route::post('/publicidades/update/{id}', 'PublicidadController@update')->name('publicidades.update');
    Route::get('/publicidades/delete/{id}', 'PublicidadController@destroy')->name('publicidades.delete');

    Route::get('/subcategorias', 'SubcategoriaController@index')->name('subcategorias');
    Route::get('/subcategorias/create', 'SubcategoriaController@create')->name('subcategorias.create');
    Route::post('/subcategorias/store', 'SubcategoriaController@store')->name('subcategorias.store');
    Route::get('/subcategorias/show/{id}', 'SubcategoriaController@show')->name('subcategorias.show');
    Route::get('/subcategorias/edit/{id}', 'SubcategoriaController@edit')->name('subcategorias.edit');
    Route::post('/subcategorias/update/{id}', 'SubcategoriaController@update')->name('subcategorias.update');
    Route::get('/subcategorias/delete/{id}', 'SubcategoriaController@destroy')->name('subcategorias.delete');

    Route::get('/empresa', 'EmpresaController@index')->name('enterprise');
    Route::post('/empresa-registrar', 'EmpresaController@update')->name('empresar');
    Route::get('/back_enterprise', 'EmpresaController@back');

    Route::get('/bulk-mail', 'EmailController@bulkMail')->name('blkmail');
    Route::get('/mail-management', 'EmailController@manageMail')->name('managmail');
    Route::get('/template-tool', 'EmailController@manageTemplate')->name('managtemplate');
    Route::post('/store', 'EmailController@storeconfig')->name('store_new_email_config');
    Route::post('/store-new-email', 'EmailController@storenewemailtemplate')->name('storenewemailtemplate');

    Route::get('/text-management-edit-text/{id}', 'TextController@edit');

    Route::get('/page-texts', 'WebsiteAdmin@index')->name('dynamic_titles');
    Route::get('/page-style', 'WebsiteAdmin@index')->name('dynamic_style');
    Route::get('/pages', 'WebsiteAdmin@pagesAll')->name('pages_all');
    Route::get('/edit-page/{page}', 'WebsiteAdmin@editPage')->name('edit_page');

    Route::post('/replace-content', 'WebsiteAdmin@replaceCont')->name('replace-content');

    //Users
    Route::get('users', 'UserController@index')->name('users');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    Route::get('permissions', 'PermissionController@index')->name('permissions');
    Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat');
    Route::get('dashboard/log-chart', 'DashboardController@getLogChartData')->name('dashboard.log.chart');
    Route::get('dashboard/registration-chart', 'DashboardController@getRegistrationChartData')->name('dashboard.registration.chart');


    Route::get('/manage-pub', 'PublicidadController@index')->name('adds');
});


Route::get('/', 'HomeController@index');

/**
 * Membership
 */

Route::group(['as' => 'protection.'], function () {
    Route::get('membership', 'MembershipController@index')->name('membership')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('membership/access-denied', 'MembershipController@failed')->name('membership.failed');
    Route::get('membership/clear-cache/', 'MembershipController@clearValidationCache')->name('membership.clear_validation_cache');
});

