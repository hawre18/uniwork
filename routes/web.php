<?php

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


Route::resource('food-lounges', 'FoodLoungesController');
Route::get('food-lounges-delete/{id}', 'FoodLoungesController@delete')->name('food-lounges.delete');
Route::get('foods-delete/{id}', 'FoodController@delete')->name('foods.delete');
Route::resource('foods', 'FoodController');
Route::resource('profiles', 'ProfileController');
Route::resource('majors', 'MajorController');
Route::get('majors-delete/{id}', 'MajorController@delete')->name('majors.delete');
Route::resource('meals', 'MealController');
Route::get('meals-delete/{id}', 'MealController@delete')->name('meals.delete');
Route::resource('routin-meals', 'RoutinMealController');
Route::get('routin-meals-delete/{id}', 'RoutinMealController@delete')->name('routin-meals.delete');
