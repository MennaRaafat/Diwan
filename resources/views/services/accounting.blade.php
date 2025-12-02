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
                خدمات المحاسبة وامساك الدفاتر
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                يفضل العديد من رواد الأعمال الاستعانة بمقدمي خدمات المحاسبة الخارجية للحصول على مزايا عديدة منها
            </p>
            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                تنفيذ الخدمات اللوجستية الروتينية للأعمال بأفضل كفاءة ممكنة مثل إمساك الدفاتر وكشوف المرتبات وتسديد النفقات وإعداد التقارير وغير ذلك، بنمط مهني احترافي
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                زيادة الفرص الاستثمارية والتي يتم اتخاذ قراراتها بناء على المعلومات السليمة التي تقدم في التوقيت المثالي، مما ينعكس على جودة الإدارة المالية وترشيد التكاليف
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                الحفاظ على السجلات بشكل آمن مما يقل من خطـورة فقد البيانات والمستندات لكافة الأغراض وبخامة عند الفحص الضريبي لسجلات الشركة
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                التمتع بسلامة الأمور والبيانات المالية عن طريق الحصول على الإنذارات المبكرة حال وجود أمور أو أخطاء جوهرية ينبغي للإدارة الاطلاع عليها والتي قد لا تكتشف أثناء عمليات المراجعة الخارجية أو قد تعاني الشركة من تأخر اكتشافها
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">أنواع خدمات المحاسبة وامساك الدفاتر</h2>

            <ul class="space-y-3">

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>تسجيل المعاملات والقيد المحاسبي (يدويا /بالبرامج المحاسبية المختلفة)</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعداد القوائم المالية طبقا لمعايير المحاسبة المصرية أو المعايير الدولية لإعداد التقارير المالية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إصدار كافة التقارير والتحليلات المالية الدورية"MIS"</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إصدار فواتير البيع وتقارير حسابات العملاء</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>ربط فواتير الشركة بنظام الفاتورة الضريبية الالكترونية</span>
                </li>
            </ul>
        </div>
    </section>
@endsection
