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
Route::resource('studentgrades', 'StudentGradeController');
Route::get('studentgrades-delete/{id}', 'StudentGradeController@delete')->name('studentgrades.delete');
Route::resource('roles', 'RoleController');
Route::get('roles-delete/{id}', 'RoleController@delete')->name('roles.delete');
Route::resource('users', 'UserController');
Route::get('user-delete/{id}', 'UserController@delete')->name('users.delete');
Route::resource('studententrances', 'StudentEntranceController');
Route::get('student-entrance-delete/{id}', 'StudentEntranceController@delete')->name('studententrances.delete');
Route::resource('studentconditions', 'StudentConditionController');
Route::get('student-condition-delete/{id}', 'StudentConditionController@delete')->name('studentconditions.delete');
Route::resource('citys', 'CityController');
Route::get('city-delete/{id}', 'CityController@delete')->name('citys.delete');
Route::resource('states', 'StateController');
//Route::resource('profils', 'ProfilController');
//Route::get('profils', 'ProfilController@index');
Route::get('state-delete/{id}', 'StateController@delete')->name('states.delete');
Route::get('profil-create/{id}', 'ProfilController@create')->name('profils.create');
Route::post('profil-store', 'ProfilController@store')->name('profils.store');
Route::get('profil-delete/{id}', 'ProfilController@delete')->name('profils.delete');
Route::resource('reservation', 'ReservationController');
Route::get('reservation-delete/{id}', 'ReservationController@delete')->name('reservation.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
