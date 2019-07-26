<?php

namespace App\Http\Controllers;

use App\Lock_User;
use Illuminate\Http\Request;

class Lock_UserController extends Controller
{


    public function getLock_User()
    {
        $lock_user = Lock_User::all();
        $response = [
            "lock_user" => $lock_user
        ];
        return response()->json($response, 200 );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lock_User  $lock_User
     * @return \Illuminate\Http\Response
     */
    public function show(Lock_User $lock_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lock_User  $lock_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Lock_User $lock_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lock_User  $lock_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lock_User $lock_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lock_User  $lock_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lock_User $lock_User)
    {
        //
    }
}
