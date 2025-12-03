<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceType;
use App\Models\ServiceRequest;

class ServiceController extends Controller
{
    public function create(){
        $serviceTypes = ServiceType::all();
        return view('contact.request-service', compact('serviceTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'company_name' => 'required|string|max:255',
                'phone' => ['required', 'regex:/^(10|11|12|15)[0-9]{8}$/'],
                'service_type_id' => 'required|exists:service_types,id',
                'service_description' => 'required|string|max:1000',
            ],
            [
                'name.required' => 'حقل الاسم مطلوب.',
                'name.string' => 'حقل الاسم يجب أن يكون نصًا.',
                'name.max' => 'حقل الاسم لا يجب أن يزيد عن 255 حرفًا.',

                'email.required' => 'حقل البريد الإلكتروني مطلوب.',
                'email.email' => 'يجب إدخال بريد إلكتروني صالح.',
                'email.max' => 'حقل البريد الإلكتروني لا يجب أن يزيد عن 255 حرفًا.',

                'company_name.required' => 'حقل اسم الشركة مطلوب.',
                'company_name.string' => 'حقل اسم الشركة يجب أن يكون نصًا.',
                'company_name.max' => 'حقل اسم الشركة لا يجب أن يزيد عن 255 حرفًا.',

                'phone.required' => 'حقل رقم الهاتف مطلوب.',
                'phone.regex' => 'قم الهاتف غير صالح. يجب أن يكون رقمًا مصريًا.',

                'service_type_id.required' => 'حقل نوع الخدمة مطلوب.',
                'service_type_id.exists' => 'نوع الخدمة المحدد غير موجود.',

                'service_description.required' => 'حقل وصف الخدمة مطلوب.',
                'service_description.string' => 'حقل وصف الخدمة يجب أن يكون نصًا.',
                'service_description.max' => 'حقل وصف الخدمة لا يجب أن يزيد عن 1000 حرف.',
            ]
        );

        $validated['phone'] = '+20' . $validated['phone'];

        ServiceRequest::create($validated);

        return redirect()->back()->with('success', 'تم إرسال طلبك بنجاح.');

    }
}
