<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('pages.groups', compact('groups'));
    }

    public function groupDelete(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index');
    }
}
