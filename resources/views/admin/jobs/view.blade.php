<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Job Application Details') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

            <div class="space-y-4">
                <p><strong>Name:</strong> {{ $job->name }}</p>
                <p><strong>Email:</strong> {{ $job->email }}</p>
                <p><strong>Phone Number :</strong> {{ $job->phone }}</p>
                <p><strong>Experience:</strong> {{ $job->exprience }}</p>
                <p><strong>Cover Letter:</strong> {{ $job->cover_letter }}</p>
                <p><strong>Education:</strong> {{ $job->major }}</p>
                <p><strong>Job Type:</strong> {{ optional($job->type)->name }}</p>
                <p><strong>Cv:</strong> 
                    {{-- <a href="{{ asset('storage/' . $job->cv) }}" target="_blank" class="text-indigo-600 hover:underline">
                        View Cv 
                    </a> --}}
                    @php
                        $cv = basename($job->cv);
                    @endphp
                    <a href="{{ route('download.cv', $cv) }}" class="text-blue-600 underline">{{ $cv }}</a>

                </p>
                <p><strong>Applied Date:</strong> {{ $job->created_at->format('Y-m-d H:i') }}</p>
            </div>

            <div class="mt-6">
                <a href="{{ url('/admin/jobs') }}" class="text-blue-600 hover:underline">&larr; Return to jobs list  </a>
            </div>
        </div>
    </div>
</x-app-layout>
