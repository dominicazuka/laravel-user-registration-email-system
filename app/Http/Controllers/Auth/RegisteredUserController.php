<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Image;
use App\Mail\RegistrationEmail;
use Exception;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $email = $request->input('email');

            // Check if the email already exists in the 'users' table
            $existingUser = DB::table('users')->where('email', $email)->first();

            if ($existingUser) {
                // Email already exists, handle accordingly
                $notification = array(
                    'message' => 'Email already exists',
                    'alert-type' => 'error'
                );
                return redirect()->back()->withInput()->with($notification);
            }

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'image' => ['required'],
            ]);

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // random generated name
            Image::make($image)->resize(523, 605)->save('upload/images/' . $name_gen);
            $save_url = 'upload/images/' . $name_gen;

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $save_url,
                'password' => Hash::make($request->password),
            ]);

            // Send the registration email using the helper function
            sendRegistrationEmail($user);

            event(new Registered($user));

            Auth::login($user);
            $notification = array(
                'message' => 'User Profile Created Successfully',
                'alert-type' => 'success'
            );
            return redirect(RouteServiceProvider::HOME)->with($notification);
        } catch (\Exception $e) {
            // Handle the exception here (e.g., log the error, display an error message, etc.)
            Auth::login($user);
            $notification = array(
                'message' => 'User created but failed to send registration email. Check .env file for mail settings',
                'alert-type' => 'warning'
            );
            return redirect(RouteServiceProvider::HOME)->with($notification);
        }
    }
}
