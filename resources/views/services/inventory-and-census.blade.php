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
                خدمات الحصر والجرد
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                تساعد المعلومات حول أصول الشركات على خلق تقارير مالية دقيقة وتوقعات تجارية وتحليل مالي شامل، حيث يتم استخدام هذه التقارير لتحديـد السلامة المالية للشركات واتخاذ القرار بخصوص الاستثمار فيها أو القيام بإقراض المال
            </p>
            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                وتعد الأصول الثابتة مهمة خاصة للصناعات التي تعتمد على رأس مال قوي مثل التصنيع، والتي تتطلب استثمارات كبيرة في الممتلكات والمنشآت والمعدات، فعندما تقوم الشركة بالإفصاح عن التدفقات النقدية الصافية السلبية بسبب شراء الأصول الثابتة، هذا قد يكون مؤشر قوي على أن الشركة في حالة الاستثمار أو النمو
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                ويقصد بجرد الأصول الثابتة التأكد من وجود هذا الأصل والتحقق من ملكية المشروع لهذا الأصل، ومعرفة قيمته الصافية في نهاية الفترة المحاسبية، وإجراء التسويات الجردية اللازمة لهذا الأصل، وذلك لتعكس القيمة الحقيقية في قائمة المركز المالي
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                يساعد مكتب ديوان إدارة الشركات في وضع أنظمة متكاملة لتسجيـل وحصر وجرد الأصول الثابتة، والمخزون، والنقدية
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">أنواع خدمات المراجعة</h2>

            <ul class="space-y-3">
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد دليل الأصول الثابتة</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الجرد المادي للأصول</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>تكويد وحصر الأصول</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد التقارير التحليلية</span>
                </li>
            </ul>
        </div>

    </section>

@endsection