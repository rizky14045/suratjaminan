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
    return view('auth.login');
});
Route::get('/user-login', 'Auth\AuthController@page')->name('login.page');
Route::post('/user-login', 'Auth\AuthController@loginUser')->name('login.submit');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

// Admin
Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/form-jaminan/pensiunan', 'Admin\FormJaminanController@index_pensiunan');
Route::get('admin/form-jaminan/kelas/{id}', 'Admin\FormJaminanController@getKelas');
Route::get('admin/detail-monitoring/{id}', 'Admin\MonitoringTagihanController@showMonitoring');

Route::get('admin/form-jaminan/pasien/{id}', 'Admin\FormJaminanController@getPasien');
Route::get('admin/form-jaminan/{id}/email', 'Admin\FormJaminanController@sendEmail');
Route::get('form-jaminans/{id}', 'Admin\FormJaminanController@show_dashboard');
Route::get('admin/form-jaminan/{id}/generate_PDF', 'Admin\FormJaminanController@generatePDF');
Route::get('/test', function () {
    return view('admin/form-jaminan/template/pdf');
});
Route::resource('admin/users', 'Admin\UserController');
Route::resource('admin/form-jaminan', 'Admin\\FormJaminanController');
Route::resource('admin/karyawan', 'Admin\\KaryawanController');
Route::resource('admin/kelas-rawat-inap', 'Admin\\KelasRawatInapController');
Route::resource('admin/jenis-pemeriksaan', 'Admin\\JenisPemeriksaanController');
Route::resource('admin/rumah-sakit', 'Admin\\RumahSakitController');
Route::resource('admin/monitoring-tagihan', 'Admin\\MonitoringTagihanController');

Route::get('admin/export', 'Admin\ExportController@index');
Route::get('admin/export-history-record', 'Admin\ExportController@historyRecord');
Route::resource('admin/history-record', 'Admin\\HistoryRecordController');

// MKAD
Route::get('mkad', 'MKAD\MKADController@index');
Route::get('mkad/form-jaminan', 'MKAD\MKADController@indexKaryawan');
Route::get('mkad/form-jaminan/{id}', 'MKAD\MKADController@showJaminan');
Route::get('mkad/form-jaminan/approve/{id}', 'MKAD\MKADController@approveJaminan');
Route::get('mkad/form-jaminan-pensiunan', 'MKAD\MKADController@indexPensiunan');


// SM
Route::get('sm', 'SM\SMController@index');
Route::get('sm/form-jaminan', 'SM\SMController@indexKaryawan');
Route::get('sm/form-jaminan/{id}', 'SM\SMController@showJaminan');
Route::get('sm/form-jaminan/approve/{id}', 'SM\SMController@approveJaminan');
Route::get('sm/form-jaminan-pensiunan', 'SM\SMController@indexPensiunan');
Route::get('sm/show-pdf/{id}', 'SM\SMController@showPDF');
