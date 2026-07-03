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
            <h1 class="text-3xl lg:text-4xl font-normal text-white mb-6 drop-shadow-md">Quality Policy</h1>
            <div class="flex items-center space-x-3 text-md text-gray-300 tracking-wide">
                <a href="/" class="hover:text-yellow-400 transition-colors">Home</a>
                <span class="text-gray-500">/</span>
                <a href="#" class="hover:text-yellow-400 transition-colors">About Us</a>
                <span class="text-gray-500">/</span>
                <span class="text-yellow-400 font-medium">Quality Policy</span>
            </div>
        </div>
    </div>

    <!-- Main Content Area with Sidebar -->
    <div class="w-full px-6 lg:px-12 xl:px-16 pt-4 pb-12 lg:pt-6 lg:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8">
            
            <!-- Sidebar -->
            <div class="col-span-1 md:col-span-3 flex-shrink-0" data-aos="fade-right">
                @include('about.partials.sidebar', ['activePage' => 'Quality Policy'])
            </div>

            <!-- Main Content -->
            <div class="col-span-1 md:col-span-9" data-aos="fade-left">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-xl shadow-blue-900/5 border border-white overflow-hidden relative">
                    <!-- Subtle background decoration -->
                    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

                    <!-- Header -->
                    <div class="px-8 py-6 border-b border-gray-100">
                        <h2 class="text-[#081F3D] text-2xl font-medium mb-3">Our Quality Policy</h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-[#081F3D] to-yellow-400 rounded-full"></div>
                    </div>

                    <div class="p-8 lg:p-12 relative z-10">
                        
                        <div class="mb-10 p-6 bg-blue-50/50 rounded-xl border border-blue-100">
                            <p class="text-gray-700 text-md leading-relaxed">
                                <span class="font-semibold text-[#081F3D]">SONA COLLEGE OF TECHNOLOGY</span> is committed to provide quality education to the students enabling them to excel in the fields of Science, Engineering, Technology and Management to cater to the changing and challenging needs of society and industry through the following initiatives:
                            </p>
                        </div>

                        <ul class="space-y-5">
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Contributing to the academic standing and overall knowledge development of the students</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Maintaining state-of-the-art infrastructure and congenial learning environment</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Enhancing the competence of the faculty to a very high level and to make them adopt all modern and innovative methods in teaching-learning process</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Inculcating moral and ethical values among the students and staff</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Collaborating with industry, other institutions and organizations for mutual benefit</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Promoting Research and Development programme for the growth of the economy</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Disseminating technical knowledge in the region through continuing education programmes</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-[#F5A524] text-white w-5 h-5 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0 text-[10px]"><i class="fa-solid fa-check"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Ensuring continual improvement of Quality Management System</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
