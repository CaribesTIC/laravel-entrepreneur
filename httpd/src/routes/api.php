<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;




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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

    // Route::post('login', 'AuthController@login');
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

// });


Route::middleware('api')->prefix('auth')->group(function () {

    Route::post('login',    [AuthController::class, 'login']);
    Route::post('logout',   [AuthController::class, 'logout']);
    Route::post('refresh',  [AuthController::class, 'refresh']);
    Route::post('me',       [AuthController::class, 'me']);

    Route::get('users', [UserController::class, 'index'])->name('users.index');

});

/*Route::middleware('api')->group(function () {
    Route::get('products', fn() => [
        [ "id" => 1, "title" => "iPad 4 Mini"           , "price" => 500.01, "inventory" => 2 , "photo" => "cafe.jpg"    ],
        [ "id" => 2, "title" => "H&M T-Shirt White"     , "price" => 10.99 , "inventory" => 10, "photo" => "cebolla.jpg" ],
        [ "id" => 3, "title" => "Charli XCX - Sucker CD", "price" => 19.99 , "inventory" => 5 , "photo" => "patata.jpg"  ],
        [ "id" => 4, "title" => "Xharli XXX - Xucker CD", "price" => 29.99 , "inventory" => 3 , "photo" => "pina.jpg"    ],
        [ "id" => 5, "title" => "oPad 4 oini"           , "price" => 500.01, "inventory" => 2 , "photo" => "cafe.jpg"    ],
        [ "id" => 6, "title" => "R&M R-Shirt White"     , "price" => 10.99 , "inventory" => 10, "photo" => "cebolla.jpg" ],
        [ "id" => 7, "title" => "Aharli ACX - Aucker CD", "price" => 19.99 , "inventory" => 5 , "photo" => "patata.jpg"  ],
        [ "id" => 8, "title" => "Zharli ZXX - Xucker CD", "price" => 29.99 , "inventory" => 3 , "photo" => "pina.jpg"    ]
    ]);
});*/

Route::middleware('api')->group(function () {
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
});

// 
