@extends('layouts.layout')

@section('content')

    <section class="w-full h-64 md:h-80 relative overflow-hidden flex mt-20">
        <!-- Right side background image -->
        <div class="w-1/2 h-full bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=1600');">
        </div>
        <!-- Left side with text and diagonal overlay -->
        <div class="w-1/2 h-full bg-gray-100 relative flex items-center justify-start pl-12 md:pl-20">
            <!-- Text -->
            <h2 class="relative text-2xl md:text-3xl font-bold text-white z-10">
                خدمات الدراسات
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                دراسات الجدوى الاقتصادية للمشروعات من العوامل الهامة والمؤثرة جدا عند اختيار المشروع الاستثماري الجديد حيث ان الهدف الأساسي من دراسة الجدوى هو دراسة امكانية قيام المشروع وتحقيق اقصى عائد ممكن من الموارد المتاحة وتحقيق ارباح او عائد يفوق التكلفة المستثمرة فيه والوصول الى قرار نهائي بقبول الفكرة او رفضها
            </p>
            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                يساعد مكتب ديوان المستثمرين في إعداد كافة دارسات الجدوى للمشروعات القائمة أو المزمع الاستثمار فيها، فضلا عن المساعدة في إعداد تقارير السعر المحايد والتي يهدف إلى التأكد بأن المعاملات المالية والتجارية التي تتم بين الأشخاص المرتبطة لأغراض الضريبة تتم على أساس السعر المحايد وأن الضريبة المتعلقة بتلك المعاملات تعكس درجة المساهمة الاقتصادية للمنشأة           
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">أنواع خدمات الدراسات</h2>

            <ul class="space-y-3">
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد دراسة الجدوى الفنية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد دراسة الجدوى التسويقية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد دراسة الجدوى المالية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد تقارير السعر المحايد</span>
                </li>
            </ul>
        </div>

    </section>

@endsection
