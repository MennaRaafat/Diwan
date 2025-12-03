@extends('layouts.layout')

@section('content')

    <section class="w-full max-w-7xl mx-auto mt-20 px-4">

        <div class="py-8 lg:py-16 px-4 mx-auto w-full">
            <h2 class="mb-4 tracking-tight font-extrabold text-center text-4xl font-bold text-indigo-800 mb-3">تواصل معنا</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-900 sm:text-xl">
                هل تواجه مشكلة تقنية؟ ترغب في إرسال ملاحظات حول ميزة تجريبية؟ تحتاج إلى معلومات حول خطط الأعمال لدينا؟ أخبرنا وسنكون سعداء بمساعدتك.
            </p>

            <form action="{{url('/contact-us')}}" method="POST" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">الاسم كامل</label>
                        <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat"                    value="{{ old('name') }}" required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">البريد الالكتروني</label>
                        <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" value="{{ old('email') }}" required>
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">رقم الهاتف</label>
                        <div class="flex items-center gap-2">
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="12 876 37994" 
                                value="{{ old('phone') }}"
                                required
                            >
                            <span class="px-3 py-2 bg-gray-200 border border-gray-300 rounded-lg text-gray-700">
                                20+
                            </span>
                        </div>
                    </div>

                    <div>
                    <label for="topic" class="block mb-2 text-sm font-medium text-gray-900">موضوع الاستفسار</label>
                    <input type="text" id="topic" name="topic" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat" value="{{ old('topic') }}" required>
                    </div>

                    <div>
                    <label for="inquiry_type_id" class="block mb-2 text-sm font-medium text-gray-900">نوع الاستفسار (اختار نوع الاستفسار)</label>
                    <select id="inquiry_type_id" name="inquiry_type_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat" required>
                        @foreach ($inquiryTypes as $inquiryType)
                            <option value="{{$inquiryType->id}}" {{ old('inquiry_type_id') == $inquiryType->id ? 'selected' : '' }}>{{$inquiryType->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">اكتب سؤالك او استفسارك بالتفصيل هنا</label>
                        <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="اكتب سؤالك او استفسارك بالتفصيل هنا">{{ old('message') }}</textarea>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="py-3 px-6 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        ارسال الطلب
                    </button>
                </div>

            </form>
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