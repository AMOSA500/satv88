<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pages/device','landingController@showDevicesPage')->name('show.devices');
Route::get('/pages/contact','landingController@showContactPage')->name('show.contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account/{id}/edit','HomeController@accountEdit')->name('account_edit');
Route::POST('/account/privacy/edit','HomeController@privacy')->name('account_privacy');
Route::GET('/account/subscription/{id}','HomeController@plan')->name('account_subscription');
Route::GET('/account/package/{id}','HomeController@package')->name('account_package');
Route::post('/account/package/set_invoice','HomeController@setInvoice')->name('set_invoice');
Route::GET('/account/package/{id}/del_invoice','HomeController@delInvoice')->name('del_invoice');
Route::GET('/account/invoice/{id}/items','HomeController@getInvoiceItems')->name('invoice_items');

/* Flutterwave */
Route::post('/pay', 'FlutterwaveController@initialize')->name('pay');
Route::get('/rave/callback','FlutterwaveController@callback')->name('callback');

/* Chat Controller*/
Route::any('account/support/ticket','ChatsController@index')->name('support_ticket');
Route::any('account/message/{id}/chat','ChatsController@showMessageChat')->name('msgChat');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage')->name('sendMessage'); 

//Administrator domain
Route::get('admin/dashboard','AdminController@dashboard')->name('admin.dashboard');
Route::get('admin/messages/inbox','AdminController@messagesInbox')->name('admin.messages.inbox');
Route::get('admin/sales/invoice_list','AdminController@salesInvoiceList')->name('admin.sales.invoice_list');
Route::get('admin/sales/view/{id}/invoice','AdminController@viewInvoice')->name('admin.sales.view_invoice');
Route::get('admin/sales/analysis','AdminController@salesAnalysis')->name('admin.sales.analysis');
Route::get('admin/contact/profile_list','AdminController@contactProfile')->name('admin.contact.profile');
Route::get('admin/contact/profile/{id}/edit','AdminController@contactProfileEdit')->name('admin.contact.profile.edit');
Route::POST('admin/contact/profile/edit_submit','AdminController@postContactProfileEdit')->name('admin.contact.profile.post');
Route::get('admin/messages/{id}/{msgid}/read_inbox_reply','AdminController@messagesReadReply')->name('admin.messages.read_reply');
