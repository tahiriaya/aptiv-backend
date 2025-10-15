<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'employeeId' => $request->employeeId,
            'jobTitle' => $request->jobTitle,
            'email' => $request->email,
            'address'=> $request->address,
            'password' => Hash::make($request->password),
            'phoneNumber' => $request->phoneNumber,
        ]);

        // Optionnel : Authentifier l'utilisateur après l'enregistrement
        // auth()->login($user);

        return response()->json(['message' => 'User registered successfully!']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'employeeId' => ['required', 'string', 'unique:users'],
            'jobTitle' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phoneNumber' => ['required', 'string', 'max:15'],
        ]);
    }
}
