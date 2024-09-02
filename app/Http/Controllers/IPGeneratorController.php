<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IP;

class IPGeneratorController extends Controller
{
    public function generateIP()
    {
        $ip = "192.168." . mt_rand(0, 255) . "." . mt_rand(0, 255);

        $storedIP = IP::create(['ip' => $ip]);

        return response()->json(['ip' => $storedIP->ip]);
    }
}
