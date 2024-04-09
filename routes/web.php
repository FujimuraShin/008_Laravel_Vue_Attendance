<?php

use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('attendance','Api\AttendancesController')
->only(['index','show','store']);

Route::put('attendances/{attendance}/report','Api\ReportAttendancesController@update');