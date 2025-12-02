@extends('layouts.layout')

@section('content')

    <section class="w-full max-w-7xl mx-auto mt-20 px-4">

        <div class="py-8 lg:py-16 px-4 mx-auto w-full">
            <h2 class="mb-4 tracking-tight font-extrabold text-center text-4xl font-bold text-indigo-800 mb-3">تواصل معنا</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-900 sm:text-xl">
                هل تواجه مشكلة تقنية؟ ترغب في إرسال ملاحظات حول ميزة تجريبية؟ تحتاج إلى معلومات حول خطط الأعمال لدينا؟ أخبرنا وسنكون سعداء بمساعدتك.
            </p>

            <form action="{{ url('request-service') }}" method="POST" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">الاسم كامل</label>
                        <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat" value="{{old('name')}}" required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">البريد الالكتروني</label>
                        <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" value="{{old('email')}}" required>
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">رقم الهاتف</label>
                        <input type="phone" id="phone" name="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="01287637994" value="{{old('phone')}}" required>
                    </div>

                    <div>
                    <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900">اسم الشركة</label>
                    <input type="text" id="company_name" name="company_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat" value="{{old('company_name')}}" required>
                    </div>

                    <div>
                    <label for="service_type_id" class="block mb-2 text-sm font-medium text-gray-900">نوع خدمه المطلوبة (اختار الخدمة)</label>
                    <select id="service_type_id" name="service_type_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat" required>
                        @foreach ($serviceTypes as $serviceType)
                            <option value="{{$serviceType->id}}" {{ old('service_type_id') == $serviceType->id ? 'selected' : '' }}>{{$serviceType->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    
                    <div>
                        <label for="service_description" class="block mb-2 text-sm font-medium text-gray-900">يرجى توضيح تفاصيل الخدمة المطلوبة</label>
                        <textarea id="service_description" name="service_description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="اكتب سؤالك او استفسارك بالتفصيل هنا">{{ old('service_description') }}</textarea>
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