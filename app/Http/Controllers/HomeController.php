<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    // @desc Show home index view
    // @route GET /
    public function index(): View
    {
        $jobs = Job::latest()->limit(6)->get();
        return view('pages.index')->with('jobs', $jobs);
    }
}
