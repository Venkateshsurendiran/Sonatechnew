@extends('layouts.app')

@section('content')
    <style>
        @keyframes marqueeLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes marqueeUp {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-50%);
            }
        }

        .custom-scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .custom-scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <!-- 1. Hero -->
    <section class="relative w-full min-h-screen overflow-hidden bg-[#081F3D] flex flex-col">
        <!-- Video Background -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover opacity-60">
            <!-- Fallback placeholder image/video URL for layout purposes -->
            <source src="{{ asset('assets/images/home-banner.mp4') }}" type="video/mp4">
        </video>

        <div class="absolute inset-0 bg-gradient-to-b from-[#081F3D]/80 via-transparent to-[#081F3D]"></div>

        <div
            class="relative z-10 w-full flex-1 flex flex-col md:flex-row items-center justify-between px-6 md:px-12 lg:px-20 py-24 md:py-0 md:pt-32">
            <!-- Left Text Content -->
            <div class="w-full md:w-1/2 text-left mb-8 md:mb-0 pt-8 md:pt-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-white mb-6 drop-shadow-2xl leading-tight">
                    Building Future
                    <br class="hidden md:block"> Engineers, Innovators & Global Leaders
                </h1>

                <p class="text-md md:text-xl text-gray-200 font-light leading-relaxed mb-8 max-w-2xl">
                    NAAC A++ Accredited • NBA Accredited • NIRF Ranked • Autonomous Institution Empowering Excellence in
                    Engineering, Research & Innovation.
                </p>
            </div>

            <!-- Right Image Area (Responsive for Portrait/Landscape) -->
            <div class="w-full md:w-1/2 flex justify-center md:justify-end h-[40vh] md:h-[60vh] relative pt-8 md:pt-0">

                <!-- Carousel Container -->
                <div class="relative w-full max-w-[600px] h-full flex items-center justify-center md:justify-end">

                    <!-- Slide 1: Alumnus Card -->
                    <div
                        class="absolute inset-0 transition-opacity duration-1000 ease-in-out hero-slide slider-item opacity-100 pointer-events-auto flex items-center justify-center md:justify-end w-full h-full p-4">

                        <div
                            class="bg-white/90 backdrop-blur-md border border-white/50 rounded-2xl shadow-xl overflow-hidden flex flex-col w-full md:max-w-[550px] cursor-pointer hover:-translate-y-1 transition transform group border-b-4 border-secondary">
                            <!-- Image Section -->
                            <div class="w-full h-[320px] bg-[#081F3D] flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('assets/images/Our-proud-alumnus.webp') }}" alt="Featured Alumnus"
                                    class="w-full h-full object-contain group-hover:scale-105 transition duration-500"
                                    onclick="openPreview(0)">
                            </div>
                            <!-- Content Section -->
                            <a href="#news-events" class="p-6 flex flex-col">
                                <span class="text-xs font-semibold text-secondary  tracking-wider mb-2">Latest
                                    News</span>
                                <h4
                                    class="text-darktext font-medium text-sm md:text-md group-hover:text-primary transition leading-relaxed mb-3">
                                    From Campus to the Global Stage — Celebrating an Extraordinary Alumnus!
                                </h4>
                                <span
                                    class="text-primary text-xs font-semibold group-hover:text-secondary transition inline-flex items-center">
                                    Read more <i class="fa-solid fa-arrow-right ml-1"></i>
                                </span>
                            </a>
                        </div>

                    </div>

                    <!-- Slide 2: Engineers Card -->
                    <div
                        class="absolute inset-0 transition-opacity duration-1000 ease-in-out hero-slide slider-item opacity-0 pointer-events-none flex items-center justify-center md:justify-end w-full h-full p-4">

                        <div
                            class="bg-white/90 backdrop-blur-md border border-white/50 rounded-2xl shadow-xl overflow-hidden flex flex-col w-full md:max-w-[550px] cursor-pointer hover:-translate-y-1 transition transform group border-b-4 border-secondary">
                            <!-- Image Section -->
                            <div class="w-full h-[320px] overflow-hidden bg-gray-100">
                                <img src="{{ asset('assets/images/Engineers.jpg') }}" alt="Engineers"
                                    class="w-full h-full object-contain group-hover:scale-105 transition duration-500"
                                    onclick="openPreview(1)">
                            </div>
                            <!-- Content Section -->
                            <a href="#" class="p-6 flex flex-col">
                                <span class="text-xs font-semibold text-secondary  tracking-wider mb-2">Leadership
                                    Vision</span>
                                <h4
                                    class="text-darktext font-medium text-sm md:text-md group-hover:text-primary transition leading-relaxed mb-2 ">
                                    "Engineers, AI won’t replace you. Curiosity, resilience and adaptability will define
                                    your future"
                                </h4>
                                <p class="text-xs text-gray-500 mb-3 font-light">- Mr. Chocko Valliappa, Vice Chairman</p>
                                <span
                                    class="text-primary text-xs font-semibold group-hover:text-secondary transition inline-flex items-center">
                                    Read more <i class="fa-solid fa-arrow-right ml-1"></i>
                                </span>
                            </a>
                        </div>

                    </div>
                    <!-- Slide 3: Engineers Card -->
                    <div
                        class="absolute inset-0 transition-opacity duration-1000 ease-in-out hero-slide slider-item opacity-0 pointer-events-none flex items-center justify-center md:justify-end w-full h-full p-4">

                        <div
                            class="bg-white/90 backdrop-blur-md border border-white/50 rounded-2xl shadow-xl overflow-hidden flex flex-col w-full md:max-w-[550px] cursor-pointer hover:-translate-y-1 transition transform group border-b-4 border-secondary">
                            <!-- Image Section -->
                            <div class="w-full h-[320px] overflow-hidden bg-gray-100">
                                <img src="{{ asset('assets/images/test-1.jpg') }}" alt="Engineers"
                                    class="w-full h-full object-contain group-hover:scale-105 transition duration-500"
                                    onclick="openPreview(2)">
                            </div>
                            <!-- Content Section -->
                            <a href="#" class="p-6 flex flex-col">
                                <span class="text-xs font-semibold text-secondary  tracking-wider mb-2">Leadership
                                    Vision</span>
                                <h4
                                    class="text-darktext font-medium text-sm md:text-md group-hover:text-primary transition leading-relaxed mb-2 ">
                                    1st Position among 7000 colleges across India
                                </h4>

                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Image Preview Modal (Proper Lightbox) -->
        <div id="image-preview-modal"
            class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/95 backdrop-blur-sm transition-opacity duration-300 opacity-0 p-4 md:p-12"
            onclick="closePreview()">

            <!-- Shrink-wrapped container holding the image -->
            <div class="relative inline-block max-w-full max-h-full" onclick="event.stopPropagation()">

                <!-- Image Container (Centered) -->
                <img id="preview-image" src="" alt="Preview"
                    class="max-w-full max-h-[85vh] block object-contain drop-shadow-2xl rounded transition-opacity duration-300">

                <!-- Close Button (Top Right corner of the image) -->
                <button
                    class="absolute -top-4 -right-4 md:-top-6 md:-right-6 bg-black/60 backdrop-blur rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center text-white/90 hover:text-white hover:bg-black/90 text-3xl font-light transition z-50 border border-white/10"
                    onclick="closePreview()" title="Close">
                    &times;
                </button>

                <!-- Previous Button (Left Side of the image) -->
                <button
                    class="absolute left-2 md:-left-6 top-1/2 -translate-y-1/2 bg-black/60 backdrop-blur rounded-full w-10 h-10 md:w-14 md:h-14 flex items-center justify-center text-white/90 hover:text-white hover:bg-black/90 text-2xl transition z-50 border border-white/10"
                    onclick="event.stopPropagation(); navigatePreview(-1)" title="Previous">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Next Button (Right Side of the image) -->
                <button
                    class="absolute right-2 md:-right-6 top-1/2 -translate-y-1/2 bg-black/60 backdrop-blur rounded-full w-10 h-10 md:w-14 md:h-14 flex items-center justify-center text-white/90 hover:text-white hover:bg-black/90 text-2xl transition z-50 border border-white/10"
                    onclick="event.stopPropagation(); navigatePreview(1)" title="Next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>
        </div>



        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce z-10 text-white">
            <i class="fa-solid fa-arrow-down text-2xl opacity-70"></i>
        </div>
    </section>



    <!-- 2. Announcements -->
    <section class="bg-[#081F3D] border-b border-t border-[#23589E] py-3 relative z-20 overflow-hidden shadow-md">
        <div class="container mx-auto px-6 lg:px-16 flex items-center">
            <div
                class="bg-yellow-400 text-[#081F3D] text-xs font-light px-3 py-1  tracking-wider shrink-0 flex items-center relative z-10">
                <i class="fa-solid fa-bullhorn mr-2"></i> Announcement
            </div>
            <div class="overflow-hidden w-full relative flex items-center h-6 ml-4">
                <div
                    class="animate-[marqueeLeft_40s_linear_infinite] hover:[animation-play-state:paused] whitespace-nowrap flex items-center text-gray-200 text-md md:text-base font-light">
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Admission Updates for Fall 2026</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Merit Scholarships Deadlines</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Final Examination Notices</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Revised Academic Calendar Published</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Important Campus Notifications</a>

                    <!-- Duplicate for loop -->
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Admission Updates for Fall 2026</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Merit Scholarships Deadlines</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Final Examination Notices</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Revised Academic Calendar Published</a>
                    <span class="mx-8">&bull;</span>
                    <a href="#" class="hover:text-yellow-400 transition">Important Campus Notifications</a>
                </div>
            </div>
        </div>
    </section>



    <!-- 3. News & Events -->
    <section id="news-events" class="py-16 relative overflow-hidden bg-white shadow-[inset_0_40px_40px_-40px_rgba(8,31,61,0.4)]">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <!-- Section Heading & Controls -->
            <div class="flex justify-between items-end mb-10">
                <h2 class="text-3xl md:text-4xl font-light text-primary">News & Events</h2>
                <div class="flex space-x-2">
                    <button id="custom-news-prev" onclick="shiftNews(-1)"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-primary hover:text-white transition text-gray-600"><i
                            class="fa-solid fa-arrow-left text-sm"></i></button>
                    <button id="custom-news-next" onclick="shiftNews(1)"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-primary hover:text-white transition text-gray-600"><i
                            class="fa-solid fa-arrow-right text-sm"></i></button>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Left: Featured News -->
                <div class="lg:w-1/2" id="featured-news-container">
                    <!-- Rendered by JS -->
                </div>

                <!-- Right: News List -->
                <div class="lg:w-1/2 flex flex-col gap-4" id="news-list-container">
                    <!-- Rendered by JS -->
                </div>
            </div>
        </div>
    </section>

    <script>
        const newsData = [{
                image: "https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80",
                tag: "News",
                date: "June 10, 2026",
                place: "Main Auditorium",
                title: "Legal Minds of Tomorrow: School of Law Celebrates Graduation Day 2026"
            },
            {
                image: "https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=800&q=80",
                tag: "News",
                date: "May 22, 2026",
                place: "Open Air Theatre",
                title: "Yoga for Healthy Ageing: International Day of Yoga Celebrated on Campus"
            },
            {
                image: "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80",
                tag: "News",
                date: "April 15, 2026",
                place: "Dubai International Center",
                title: "Cultivating Global Networks: 'JAIN Global Connect' Dubai Chapter Meet"
            },
            {
                image: "https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=800&q=80",
                tag: "News",
                date: "March 02, 2026",
                place: "Sona Convention Centre",
                title: "Six Awards, One Student Council: Samashti Shines at National Fest"
            },
        ];

        let currentNewsIndex = 0;

        function renderNews() {
            const featuredContainer = document.getElementById('featured-news-container');
            const listContainer = document.getElementById('news-list-container');

            if (!featuredContainer || !listContainer) return;

            // Render Featured (Left)
            const featuredNews = newsData[currentNewsIndex];
            featuredContainer.innerHTML = `
                <div class="bg-[#F4F5F7] rounded-2xl p-4 h-full flex flex-col transition-all duration-500 shadow-sm border border-gray-100 hover:shadow-md cursor-pointer group">
                    <div class="w-full h-[300px] md:h-[400px] rounded-xl overflow-hidden mb-6 relative">
                        <span class="absolute top-4 left-4 bg-primary text-sonayellow font-medium text-xs px-3 py-1 rounded-sm z-10">${featuredNews.tag}</span>
                        <img src="${featuredNews.image}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Featured News">
                    </div>
                    <div class="px-2 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center gap-4 mb-3 text-primary text-sm font-light">
                            <span><i class="fa-regular fa-calendar mr-1.5 text-secondary"></i> ${featuredNews.date}</span>
                            <span><i class="fa-solid fa-location-dot mr-1.5 text-secondary"></i> ${featuredNews.place}</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-light text-darktext leading-snug group-hover:text-primary transition">${featuredNews.title}</h3>
                    </div>
                </div>
            `;

            // Render List (Right)
            let listHTML = '';
            // We want to show the next 3 items
            for (let i = 1; i <= 3; i++) {
                // Loop index around using modulo
                let index = (currentNewsIndex + i) % newsData.length;
                let item = newsData[index];

                listHTML += `
                    <div class="bg-[#F4F5F7] rounded-2xl p-4 flex flex-col sm:flex-row gap-6 items-center transition-all duration-500 shadow-sm border border-gray-100 hover:shadow-md cursor-pointer group flex-1">
                        <div class="w-full sm:w-[40%] h-[200px] sm:h-full min-h-[140px] shrink-0 rounded-xl overflow-hidden relative">
                            <span class="absolute top-3 left-3 bg-primary text-sonayellow font-medium text-[10px] px-2 py-0.5 rounded-sm z-10">${item.tag}</span>
                            <img src="${item.image}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="News Image">
                        </div>
                        <div class="flex flex-col pr-4 py-2 w-full sm:w-[60%]">
                            <div class="flex flex-col gap-1.5 mb-2 text-primary text-xs font-light tracking-wide">
                                <span><i class="fa-regular fa-calendar mr-1.5 text-secondary"></i> ${item.date}</span>
                                <span><i class="fa-solid fa-location-dot mr-1.5 text-secondary"></i> ${item.place}</span>
                            </div>
                            <h4 class="text-lg md:text-xl font-light text-darktext leading-snug group-hover:text-primary transition">${item.title}</h4>
                        </div>
                    </div>
                `;
            }
            listContainer.innerHTML = listHTML;
        }

        let newsInterval;


        function startNewsInterval() {
            newsInterval = setInterval(() => {
                shiftNews(1);
            }, 5000);
        }

        function shiftNews(direction) {
            currentNewsIndex += direction;
            if (currentNewsIndex < 0) {
                currentNewsIndex = newsData.length - 1;
            } else if (currentNewsIndex >= newsData.length) {
                currentNewsIndex = 0;
            }
            renderNews();

            // Reset the timer when a user interacts
            if (newsInterval) {
                clearInterval(newsInterval);
                startNewsInterval();
            }
        }

        // Initial render and start timer
        document.addEventListener('DOMContentLoaded', () => {
            renderNews();
            startNewsInterval();
        });
    </script>
    <!-- 4. Explore Our Research -->
    <section id="research"
        class="bg-[#081F3D] border-t border-[#0b284e] flex flex-col lg:flex-row relative overflow-hidden">

        <!-- Elegant Background Pattern -->
        <div class="absolute inset-0 opacity-5 pointer-events-none"
            style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;">
        </div>

        <!-- Left Side: Large Image with Badge -->
        <div class="w-full lg:w-1/2 min-h-[50vh] lg:min-h-full relative overflow-hidden group">
            <img src="{{ asset('assets/images/research-7.webp') }}" alt="Research Excellence"
                class="absolute inset-0 w-full h-full object-contain transition duration-1000 group-hover:scale-105 opacity-80">
            <!-- Premium Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-[#081F3D]/80 via-transparent to-[#081F3D]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#081F3D] via-transparent to-transparent"></div>


        </div>

        <!-- Right Side: Content and Grid -->
        <div class="w-full lg:w-1/2 p-8 md:p-12 lg:p-20 flex flex-col justify-center relative z-10">

            <div class="text-center lg:text-left mb-12">

                <h2 class="text-4xl md:text-5xl font-bold text-white">Explore Our <span class="text-white">Research</span>
                </h2>
                <p class="text-gray-300 text-md md:text-lg font-light mt-6 leading-relaxed max-w-5xl">
                    Sona College of Technology fosters a vibrant research culture where learning is a celebration. With 36+
                    Research & Centres of Excellence, the institution promotes interdisciplinary research, innovation,
                    product development, industry collaboration, and hands-on learning in emerging technologies, empowering
                    faculty and students to create impactful solutions for society and industry.
                </p>
            </div>

            <!-- 2x2 Premium Glass Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative">
                <!-- Decorative Glow -->
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white/10 rounded-full blur-[100px] pointer-events-none">
                </div>

                <!-- Cell 1 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl hover:bg-white/10 transition duration-300 group">
                    <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-5 shadow-lg border border-white/5">
                        <img src="{{ asset('assets/images/research-1.webp') }}" alt="Chandrayaan-3"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed"><span class="font-bold text-white">Critical motor
                            for ISRO’s Chandrayaan-3</span> moon mission comes from Salem’s Sona College of Technology.</p>
                </div>

                <!-- Cell 2 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl hover:bg-white/10 transition duration-300 group">
                    <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-5 shadow-lg border border-white/5">
                        <img src="{{ asset('assets/images/research-2.webp') }}" alt="RLV LEX"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed"><span class="font-bold text-white">Sona
                            SPEED</span> is part of Autonomous landing of RLV LEX mission by ISRO.</p>
                </div>

                <!-- Cell 3 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl hover:bg-white/10 transition duration-300 group">
                    <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-5 shadow-lg border border-white/5">
                        <img src="{{ asset('assets/images/research-3.webp') }}" alt="Organic Polymer"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed"><span class="font-bold text-white">Third
                            Generation</span> Organic-Polymer research breakthrough.</p>
                </div>

                <!-- Cell 4 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl hover:bg-white/10 transition duration-300 group">
                    <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-5 shadow-lg border border-white/5">
                        <img src="{{ asset('assets/images/research-4.webp') }}" alt="LVM3-M5"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed"><span class="font-bold text-white">Sona Speed
                            Stepper Motor</span> in ISRO's LVM3-M5 CMS-03 Mission.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. Industry Academia Collaboration -->
    <section class="py-10 bg-white shadow-[inset_0_40px_40px_-40px_rgba(8,31,61,0.4)]">
        <div class="container mx-auto px-6 lg:px-16">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#081F3D]">Industry Collaboration & Placement</h2>
                <p class="text-gray-600 text-md md:text-lg font-light mt-4 leading-relaxed max-w-3xl mx-auto">
                    Sona's industry-academia interaction enthuses the spirit of innovation in the budding engineers!
                </p>
            </div>

            <!-- Top Stats (Circles) -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 max-w-5xl mx-auto mb-10 text-center">
                <!-- Stat 1 -->
                <div
                    class="flex flex-col items-center justify-center w-40 h-40 md:w-56 md:h-56 mx-auto rounded-full border-[1px] border-gray-300 bg-white shadow-[0_4px_20px_rgba(0,0,0,0.03)]">
                    <h3 class="text-2xl md:text-4xl font-bold text-[#081F3D]">200+</h3>
                    <p class="text-gray-600 font-medium mt-1 md:mt-2 text-sm md:text-base">Recruiters</p>
                </div>
                <!-- Stat 2 -->
                <div
                    class="flex flex-col items-center justify-center w-40 h-40 md:w-56 md:h-56 mx-auto rounded-full border-[1px] border-gray-300 bg-white shadow-[0_4px_20px_rgba(0,0,0,0.03)]">
                    <h3 class="text-2xl md:text-4xl font-bold text-[#081F3D]">37 LPA</h3>
                    <p class="text-gray-600 font-medium mt-1 md:mt-2 text-sm md:text-base leading-tight">Highest
                        CTC<br><span class="text-xs text-gray-500 font-normal">(Intl.)</span></p>
                </div>
                <!-- Stat 3 -->
                <div
                    class="flex flex-col items-center justify-center w-40 h-40 md:w-56 md:h-56 mx-auto rounded-full border-[1px] border-gray-300 bg-white shadow-[0_4px_20px_rgba(0,0,0,0.03)]">
                    <h3 class="text-2xl md:text-4xl font-bold text-[#081F3D]">19.54 LPA</h3>
                    <p class="text-gray-600 font-medium mt-1 md:mt-2 text-sm md:text-base leading-tight">Highest
                        CTC<br><span class="text-xs text-gray-500 font-normal">(Domestic)</span></p>
                </div>
                <!-- Stat 4 -->
                <div
                    class="flex flex-col items-center justify-center w-40 h-40 md:w-56 md:h-56 mx-auto rounded-full border-[1px] border-gray-300 bg-white shadow-[0_4px_20px_rgba(0,0,0,0.03)]">
                    <h3 class="text-2xl md:text-4xl font-bold text-[#081F3D]">98k/mo</h3>
                    <p class="text-gray-600 font-medium mt-1 md:mt-2 text-sm md:text-base leading-tight">Highest Stipend
                    </p>
                </div>
            </div>

            <!-- Bottom Logos Slider -->
            <style>
                @keyframes scroll {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-50%);
                    }
                }

                .animate-scroll {
                    animation: scroll 30s linear infinite;
                }

                .animate-scroll:hover {
                    animation-play-state: paused;
                }
            </style>
            <div class="w-[100vw] relative left-1/2 -translate-x-1/2 overflow-hidden border-y border-gray-200 bg-white">
                <!-- Fade Gradients -->
                <div
                    class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none">
                </div>
                <div
                    class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none">
                </div>

                <div class="flex animate-scroll w-max items-center">
                    <!-- Original 10 Logos -->
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/infosys1.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Infosys">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/titan.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Titan">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/vmware.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="VMware">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/red-hat.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Red Hat">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/Bharat-Electronics.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="BEL">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/isro1.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="ISRO">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/jsw-steel-agencies.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="JSW">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/tex-valley.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Tex Valley">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/cochin.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Cochin">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/smart-bridge.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Smart Bridge">
                    </div>

                    <!-- Duplicated 10 Logos for seamless scrolling -->
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/infosys1.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Infosys">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/titan.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Titan">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/vmware.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="VMware">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/red-hat.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Red Hat">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/Bharat-Electronics.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="BEL">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/isro1.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="ISRO">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/jsw-steel-agencies.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="JSW">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/tex-valley.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Tex Valley">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/cochin.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Cochin">
                    </div>
                    <div
                        class="w-64 md:w-80 border-r border-gray-200 flex-shrink-0 flex items-center justify-center p-8 h-32 md:h-40">
                        <img src="{{ asset('assets/images/industry/smart-bridge.webp') }}"
                            class="max-h-16 md:max-h-20 max-w-full" alt="Smart Bridge">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-10 relative overflow-hidden bg-fixed bg-cover bg-center"
        style="background-image: linear-gradient(rgba(8, 31, 61, 0.8), rgba(8, 31, 61, 0.8)), url('{{ asset('assets/images/slide-1.webp') }}');">
        <div class="container mx-auto px-6 lg:px-16 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-light text-white mb-6">Virtual Campus Tour</h2>

            <p class="text-gray-300 text-md md:text-xl font-light max-w-3xl mx-auto mb-10 leading-relaxed">
                Digitally navigate our smart classrooms, advanced research labs, extensive library, premium hostels,
                expansive sports complex, and premium campus infrastructure from anywhere in the world.
            </p>
            <a href="#"
                class="inline-block bg-yellow-400 text-[#081F3D] font-medium px-8 py-4 rounded-full hover:bg-white transition shadow-lg text-md">
                <i class="fa-solid fa-vr-cardboard mr-2"></i> Start Virtual Tour
            </a>
        </div>
    </section>

    <!-- 12. Global Opportunities -->
    <section class="py-10 bg-[#F9F8F6] border-b border-gray-200 relative overflow-hidden">


        <div class="container mx-auto px-6 lg:px-10 relative z-10">
            <div class="text-center mb-16">


                <h2 class="text-4xl md:text-5xl font-light text-[#081F3D]">Study Beyond Borders</h2>
                <div class="w-20 h-1 mx-auto bg-gradient-to-r from-[#23589E] to-yellow-400 mt-6 rounded-full"></div>
            </div>

            <!-- Staggered Horizontal Marquee Layout -->
            <div class="overflow-hidden w-full pb-16 pt-8 group"
                style="-webkit-mask-image: linear-gradient(to right, transparent, black 2%, black 98%, transparent); mask-image: linear-gradient(to right, transparent, black 2%, black 98%, transparent);">
                <div class="flex w-max animate-marquee gap-6 group-hover:[animation-play-state:paused]">

                    <!-- ================= SET 1 ================= -->
                    <!-- Card 1 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">01</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Global University<br>Partnerships</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Collaborate with leading universities
                                worldwide through academic, research, and institutional partnerships.</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-24 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">02</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Student Exchange<br>Programmes</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Experience international education, diverse
                                cultures, and global learning through exchange opportunities.</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-0 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-plane-departure"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">03</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Semester<br>Abroad</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Complete a semester at partner universities
                                while earning transferable academic credits.</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-16 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">04</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Dual Degree<br>Opportunities</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Pursue internationally recognized academic
                                pathways through selected global university collaborations.</p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-4 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">05</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">International<br>Internships</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Build global industry experience with
                                internship opportunities in multinational companies and organizations.</p>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-20 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-flask"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">06</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Collaborative<br>Research</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Work alongside international researchers on
                                innovative projects that address real-world challenges.</p>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-passport"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">07</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Global Admissions<br>& Diversity</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Join a vibrant campus community that welcomes
                                students from different countries and backgrounds.</p>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-24 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-earth-asia"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">08</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">International<br>Exposure</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Participate in global conferences,
                                competitions, workshops, and international innovation programs.</p>
                        </div>
                    </div>

                    <!-- ================= SET 2 (DUPLICATED FOR MARQUEE) ================= -->
                    <!-- Card 1 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">01</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Global University<br>Partnerships</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Collaborate with leading universities
                                worldwide through academic, research, and institutional partnerships.</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-24 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">02</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Student Exchange<br>Programmes</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Experience international education, diverse
                                cultures, and global learning through exchange opportunities.</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-0 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-plane-departure"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">03</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Semester<br>Abroad</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Complete a semester at partner universities
                                while earning transferable academic credits.</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-16 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">04</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Dual Degree<br>Opportunities</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Pursue internationally recognized academic
                                pathways through selected global university collaborations.</p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-4 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">05</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">International<br>Internships</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Build global industry experience with
                                internship opportunities in multinational companies and organizations.</p>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-20 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-flask"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">06</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Collaborative<br>Research</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Work alongside international researchers on
                                innovative projects that address real-world challenges.</p>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-passport"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">07</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">Global Admissions<br>& Diversity</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Join a vibrant campus community that welcomes
                                students from different countries and backgrounds.</p>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div
                        class="bg-white p-6 min-w-[280px] w-[280px] h-[320px] flex flex-col justify-between relative shrink-0 mt-24 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-shadow duration-300">
                        <div class="flex justify-between items-start w-full">
                            <div class="w-12 h-12 bg-[#081F3D] flex items-center justify-center text-white text-xl">
                                <i class="fa-solid fa-earth-asia"></i>
                            </div>
                            <div class="text-gray-100 font-bold text-6xl leading-none -mt-2">08</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-[#081F3D] mb-3">International<br>Exposure</h3>
                            <p class="text-md text-gray-600 leading-relaxed">Participate in global conferences,
                                competitions, workshops, and international innovation programs.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <style>
            @keyframes marquee {
                0% {
                    transform: translateX(0%);
                }

                100% {
                    transform: translateX(calc(-50% - 0.75rem));
                }

                /* -50% width minus half of the gap-6 (1.5rem / 2) */
            }

            .animate-marquee {
                animation: marquee 45s linear infinite;
            }
        </style>
    </section>

    <!-- 13. Rankings & Recognition -->
    <section class="py-10 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16 text-center">


            <h2 class="text-4xl md:text-5xl font-light text-[#081F3D]">Rankings & Recognition</h2>
            <div class="w-20 h-1 mx-auto bg-gradient-to-r from-[#23589E] to-yellow-400 mt-6 rounded-full"></div>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 lg:gap-12 mt-8">
                <!-- Item 1 -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('assets/images/naac.webp') }}" alt="NAAC Logo"
                        class="h-32 w-auto object-contain mb-8">
                    <p class="text-md font-normal text-[#081F3D]">NAAC A++ Accreditation.</p>
                </div>
                <!-- Item 2 -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('assets/images/nba.webp') }}" alt="NBA Logo"
                        class="h-32 w-auto object-contain mb-8">
                    <p class="text-md font-normal text-[#081F3D]">NBA Tier-1 Accreditation.</p>
                </div>
                <!-- Item 3 -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('assets/images/nirf.webp') }}" alt="NIRF Logo"
                        class="h-32 w-auto object-contain mb-8">
                    <p class="text-md font-normal text-[#081F3D]">NIRF Top National Ranking.</p>
                </div>
                <!-- Item 4 -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('assets/images/ariia.webp') }}" alt="ARIIA Logo"
                        class="h-32 w-auto object-contain mb-8">
                    <p class="text-md font-normal text-[#081F3D]">ARIIA #1 Innovation Rank.</p>
                </div>
                <!-- Item 5 -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('assets/images/aicte.webp') }}" alt="AICTE Logo"
                        class="h-32 w-auto object-contain mb-8">
                    <p class="text-md font-normal text-[#081F3D]">AICTE Industry Linked.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 14. Notable Alumni -->
    <section class="py-16 bg-white border-t border-gray-100 relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-light text-[#081F3D]">Notable Alumni</h2>
            <div class="w-20 h-1 mx-auto bg-gradient-to-r from-[#23589E] to-yellow-400 mt-6 rounded-full mb-12"></div>

            <div class="relative w-full max-w-7xl mx-auto group">
                <!-- Carousel Viewport -->
                <div class="overflow-hidden" id="alumni-viewport">
                    <div class="flex transition-transform duration-500 ease-in-out" id="alumni-track">

                        <!-- Slide 1 (4 items) -->
                        <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-2">
                            <!-- Card 1 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400"
                                        class="w-full h-full object-cover" alt="Entrepreneur">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">Entrepreneurs</h3>
                                <p class="text-md text-gray-600">Tech founders globally.</p>
                            </div>
                            <!-- Card 2 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400"
                                        class="w-full h-full object-cover" alt="CEO">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">CEOs</h3>
                                <p class="text-md text-gray-600">Fortune 500 leadership.</p>
                            </div>
                            <!-- Card 3 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?w=400"
                                        class="w-full h-full object-cover" alt="Researcher">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">Researchers</h3>
                                <p class="text-md text-gray-600">Leading R&D labs.</p>
                            </div>
                            <!-- Card 4 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400"
                                        class="w-full h-full object-cover" alt="Public Leader">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">Public Leaders</h3>
                                <p class="text-md text-gray-600">Driving national policy.</p>
                            </div>
                        </div>

                        <!-- Slide 2 (4 items) -->
                        <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-2">
                            <!-- Card 5 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400"
                                        class="w-full h-full object-cover" alt="Innovator">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">Innovators</h3>
                                <p class="text-md text-gray-600">Pioneering new patents.</p>
                            </div>
                            <!-- Card 6 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1590650153855-d9e808231d41?w=400"
                                        class="w-full h-full object-cover" alt="Success Story">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">Success Stories</h3>
                                <p class="text-md text-gray-600">Decades of excellence.</p>
                            </div>
                            <!-- Card 7 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=400"
                                        class="w-full h-full object-cover" alt="Creative">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">Creatives</h3>
                                <p class="text-md text-gray-600">Award-winning artists.</p>
                            </div>
                            <!-- Card 8 -->
                            <div
                                class="bg-gray-50 border border-[#D4A346] rounded-2xl rounded-tl-none p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">
                                <div
                                    class="w-28 h-28 mx-auto bg-gray-200 rounded-full mb-6 overflow-hidden border-4 border-white shadow-md">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400"
                                        class="w-full h-full object-cover" alt="Author">
                                </div>
                                <h3 class="font-medium text-xl text-[#081F3D] mb-2">Authors</h3>
                                <p class="text-md text-gray-600">Bestselling global writers.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="alumni-prev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 lg:-translate-x-8 w-12 h-12 bg-white rounded-full shadow-[0_5px_15px_rgba(0,0,0,0.1)] flex items-center justify-center text-[#081F3D] hover:bg-yellow-400 transition opacity-0 group-hover:opacity-100 z-20">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button id="alumni-next"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 lg:translate-x-8 w-12 h-12 bg-white rounded-full shadow-[0_5px_15px_rgba(0,0,0,0.1)] flex items-center justify-center text-[#081F3D] hover:bg-yellow-400 transition opacity-0 group-hover:opacity-100 z-20">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- Dots Indicator -->
            <div class="flex justify-center mt-8 gap-3" id="alumni-dots">
                <button class="w-3 h-3 rounded-full bg-[#23589E] transition alumni-dot" data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition alumni-dot"
                    data-index="1"></button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const track = document.getElementById('alumni-track');
                const prev = document.getElementById('alumni-prev');
                const next = document.getElementById('alumni-next');
                const dots = document.querySelectorAll('.alumni-dot');
                let currentSlide = 0;
                const slidesCount = 2; // We have exactly 2 slides
                let autoSlideInterval;

                function goToSlide(index) {
                    currentSlide = index;
                    track.style.transform = `translateX(-${currentSlide * 100}%)`;
                    dots.forEach((dot, i) => {
                        if (i === currentSlide) {
                            dot.classList.remove('bg-gray-300', 'hover:bg-gray-400');
                            dot.classList.add('bg-[#23589E]');
                        } else {
                            dot.classList.remove('bg-[#23589E]');
                            dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
                        }
                    });
                }

                function nextSlide() {
                    currentSlide = (currentSlide === slidesCount - 1) ? 0 : currentSlide + 1;
                    goToSlide(currentSlide);
                }

                function prevSlide() {
                    currentSlide = (currentSlide === 0) ? slidesCount - 1 : currentSlide - 1;
                    goToSlide(currentSlide);
                }

                function resetInterval() {
                    clearInterval(autoSlideInterval);
                    autoSlideInterval = setInterval(nextSlide, 5000);
                }

                if (prev && next) {
                    prev.addEventListener('click', () => {
                        prevSlide();
                        resetInterval();
                    });

                    next.addEventListener('click', () => {
                        nextSlide();
                        resetInterval();
                    });
                }

                dots.forEach(dot => {
                    dot.addEventListener('click', function() {
                        goToSlide(parseInt(this.getAttribute('data-index')));
                        resetInterval();
                    });
                });

                // Start auto-play
                autoSlideInterval = setInterval(nextSlide, 5000);
            });
        </script>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('news-slider');
            const prevBtn = document.getElementById('news-prev');
            const nextBtn = document.getElementById('news-next');

            if (slider && prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: -slider.clientWidth,
                        behavior: 'smooth'
                    });
                });
                nextBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: slider.clientWidth,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const newsSlider = document.getElementById('news-slider');
            if (newsSlider) {
                setInterval(() => {
                    if (newsSlider.scrollLeft + newsSlider.clientWidth >= newsSlider.scrollWidth - 10) {
                        newsSlider.scrollTo({
                            left: 0,
                            behavior: 'smooth'
                        });
                    } else {
                        newsSlider.scrollBy({
                            left: newsSlider.clientWidth,
                            behavior: 'smooth'
                        });
                    }
                }, 5000);
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('researchCarousel');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dots = document.querySelectorAll('.carousel-dot');
            let currentIndex = 0;
            const totalSlides = 8;

            function updateCarousel(index) {
                carousel.style.transform = `translateX(-${index * 100}%)`;
                dots.forEach((dot, i) => {
                    dot.classList.toggle('bg-[#23589E]', i === index);
                    dot.classList.toggle('bg-gray-300', i !== index);
                });
            }

            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel(currentIndex);
            });

            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel(currentIndex);
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateCarousel(currentIndex);
                });
            });

            // Auto-advance carousel every 5 seconds
            setInterval(() => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel(currentIndex);
            }, 5000);
        });
    </script>

    <script>
        // Simple Vanilla JS fading slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slider-item');
        const dots = document.querySelectorAll('.slider-dot');
        let slideInterval;

        // Extract image sources from slides for the preview gallery
        const galleryImages = Array.from(slides).map(slide => slide.querySelector('img').src);
        let currentPreviewIndex = 0;

        function showSlide(index) {
            if (slides.length === 0) return;
            // Hide all slides
            slides.forEach((slide, i) => {
                slide.classList.remove('opacity-100');
                slide.classList.remove('pointer-events-auto');
                slide.classList.add('opacity-0');
                slide.classList.add('pointer-events-none');

                if (dots.length > i) {
                    dots[i].classList.remove('bg-white');
                    dots[i].classList.add('bg-white/40');
                }
            });

            // Show the target slide
            slides[index].classList.remove('opacity-0');
            slides[index].classList.remove('pointer-events-none');
            slides[index].classList.add('opacity-100');
            slides[index].classList.add('pointer-events-auto');

            if (dots.length > index) {
                dots[index].classList.remove('bg-white/40');
                dots[index].classList.add('bg-white');
            }

            currentSlide = index;
        }

        // Auto-advance hero slides every 5 seconds
        if (slides.length > 1) {
            slideInterval = setInterval(() => {
                let next = (currentSlide + 1) % slides.length;
                showSlide(next);
            }, 5000);
        }

        // Image Preview Modal Logic
        const previewModal = document.getElementById('image-preview-modal');
        const previewImage = document.getElementById('preview-image');

        // Find index of clicked image
        function openPreview(index) {
            currentPreviewIndex = index;

            previewImage.src = galleryImages[currentPreviewIndex];
            previewModal.classList.remove('hidden');
            previewModal.classList.add('flex');

            // Small delay to allow display block to apply before changing opacity for animation
            setTimeout(() => {
                previewModal.classList.remove('opacity-0');
                previewModal.classList.add('opacity-100');
            }, 10);
        }

        function navigatePreview(direction) {
            // Fade out image quickly
            previewImage.classList.add('opacity-0');

            setTimeout(() => {
                // Update index
                currentPreviewIndex = (currentPreviewIndex + direction + galleryImages.length) % galleryImages
                    .length;
                previewImage.src = galleryImages[currentPreviewIndex];

                // Fade image back in
                previewImage.classList.remove('opacity-0');
            }, 150);
        }

        function closePreview() {
            previewModal.classList.remove('opacity-100');
            previewModal.classList.add('opacity-0');
            setTimeout(() => {
                previewModal.classList.add('hidden');
                previewModal.classList.remove('flex');
                previewImage.src = '';
                previewImage.classList.remove('opacity-0'); // reset for next time
            }, 300);
        }
    </script>
@endsection
