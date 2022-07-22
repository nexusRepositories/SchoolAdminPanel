<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::whereHas(
            'roles', function($query){
                $query->where('slug', 'teacher');
            }
        )->get();

        return view('pages.teachers', compact('teachers'));
    }
}
