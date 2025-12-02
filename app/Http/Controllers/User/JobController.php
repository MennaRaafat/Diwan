<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobType;
use App\Models\JobRequest;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function index(){
        $jobsTypes = JobType::all();
        
        $jobsByName = $jobsTypes->pluck('id', 'name')->toArray();

        return view('jobs.index', compact('jobsByName'));
    }

    public function create($id){
        $jobType = JobType::find($id);
        
        return view('jobs.create', compact('jobType'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'job_name' => 'required|string|max:255',
            'exprience' => 'nullable|string|max:2000',
            'cover_letter' => 'nullable|string|max:2000',
            'major' => 'required|string|max:255',
            'job_type_id' => 'required|exists:job_types,id',
            'cv' => 'required|file|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('cv_files', $filename, 'public');

            $validated['cv'] = $path;
        }

        JobRequest::create($validated);

        return redirect()->back()->with('success', 'تم تقديم طلبك بنجاح. سنتواصل معك قريبًا.');
    }
}
