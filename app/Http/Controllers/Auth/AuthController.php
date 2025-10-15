<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Authenticate the user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Récupérer les données de la requête
        $email = $request->input('email');
        $password = $request->input('password');

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            // Authentifier l'utilisateur
            Auth::login($user);

            // Retourner une réponse JSON de succès
            return response()->json([
                'message' => 'Login successful',
                'user' => $user
            ], 200);
        }

        // Retourner une réponse JSON d'échec
        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }
}
