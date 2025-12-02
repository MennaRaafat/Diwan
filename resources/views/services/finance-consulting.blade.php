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
                خدمات الاستشارات المالية
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                اصبحت الشركات في العصر الحديث تهتم بالتوسع بنطاقات الأعمال وتطبيق مبدأ الاستمرارية و مواكبة التطورات في مختلف المجالات التكنولوجية والاقتصادية والاجتماعية، وهذا لن يتم الا عندما تتوفر لدى الشركات قاعدة عمليات تنطلق منها الخطط التي تضعها الادارة، ويعد نظام الرقابة الداخلية الجوهر الاساسي لسير وتنظيم اعمال الشركات وتحقيق ما تطمح اليه من رؤى واهداف كونه نظام يساعد في المحافظة على الأصول من الهدر والضياع ورفع الكفاءة الانتاجية وجذب المستثمرين من خلال عكس معلومات واضحة في التقارير المالية الصادرة عنها
            </p>
            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                تعمل نظم المعلومات المطورة على توفير البيانات المطلوبة بهدف دعم وإدارة المؤسسات
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                يعتبر وجود نظام تكاليف فعال ذو أهمية قصوى للشركات الصناعيـة تحديـدا ولا تخفى أهميته للمؤسسات الخدمية والبنوك مع تشعب أعمالها وذلك للرقابة على التكاليف بالمؤسسة. تحديد تكلفة الوحدة المنتجة أو الخدمة، المساعدة في اتخاذ قرار تسعير المنتجات والخدمات، وترشيد القرارات الإدارية تحديد الاختيارات المثلى يمكننا في ديوان مساعدة إدارات الشركات على لتطوير أنظمة العمل الداخلية للحصول على أفضل نتائج ممكنة لتطوير الأعمال وتعظيم الربحية من خلال ارشادات الاستخدام الأفضل للموارد مع تأهيل الشركات للحصول على موارد اضافية خارجيـة مثـل الحصول على تمويـل مـن المؤسسات المانحة
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">أنواع خدمات الاستشارات المالية</h2>

            <ul class="space-y-3">
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>فحص وتصميم نظم الرقابة الداخلية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>فحص وتصميم النظم المالية والادارية (والتي تتضمن دليل الحسابات والدورات المستندية المطبقة ونماذج المستندات المستخدمة والهيكل التنظيمي والتوصيف الوظيفي واللوائح والصلاحيات المالية ونظم إدارة شئون العاملين وما يرتبط بها من سياسات)</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>تصميم نظم التكاليف المختلفة والتدريب عليها</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>تأهيل الشركات للحصول على تمويل مصرفي</span>
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الدعم الفني وتقديم الاستشارات</span>
                </li>
            </ul>
        </div>
    </section>
@endsection