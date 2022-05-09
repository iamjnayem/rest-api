<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
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

Route::get('/products', function(){
    return Product::all();
});

Route::post('/products', function(){
    return Product::create([
        'name' => 'Diploma Milk',
        'slug' => 'diploma-milk',
        'description' => '500g full cream milk powder with Vitamin D3',
        'price' => '370.80'
    ]);
});


//test purpose
Route::post('/test', function(){
    return "test success";
});