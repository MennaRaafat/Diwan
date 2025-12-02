<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\InquiryController;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\User\JobController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/important-links', 'important-links');
Route::view('/about-us', 'about-us');

Route::get('/contact-us', [InquiryController::class, 'create']);
Route::post('/contact-us', [InquiryController::class, 'store']);

Route::get('/request-service', [ServiceController::class, 'create']);
Route::post('/request-service', [ServiceController::class, 'store']);

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/job/{id}/apply', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store']);

Route::view('/services/audit', 'services.audit');
Route::view('/services/accounting', 'services.accounting');
Route::view('/services/tax', 'services.tax');
Route::view('/services/fesability-study', 'services.fesability-study');
Route::view('/services/management-consultancy', 'services.management-consultancy');
Route::view('/services/finance-consulting', 'services.finance-consulting');
Route::view('/services/inventory-and-census', 'services.inventory-and-census');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/animation', function () {
    return view('test-shape');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/inquiries', [App\Http\Controllers\Admin\InquiryController::class, 'index'])->name('inquiries');
    Route::get('/services', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('services');
    Route::get('/jobs', [App\Http\Controllers\Admin\JobController::class, 'index'])->name('jobs');
    Route::get('/jobs/{job}', [App\Http\Controllers\Admin\JobController::class, 'view'])->name('admin.jobs.view');

});
