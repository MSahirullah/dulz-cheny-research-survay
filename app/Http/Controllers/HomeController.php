<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCodeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function stage2FormSubmission(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|between:3,8',
            'email' => 'required|email|max:255',
        ]);

        try {
            $name = $request->input('name');
            $age = $request->input('age');
            $email = $request->input('email');

            $user = new User();
            $user->name = $name;
            $user->age = $age;
            $user->email = $email;
            $user->email_verification_token = mt_rand(100000, 999999);
            $user->password = Hash::make('password');
            $user->save();

            Mail::to($email)->send(new VerificationCodeMail($user->email_verification_token));
            Session::put('user', $user);

            return response()->json(['message' => 'We have sent a verification email, please check your inbox.', 'email' => "{$email}"], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Internal server error.'], 500);
        }
    }

    public function stage2EmailVerificationSubmission(Request $request)
    {
        try {
            $verification_code = $request->input('verification_code');
            $user = Session::get('user');

            if (!$verification_code) {
                return response()->json(['message' => 'Verification code is required.'], 201);
            }

            if ($user->email_verification_token == $verification_code) {
                $user->email_verified_at = now();
                $user->save();
                Session::put('user', $user);

                return response()->json(['message' => 'Email verified successfully.'], 200);
            } else {
                return response()->json(['message' => 'Invalid verification code.'], 201);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Internal server error.'], 500);
        }
    }
}
