<?php

use Illuminate\Support\Facades\Route;
use App\models\Orders;
/*use App\Http\Controllers\Admin\MainGroupController;
use App\Http\Controllers\Admin\SubGroupController;
use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\OrganizationsController;*/
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

/*Route::get('/', function () {
    return view('welcome');
});*/



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    $layoutOrders_count = Orders::all()->count();

    View::share('layoutOrders_count', $layoutOrders_count);//передает переменную во все лайауты

    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    //search post
    Route::post('Items/search',[App\Http\Controllers\Admin\ItemsController::class, 'search'])->name('Items.search');
    Route::post('Organizations/search',[App\Http\Controllers\Admin\OrganizationsController::class, 'search'])->name('Organizations.search');

    Route::resource('MainGroup',Admin\MainGroupController::class);
    Route::resource('SubGroup',Admin\SubGroupController::class);
    Route::resource('Items',Admin\ItemsController::class);
    Route::resource('Customers',Admin\CustomersController::class);
    Route::resource('Orders',Admin\OrdersController::class);
    Route::resource('Organizations',Admin\OrganizationsController::class);

    //Route::get('Items', [App\Http\Controllers\Admin\ItemsController::class, 'create'])->name('Items.create');
    //Route::post('Items', [App\Http\Controllers\Admin\ItemsController::class, 'store'])->name('Items.store');

    //search post
    //Route::post('Items',[App\Http\Controllers\Admin\ItemsController::class, 'index'])->name('Items.index');
    

    /*==== Upload files =====*/
    //upload items
    Route::get('upload', [App\Http\Controllers\Admin\UploadController::class, 'index'])->name('Upload.index');
    Route::post('upload',[App\Http\Controllers\Admin\UploadController::class, 'fileItems'])->name('Upload.fileItems');
    //upload price
    Route::get('upload/price', [App\Http\Controllers\Admin\UploadController::class, 'uploadPrice'])->name('Upload.price');
    Route::post('upload/price', [App\Http\Controllers\Admin\UploadController::class, 'filePrice'])->name('Upload.filePrice');

    /** user (change password) */
    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('User');
    Route::post('user', [App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('User.passwordChange');

    //user LogOut
    Route::get('logout', [App\Http\Controllers\Admin\UserController::class, 'logout'])->name('User.logout');

    

});

Route::get('/{any}', 'SpaController@index')->where('any','.*');