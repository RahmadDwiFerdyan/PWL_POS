<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTException;
use Tymon\JWTAuth\Facades\TokenExpiredException;
use Tymon\JWTAuth\Facades\TokenInvalidException;

class LogoutController extends Controller
{
    public function __invoke(request $request)
    {

        //remove token
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        if ($removeToken) {
            //return respons JSON
            return response()->json([
                'success' => true,
                'message' => 'Logout berhasil!',
            ]);
        }
    }
}
