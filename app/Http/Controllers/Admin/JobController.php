<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobRequest;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobRequest::with('type')->paginate(10);
        return view('admin.jobs.index', compact('jobs'));
    }

    public function view(JobRequest $job)
    {
        return view('admin.jobs.view', compact('job'));
    }

}
