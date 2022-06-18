<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
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
        $user->update($request->safe()->except(['url', 'userpic_delete_flag']));

        if($request->userpic_delete_flag) {
            if ($user->url) {
                Storage::disk('public')->delete($user->url);
            }
            $user->update([
                'url' => null,
            ]);
        }
        if ($request->file('url')) {
            if ($user->url) {
                Storage::disk('public')->delete($user->url);
            }
            $user->update([
                'url' => $request->file('url')->store('users', 'public'),
            ]);
        }

        return redirect()->route('profile_edit_page')->with('status', 'Profile data update successfull');
    }
}
