<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChangeEmailRequest;
use App\Http\Requests\ChangePasswordRequest;

class SettingsController extends Controller
{
    public function settingsPage()
    {
        $user = auth()->user();

        return view('pages.settings', compact('user'));
    }

    public function changeEmail(ChangeEmailRequest $request)
    {
        $user = auth()->user();

        $user->update([ 
            'email' => $request->emailaddress,
        ]);

        return redirect()->route('settings_page')->with('status', 'Your email successfully updated');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'password' => Hash::make($request->newpassword),
        ]);

        return redirect()->route('settings_page')->with('status', 'Your password successfully updated');
    }
}
