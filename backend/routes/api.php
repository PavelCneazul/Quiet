<?php

use App\Lock;
use App\User;
use Illuminate\Http\Request;

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


Route::get('/locks', [
    'uses' => 'LocksController@getLocks'
]);

Route::post('/lock', [
    'uses' => 'LocksController@postLock'
]);

Route::get('/lock-users', function (){
    $user = User::first();

    $locks = Lock::all();

    $user->locks()->syncWithoutDetaching([1]);

    $response = [
        "locks" => $locks
    ];
    return response()->json($response, 200 );
});


