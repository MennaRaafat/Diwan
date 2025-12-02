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
                خدمات الضرائب
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                تعتبر الضرائب عنصرا لا مفر منه في كافة الأنشطة التجارية، وغالبا ما تؤثر القرارات التي يتم اتخاذها اليوم على العبء الضريبي في المستقبل نظرا للتغييرات الدائمة في القوانين والتعليمات الضريبية تتعاظم الحاجة للاستعانة بالمكاتب المهنية لدعم الشركات في تجنب مخاطر عقوبات وغرامات عدم الالتزام الكامل بالأحكام السارية للتشريعات الضريبية               
            </p>
            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                نحن في ديوان للحلول المحاسبية والضريبية نتمكن من تقديم المساعدة للمؤسسات في تحقيق أقصى قدر من الكفاءة الضريبية على المدى القصير والطويل من خلال توفير مجموعة من الخدمات المهنية المتنوعة والاستشارات الضريبية والتي تهدف الى الحفاظ على الاستخدام الأمثل لعناصر الأصول والموارد للمؤسسات لزيادة الربحية من خلال الاستفادة من قوانين الضرائب المصرية ولوائحها التنفيذية وأسس التخطيط الضريبي السليم
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                نتمكن من تقديم الدعم اللازم لالتزام الشركات بتقديم الإقرارات الضريبية في المواعيد القانونية حتى لا تتعرض للعقوبات                
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                نقوم بتمثيل الشركة أمام مصلحة الضرائب المصرية لإنـهاء أعمال الفحص الضريبي وفى جميع المنازعات الضريبية
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">أنواع خدمات الضرائب</h2>

            <ul class="space-y-3">

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد وإرسال الاقرارات والنماذج والتسويات الضريبية الدورية والسنوية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>أداء أعمال الفحص الضريبي في كافة مراحله</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>المراجعة الضريبية للمعاملات والامتثال الضريبي للشركات</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الفحص الضريبي النافي للجهالة</span>
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    تقدير المخصصات الضريبية
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    التخطيط الضريبي وتقدير الالتزامات الضريبية المتوقعة
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    المدفوعات الضريبية نيابة عن الشركات
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    مراجعه العقود التجارية لتحديد مدى خضوعها للضريبة
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    الدعم الفني وتقديم الاستشارات
                </li>
            </ul>
        </div>
    </section>
@endsection