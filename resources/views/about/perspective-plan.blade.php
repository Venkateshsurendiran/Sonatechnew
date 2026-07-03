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
            <h1 class="text-3xl lg:text-4xl font-normal text-white mb-6 drop-shadow-md">Perspective Plan</h1>
            <div class="flex items-center space-x-3 text-md text-gray-300 tracking-wide">
                <a href="/" class="hover:text-yellow-400 transition-colors">Home</a>
                <span class="text-gray-500">/</span>
                <a href="#" class="hover:text-yellow-400 transition-colors">About Us</a>
                <span class="text-gray-500">/</span>
                <span class="text-yellow-400 font-medium">Perspective Plan</span>
            </div>
        </div>
    </div>

    <!-- Main Content Area with Sidebar -->
    <div class="w-full px-6 lg:px-12 xl:px-16 pt-4 pb-12 lg:pt-6 lg:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8">
            
            <!-- Sidebar -->
            <div class="col-span-1 md:col-span-3 flex-shrink-0" data-aos="fade-right">
                @include('about.partials.sidebar', ['activePage' => 'Perspective Plan'])
            </div>

            <!-- Main Content -->
            <div class="col-span-1 md:col-span-9" data-aos="fade-left">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-xl shadow-blue-900/5 border border-white overflow-hidden relative">
                    <!-- Subtle background decoration -->
                    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

                    <!-- Header -->
                    <div class="px-8 py-6 border-b border-gray-100">
                        <h2 class="text-[#081F3D] text-2xl font-medium mb-3">Our Perspective Plan</h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-[#081F3D] to-yellow-400 rounded-full"></div>
                    </div>

                    <div class="p-8 lg:p-12 relative z-10">
                        <ul class="space-y-6">
                            <li class="flex items-start group">
                                <span class="text-yellow-500 mt-1 mr-5 flex-shrink-0 text-xl group-hover:scale-110 transition-transform duration-300"><i class="fa-solid fa-arrow-trend-up"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Improving Under Graduate (UG) and Post Graduate (PG) Education by incorporating Modern Teaching Learning methods.</span>
                            </li>
                            
                            <li class="flex items-start group">
                                <span class="text-yellow-500 mt-1 mr-5 flex-shrink-0 text-xl group-hover:scale-110 transition-transform duration-300"><i class="fa-solid fa-coins"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Increased initiative to be taken to get funds from the Department of Science and Technology, UGC and other funding agencies.</span>
                            </li>
                            
                            <li class="flex items-start group">
                                <span class="text-yellow-500 mt-1 mr-5 flex-shrink-0 text-xl group-hover:scale-110 transition-transform duration-300"><i class="fa-solid fa-building-columns"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Focus on developmental aspects such as student intake, curriculum improvement, infrastructure enhancement, accreditation and twinning programme with foreign university.</span>
                            </li>
                            
                            <li class="flex items-start group">
                                <span class="text-yellow-500 mt-1 mr-5 flex-shrink-0 text-xl group-hover:scale-110 transition-transform duration-300"><i class="fa-solid fa-handshake-angle"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Improving Research and Development, Industry Interaction, Internal Revenue Generation, Collaboration with Foreign Universities, Alumni Interaction, Entrepreneurship, and Social Responsibility Initiatives.</span>
                            </li>
                            
                            <li class="flex items-start group">
                                <span class="text-yellow-500 mt-1 mr-5 flex-shrink-0 text-xl group-hover:scale-110 transition-transform duration-300"><i class="fa-solid fa-earth-americas"></i></span>
                                <span class="text-gray-600 text-md leading-relaxed">Envisioning the establishment of a deemed university and aiming to offer world-class education and research through reputed international collaborations.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
