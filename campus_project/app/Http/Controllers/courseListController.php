<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseListController extends Controller
{
    public function index()
    {
        return view('section.course-list');
    }
}
