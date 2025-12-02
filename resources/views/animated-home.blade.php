@extends('layouts.layout')
    @push('styles')
        <style>
            .snowball {
                position: absolute;
                top: -10px;
                background: black;
                border-radius: 50%;
                opacity: 0.8;
                animation-name: fall;
                animation-timing-function: linear;
                animation-iteration-count: 1;
            }

            #snow-container {
                z-index: 99999;
            }

            @keyframes fall {
                0% {
                    transform: translateY(0);
                    opacity: 0.8;
                }
                100% {
                    transform: translateY(110vh);
                    opacity: 0.2;
                }
            }
        </style>
    @endpush

    @section('content')

        <!-- Hero Carousel -->
        <section class="relative h-[480px] mt-20 rounded-xl overflow-hidden shadow-lg max-w-7xl mx-auto" id="hero-carousel" data-carousel="slide">

            <!-- Carousel Wrapper -->
            <div class="relative h-full overflow-hidden rounded-xl">

                <!-- Slide 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=1600" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white z-20 px-6">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">حلول محاسبية وضريبية متكاملة</h1>
                        <p class="max-w-2xl text-lg opacity-90">خبراء يقدمون لك أفضل الخدمات المهنية لدعم أعمالك منذ عام 2006</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1600" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white z-20 px-6">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">خدمات تدقيق احترافية</h1>
                        <p class="max-w-2xl text-lg opacity-90">نساعدك على بناء قرارات دقيقة قائمة على بيانات موثوقة.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=1600" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white z-20 px-6">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">استشارات مالية وإدارية</h1>
                        <p class="max-w-2xl text-lg opacity-90">نقدم حلولاً متقدمة لرفع كفاءة أعمالك.</p>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <button type="button" class="absolute top-1/2 right-4 z-30 flex items-center justify-center h-12 w-12 rounded-full bg-black/40 hover:bg-black/60" data-carousel-prev>
                <span class="text-white text-2xl">‹</span>
            </button>
            <button type="button" class="absolute top-1/2 left-4 z-30 flex items-center justify-center h-12 w-12 rounded-full bg-black/40 hover:bg-black/60" data-carousel-next>
                <span class="text-white text-2xl">›</span>
            </button>

        </section>

        <!-- About Section -->
        <section id="about" class="py-16 px-6 bg-white">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-indigo-800 mb-6">نبذة عن ديوان</h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    يعتبر مكتب ديوان للحلول المحاسبية والضريبية مقدم مميز للخدمات المهنية للشركات في مجالات دعم الأعمال مثل خدمات المراجعة والمحاسبة والضرائب والخدمات الإدارية والاستشارية الأخرى، مع فريق من الخبراء والاستشاريون بخبرات واسعة في تقديم الخدمات المهنية المتخصصة.                  
                </p>
                <p class="text-gray-600 leading-relaxed text-lg">
                    تم إنشاء مكتب ديوان للحلول المحاسبية والضريبية ليكون امتداد لخبرة مهنية بداية من عام 2006 حيث نقوم بتقديم أعلى معايير الجودة والشفافية في جميع خدماتنا لضمان نجاح عملائنا وتحقيق أهدافهم.
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-gray-100">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <img src="https://plus.unsplash.com/premium_photo-1683880731792-39c07ceea617?q=80&w=800" class="rounded-xl shadow-xl" />

                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">نحن أفضل وكالة محاسبة</h2>

                        <div class="space-y-5">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-indigo-700 text-white rounded-full flex items-center justify-center text-xl">📊</div>
                                <div>
                                    <h3 class="text-lg font-semibold">خدمات التدقيق</h3>
                                    <p class="text-gray-500">تعزيز الثقة في القرارات من خلال تحليل البيانات المالية وغير المالية.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-indigo-700 text-white rounded-full flex items-center justify-center text-xl">🧾</div>
                                <div>
                                    <h3 class="text-lg font-semibold">المحاسبة ومسك الدفاتر</h3>
                                    <p class="text-gray-500">توفير إدارة مالية دقيقة وتنبيه مبكر للأخطاء المحتملة.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-indigo-700 text-white rounded-full flex items-center justify-center text-xl">💰</div>
                                <div>
                                    <h3 class="text-lg font-semibold">خدمات الضرائب</h3>
                                    <p class="text-gray-500">تحقيق أفضل كفاءة ضريبية قصيرة وطويلة المدى.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-indigo-700 text-white rounded-full flex items-center justify-center text-xl">📋</div>
                                <div>
                                    <h3 class="text-lg font-semibold">خدمات الاستشارات</h3>
                                    <p class="text-gray-500">تطوير الأنظمة الداخلية وتحسين الأداء الإداري.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-indigo-700 text-white rounded-full flex items-center justify-center text-xl">👥</div>
                                <div>
                                    <h3 class="text-lg font-semibold">الموارد البشرية والتأمينات</h3>
                                    <p class="text-gray-500">دعم شامل لإدارة الموارد البشرية والالتزام بالتأمينات.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div id="snow-container" class="fixed inset-0 pointer-events-none overflow-hidden"></div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const snowContainer = document.getElementById("snow-container");

                function createSnowball() {
                    const snow = document.createElement("div");
                    snow.classList.add("snowball");

                    // Random horizontal position
                    snow.style.left = Math.random() * window.innerWidth + "px";

                    // Random animation duration
                    snow.style.animationDuration = (3 + Math.random() * 4) + "s";

                    // Random size
                    const size = 2 + Math.random() * 4;
                    snow.style.width = size + "px";
                    snow.style.height = size + "px";

                    snowContainer.appendChild(snow);

                    // Remove when animation ends
                    setTimeout(() => {
                        snow.remove();
                    }, 7000);
                }

                // Generate continuously
                setInterval(createSnowball, 80);
            });
        </script>
    @endpush

@endsection
