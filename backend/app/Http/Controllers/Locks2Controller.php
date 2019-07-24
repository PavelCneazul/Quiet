<?php

namespace App\Http\Controllers;

use App\Locks2;
use Illuminate\Http\Request;

class Locks2Controller extends Controller
{
    public function getLocks()
    {
        $locks = Locks2::all();
        $response = [
            'locks2' => $locks
        ];
        return response()->json($response, 200);

    }

    public function postLock(Request $request)
    {
        $lock = new Locks2();
        $lock->code = $request->input('code');
        $lock->save();
        return response()->json(['lock' => $lock], 201);
    }
}
