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



Route::get('/',[
    'uses' => 'App\Http\Controllers\RestaurentController@index',
    'as'  => '/',
]);

Route::get('/product-detail/{id}',[
    'uses' => 'App\Http\Controllers\RestaurentController@detail',
    'as'  => 'product-detail',
]);


Route::get('/about',[
    'uses' => 'App\Http\Controllers\RestaurentController@about',
    'as'  => 'about',
]);

Route::get('/contact',[
    'uses' => 'App\Http\Controllers\RestaurentController@contact',
    'as'  => 'contact',
]);

Route::get('/dashboard',[
    'uses' => 'App\Http\Controllers\DashboardController@index',
    'as'  => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified']
]);



Route::get('/add-category',[
    'uses' => 'App\Http\Controllers\CategoryController@index',
    'as'  => 'add-category',
    'middleware' => ['auth:sanctum', 'verified'] 
]);

Route::post('/new-category',[
    'uses' => 'App\Http\Controllers\CategoryController@create',
    'as'  => 'new-category',
    'middleware' => ['auth:sanctum', 'verified'] 
]);

Route::get('/edit-category/{id}',[
    'uses' => 'App\Http\Controllers\CategoryController@edit',
    'as'  => 'edit-category',
    'middleware' => ['auth:sanctum', 'verified'] 
]);

Route::post('/update-category',[
    'uses' => 'App\Http\Controllers\CategoryController@update',
    'as'  => 'update-category',
    'middleware' => ['auth:sanctum', 'verified'] 
]);

Route::get('/delete-category/{id}',[
    'uses' => 'App\Http\Controllers\CategoryController@delete',
    'as'  => 'delete-category',
    'middleware' => ['auth:sanctum', 'verified'] 
]);


Route::get('/manage-category',[
    'uses' => 'App\Http\Controllers\CategoryController@manage',
    'as'  => 'manage-category',
    'middleware' => ['auth:sanctum', 'verified']
]);


Route::get('/add-food',[
    'uses' => 'App\Http\Controllers\FoodController@index',
    'as'  => 'add-food',
    'middleware' => ['auth:sanctum', 'verified']
]);


Route::post('/new-food',[
    'uses' => 'App\Http\Controllers\FoodController@new',
    'as'  => 'new-food',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/view-food-detail/{id}',[
    'uses' => 'App\Http\Controllers\FoodController@view',
    'as'  => 'view-food-detail',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/edit-food-detail/{id}',[
    'uses' => 'App\Http\Controllers\FoodController@edit',
    'as'  => 'edit-food-detail',
    'middleware' => ['auth:sanctum', 'verified']
]);


Route::post('/update-food',[
    'uses' => 'App\Http\Controllers\FoodController@Update',
    'as'  => 'update-food',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/delete-food/{id}',[
    'uses' => 'App\Http\Controllers\FoodController@delete',
    'as'  => 'delete-food',
    'middleware' => ['auth:sanctum', 'verified']
]);


Route::get('/manage-food',[
    'uses' => 'App\Http\Controllers\FoodController@manage',
    'as'  => 'manage-food',
    'middleware' => ['auth:sanctum', 'verified']
]);