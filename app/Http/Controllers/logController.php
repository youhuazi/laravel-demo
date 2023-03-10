<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class logController extends BaseController
{
    public function test(Request $request) {
        Log::info(json_encode($request->all()));
        Log::info("test");
        return response()->json(["success" => true]);
    }
}
