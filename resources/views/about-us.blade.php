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
                نبذة عن ديوان
            </h2>
            
            <!-- Diagonal Shape Overlay -->
            <div class="absolute top-0 right-0 h-full w-[120%] bg-blue-900 skew-x-12 origin-top-right"></div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="mx-5 mb-6 text-right">
            <p class="text-gray-600 leading-relaxed text-lg">
                يعتبر مكتب ديوان للحلول المحاسبية والضريبية مقدم مميز للخدمات المهنية للشركات في مجالات دعم الأعمال مثل خدمات المراجعة والمحاسبة والضرائب والخدمات الإدارية والاستشارية الأخرى، مع فريق من الخبراء والاستشاريون بخبرات واسعة في تقديم الخدمات المهنية المتخصصة.            
            </p>
            <p class="text-gray-600 leading-relaxed text-lg my-5"> 
                تم إنشاء مكتب ديوان للحلول المحاسبية والضريبية ليكون امتداد لخبرة مهنية بداية من عام 2006 حيث نقوم بتقديم أعلى معايير الجودة والشفافية في جميع خدماتنا لضمان نجاح عملائنا وتحقيق أهدافهم.            
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                نحن قادرون على مساعدة عملاؤنا على نمو أعمالهم التجارية حتى في الأوقات الصعبة من خلال التعرف على احتياجات عملاؤنا بشكل دقيق لنتمكن من تقديم حلول فريدة ومتخصصة استناداً على التحليلات والبحث الواسع، وبأفضل أتعاب تنافسية تحظى برضا عملاؤنا عن الجودة المرتفعة للخدمات مقابل السعر المناسب.            
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                يعتمد حجر الأساس لمكتبنا على اختيار موظفينا وخبراؤنا الذين يتمثل هدفهم الرئيسي في مساعدة العملاء على إيجاد حلول وتقديم خدمة عالية الجودة والفعالية.
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                نؤمن كفريق عمل ديوان للحلول المحاسبية والضريبية ببناء شراكات طويلة الأمد مع العملاء والتي تساعدنا جميعاً على النمو، وسياستنا هي أن نكون بوابة الاتصال الأول لجميع قرارات عملاؤنا المتعلقة بالأعمال، حيث يمكن للعملاء الحصول على مجموعة متنوعة من الخدمات المهنية بآلية اتصال واحدة وبشكل مستمر.
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                إن سعادة عملاؤنا بإنجاز أعمالهم باحترافية وفى التوقيت الملائم هو الحافز لنا للتطور المستمر.
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">الشركاء الرئيسيون</h2>

            <ul class="space-y-3">
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الأستاذ/ محمود محمد السيد خليل</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الأستاذ/ هيثم محمود أنيس محمد</span>
                </li>
            </ul>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">العضويات المهنية</h2>

            <ul class="space-y-3">
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>سجل المحاسبين والمراجعين المصريين.</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الهيئة العامة للرقابة المالية.</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>جمعية المحاسبين والمراجعين المصرية.</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>جمعية الضرائب المصرية.</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الجمعية المصرية للمالية العامة والضرائب.</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>جمعية المحاسبين القانونين العربية.</span>
                </li>
            </ul>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">الهدف</h2>

            <p class="text-gray-600 leading-relaxed text-lg">
                خدمة عملاءنا من جميع النواحي المالية الضريبية والقانونية وتقديم العديد من الخيارات الاقتصادية والحلول الادارية للنهوض بمستوى العملاء والمحافظة على استمرارية المشروعات وتنميتها بالإضافة الى توعية العملاء بالفرص الاستثمارية الغير مستغلة.
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">الرسالة</h2>

            <p class="text-gray-600 leading-relaxed text-lg">
                نسعى دائما للتميز وإنجاز المهام بأعلى مستوى من الجودة والإتقان من خلال فرق العمل المميزة التي لديها الوعي والإدراك لأهمية العميل والتدريب اللازم. فنحن نطمح الى بناء علاقة مهنية قوية مع كافة عملائنا.
            </p>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">المبادئ</h2>

            <ul class="space-y-3">
                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الكفاءة الإدارية والتنفيذية​</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>مسايره التطور في المجال المهني</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الاستقلالية والحياد</span>
                </li>

                <li class="flex items-center justify-start gap-2 text-gray-700 text-lg">
                    <span class="text-indigo-700 text-lg">◄</span>       
                    <span>الحرص على آداب وسلوك المهنة وبذل العناية المهنية الكافية</span>
                </li>
            </ul>
        </div>

        <div class="mx-5 mt-12 mb-3 text-right">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6">الرؤية</h2>

            <p class="text-gray-600 leading-relaxed text-lg">
                نسعى لأن نكون من أفضل المكاتب في تقديم الخدمات المالية والادارية لعملائنا على مستوى مصر والمنافسة القوية على مستوى الوطن العربي.
            </p>
        </div>

    </section>
@endsection
