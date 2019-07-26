<?php

use App\Lock;
use App\User;
use Illuminate\Http\Request;
use App\Lock_User;

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
    $user = User::all();

    $locks = Lock::all();

    $user->locks()->syncWithoutDetaching([1,2,3]);

    $response = [
        "locks" => $user
    ];
    return response()->json($response, 200 );
});

Route::get('/locks-and-users' ,[
    'uses' => 'Lock_UserController@getLock_User'
]);

Route::get('/users',[
    'uses' => 'UserController@getUsers'
]);

Route::get('/test',function(){
    $lock_user = Lock_User::all();
    $response = [
        "lock_user" => $lock_user
    ];
    return response()->json($response, 200 );

});


