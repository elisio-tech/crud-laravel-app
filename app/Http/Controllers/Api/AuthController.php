<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
     public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                "name"=> $request->name,
                "email"=> $request->email,
                "password" => Hash::make($request->password),
            ]);

            return response()->json([
                'success' => true,
                'data' => $user,
                'token' => $user->createToken('TOKEN')->plainTextToken,
            ]);

        } catch (\Exception $e) {
            return response()->json(["error", $e->getMessage()]);
        }
    }
}
