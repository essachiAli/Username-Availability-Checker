<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsernameController extends Controller
{
    public function check(Request $request): JsonResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        $username = trim($request->query('username'));

        $exists = User::where('username', $username)->exists();

        return response()->json([
            'available' => !$exists,
            'message'   => $exists ? 'Taken' : 'Available',
        ]);
    }
}
