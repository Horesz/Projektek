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
        $request->validate([
            'neptun_kod' => ['required', 'string', 'max:10', 'unique:users'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profilePicture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'houseNumber' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'string', 'max:20', 'regex:/^[0-9\s-]{0,20}$/'],
            'birthDate' => ['required', 'date'],
            'profileDescription' => ['required', 'string'],
            'terms' => ['required', 'accepted'],
        ]);

        $user = User::create([
            'neptun_kod' => $request->neptun_kod,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => $request->country,
            'city' => $request->city,
            'street' => $request->street,
            'houseNumber' => $request->houseNumber,
            'phoneNumber' => $request->phoneNumber,
            'birthDate' => $request->birthDate,
            'profileDescription' => $request->profileDescription,
        ]);

        if ($request->hasFile('profilePicture')) {
            $profilePicture = $request->file('profilePicture');
            $fileName = time() . '_' . $profilePicture->getClientOriginalName();
            $path = $profilePicture->storeAs('profile_pictures', $fileName, 'public');
            $user->profilePicture = $fileName;
        } else {
            $user->profilePicture = 'unnamed.jpg';
        }

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
