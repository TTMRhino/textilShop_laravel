<?php

use Illuminate\Support\Facades\Route;
use App\models\Orders;
use App\Http\Controllers\Admin\MainGroupController;
use App\Http\Controllers\Admin\SubGroupController;
use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\Admin\UploadController;
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

    Route::get('upload', [App\Http\Controllers\Admin\UploadController::class, 'index'])->name('Upload.index');
    Route::post('upload',[App\Http\Controllers\Admin\UploadController::class, 'fileItems'])->name('Upload.fileItems');

    Route::get('upload/price', [App\Http\Controllers\Admin\UploadController::class, 'uploadPrice'])->name('Upload.price');
    Route::post('upload/price', [App\Http\Controllers\Admin\UploadController::class, 'filePrice'])->name('Upload.filePrice');

    /*Route::get('Items/index', [App\Http\Controllers\Admin\ItemsController::class, 'index'])->name('Items.index');
    Route::get('Items/create', [App\Http\Controllers\Admin\ItemsController::class, 'create'])->name('Items.create');
    Route::get('Items/edit/{id}', [App\Http\Controllers\Admin\ItemsController::class, 'edit'])->name('Items.edit');
    Route::get('Items/destroy', [App\Http\Controllers\Admin\ItemsController::class, 'destroy'])->name('Items.destroy');
    Route::get('Items/update', [App\Http\Controllers\Admin\ItemsController::class, 'update'])->name('Items.update');


    //страница загрузки наменклатуры
    Route::get('Items/uploadItems', [App\Http\Controllers\Admin\ItemsController::class, 'uploadItems'])->name('Items.uploadItems');
    //action обработчик загруженного файла (наменклатуры)
    Route::post('Items/uploadItems',[App\Http\Controllers\Admin\ItemsController::class, 'fileItems'])->name('Items.fileItems');
   
    Route::get('Items/uploadPrice', [App\Http\Controllers\Admin\ItemsController::class, 'uploadPrice'])->name('Items.uploadPrice');
    Route::post('Items/uploadPrice',[App\Http\Controllers\Admin\ItemsController::class, 'file'])->name('Items.file');*/

});