<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChangeEmailRequest;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function changeEmail(ChangeEmailRequest $request)
    {
        $user = auth()->user();

        $user->update([ 
            'email' => $request->emailaddress,
        ]);

        return redirect()->route('settings')->with('status', 'Your email successfully updated');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'password' => Hash::make($request->newpassword),
        ]);

        return redirect()->route('settings')->with('status', 'Your password successfully updated');

    }
}
