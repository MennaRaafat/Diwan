<x-app-layout lang="ar" dir="rtl">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Job Application Details') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h3 class="text-lg font-bold text-indigo-800 mb-4">تفاصيل طلب التوظيف</h3>

            <div class="space-y-4">
                <p><strong>الاسم:</strong> {{ $job->name }}</p>
                <p><strong>البريد الإلكتروني:</strong> {{ $job->email }}</p>
                <p><strong>رقم الهاتف:</strong> {{ $job->phone }}</p>
                <p><strong>الوظيفة المطلوبة:</strong> {{ $job->job_name }}</p>
                <p><strong>الخبرات السابقة:</strong> {{ $job->exprience }}</p>
                <p><strong>الرسالة التعريفية:</strong> {{ $job->cover_letter }}</p>
                <p><strong>المؤهل الدراسي:</strong> {{ $job->major }}</p>
                <p><strong>نوع الوظيفة:</strong> {{ optional($job->type)->name }}</p>
                <p><strong>السيرة الذاتية:</strong> 
                    <a href="{{ asset('storage/' . $job->cv) }}" target="_blank" class="text-indigo-600 hover:underline">
                        عرض السيرة الذاتية
                    </a>
                </p>
                <p><strong>تاريخ التقديم:</strong> {{ $job->created_at->format('Y-m-d H:i') }}</p>
            </div>

            <div class="mt-6">
                <a href="{{ url('/admin/jobs') }}" class="text-blue-600 hover:underline">&larr; العودة إلى قائمة الوظائف</a>
            </div>
        </div>
    </div>
</x-app-layout>
