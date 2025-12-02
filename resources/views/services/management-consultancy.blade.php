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
                خدمات الاستشارات الإدارية            
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                تنقسم أنواع الشركات العاملة في مصر بشكل عام الى ثلاث أنواع رئيسية
            </p>

            <ul class="space-y-3">

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>كيانات فردية (المؤسسات الفردية)</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>شركات الأشخاص (شركات التضامن، وشركات التوصية البسيطة)</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>شركات الأموال (مثل الشركات المساهمة، الشركات ذات المسئولية المحدودة، شركات التوصية بالأسهم، وشركات الشخص الواحد)</span>
                </li>
            </ul>

            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                يقدم مكتب ديوان مجموعة متنوعة من خدمات الاستثمار وتأسيـس الشركات بواسطة نخبة من المتخصصين لتقديم الدعم المناسب للشركات بداية من إجراءات تأسيس الشركات مرورا بالتوثيق القانوني لأية تعديـلات تتعلق بالنظام الأساسي أو قرارات المساهمين ومجلس الإدارة، أو التغييرات المتعلقة بهيـكل الملكية والإدارة وخلافه، فضلا عن تنفيذ إجراءات الحصول على التراخيص الرسمية اللازمة، ومجموعة أخرى من الخدمات الإدارية لدعم الأعمال           
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">أنواع خدمات الاستشارات الإدارية</h2>

            <ul class="space-y-3">

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>تأسيس الشركات وفقا للقوانين المصرية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>خدمات الجمعيات العامة العادية وغير العادية</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>زيادة / تخفيض رأس المال</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>إعادة هيكلة الشركات وتغيير الشكل القانوني</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>تقييم الشركات</span>
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    اندماج / انقسام/ تصفية الشركات
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    خدمات مجالس الإدارة
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    القيد والتسجيل بالسجلات الرسمية
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    إعداد النماذج المتخصصة
                </li>
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    الدعم الفني وتقديم الاستشارات
                </li>
            </ul>
        </div>
    </section>
@endsection
