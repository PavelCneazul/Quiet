<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsers()
    {
        $users =  DB::select('select * from users');
        $response = [
            "users" => $users
        ];
        return response()->json($response, 200 );
    }

}
