<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemsController;
use App\Http\Controllers\Api\MainGroupController;
use App\Http\Controllers\Api\SubGroupController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\CustomersController;
use App\Http\Controllers\Api\OrganizationsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'items' => ItemsController::class,
    'maingroup' => MainGroupController::class,
    'subgroup' => SubGroupController::class,
    'orders' => OrdersController::class,
    'customers' => CustomersController::class,
    'organizations' => OrganizationsController::class,
    
]);
