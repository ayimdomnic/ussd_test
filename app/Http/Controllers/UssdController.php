<?php


namespace App\Http\Controllers;


use Log;
use Illuminate\Http\Request;

class UssdController extends Controller
{
    public function smc(Request $request)
    {
        Log::info("here", [
            "data" => $request
        ]);

        
    }
}