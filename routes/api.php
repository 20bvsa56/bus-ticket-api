<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'API\AuthController@register');
Route::post('login', 'API\AuthController@login');
Route::get('getBusDetails', 'API\BusDetailsController@getBusDetails');
Route::get('getDestinations', 'API\DestinationsController@getDestinations');
Route::get('getUsersData', 'API\UserDataController@getUsersData');
Route::get('getTickets', 'API\TicketsController@getTickets');



