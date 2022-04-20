<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\RegisterRequest;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $registerRequest)
    {
        try {
            $registerRequest->execute();
            // redirect to login page
            return redirect()->route('login')->with('status', 'You have successfully registered!');
        } catch (Exception $e) {
            return redirect()->route('register')->with('error', $e->getMessage());
        }
    }
}
