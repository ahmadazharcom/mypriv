<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\WhatsappController;
use App\Http\Controllers\SubDomainController;
use App\Http\Controllers\KodanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Route::domain('{subdomain}.'.env("APP_DOMAIN"))->group(function () {
	 Route::get('/', [SubDomainController::class, 'index']);
});

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/telegram', function () {
    return view('telegram');
});

Route::get('/whatsapp', function () {
    return view('whatsapp');
});

Route::get('/telegram_out', function () {
    return view('telegram_out');
});

Route::get('/whatsapp_out', function () {
    return view('whatsapp_out');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/mesejrahsia', function () {
    return view('mesejrahsia');
});

Route::get('/decode', function () {
    return view('decode');
});

Route::get('/twillio', function () {
    return view('twillio');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/invoice2', function () {
    return view('invoice2');
});

Route::get('/order', function () {
    return view('order');
});

Route::controller(TelegramController::class)->group(function(){

	Route::post('/telegram/send-text', 'index');
	Route::get('/telegram/curl-test/', 'curlTest');
	Route::post('/telegram/curl-telegram/', 'curlTelegram');
	Route::get('/telegram/webhook/', 'webhook');
	Route::post('/telegram/telegram_out', 'telegram_out');

});

Route::controller(WhatsappController::class)->group(function(){

	Route::post('/whatsapp/send-text', 'index');
	Route::post('/whatsapp/whatsapp_out', 'whatsapp_out');
	Route::post('/whatsapp/encrypt', 'encrypt');
	Route::post('/whatsapp/decrypt', 'decrypt');
	Route::get('/decoder/{link}', 'decoder');
	Route::get('/wa/{contact}/{text}', 'wa');

});	

Route::controller(KodanController::class)->group(function(){

	Route::get('/kodan', 'index');

});	

Route::controller(LoginController::class)->group(function(){

	Route::get('/login', 'show')->name('login.show');
	Route::post('/login', 'login')->name('login.perform');
});

Route::controller(LogoutController::class)->group(function(){

	Route::get('/logout', 'perform')->name('logout.perform');
});

Route::controller(DashboardController::class)->group(function(){

	Route::get('/dashboard', 'index')->middleware('auth');
	Route::get('/dashboard/whatsapp', 'whatsapp')->middleware('auth');
	Route::get('/dashboard/telegram', 'telegram')->middleware('auth');
	
	Route::get('/dashboard/whatsapp_single/{id}', 'whatsapp_single')->middleware('auth');
	Route::get('/dashboard/telegram_single/{id}', 'telegram_single')->middleware('auth');

	Route::get('/dashboard/setting/', 'setting')->middleware('auth');

});

Route::controller(ProfileController::class)->group(function(){

	Route::post('/logo_update', 'logo_update');
	Route::post('/profile_update', 'profile_update');
	Route::post('/password_change', 'password_change');

});

Route::get('generate-pdf', [PDFController::class, 'generateInvoicePDF']);

Route::get('generate-pdf2', [PDFController::class, 'generateInvoicePDF2']);

Route::get('generate-invoice-pdf', array('as'=> 'generate.invoice.pdf', 'uses' => 'PDFController@generateInvoicePDF'));

Route::resource('dashboard/product', ProductController::class)->middleware('auth');

Route::get('product/{id}', [ProductController::class, 'product_link']);

Route::post('product_order', [ProductController::class, 'product_order']);

Route::controller(CartController::class)->group(function(){

	Route::get('/items', 'index');  
	Route::get('cart', 'cart')->name('cart');
	Route::get('add-to-cart/{id}', 'addToCart')->name('add.to.cart');
	Route::patch('update-cart', 'update')->name('update.cart');
	Route::delete('remove-from-cart', 'remove')->name('remove.from.cart');

});

Route::controller(OrderController::class)->group(function(){

	Route::get('/dashboard/order', 'index');
	Route::post('/sendwa', 'sendwa');

});

Route::domain('{subdomain}.'.env("APP_DOMAIN"))->group(function () {
	 Route::get('/{page}', [SubDomainController::class, 'page']);
});

Route::domain('{subdomain}.'.env("APP_DOMAIN"))->group(function () {
	 Route::get('/{contact}/{text}', [WhatsappController::class, 'wa']);
});