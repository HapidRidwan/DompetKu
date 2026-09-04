<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callback(Request $request): RedirectResponse
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $googleId = $this->resolveGoogleValue($googleUser, 'getId', 'id');
        $name = $this->resolveGoogleValue($googleUser, 'getName', 'name', 'Google User');
        $email = $this->resolveGoogleValue($googleUser, 'getEmail', 'email');

        if (!$email) {
            return redirect()->route('login')->withErrors([
                'email' => 'Google account did not provide an email address.',
            ]);
        }

        $user = User::where('email', $email)->first();

        if (! $user) {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make(Str::random(24)),
                'google_id' => $googleId,
                'email_verified_at' => now(),
            ]);
        } else {
            $user->forceFill([
                'name' => $user->name ?: $name,
                'google_id' => $user->google_id ?? $googleId,
                'email_verified_at' => $user->email_verified_at ?? now(),
            ])->save();
        }

        Auth::login($user, true);

        return redirect()->intended(route('dashboard'));
    }

    protected function resolveGoogleValue(object $user, string $methodName, string $propertyName, mixed $default = null): mixed
    {
        if (method_exists($user, $methodName)) {
            return $user->{$methodName}();
        }

        return $user->{$propertyName} ?? $default;
    }
}
