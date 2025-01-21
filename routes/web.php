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
Route::get('/json', 'HomeController@json')->name('json');
Route::get('/qrcode/senior-manager', 'HomeController@sm')->name('qrcode.sm');
Route::get('/qrcode/mkad', 'HomeController@mkad')->name('qrcode.mkad');
Route::get('/qrcode/asman', 'HomeController@asman')->name('qrcode.asman');
Route::get('/user-login', 'Auth\AuthController@page')->name('login.page');
Route::post('/user-login', 'Auth\AuthController@loginUser')->name('login.submit');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::middleware(['admin'])->group(function () {
    // Admin
    Route::get('admin', 'Admin\AdminController@index');
    Route::get('admin/form-jaminan/pensiunan', 'Admin\FormJaminanController@index_pensiunan');
    Route::get('admin/form-jaminan/kelas/{id}', 'Admin\FormJaminanController@getKelas');
    Route::get('admin/detail-monitoring/{id}', 'Admin\MonitoringTagihanController@showMonitoring');

    Route::get('admin/form-jaminan/pasien/{id}', 'Admin\FormJaminanController@getPasien');
    Route::get('admin/form-jaminan/{id}/email', 'Admin\FormJaminanController@sendEmail');

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

    Route::resource('admin/surat-keterangan', 'Admin\\SuratKeteranganController');
    Route::get('admin/surat-keterangan/pdf/{id}', 'Admin\\SuratKeteranganController@showPDF');
    Route::get('admin/visa', 'Admin\VisaController@index');
    Route::get('admin/visa/{id}', 'Admin\VisaController@create');
    Route::post('admin/visa', 'Admin\VisaController@store');
    Route::get('admin/visa/{id}/edit', 'Admin\VisaController@edit');
    Route::post('admin/visa/{id}/edit', 'Admin\VisaController@update');
    Route::delete('admin/visa/{id}', 'Admin\VisaController@destroy');
    Route::get('admin/visa/pdf/{id}', 'Admin\VisaController@showPDF');
});

Route::get('form-jaminans/{id}', 'Admin\FormJaminanController@show_dashboard');

Route::middleware(['dokter'])->group(function () {
    // dokter
    Route::get('dokter', 'DOKTER\DokterController@index');
    Route::get('dokter/form-jaminan', 'DOKTER\DokterController@indexKaryawan');
    Route::get('dokter/ubah-password', 'DOKTER\DokterController@ubahPassword');
    Route::post('dokter/ubah-password', 'DOKTER\DokterController@savePassword');
    Route::get('dokter/form-jaminan/{id}', 'DOKTER\DokterController@showJaminan');
    Route::get('dokter/form-jaminan/approve/{id}', 'DOKTER\DokterController@approveJaminan');
    Route::get('dokter/form-jaminan/reject/{id}', 'DOKTER\DokterController@rejectJaminan');
    Route::get('dokter/form-jaminan-pensiunan', 'DOKTER\DokterController@indexPensiunan');
    Route::get('dokter/show-pdf/{id}', 'DOKTER\DokterController@showPDF');
});
Route::middleware(['asman'])->group(function () {
    // asman
    Route::get('asman', 'ASMAN\AsmanController@index');
    Route::get('asman/form-jaminan', 'ASMAN\AsmanController@indexKaryawan');
    Route::get('asman/ubah-password', 'ASMAN\AsmanController@ubahPassword');
    Route::post('asman/ubah-password', 'ASMAN\AsmanController@savePassword');
    Route::get('asman/form-jaminan/{id}', 'ASMAN\AsmanController@showJaminan');
    Route::get('asman/form-jaminan/approve/{id}', 'ASMAN\AsmanController@approveJaminan');
    Route::get('asman/form-jaminan/reject/{id}', 'ASMAN\AsmanController@rejectJaminan');
    Route::get('asman/form-jaminan-pensiunan', 'ASMAN\AsmanController@indexPensiunan');
    Route::get('asman/show-pdf/{id}', 'ASMAN\AsmanController@showPDF');

    Route::resource('asman/surat-keterangan', 'ASMAN\\SuratKeteranganController');
    Route::get('asman/surat-keterangan/pdf/{id}', 'ASMAN\SuratKeteranganController@showPDF');
    Route::get('asman/surat-keterangan/approve/{id}', 'ASMAN\SuratKeteranganController@approve');
    Route::get('asman/surat-keterangan/reject/{id}', 'ASMAN\SuratKeteranganController@reject');
    Route::get('asman/visa', 'ASMAN\VisaController@index');
    Route::get('asman/visa/create', 'ASMAN\VisaController@create');
    Route::get('asman/visa/detail/{id}', 'ASMAN\VisaController@show');
    Route::post('asman/visa', 'ASMAN\VisaController@store');
    Route::get('asman/visa/{id}/edit', 'ASMAN\VisaController@edit');
    Route::post('asman/visa/{id}/edit', 'ASMAN\VisaController@update');
    Route::delete('asman/visa/{id}', 'ASMAN\VisaController@destroy');
    Route::get('asman/visa/pdf/{id}', 'ASMAN\VisaController@showPDF');
    Route::get('asman/visa/approve/{id}', 'ASMAN\VisaController@approve');
});
Route::middleware(['mkad'])->group(function () {
    // MKAD
    Route::get('mkad', 'MKAD\MKADController@index');
    Route::get('mkad/form-jaminan', 'MKAD\MKADController@indexKaryawan');
    Route::get('mkad/ubah-password', 'MKAD\MKADController@ubahPassword');
    Route::post('mkad/ubah-password', 'MKAD\MKADController@savePassword');
    Route::get('mkad/form-jaminan/{id}', 'MKAD\MKADController@showJaminan');
    Route::get('mkad/form-jaminan/approve/{id}', 'MKAD\MKADController@approveJaminan');
    Route::get('mkad/form-jaminan/reject/{id}', 'MKAD\MKADController@rejectJaminan');
    Route::get('mkad/form-jaminan-pensiunan', 'MKAD\MKADController@indexPensiunan');
    Route::get('mkad/show-pdf/{id}', 'MKAD\MKADController@showPDF');

    Route::resource('mkad/surat-keterangan', 'MKAD\\SuratKeteranganController');
    Route::get('mkad/surat-keterangan/pdf/{id}', 'MKAD\SuratKeteranganController@showPDF');
    Route::get('mkad/surat-keterangan/approve/{id}', 'MKAD\SuratKeteranganController@approve');
    Route::get('mkad/surat-keterangan/reject/{id}', 'MKAD\SuratKeteranganController@reject');
    Route::get('mkad/visa', 'MKAD\VisaController@index');
    Route::get('mkad/visa/create', 'MKAD\VisaController@create');
    Route::get('mkad/visa/detail/{id}', 'MKAD\VisaController@show');
    Route::post('mkad/visa', 'MKAD\VisaController@store');
    Route::get('mkad/visa/{id}/edit', 'MKAD\VisaController@edit');
    Route::post('mkad/visa/{id}/edit', 'MKAD\VisaController@update');
    Route::delete('mkad/visa/{id}', 'MKAD\VisaController@destroy');
    Route::get('mkad/visa/pdf/{id}', 'MKAD\VisaController@showPDF');
    Route::get('mkad/visa/approve/{id}', 'MKAD\VisaController@approve');
});
Route::middleware(['senior'])->group(function () {
    // SM
    Route::get('sm', 'SM\SMController@index');
    Route::get('sm/form-jaminan', 'SM\SMController@indexKaryawan');
    Route::get('sm/ubah-password', 'SM\SMController@ubahPassword');
    Route::post('sm/ubah-password', 'SM\SMController@savePassword');
    Route::get('sm/form-jaminan/{id}', 'SM\SMController@showJaminan');
    Route::get('sm/form-jaminan/approve/{id}', 'SM\SMController@approveJaminan');
    Route::get('sm/form-jaminan/reject/{id}', 'SM\SMController@rejectJaminan');
    Route::get('sm/form-jaminan-pensiunan', 'SM\SMController@indexPensiunan');
    Route::get('sm/show-pdf/{id}', 'SM\SMController@showPDF');

    Route::resource('sm/surat-keterangan', 'SM\\SuratKeteranganController');
    Route::get('sm/surat-keterangan/pdf/{id}', 'SM\SuratKeteranganController@showPDF');
    Route::get('sm/surat-keterangan/approve/{id}', 'SM\SuratKeteranganController@approve');
    Route::get('sm/surat-keterangan/reject/{id}', 'SM\SuratKeteranganController@reject');
    Route::get('sm/visa', 'SM\VisaController@index');
    Route::get('sm/visa/create', 'SM\VisaController@create');
    Route::get('sm/visa/detail/{id}', 'SM\VisaController@show');
    Route::post('sm/visa', 'SM\VisaController@store');
    Route::get('sm/visa/{id}/edit', 'SM\VisaController@edit');
    Route::post('sm/visa/{id}/edit', 'SM\VisaController@update');
    Route::delete('sm/visa/{id}', 'SM\VisaController@destroy');
    Route::get('sm/visa/pdf/{id}', 'SM\VisaController@showPDF');
    Route::get('sm/visa/approve/{id}', 'SM\VisaController@approve');

});
