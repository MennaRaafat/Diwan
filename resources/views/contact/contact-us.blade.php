@extends('layouts.layout')

@push('styles')
    <style>
        .wrapper{
            display:grid;
            place-items:center
        }
    </style>
@endpush

@section('content')

    <section class="w-full max-w-7xl mx-auto mt-20 px-6">


        <div class="wrapper bg-white antialiased text-gray-900">
            <div class="py-6">
            
                <img src="{{asset('assets/images/company.jpg')}}" alt=" random imgee" class="w-screen h-64 object-cover object-center">    
            
                <div class="relative px-4 -mt-16  ">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold mb-2">ديوان للحلول المحاسبية والضريبية</h2>
                        <p>شقة 2 - دور 1 - عمارة 9110 - شارع 9 - المقطم - القاهرة.</p>
                        <p dir="rtl"> الرمز البريدي: <span dir="ltr">4413430</span></p>
                        <p dir="rtl"> ت. أرضي: <span dir="ltr">0225080284</span></p>
                        <p dir="rtl">موبايل : <span dir="ltr">01104362336</span></p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6">

            {{-- Card 1 --}}
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-blue-500 text-white rounded-full p-4">
                        <!-- Icon: chat/inquiries -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4-.84L3 20l.84-4A9.863 9.863 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mb-2 text-gray-800">الاستفسارات</h2>
                <p class="text-gray-600 mb-4">يمكنك إرسال استفساراتك هنا وسنقوم بالرد عليك في أقرب وقت.</p>
                <a href="{{ url('/inquiry') }}" 
                class="inline-block mt-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                الذهاب إلى صفحة الاستفسارات
                </a>
            </div>

            {{-- Card 2 --}}
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-shadow duration-300">
               <div class="flex items-center justify-center mb-4">
                    <div class="bg-green-500 text-white rounded-full p-4">
                        <!-- Icon: service request -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0H5m4 0v4m4-4v4"/>
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mb-2 text-gray-800">طلب خدمة</h2>
                <p class="text-gray-600 mb-4">يمكنك طلب الخدمات التي نقدمها عبر هذه الصفحة بسهولة وسرعة.</p>
                <a href="{{ url('/request-service') }}" 
                class="inline-block mt-2 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">
                الذهاب إلى طلب الخدمة
                </a>
            </div>
        </div>

    </section>

    @push('scripts')
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "5000"
            };

            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
        </script>

    @endpush

@endsection