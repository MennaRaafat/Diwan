<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class ServiceController extends Controller
{
    public function index(){
        $services = ServiceRequest::with('type')->paginate(10);
        return view('admin.services.index', compact('services'));
    }
}
