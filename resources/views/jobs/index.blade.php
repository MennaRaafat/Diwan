@extends('layouts.layout')

@section('content')

    <section class="text-center mx-auto mt-20 mb-8 max-w-4xl px-4 pt-20">
        <h1 class="text-4xl font-bold text-indigo-800 mb-3">
            الوظائف المتاحة
        </h1>

        <p class="text-gray-600 text-lg leading-relaxed">
            يسعدنا انضمامك إلى فريقنا. تصفّح الوظائف المتاحة أدناه وتعرّف على الوصف الوظيفي
            والمتطلبات الخاصة بكل وظيفة. إذا وجدت ما يناسبك، لا تتردد في التقديم.
        </p>
    </section>

    <section class="w-full max-w-7xl mx-auto mt-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 px-4">

        <!-- CARD 1 -->
        <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl w-full">
            @php
                $jobId = $jobsByName['التأسيس'] ?? null;
            @endphp
            <a href="{{ $jobId ? url('/job/' . $jobId . '/apply') : '#' }}">
                <div class="overflow-hidden">
                    <img 
                        class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110"
                        src="https://plus.unsplash.com/premium_photo-1679496825341-6071b606886e?q=80&w=880&auto=format&fit=crop"
                        alt="">
                </div>
            </a>

            <div class="p-6 text-center flex flex-col flex-1 min-h-[230px]">
                <h5 class="text-2xl font-bold text-indigo-900 mb-6">التأسيس</h5>

                <a href="{{ $jobId ? url('/job/' . $jobId . '/apply') : '#' }}"
                class="mt-auto inline-flex items-center justify-center gap-2 text-white bg-indigo-700 hover:bg-indigo-900 transition-all duration-300 shadow-md font-medium rounded-xl text-lg px-5 py-3">
                    قدم الآن
                    <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </a>
            </div>
        </div>


        <!-- CARD 2 -->
        <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl w-full">
            @php
                $taxJobId = $jobsByName['الضرائب'] ?? null;
            @endphp
            <a href="{{ $taxJobId ? url('/job/' . $taxJobId . '/apply') : '#' }}">
                <div class="overflow-hidden">
                    <img 
                        class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110"
                        src="https://plus.unsplash.com/premium_photo-1679496825341-6071b606886e?q=80&w=880&auto=format&fit=crop"
                        alt="">
                </div>
            </a>

            <div class="p-6 text-center flex flex-col flex-1 min-h-[230px]">
                <h5 class="text-2xl font-bold text-indigo-900 mb-6">الضرائب</h5>

                <a href="{{ $taxJobId ? url('/job/' . $taxJobId . '/apply') : '#' }}"
                class="mt-auto inline-flex items-center justify-center gap-2 text-white bg-indigo-700 
                        hover:bg-indigo-900 transition-all duration-300 shadow-md font-medium 
                        rounded-xl text-lg px-5 py-3">
                    قدم الآن
                    <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </a>
            </div>
        </div>


        <!-- CARD 3 -->
        <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl w-full">
            @php
                $accountingJobId = $jobsByName['الحسابات وامساك الدفاتر'] ?? null;
            @endphp
            <a href="{{ $accountingJobId ? url('/job/' . $accountingJobId . '/apply') : '#' }}">
                <div class="overflow-hidden">
                    <img 
                        class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110"
                        src="https://plus.unsplash.com/premium_photo-1679496825341-6071b606886e?q=80&w=880&auto=format&fit=crop"
                        alt="">
                </div>
            </a>

            <div class="p-6 text-center flex flex-col flex-1 min-h-[230px]">
                <h5 class="text-2xl font-bold text-indigo-900 mb-6">الحسابات وامساك الدفاتر</h5>

                <a href="{{ $accountingJobId ? url('/job/' . $accountingJobId . '/apply') : '#' }}"
                class="mt-auto inline-flex items-center justify-center gap-2 text-white bg-indigo-700 
                        hover:bg-indigo-900 transition-all duration-300 shadow-md font-medium 
                        rounded-xl text-lg px-5 py-3">
                    قدم الآن
                    <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </a>
            </div>
        </div>


        <!-- CARD 4 -->
        <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 
                    transition-all duration-300 hover:-translate-y-2 hover:shadow-xl w-full">

            @php
                $auditJobId = $jobsByName['التأسيس'] ?? null;
            @endphp
            <a href="{{ $auditJobId ? url('/job/' . $auditJobId . '/apply') : '#' }}">
                <div class="overflow-hidden">
                    <img 
                        class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110"
                        src="https://plus.unsplash.com/premium_photo-1679496825341-6071b606886e?q=80&w=880&auto=format&fit=crop"
                        alt="">
                </div>
            </a>

            <div class="p-6 text-center flex flex-col flex-1 min-h-[230px]">
                <h5 class="text-2xl font-bold text-indigo-900 mb-6">المراجعة</h5>

                <a href="{{ $auditJobId ? url('/job/' . $auditJobId . '/apply') : '#' }}"
                class="mt-auto inline-flex items-center justify-center gap-2 text-white bg-indigo-700 
                        hover:bg-indigo-900 transition-all duration-300 shadow-md font-medium 
                        rounded-xl text-lg px-5 py-3">
                    قدم الآن
                    <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </a>
            </div>
        </div>

    </section>
@endsection
