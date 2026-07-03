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
            <h1 class="text-3xl lg:text-4xl font-normal text-white mb-6 drop-shadow-md">History</h1>
            <div class="flex items-center space-x-3 text-md text-gray-300 tracking-wide">
                <a href="/" class="hover:text-yellow-400 transition-colors">Home</a>
                <span class="text-gray-500">/</span>
                <a href="#" class="hover:text-yellow-400 transition-colors">About Us</a>
                <span class="text-gray-500">/</span>
                <span class="text-yellow-400 font-medium">History</span>
            </div>
        </div>
    </div>

    <!-- Main Content Area with Sidebar -->
    <div class="w-full px-6 lg:px-12 xl:px-16 pt-4 pb-12 lg:pt-6 lg:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8">
            
            <!-- Sidebar (Left Column - col-md-3 equivalent) -->
            <div class="col-span-1 md:col-span-3 flex-shrink-0" data-aos="fade-right">
                @include('about.partials.sidebar', ['activePage' => 'History'])
            </div>

            <!-- Main Content (Right Column - col-md-9 equivalent) -->
            <div class="col-span-1 md:col-span-9" data-aos="fade-left">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-xl shadow-blue-900/5 border border-white overflow-hidden relative">
                    <!-- Subtle background decoration -->
                    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

                    <!-- Header -->
                    <div class="px-8 py-6 border-b border-gray-100">
                        <h2 class="text-[#081F3D] text-2xl font-medium mb-3">History</h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-[#081F3D] to-yellow-400 rounded-full"></div>
                    </div>

                    <div class="p-8 lg:p-12 relative z-10">
                        
                        <div class="flex flex-col lg:flex-row gap-10 items-start">
                            <!-- Image Left -->
                            <div class="w-full lg:w-2/5 flex-shrink-0">
                                <img src="{{ asset('assets/images/history.png') }}" alt="Founder and Historical Building" class="w-full rounded-2xl shadow-lg border border-gray-200 object-cover">
                            </div>

                            <!-- Text Content Right -->
                            <div class="w-full lg:w-3/5 text-gray-700 leading-relaxed space-y-6">
                                <p class="text-lg">
                                    The Sona Group is steeped in more than 100 years of success and tradition tracing back to pre-Independence. The group was founded by the doyen of textile industries of the early twentieth century, Karumuttu Thiagarajar Chettiar. He oozed passion and patriotism for his motherland and fought for Her freedom along with other great freedom fighters of this nation.
                                </p>
                                <p>
                                    Karumuttu Thiagarajar Chettiar’s prominence is etched in the tapestry of our nation by the role he played in the transformation of Mohandas Karamchand Gandhi to Gandhiji, The Father of our Nation. This defining moment played out in 1938, within the walls of Karumuttu Thiagarajar Chettiar’s home when Gandhiji visited Madurai. Gandhiji wore his trademark Loin cloth, vowing not to wear a shirt every again after seeing daily wage workers who could not afford one.
                                </p>
                                <p>
                                    Karumuttu Thiagarajar Chettiar saw the plight of workers in the plantations and fought for their liberation. His idea of liberation was to set people free and even to a higher level of setting minds free through education. He envisioned an Indian nation that would stand tall in the global stage built on its robust educated society with its traditional values and wealth.
                                </p>
                                <p>
                                    He set this idea in motion by establishing Thiagarajar Engineering College in Madurai, and Thiagarajar Polytechnic College, Salem, and sowed the seeds of quality technical education in India. Those seeds now stand as a global brand called ‘Sona’ whose roots run deep into education, textile, IT, research, manufacturing, outsourcing, logistics and many more. The Sona Group’s quest to cater quality higher education has led to its banyan tree like growth with Thiagarajar Polytechnic College, Sona College of Technology, Sona School of Business and Management, Sona College of Arts and Science , Sona Valliappa Public School and Sona Medical College of Naturopathy and Yoga.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
