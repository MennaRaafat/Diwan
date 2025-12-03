@extends('layouts.layout')

@section('content')

    <section class="w-full max-w-7xl mx-auto mt-20 px-4">
        
        <div class="py-8 lg:py-16 px-4 mx-auto w-full">
            <h2 class="mb-4 tracking-tight font-extrabold text-center text-4xl font-bold text-indigo-800 mb-3">قدّم طلب التوظيف</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-900 sm:text-xl">
                هل تبحث عن فرصة عمل مميزة؟ يسعدنا انضمامك إلى فريقنا!  
                املأ النموذج التالي وشاركنا خبراتك، وسيتواصل معك فريق الموارد البشرية في أقرب وقت.
            </p>

            <form action="{{url('/jobs')}}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">الاسم كامل</label>
                        <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat" value="{{ old('name')}}" required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">البريد الالكتروني</label>
                        <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" value="{{ old('email')}}" required>
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
                        <label for="major" class="block mb-2 text-sm font-medium text-gray-900">المؤهل الدراسي</label>
                        <input type="text" name="major" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Menna Raafat" value="{{ old('major')}}" required>
                    </div>
                    <div>
                        <label for="exprience" class="block mb-2 text-sm font-medium text-gray-900">الخبرات السابقة</label>
                        <textarea id="exprience" name="exprience" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="اكتب سؤالك او استفسارك بالتفصيل هنا">{{ old('exprience')}}</textarea>
                    </div>
                    <div>
                        <label for="cover_letter" class="block mb-2 text-sm font-medium text-gray-900">الرسالة التعريفية</label>
                        <textarea id="cover_letter" name="cover_letter" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="اكتب سؤالك او استفسارك بالتفصيل هنا">{{ old('cover_letter')}}</textarea>
                    </div>

                    <input type="hidden" name="job_type_id" value="{{$jobType->id}}">
                    <div>
                        <label for="cv" class="block mb-2 text-sm font-medium text-gray-900">السيرة الذاتية</label>
                        <input type="file" name="cv" id="cv" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
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