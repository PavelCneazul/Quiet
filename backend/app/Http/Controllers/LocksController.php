<?php

namespace App\Http\Controllers;

use App\Locks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocksController extends Controller
{
    public function getLocks()
    {
        //$locks = DB::select('select status from locks where code = "hell"');
        $locks = DB::table('locks')->status;
        $response = [
            'test' => $locks
        ];
        //return response()->json($response, 200);
        return $locks;
    }

    public function postLock(Request $request)
    {
        $lock = new Locks();
        $lock->code = $request->input('code');
        $lock->save();
        return response()->json(['lock' => $lock], 201);
    }
}
