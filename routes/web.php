<?php

use Illuminate\Support\Facades\Route;

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

/*
|Войти
*/
Route::get('/', 'PagesController@index')->name('loginPage');

/*
|Регистрация
*/
Route::group([
    'prefix' => 'registry',
    'middleware' => ['auth', 'registry'],
], function (){
    Route::get('/', 'PagesController@showRegistry')->name('registry-notes');
    Route::get('/notes', 'PagesController@showRegistryDetailed')->name('registry-notes-detailed');
    Route::get('/cabinet', 'PagesController@showRegistryCabinet')->name('registry-cabinet');
});

/*
|Врач-стоматолог
*/
Route::group([
    'prefix' => 'dentist',
    'middleware' => ['auth', 'dentist'],
], function (){
    Route::get('/', 'PagesController@showDentist')->name('dentist-notes');
    Route::get('/notes', 'PagesController@showDentistDetailed')->name('dentist-notes-detailed');
    Route::get('/docs', 'PagesController@showDentistDocs')->name('dentist.docs');
    Route::get('/stock', 'PagesController@showDentistStock')->name('dentist.stock');
    Route::get('/report', 'PagesController@showDentistReport')->name('dentist.report');
    Route::get('/settings', 'PagesController@showDentistSettings')->name('dentist.settings');
    Route::get('/cabinet', 'PagesController@showDentistCabinet')->name('dentist-cabinet');
});

/*
|Бухгалтер
*/
Route::group([
    'prefix' => 'booker',
    'middleware' => ['auth', 'booker'],
], function (){
    Route::get('/', 'PagesController@showBooker')->name('accountant-block');
    Route::get('/cabinet', 'PagesController@showBookerCabinet')->name('accountant-cabinet');
});

Route::post('add/product', 'ProductsController@addProduct')->name('product.add');
Route::get('delete/product/{id}', 'ProductsController@deleteProduct')->name('product.delete');

//Route::get('/registry/notes/modalAddPatient', function () {
//    return view('registry.modalAddPatient');
//})->name('registry-modalAddPatient');
//
//Route::get('/registry/notes/modalAddNote', function () {
//    return view('registry.modalAddNote');
//})->name('registry-modalAddNote');
//
//Route::get('/registry/notes/modalShowInfo', function () {
//    return view('registry.modalShowInfo');
//})->name('registry-modalShowInfo');
//
//Route::get('/registry/notes/clientInfo/notes', function () {
//    return view('registry.registry-notes');
//})->name('client-registry-notes');
//
//Route::get('/registry/notes/clientInfo/payment', function () {
//    return view('registry.registry-payment');
//})->name('client-registry-payment');
//
//Route::get('/registry/notes/clientInfo/notes/modalAddPayment', function () {
//    return view('registry.modalAddPayment');
//})->name('client-registry-modalAddPayment');
//
//Route::get('/registry/documents', function () {
//    return view('registry.documents');
//})->name('registry-documents');
//
//Route::get('/registry/reports', function () {
//    return view('registry.reports');
//})->name('registry-reports');
//
//Route::get('/registry/settings', function () {
//    return view('registry.settings');
//})->name('registry-settings');

///*
//|Врач-стоматолог
//*/
//Route::get('/dentist/notes', function () {
//    return view('dentist.notes');
//})->name('dentist-notes');
//
//Route::get('/dentist/notes/modalAddPatient', function () {
//    return view('dentist.modalAddPatient');
//})->name('dentist-modalAddPatient');
//
//Route::get('/dentist/notes/modalAddNote', function () {
//    return view('dentist.modalAddNote');
//})->name('dentist-modalAddNote');
//
//Route::get('/dentist/notes/modalShowInfo', function () {
//    return view('dentist.modalShowInfo');
//})->name('dentist-modalShowInfo');
//
//Route::get('/dentist/notes/clientInfo/notes', function () {
//    return view('dentist.dentist-notes');
//})->name('client-dentist-notes');
//
//Route::get('/dentist/notes/clientInfo/payment', function () {
//    return view('dentist.dentist-payment');
//})->name('client-dentist-payment');
//
//Route::get('/dentist/notes/clientInfo/notes/modalAddPayment', function () {
//    return view('dentist.modalAddPayment');
//})->name('client-dentist-modalAddPayment');
//
//Route::get('/dentist/documents', function () {
//    return view('dentist.documents');
//})->name('dentist-documents');
//
//Route::get('/dentist/warehouse', function () {
//    return view('dentist.warehouse');
//})->name('dentist-warehouse');
//
//Route::get('/dentist/reports', function () {
//    return view('dentist.reports');
//})->name('dentist-reports');
//
//Route::get('/dentist/settings', function () {
//    return view('dentist.settings');
//})->name('dentist-settings');

//
//Route::get('/dentist', function () {
//    return view('dentist');
//})->name('dentist');
//
//Route::get('/accountant', function () {
//    return view('accountant');
//})->name('accountant');

Route::get('check', 'PagesController@check');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
