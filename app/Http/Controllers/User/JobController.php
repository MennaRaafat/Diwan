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
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => ['required', 'regex:/^(10|11|12|15)[0-9]{8}$/'],
                'exprience' => 'required|string|max:2000',
                'cover_letter' => 'required|string|max:2000',
                'major' => 'required|string|max:255',
                'job_type_id' => 'required|exists:job_types,id',
                'cv' => 'required|file|mimes:pdf|max:5120',
            ],
            [

                'name.required' => 'الاسم مطلوب.',
                'name.string' => 'الاسم يجب أن يكون نصاً.',
                'name.max' => 'الاسم يجب ألا يتجاوز 255 حرفاً.',

                'email.required' => 'البريد الإلكتروني مطلوب.',
                'email.email' => 'يجب إدخال بريد إلكتروني صالح.',
                'email.max' => 'البريد الإلكتروني يجب ألا يتجاوز 255 حرفاً.',

                'phone.required' => 'رقم الهاتف مطلوب.',
                'phone.regex' => 'قم الهاتف غير صالح. يجب أن يكون رقمًا مصريًا.',

                'exprience.string' => 'سنوات الخبرة يجب أن تكون نصاً.',
                'exprience.max' => 'سنوات الخبرة يجب ألا تتجاوز 2000 حرف.',

                'cover_letter.string' => 'رسالة الغلاف يجب أن تكون نصاً.',
                'cover_letter.max' => 'رسالة الغلاف يجب ألا تتجاوز 2000 حرف.',

                'major.required' => 'التخصص مطلوب.',
                'major.string' => 'التخصص يجب أن يكون نصاً.',
                'major.max' => 'التخصص يجب ألا يتجاوز 255 حرفاً.',

                'job_type_id.required' => 'نوع الوظيفة مطلوب.',
                'job_type_id.exists' => 'نوع الوظيفة غير موجود.',

                'cv.required' => 'السيرة الذاتية مطلوبة.',
                'cv.file' => 'يجب رفع ملف صحيح.',
                'cv.mimes' => 'يجب أن تكون السيرة الذاتية بصيغة PDF فقط.',
                'cv.max' => 'حجم السيرة الذاتية يجب ألا يتجاوز 5 ميجابايت.',
            ]
        );

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('cv_files', $filename, 'public');

            $validated['cv'] = $path;
        }

        $validated['phone'] = '+20' . $validated['phone'];

        JobRequest::create($validated);

        return redirect()->back()->with('success', 'تم تقديم طلبك بنجاح. سنتواصل معك قريبًا.');
    }

    public function downloadCv($filePath)
    {
        $path = storage_path('app/public/cv_files/' . $filePath);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->download($path);
    }

}
