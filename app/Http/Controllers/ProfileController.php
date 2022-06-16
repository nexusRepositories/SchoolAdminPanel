<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\EditProfileRequest;

class ProfileController extends Controller
{
    public function profilePage()
    {
        $user = auth()->user();

        return view('pages.profile', compact('user'));
    }

    public function profileEditPage()
    {
        $user = auth()->user();

        return view('pages.profile-edit', compact('user'));
    }

    public function profileUpdate(EditProfileRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('profile_edit_page')->with('status', 'Profile data update successfull');
    }
}
