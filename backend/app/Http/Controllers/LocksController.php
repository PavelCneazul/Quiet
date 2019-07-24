<?php

namespace App\Http\Controllers;

use App\Locks;
use Illuminate\Http\Request;

class LocksController extends Controller
{
    public function getLocks()
    {
        $locks = Locks::all();
        $response = [
            'locks2' => $locks
        ];
        return response()->json($response, 200);

    }

    public function postLock(Request $request)
    {
        $lock = new Locks();
        $lock->code = $request->input('code');
        $lock->save();
        return response()->json(['lock' => $lock], 201);
    }
}
