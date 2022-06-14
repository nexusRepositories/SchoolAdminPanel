<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolSubjectController extends Controller
{
    public function index()
    {
        return view('pages.school-subjects');
    }
}
