<?php

use Illuminate\Support\Facades\Route;
use App\models\Orders;
use App\Http\Controllers\Admin\MainGroupController;
use App\Http\Controllers\Admin\SubGroupController;
use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\OrganizationsController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    $layoutOrders_count = Orders::all()->count();

    View::share('layoutOrders_count', $layoutOrders_count);//передает переменную во все лайауты

    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('MainGroup',MainGroupController::class);
    Route::resource('SubGroup',SubGroupController::class);
    Route::resource('Items',ItemsController::class);
    Route::resource('Customers',CustomersController::class);
    Route::resource('Orders',OrdersController::class);
    Route::resource('Organizations',OrganizationsController::class);

    Route::post('Items',[App\Http\Controllers\Admin\ItemsController::class, 'index'])->name('Items.index');

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