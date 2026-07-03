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
            <h1 class="text-3xl lg:text-4xl font-normal text-white mb-6 drop-shadow-md">Core Values</h1>
            <div class="flex items-center space-x-3 text-md text-gray-300 tracking-wide">
                <a href="/" class="hover:text-yellow-400 transition-colors">Home</a>
                <span class="text-gray-500">/</span>
                <a href="#" class="hover:text-yellow-400 transition-colors">About Us</a>
                <span class="text-gray-500">/</span>
                <span class="text-yellow-400 font-medium">Core Values</span>
            </div>
        </div>
    </div>

    <!-- Main Content Area with Sidebar -->
    <div class="w-full px-6 lg:px-12 xl:px-16 pt-4 pb-12 lg:pt-6 lg:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8">
            
            <!-- Sidebar -->
            <div class="col-span-1 md:col-span-3 flex-shrink-0" data-aos="fade-right">
                @include('about.partials.sidebar', ['activePage' => 'Core Values'])
            </div>

            <!-- Main Content -->
            <div class="col-span-1 md:col-span-9" data-aos="fade-left">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-xl shadow-blue-900/5 border border-white overflow-hidden relative">
                    <!-- Subtle background decoration -->
                    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

                    <!-- Header -->
                    <div class="px-8 py-6 border-b border-gray-100">
                        <h2 class="text-[#081F3D] text-2xl font-medium mb-3">Our Core Values</h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-[#081F3D] to-yellow-400 rounded-full"></div>
                    </div>

                    <div class="p-8 lg:p-12 relative z-10">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            
                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-handshake text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Industry interaction</h3>
                            </div>

                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-leaf text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Green campus</h3>
                            </div>

                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-users text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Community development</h3>
                            </div>

                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-globe text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Global vision</h3>
                            </div>

                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-user-graduate text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Student centric learning environment</h3>
                            </div>

                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-magnifying-glass text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Transparency</h3>
                            </div>

                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-people-carry-box text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Synergy through team work</h3>
                            </div>

                            <!-- Value Item -->
                            <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 group flex items-center gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center text-[#23589E] group-hover:bg-[#23589E] group-hover:text-white transition-colors duration-300">
                                    <i class="fa-solid fa-award text-xl"></i>
                                </div>
                                <h3 class="text-md font-normal text-[#081F3D]">Commitment to excellence</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
