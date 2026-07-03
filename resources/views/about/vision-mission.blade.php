@extends('layouts.app')

@section('content')
    <!-- Inner Page Header / Banner -->
    <div class="w-full bg-[#081F3D] pt-36 pb-12 lg:pt-44 lg:pb-16 relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('{{ asset('assets/images/slide-1.webp') }}')] bg-cover bg-center bg-no-repeat opacity-30"></div>
        
        <!-- Subtle Gradient Overlay for readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#081F3D] to-transparent opacity-90"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#081F3D] to-transparent opacity-80"></div>

        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <h1 class="text-3xl lg:text-4xl font-normal text-white mb-6 drop-shadow-md">Vision and Mission</h1>
            <div class="flex items-center space-x-3 text-md text-gray-300 tracking-wide">
                <a href="/" class="hover:text-yellow-400 transition-colors">Home</a>
                <span class="text-gray-500">/</span>
                <a href="#" class="hover:text-yellow-400 transition-colors">About Us</a>
                <span class="text-gray-500">/</span>
                <span class="text-yellow-400 font-medium">Vision and Mission</span>
            </div>
        </div>
    </div>

    <!-- Main Content Area with Sidebar -->
    <div class="w-full px-6 lg:px-12 xl:px-16 pt-4 pb-12 lg:pt-6 lg:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8">
            
            <!-- Sidebar (Left Column - col-md-3 equivalent) -->
            <div class="col-span-1 md:col-span-3 flex-shrink-0" data-aos="fade-right">
                @include('about.partials.sidebar', ['activePage' => 'Vision and Mission'])
            </div>

            <!-- Main Content (Right Column - col-md-9 equivalent) -->
            <div class="col-span-1 md:col-span-9" data-aos="fade-left">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-xl shadow-blue-900/5 border border-white overflow-hidden relative">
                    <!-- Subtle background decoration -->
                    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

                    <!-- Header -->
                    <div class="px-8 py-6 border-b border-gray-100">
                        <h2 class="text-[#081F3D] text-2xl font-medium mb-3">Vision and Mission</h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-[#081F3D] to-yellow-400 rounded-full"></div>
                    </div>

                    <div class="p-8 lg:p-12 space-y-12 relative z-10">

                        <!-- Vision -->
                        <div class="group">
                            <h3 class="text-2xl font-bold tracking-widest mb-4 bg-clip-text text-transparent bg-gradient-to-r from-[#081F3D] to-[#23589E] uppercase flex items-center gap-4">
                                <span class="text-yellow-400 text-md"><i class="fa-solid fa-eye"></i></span> Vision
                            </h3>
                            <div class="transition-colors duration-500">
                                <p class="text-gray-600 leading-relaxed text-md">
                                    To become an institute of great repute, in the fields of Science, Engineering, Technology and Management
                                    studies, by offering a full range of programmes of global standard to foster research, and to transform
                                    the students into globally competent personalities.
                                </p>
                            </div>
                        </div>

                        <!-- Mission -->
                        <div class="group">
                            <h3 class="text-2xl font-bold tracking-widest mb-4 bg-clip-text text-transparent bg-gradient-to-r from-[#081F3D] to-[#23589E] uppercase flex items-center gap-4">
                                <span class="text-yellow-400 text-md"><i class="fa-solid fa-bullseye"></i></span> Mission
                            </h3>
                            <div class="transition-colors duration-500">
                                <p class="text-gray-600 mb-6 leading-relaxed">
                                    Sona College of Technology is a private engineering institution that offers engineering degree
                                    programmes at under graduate level and post graduate level, computer applications and management studies
                                    at post graduate level and doctoral programmes in the areas of engineering and science and humanities.
                                </p>
                                <p class="text-gray-600 mb-6 leading-relaxed">
                                    The college aims to provide a full-fledged education, to produce graduates with competency to excel in
                                    the organizations they serve and to cater to the needs of the community as a whole.
                                </p>
                                <p class="text-gray-700 font-medium mb-6 text-md">
                                    Our mission for next three years will be:
                                </p>

                                <ul class="space-y-4">
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To offer Graduate, Post-graduate, Doctoral and other value-added programmes beneficial for the students</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To establish state-of-the-art facilities and resources required to achieve excellence in teaching-learning, and supplementary processes</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To provide Faculty and Staff with the required qualification and competence and to provide opportunity to upgrade their knowledge and skills</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To motivate the students to pursue higher education, appear for competitive exams, and other value added programmes for their holistic development</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To provide opportunities to the students and bring out their inherent talent</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To establish Centres of excellence in the emerging areas of research</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To have regular interaction with the Industries in the area of R & D, and offer consultancy, training and testing services</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To offer Continuing education, and Non-formal vocational education programmes that are beneficial to the society</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                        <span class="text-gray-600 text-md">To inculcate entrepreneurial attitude in the students and to provide a platform to start their own startups in the campus.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
