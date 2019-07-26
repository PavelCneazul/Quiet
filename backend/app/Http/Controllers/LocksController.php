<?php

namespace App\Http\Controllers;

use App\Lock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocksController extends Controller
{
    public function getLocks()
    {
        $locks = Lock::all();

        $response = [
            'test' => $locks
        ];
        return response()->json($response, 200);

    }

    public function postLock(Request $request)
    {
        $lock = new Lock();
        $lock->code = $request->input('code');
        $lock->save();
        return response()->json(['lock' => $lock], 201);
    }
}
