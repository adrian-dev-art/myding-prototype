<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            'school' => ['required', 'string', 'max:255','nullable'],
            'organization' => ['required', 'string', 'max:255','nullable'],
            'company' => ['required', 'string', 'max:255','nullable'],
            'phone_number' => ['required', 'digits:13'],
            'profile_picture' => ['image', 'file'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->file('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile-picture');
        }

        $user = User::create($validatedData);

        // $user = User::create([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'school' => $request->school,
        //     'profile_picture' => $request->profile_picture,
        //     'company' => $request->company,
        //     'organization' => $request->organization,
        //     'phone_number' => $request->phone_number,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
