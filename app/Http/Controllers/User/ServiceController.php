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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company_name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'service_type_id' => 'required|exists:service_types,id',
            'service_description' => 'required|string|max:1000',
        ]);

        ServiceRequest::create($validated);

        return redirect()->back()->with('success', 'Your Request has been submitted successfully.');
    }
}
