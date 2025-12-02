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
                خدمات المراجعة
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                تعد عملية المراجعة الخارجية من الأمور بالغ الاهمية للمؤسسات والشركات حيث إن أسواق العمل والاستثمار تطالب الشركات بمزيد من المسائلة والشفافية في جميع جوانب أعمالها. ونظرا لأن نطاق أعمال المراجعة لا تـقصر على التأكيد على البيانات المالية وحدها، بل يتسع الى تطبيق التأكيد على جميع الملهمات المستخدمة لإدارة المؤسسة والتعامل معها والاستثمار فيها لذلك يساعد التأكيد على المعلومات المالية وغير المالية في غرس الثقة في القرارات المهمة التي تتخذها الإدارة نيابة عن المساهمين                
            </p>
            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                نحن كفريق عمل ديوان نقدر الأهمية التجارية لتوفير ضمانات بشأن ضوابط عمل الشركات وتلبية المتطلبـات التنظيمية والقانونية. ومع ذلك، فإننا نـقدم أكثر بكثير من مجرد خدمات التأكد فقط. نحن نتفهم الحاجة إلى تقديــم المشورة عملاؤنا لمساعدتهم في تطوير العمل وتحقيق أهدافهم
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                نحن على قناعة بأهمية قوة العلاقة مع عملاؤنا. وهذه القناعة يتدلى بها كامل فريق العمل ليؤدي مهامه بشكل شامل ودقيق ومخطط ومصمم خميصا لتلبية الاحتياجات المحددة والدعم المستمر لكل عميل
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">أنواع خدمات المراجعة</h2>

            <ul class="space-y-3">

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>المراجعة السنوية للقوائم المالية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الفحص المحدود للقوائم المالية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الفحص النافي للجهالة</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>المراجعة ذات الأغراض الخاصة</span>
                </li>

            </ul>
        </div>

    </section>
@endsection
