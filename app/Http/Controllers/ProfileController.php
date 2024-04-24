<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;
use App\Models\Account;
use App\Models\User;
use Illuminate\View\View;


class ProfileController extends Controller
{
    public function dashboard() {

        $user = auth()->user();

        $response = Http::get('https://openexchangerates.org/api/latest.json?app_id=92cb910af0cd4099a38af39aec0bb48e');
        $data = $response->json();
        $currencies = $data['rates'];

        return view('dashboard', compact('user','currencies'));
    }

    public function transactions() {
        return view('transactions');
    }

    public function payments() {
        return view('payments');
    }

    public function cards() {
        return view('cards');
    }

    public function account() {
        return view('account');
    }

    public function fund() {
        return view('fund');
    }

    public function sendFunds() {
        return view('sendFunds');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
