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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/stisla', function () {
    return view('stisla.dashboard');
});
Route::get('/stisla/index-0', function () {
    return view('stisla.index-0');
});
Route::get('/stisla/layout-default', function () {
    return view('stisla.layout-default');
});
Route::get('/stisla/layout-transparent', function () {
    return view('stisla.layout-transparent');
});
Route::get('/stisla/layout', function () {
    return view('stisla.layout');
});
Route::get('/stisla/layout-top-navigation', function () {
    return view('stisla.layout-top-navigation');
});
Route::get('/stisla/blank', function () {
    return view('stisla.blank');
});
Route::get('/stisla/bootstrap-alert', function () {
    return view('stisla.bootstrap-alert');
});
Route::get('/stisla/bootstrap-badge', function () {
    return view('stisla.bootstrap-badge');
});
Route::get('/stisla/bootstrap-breadcrumb', function () {
    return view('stisla.bootstrap-breadcrumb');
});
Route::get('/stisla/bootstrap-buttons', function () {
    return view('stisla.bootstrap-buttons');
});
Route::get('/stisla/bootstrap-card', function () {
    return view('stisla.bootstrap-card');
});
Route::get('/stisla/bootstrap-carousel', function () {
    return view('stisla.bootstrap-carousel');
});
Route::get('/stisla/bootstrap-collapse', function () {
    return view('stisla.bootstrap-collapse');
});
Route::get('/stisla/bootstrap-dropdown', function () {
    return view('stisla.bootstrap-dropdown');
});
Route::get('/stisla/bootstrap-form', function () {
    return view('stisla.bootstrap-form');
});
Route::get('/stisla/bootstrap-list-group', function () {
    return view('stisla.bootstrap-list-group');
});
Route::get('/stisla/bootstrap-media-object', function () {
    return view('stisla.bootstrap-media-object');
});
Route::get('/stisla/bootstrap-modal', function () {
    return view('stisla.bootstrap-modal');
});
Route::get('/stisla/bootstrap-nav', function () {
    return view('stisla.bootstrap-nav');
});
Route::get('/stisla/bootstrap-pagination', function () {
    return view('stisla.bootstrap-pagination');
});
Route::get('/stisla/bootstrap-popover', function () {
    return view('stisla.bootstrap-popover');
});
Route::get('/stisla/bootstrap-progress', function () {
    return view('stisla.bootstrap-progress');
});
Route::get('/stisla/bootstrap-table', function () {
    return view('stisla.bootstrap-table');
});
Route::get('/stisla/bootstrap-tooltip', function () {
    return view('stisla.bootstrap-tooltip');
});
Route::get('/stisla/bootstrap-typography', function () {
    return view('stisla.bootstrap-typography');
});
Route::get('/stisla/components-article', function () {
    return view('stisla.components-article');
});
Route::get('/stisla/components-avatar', function () {
    return view('stisla.components-avatar');
});
Route::get('/stisla/components-chat-box', function () {
    return view('stisla.components-chat-box');
});
Route::get('/stisla/components-gallery', function () {
    return view('stisla.components-gallery');
});
Route::get('/stisla/components-hero', function () {
    return view('stisla.components-hero');
});
Route::get('/stisla/components-multiple-upload', function () {
    return view('stisla.components-multiple-upload');
});
Route::get('/stisla/components-pricing', function () {
    return view('stisla.components-pricing');
});
Route::get('/stisla/components-statistic', function () {
    return view('stisla.components-statistic');
});
Route::get('/stisla/components-tab', function () {
    return view('stisla.components-tab');
});
Route::get('/stisla/components-table', function () {
    return view('stisla.components-table');
});
Route::get('/stisla/components-user', function () {
    return view('stisla.components-user');
});
Route::get('/stisla/components-wizard', function () {
    return view('stisla.components-wizard');
});
Route::get('/stisla/forms-advanced-form', function () {
    return view('stisla.forms-advanced-form');
});
Route::get('/stisla/forms-editor', function () {
    return view('stisla.forms-editor');
});
Route::get('/stisla/forms-validation', function () {
    return view('stisla.forms-validation');
});
Route::get('/stisla/gmaps-advanced-route', function () {
    return view('stisla.gmaps-advanced-route');
});
Route::get('/stisla/gmaps-draggable-marker', function () {
    return view('stisla.gmaps-draggable-marker');
});
Route::get('/stisla/gmaps-geocoding', function () {
    return view('stisla.gmaps-geocoding');
});
Route::get('/stisla/gmaps-geolocation', function () {
    return view('stisla.gmaps-geolocation');
});
Route::get('/stisla/gmaps-marker', function () {
    return view('stisla.gmaps-marker');
});
Route::get('/stisla/gmaps-multiple-marker', function () {
    return view('stisla.gmaps-multiple-marker');
});
Route::get('/stisla/gmaps-route', function () {
    return view('stisla.gmaps-route');
});
Route::get('/stisla/gmaps-simple', function () {
    return view('stisla.gmaps-simple');
});
Route::get('/stisla/modules-calendar', function () {
    return view('stisla.modules-calendar');
});
Route::get('/stisla/modules-chartjs', function () {
    return view('stisla.modules-chartjs');
});
Route::get('/stisla/modules-datatables', function () {
    return view('stisla.modules-datatables');
});
Route::get('/stisla/modules-flag', function () {
    return view('stisla.modules-flag');
});
Route::get('/stisla/modules-font-awesome', function () {
    return view('stisla.modules-font-awesome');
});
Route::get('/stisla/modules-ion-icons', function () {
    return view('stisla.modules-ion-icons');
});
Route::get('/stisla/modules-owl-carousel', function () {
    return view('stisla.modules-owl-carousel');
});
Route::get('/stisla/modules-sparkline', function () {
    return view('stisla.modules-sparkline');
});
Route::get('/stisla/modules-sweet-alert', function () {
    return view('stisla.modules-sweet-alert');
});
Route::get('/stisla/modules-toastr', function () {
    return view('stisla.modules-toastr');
});
Route::get('/stisla/modules-vector-map', function () {
    return view('stisla.modules-vector-map');
});
Route::get('/stisla/modules-weather-icon', function () {
    return view('stisla.modules-weather-icon');
});
Route::get('/stisla/auth-forgot-password', function () {
    return view('stisla.auth-forgot-password');
});
Route::get('/stisla/auth-login', function () {
    return view('stisla.auth-login');
});
Route::get('/stisla/auth-login-2', function () {
    return view('stisla.auth-login-2');
});
Route::get('/stisla/auth-register', function () {
    return view('stisla.auth-register');
});
Route::get('/stisla/errors-503', function () {
    return view('stisla.errors-503');
});
Route::get('/stisla/errors-403', function () {
    return view('stisla.errors-403');
});
Route::get('/stisla/errors-404', function () {
    return view('stisla.errors-404');
});
Route::get('/stisla/errors-500', function () {
    return view('stisla.errors-500');
});
Route::get('/stisla/features-activities', function () {
    return view('stisla.features-activities');
});
Route::get('/stisla/features-post-create', function () {
    return view('stisla.features-post-create');
});
Route::get('/stisla/features-posts', function () {
    return view('stisla.features-posts');
});
Route::get('/stisla/features-profile', function () {
    return view('stisla.features-profile');
});
Route::get('/stisla/features-settings', function () {
    return view('stisla.features-settings');
});
Route::get('/stisla/features-setting-detail', function () {
    return view('stisla.features-setting-detail');
});
Route::get('/stisla/layout', function () {
    return view('stisla.layout');
});
Route::get('/stisla/features-tickets', function () {
    return view('stisla.features-tickets');
});
Route::get('/stisla/utilities-contact', function () {
    return view('stisla.utilities-contact');
});
Route::get('/stisla/utilities-invoice', function () {
    return view('stisla.utilities-invoice');
});
Route::get('/stisla/utilities-subscribe', function () {
    return view('stisla.utilities-subscribe');
});
Route::get('/stisla/credits', function () {
    return view('stisla.credits');
});
Route::get('/stisla/layout', function () {
    return view('stisla.layout');
});

Route::get('qr-code-g', function () {
    // \QrCode::size(500)
    //             ->format('png')
    //             ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
        
    return view('qrCode');
    
});
Route::get('/home_user', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::post('/login_post', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/register_post', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
Route::get('coba', 'UserController@coba');
Route::get('coba2', 'UserController@coba2');
Route::get('api', 'UserController@getData');