<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InquiryType;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function create(){
        $inquiryTypes = InquiryType::all();
        return view('contact.inquiry', compact('inquiryTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => ['required', 'regex:/^(10|11|12|15)[0-9]{8}$/'],
                'topic' => 'required|string|max:255',
                'inquiry_type_id' => 'required|exists:inquiry_types,id',
                'message' => 'required|string|max:1000',
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

                'topic.required' => 'الموضوع مطلوب.',
                'topic.string' => 'الموضوع يجب أن يكون نصاً.',
                'topic.max' => 'الموضوع يجب ألا يتجاوز 255 حرفاً.',

                'inquiry_type_id.required' => 'نوع الاستفسار مطلوب.',
                'inquiry_type_id.exists' => 'نوع الاستفسار غير موجود.',

                'message.required' => 'الرسالة مطلوبة.',
                'message.string' => 'الرسالة يجب أن تكون نصاً.',
                'message.max' => 'الرسالة يجب ألا تتجاوز 1000 حرف.',
            ]
        );
        
        $validated['phone'] = '+20' . $validated['phone'];

        Inquiry::create($validated);

        return redirect()->back()->with('success', 'تم إرسال استفسارك بنجاح.');

    }
}
