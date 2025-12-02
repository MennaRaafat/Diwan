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
        return view('contact.contact-us', compact('inquiryTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'topic' => 'required|string|max:255',
            'inquiry_type_id' => 'required|exists:inquiry_types,id',
            'message' => 'required|string|max:1000',
        ]);

        Inquiry::create($validated);

        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully.');
    }
}
