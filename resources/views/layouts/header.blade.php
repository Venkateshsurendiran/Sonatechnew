<header id="main-header" class="fixed w-full top-0 z-50 transition-all duration-300 bg-transparent text-white">
    <!-- 1. Minimal Top Utility Strip -->
    <div class="w-full px-4 lg:px-10 hidden md:flex justify-end items-center py-2">
        <div class="flex items-center space-x-8">
            <!-- Utility Links -->
            <div class="flex space-x-8 text-[13px] font-medium tracking-wide">
                <a href="#" class="hover:text-[#081F3D] transition-colors">Careers</a>
                <a href="#" class="hover:text-[#081F3D] transition-colors">Alumni</a>
                <a href="#" class="hover:text-[#081F3D] transition-colors">Contact</a>
            </div>

            <!-- Separator -->
            <div class="w-px h-4 bg-white/20"></div>

            <!-- Social Media Icons -->
            <div class="flex space-x-5 text-[15px]">
                <a href="#" class="hover:text-[#081F3D] transition-colors"><i
                        class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="hover:text-[#081F3D] transition-colors"><i
                        class="fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-[#081F3D] transition-colors"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-[#081F3D] transition-colors"><i
                        class="fa-brands fa-youtube"></i></a>
                <a href="#" class="hover:text-[#081F3D] transition-colors"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- 2. Main Nav -->
    <nav class="w-full px-4 lg:px-10 py-3 flex justify-between items-center transition-all duration-300">

        <a href="{{ url('/') }}" class="flex items-center shrink-0">
            <img src="{{ asset('assets/images/logo.PNG') }}" alt="Sona College"
                class="h-14 w-[320px] object-contain object-left duration-300" width="320" height="56"
                id="header-logo">
        </a>

        <!-- Desktop Links -->
        <div class="hidden xl:flex items-center space-x-8">
            <a href="{{ url('/') }}" class="text-md font-medium hover:text-[#081F3D] transition">Home</a>
            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">About <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-xl w-[700px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded flex border-t-4 border-[#23589E]">
                    <div class="w-1/2 flex flex-col space-y-4 pr-6">
                        <a href="{{ url('/about/vision-and-mission') }}"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Vision and
                            Mission</a>
                        <a href="{{ url('/about/core-values') }}"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Core
                            Values</a>
                        <a href="{{ url('/about/perspective-plan') }}"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Perspective
                            Plan</a>
                        <a href="{{ url('/about/quality-policy') }}"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Quality Policy</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">History</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Founder's
                            Profile</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Management
                            Profile</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Chairman's
                            Message</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Principal's
                            Message</a>
                    </div>
                    <div class="w-1/2 flex flex-col space-y-4 pl-6">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Principal's
                            Profile</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Governing Body</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Statutory &
                            Non-Statutory Bodies and Committees</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Professional
                            Society Activities</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Professional
                            bodies</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Location</a>
                        <a href="#" class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Sona
                            Newsletter</a>
                        <a href="#" class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Photo
                            Gallery</a>
                    </div>
                </div>
            </div>
            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">Departments <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-xl w-[700px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded flex border-t-4 border-[#23589E]">
                    <div class="w-1/2 flex flex-col space-y-4 pr-6">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Mechanical
                            Engineering</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Mechatronics
                            Engineering</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Electrical &
                            Electronics Engineering</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Electronics &
                            Communication Engineering</a>
                        <a href="#" class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Bio
                            Medical Engineering</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Computer Science &
                            Engineering</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Information
                            Technology</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Civil
                            Engineering</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Fashion
                            Technology</a>
                    </div>
                    <div class="w-1/2 flex flex-col space-y-4 pl-6">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Master of Business
                            Administration</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Master of Computer
                            Applications</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Mathematics</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Science</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">English</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">General
                            Engineering</a>
                    </div>
                </div>
            </div>
            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">Academics <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-xl w-[900px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded flex border-t-4 border-[#23589E]">
                    <!-- Column 1 -->
                    <div class="w-1/3 flex flex-col space-y-4 pr-4">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Academic
                            Schedule</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Professional
                            Code</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Rules &
                            Regulations</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Student
                            Handbook</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Student
                            Affairs</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Research
                            Programmes</a>
                        <a href="#" class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">ICT
                            Tools & Resources</a>
                    </div>
                    <!-- Column 2 -->
                    <div class="w-1/3 flex flex-col space-y-4 px-4 border-r border-gray-300/50">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Academic
                            Regulations</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Innovative
                            Teaching Learning</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Faculty
                            Development Cell</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Sona NPTEL</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Curriculum &
                            Syllabus</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Continuing
                            Education</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Equal Opportunity
                            Cell</a>
                    </div>
                    <!-- Column 3 (Contact) -->
                    <div class="w-1/3 pl-8">
                        <h4 class="text-md font-medium text-gray-600 border-b border-gray-300 pb-2 mb-4">Contact</h4>
                        <p class="text-[15px] text-gray-700 leading-relaxed mb-4">
                            The Dean - Academics,<br>
                            Sona College of Technology<br>
                            Salem - 636 005<br>
                            Tamilnadu.
                        </p>
                        <div class="flex flex-col space-y-2">
                            <a href="tel:04274099755"
                                class="text-[15px] text-[#23589E] hover:text-[#081F3D] transition-colors flex items-center">
                                <i class="fa-solid fa-phone mr-2 text-xs"></i> 0427 - 4099755
                            </a>
                            <a href="mailto:academics@sonatech.ac.in"
                                class="text-[15px] text-[#23589E] hover:text-[#081F3D] transition-colors flex items-center">
                                <i class="fa-solid fa-envelope mr-2 text-xs"></i> academics@sonatech.ac.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">Admissions <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-2xl w-[1050px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded grid grid-cols-4 gap-8 border-t-4 border-[#23589E]">

                    <!-- Column 1 -->
                    <div class="flex flex-col space-y-3">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-2">Indian
                            Students</h4>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Admission
                            Criteria</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Approval &
                            Affiliation</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Courses
                            Offered</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Apply Online</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sona Doctoral
                            Fellowship (SDF) Admission</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Eligibility
                            Criteria</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">FAQs</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Tution Fee Waiver
                            Scheme</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Admission
                            Report</a>
                    </div>

                    <!-- Column 2 -->
                    <div class="flex flex-col space-y-3">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-2">Contact
                        </h4>
                        <div class="text-[13px] text-[#007BFF] leading-relaxed">
                            <p>Admission Cell</p>
                            <p>Sona College of Technology</p>
                            <p>Salem - 636 005</p>
                            <p class="mb-2">Tamilnadu.</p>
                            <a href="tel:04274099998" class="hover:text-[#0056b3] transition flex items-center mb-1">
                                <i class="fa-solid fa-phone mr-1 mt-0.5"></i> 0427 - 4099998 / 9442668758
                                /<br>9840447392
                            </a>
                            <a href="https://wa.me/919442668758"
                                class="hover:text-[#0056b3] transition flex items-center mb-1">
                                <i class="fa-brands fa-whatsapp mr-1 text-[14px]"></i> +91 9442668758
                            </a>
                            <a href="mailto:admission@sonatech.ac.in"
                                class="hover:text-[#0056b3] transition flex items-center">
                                <i class="fa-solid fa-envelope mr-1"></i> admission@sonatech.ac.in
                            </a>
                        </div>

                        <div class="mt-4">
                            <p class="text-[14px] text-gray-700 font-medium mb-1">MBA Admission Cell</p>
                            <a href="tel:9489600283"
                                class="text-[13px] text-[#007BFF] hover:text-[#0056b3] transition flex items-center">
                                <i class="fa-solid fa-phone mr-1"></i> 9489600283 / 9894388426 / 8778149726
                            </a>
                        </div>

                        <div class="mt-4">
                            <p class="text-[14px] text-gray-700 font-medium mb-1">MCA Admission Cell</p>
                            <a href="tel:04274099822"
                                class="text-[13px] text-[#007BFF] hover:text-[#0056b3] transition flex items-center">
                                <i class="fa-solid fa-phone mr-1"></i> 0427 - 4099822 / 0427 - 4099823 /<br>99948 35579
                            </a>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="flex flex-col space-y-3">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-2">
                            International Admissions</h4>
                        <a href="#" class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">FN
                            Admission Cell</a>
                        <a href="#" class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">No.
                            of Seats Available</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Admission
                            Procedure</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Application
                            form</a>
                        <a href="#" class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Fee
                            Structure</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Campus Life</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Scholarship</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Contact</a>
                    </div>

                    <!-- Column 4 -->
                    <div class="flex flex-col space-y-3">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-2">Contact
                        </h4>
                        <div class="text-[13px] text-gray-700 leading-relaxed">
                            <p>Dr.K.G.Saravanan / Dr.C.Jaganath</p>
                            <p>Office of International Affairs,</p>
                            <p>Sona College of Technology</p>
                            <p>Sona Nagar, T.P.T Road,</p>
                            <p>Suramangalam (P.O.),</p>
                            <p>Salem – 636 005</p>
                            <p class="mb-3">Tamilnadu,</p>

                            <p class="flex items-center mb-1">
                                Direct : <a href="tel:04274099877"
                                    class="text-[#007BFF] hover:text-[#0056b3] transition ml-1"><i
                                        class="fa-solid fa-phone mr-1"></i> 0427 - 4099877</a>
                            </p>
                            <p class="flex items-center mb-1">
                                Office : <a href="tel:04274099988"
                                    class="text-[#007BFF] hover:text-[#0056b3] transition ml-1"><i
                                        class="fa-solid fa-phone mr-1"></i> 0427 - 4099988</a>
                            </p>
                            <a href="tel:919489600282"
                                class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center mb-1">
                                <i class="fa-solid fa-phone mr-1 mt-0.5"></i> +91 9489600282 / +91 9443367658
                            </a>
                            <a href="mailto:fnadmission@sonatech.ac.in"
                                class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center mt-1">
                                <i class="fa-solid fa-envelope mr-1"></i> fnadmission@sonatech.ac.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">COE <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-2xl w-[900px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded grid grid-cols-3 gap-8 border-t-4 border-[#23589E]">

                    <!-- Column 1 -->
                    <div class="flex flex-col space-y-4 pr-4">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Introduction</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Exam Schedule</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Know Your Hall</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Exam Results</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors flex items-center gap-2">Download
                            - Forms <i class="fa-solid fa-download text-xs text-gray-500"></i></a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Grievance Cell -
                            Contact</a>
                    </div>

                    <!-- Column 2 -->
                    <div class="flex flex-col space-y-3 px-4">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-2">
                            Notification</h4>
                        <a href="#"
                            class="text-[14px] text-[#007BFF] hover:text-[#0056b3] transition-colors leading-relaxed block">
                            Payment for Advanced Diploma Programmes - Sep - 2023
                        </a>
                    </div>

                    <!-- Column 3 -->
                    <div class="flex flex-col space-y-3 pl-4">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-2">Contact
                        </h4>
                        <div class="text-[13px] text-gray-700 leading-relaxed">
                            <p>The Controller of Examinations,</p>
                            <p>Sona College of Technology</p>
                            <p>Salem – 636 005</p>
                            <p class="mb-3">Tamilnadu,</p>
                            <a href="tel:04274099859"
                                class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center mb-1">
                                <i class="fa-solid fa-phone mr-1"></i> 0427 - 4099859
                            </a>
                            <a href="mailto:coe@sonatech.ac.in"
                                class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center">
                                <i class="fa-solid fa-envelope mr-1"></i> coe@sonatech.ac.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">Placement <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-2xl w-[1000px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded grid grid-cols-4 gap-8 border-t-4 border-[#23589E]">

                    <!-- Column 1 -->
                    <div class="flex flex-col space-y-4 pr-4">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Introduction</a>
                        <a href="#" class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Our
                            Recruiters</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Training Cell</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Placement
                            Details</a>
                    </div>

                    <!-- Column 2 -->
                    <div class="flex flex-col space-y-4 px-4">
                        <a href="#" class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Our
                            Team</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Career Planning
                            Center</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Alumni</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Contact</a>
                    </div>

                    <!-- Column 3 & 4 (Contact) -->
                    <div class="col-span-2 flex flex-col pl-4">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-4">Contact
                        </h4>
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Left Contact -->
                            <div class="flex flex-col space-y-6">
                                <div class="text-[13px] text-gray-700 leading-relaxed">
                                    <p class="text-[14px]">Dr.B.Saravanan (Engineering)</p>
                                    <a href="tel:04274099979"
                                        class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center mt-1">
                                        <i class="fa-solid fa-phone mr-1"></i> 0427 - 4099979 / +91 9442601304
                                    </a>
                                </div>
                                <div class="text-[13px] text-gray-700 leading-relaxed">
                                    <p class="text-[14px]">Dr.D.Raja (Fashion Tech)</p>
                                    <a href="tel:04274099835"
                                        class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center mt-1">
                                        <i class="fa-solid fa-phone mr-1"></i> 0427 - 4099835
                                    </a>
                                </div>
                            </div>
                            <!-- Right Contact -->
                            <div class="flex flex-col space-y-6">
                                <div class="text-[13px] text-gray-700 leading-relaxed">
                                    <p class="text-[14px]">Mr.V.S.SenthilKumar (MBA)</p>
                                    <a href="tel:919080485577"
                                        class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center mt-1">
                                        <i class="fa-solid fa-mobile-screen-button mr-1"></i> +91 9080485577
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">Library <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-2xl w-[700px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded grid grid-cols-2 gap-12 border-t-4 border-[#23589E]">

                    <!-- Column 1 -->
                    <div class="flex flex-col space-y-4">
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Introduction</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors flex items-center">
                            AUERC Remote Access
                            <span
                                class="ml-2 bg-[#E10000] text-white text-[9px] font-medium px-1.5 py-0.5 rounded-[3px] tracking-wider animate-pulse italic">NEW</span>
                        </a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Rules and
                            Regulations</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Services</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Membership</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Floor Plan
                            Plans</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Section</a>
                        <a href="#"
                            class="text-[15px] text-gray-700 hover:text-[#23589E] transition-colors">Team Members</a>
                    </div>

                    <!-- Column 2 (Contact) -->
                    <div class="flex flex-col space-y-3">
                        <h4 class="text-[15px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-2">Contact
                        </h4>
                        <div class="text-[13px] text-gray-700 leading-relaxed">
                            <p>Mr.N.Sreedharan,</p>
                            <p>Librarian, Sona College of Technology</p>
                            <p>Salem – 636 005</p>
                            <p class="mb-3">Tamilnadu,</p>
                            <a href="tel:04274099913"
                                class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center mb-1">
                                <i class="fa-solid fa-phone mr-1"></i> 0427 - 4099913
                            </a>
                            <a href="mailto:librarian@sonatech.ac.in"
                                class="text-[#007BFF] hover:text-[#0056b3] transition flex items-center">
                                <i class="fa-solid fa-envelope mr-1"></i> librarian@sonatech.ac.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">Research <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-2xl w-[1250px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded grid grid-cols-5 gap-6 border-t-4 border-[#23589E]">

                    <!-- Column 1 -->
                    <div class="flex flex-col space-y-4">
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaCRND</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaCNM/MM</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors flex items-center">
                            Sona3Dx
                            <span
                                class="ml-2 bg-[#E10000] text-white text-[9px] font-medium px-1.5 py-0.5 rounded-[3px] tracking-wider animate-pulse italic">NEW</span>
                        </a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaMETFORM</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaSPEED</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaPERT</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaPEDAC</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaPLC</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaMINE</a>
                    </div>

                    <!-- Column 2 -->
                    <div class="flex flex-col space-y-4">
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaNET</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SONA AI&DA</a>
                        <a href="#" class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">IoT
                            Security Lab</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaFOSS</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaSIPRO</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaVLSIComm</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaCOIN</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaSERC</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaSTARCH</a>
                    </div>

                    <!-- Column 3 -->
                    <div class="flex flex-col space-y-4">
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaPAN</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaCRRP</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Nano-COED</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaAROMA</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaREACH</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SonaCRP</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">SONA SEDA</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sona AICTE IDEA
                            Lab</a>
                    </div>

                    <!-- Column 4 -->
                    <div class="flex flex-col space-y-4">
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sponsored
                            Projects</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Patents</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Training &
                            Consultancy</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Research
                            Policy</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors leading-snug">Industry
                            Academia<br>Collaboration</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Women's Technology
                            Park</a>
                    </div>

                    <!-- Column 5 -->
                    <div class="flex flex-col space-y-4 border-l border-gray-300/50 pl-6">
                        <a href="#"
                            class="text-[14px] font-medium text-gray-700 hover:text-[#23589E] transition-colors border-b border-gray-300 pb-3">PhDs
                            and Research Degrees</a>
                        <a href="#"
                            class="text-[14px] font-medium text-gray-700 hover:text-[#23589E] transition-colors border-b border-gray-300 pb-3">Areas
                            of Research</a>
                        <a href="#"
                            class="text-[14px] font-medium text-gray-700 hover:text-[#23589E] transition-colors border-b border-gray-300 pb-3">List
                            of Supervisor / Phd Scholars</a>

                        <div class="pt-1">
                            <h4 class="text-[14px] font-medium text-gray-600 border-b border-gray-300 pb-2 mb-3">
                                Contact</h4>
                            <div class="text-[13px] text-[#007BFF] leading-relaxed">
                                <p>Dr.S.Chandrasekar,</p>
                                <p>Dean, Sona College of Technology</p>
                                <p>Salem – 636 005</p>
                                <p class="mb-3">Tamilnadu</p>
                                <a href="tel:04274099720"
                                    class="hover:text-[#0056b3] transition flex items-center mb-1">
                                    <i class="fa-solid fa-phone mr-1"></i> 0427 - 4099720
                                </a>
                                <a href="mailto:chandrasekars@sonatech.ac.in"
                                    class="hover:text-[#0056b3] transition flex items-center">
                                    <i class="fa-solid fa-envelope mr-1"></i> chandrasekars@sonatech.ac.in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group static py-4 cursor-pointer">
                <span class="text-md font-medium hover:text-[#081F3D] transition flex items-center">Facilities <i
                        class="fa-solid fa-chevron-down text-[10px] ml-1"></i></span>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 bg-[#F2F2F2] shadow-2xl w-[1100px] p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all rounded grid grid-cols-4 gap-8 border-t-4 border-[#23589E]">

                    <!-- Column 1 -->
                    <div class="flex flex-col space-y-4">
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Computing &
                            Internet</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Apple Lab</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Satellite Live
                            Lectures</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">National Service
                            Scheme</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">National Cadet
                            Corps</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Youth Red
                            Cross</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Skills
                            Development</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Medical Center</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Hostel</a>
                    </div>

                    <!-- Column 2 -->
                    <div class="flex flex-col space-y-4">
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Transport</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Canteen</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Campus</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Entrepreneurship
                            Development Cell</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sona Business
                            Incubation Centre</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Institution's
                            Innovation Council</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Scholarship
                            Schemes</a>
                    </div>

                    <!-- Column 3 -->
                    <div class="flex flex-col space-y-4">
                        <h4 class="text-[15px]  font-medium text-gray-600 border-b border-gray-300 pb-2 mb-1">SONA
                            CLUBS</h4>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Blood Donor's
                            Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sonaria Music
                            Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sona Programming
                            Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sona Readers
                            Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Tamil Ilakkiya
                            Mandram</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Modern Theatre
                            Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Dexters club</a>
                    </div>

                    <!-- Column 4 -->
                    <div class="flex flex-col space-y-4 pt-[40px]">
                        <a href="#" class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">IQ
                            Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Science club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">English club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Tremors club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Women Empowerment
                            Cell</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Sports Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Yoga Club</a>
                        <a href="#"
                            class="text-[14px] text-gray-700 hover:text-[#23589E] transition-colors">Cooking Club</a>
                    </div>
                </div>
            </div>


        </div>

        <!-- Actions -->
        <div class="flex items-center space-x-4">
            <!-- Expanding Search Bar -->
            <div class="relative flex items-center h-10 transition-all duration-300 ease-in-out w-10" id="search-wrapper">
                <form id="search-form" onsubmit="event.preventDefault();" class="absolute right-0 flex items-center w-full h-full">
                    <input type="text" name="q" id="search-input" placeholder="Search..." autocomplete="off"
                           class="absolute right-0 h-full w-0 opacity-0 bg-white/10 text-white placeholder-white/70 border border-transparent rounded-full pl-10 pr-4 focus:outline-none focus:border-[#081F3D] transition-all duration-300 ease-in-out pointer-events-none text-sm">
                    <button type="button" id="search-toggle" class="absolute right-0 h-full w-10 flex items-center justify-center hover:text-[#081F3D] transition-all duration-300 z-10">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>
                </form>
                
                <!-- Search Results Dropdown -->
                <div id="search-results" class="absolute top-[45px] right-0 w-64 bg-white rounded-lg shadow-xl overflow-hidden hidden flex-col z-[100] max-h-80 overflow-y-auto">
                    <!-- Results will be injected here by JS -->
                </div>
            </div>
            
            <a href="#"
                class="bg-yellow-500 hover:bg-yellow-400 text-[#081F3D] font-medium text-md px-6 py-2.5 rounded transition shadow whitespace-nowrap">Apply
                Now</a>
            <button id="open-mobile-menu" class="xl:hidden text-2xl p-2"><i class="fa-solid fa-bars"></i></button>
        </div>
    </nav>

    <!-- Search Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchWrapper = document.getElementById('search-wrapper');
            const searchInput = document.getElementById('search-input');
            const searchToggle = document.getElementById('search-toggle');
            const searchResults = document.getElementById('search-results');

            // 1. Define your pages and their content here for the frontend search
            const siteIndex = [
                { title: 'Home', url: '{{ url("/") }}', content: 'Welcome to Sona College of Technology, Learning is a Celebration. Apply now for admissions.' },
                { title: 'History', url: '{{ url("/about/history") }}', content: 'The Sona Group is steeped in more than 100 years of success and tradition tracing back to pre-Independence.' },
                { title: 'Vision and Mission', url: '{{ url("/about/vision-and-mission") }}', content: 'Our vision and mission for Sona College of Technology.' },
                { title: 'Core Values', url: '{{ url("/about/core-values") }}', content: 'The core values and principles we follow at Sona College.' },
                { title: 'Perspective Plan', url: '{{ url("/about/perspective-plan") }}', content: 'Long term perspective plan and strategic goals.' },
                { title: 'Quality Policy', url: '{{ url("/about/quality-policy") }}', content: 'Our commitment to quality education and continuous improvement.' }
            ];

            searchToggle.addEventListener('click', function(e) {
                if (searchWrapper.classList.contains('w-64')) {
                    if (searchInput.value.trim() !== '') {
                        performSearch();
                    } else {
                        closeSearch();
                    }
                } else {
                    openSearch();
                }
            });

            searchInput.addEventListener('input', function() {
                performSearch();
            });

            function performSearch() {
                const query = searchInput.value.toLowerCase().trim();
                
                if (query.length < 2) {
                    searchResults.classList.add('hidden');
                    return;
                }

                // Filter the index by title (name), content, or URL
                const results = siteIndex.filter(page => 
                    page.title.toLowerCase().includes(query) || 
                    page.content.toLowerCase().includes(query) ||
                    page.url.toLowerCase().includes(query)
                );

                // Render results
                searchResults.innerHTML = '';
                if (results.length > 0) {
                    results.forEach(result => {
                        const link = document.createElement('a');
                        link.href = result.url;
                        link.className = 'block px-4 py-3 hover:bg-gray-100 border-b border-gray-100 last:border-0 transition-colors';
                        link.innerHTML = `
                            <div class="text-[#081F3D] font-medium text-sm">${result.title}</div>
                            <div class="text-gray-500 text-xs mt-1 truncate">${result.content}</div>
                        `;
                        searchResults.appendChild(link);
                    });
                } else {
                    searchResults.innerHTML = `<div class="px-4 py-3 text-gray-500 text-sm italic">No results found for "${query}"</div>`;
                }
                
                searchResults.classList.remove('hidden');
                searchResults.classList.add('flex');
            }

            function openSearch() {
                searchWrapper.classList.remove('w-10');
                searchWrapper.classList.add('w-64');
                
                searchInput.classList.remove('w-0', 'opacity-0', 'border-transparent', 'pointer-events-none');
                searchInput.classList.add('w-full', 'opacity-100', 'border-white/20', 'pointer-events-auto');
                
                searchToggle.classList.remove('right-0');
                searchToggle.classList.add('left-0');
                
                setTimeout(() => searchInput.focus(), 300);
            }

            function closeSearch() {
                searchWrapper.classList.remove('w-64');
                searchWrapper.classList.add('w-10');
                
                searchInput.classList.remove('w-full', 'opacity-100', 'border-white/20', 'pointer-events-auto');
                searchInput.classList.add('w-0', 'opacity-0', 'border-transparent', 'pointer-events-none');
                
                searchToggle.classList.remove('left-0');
                searchToggle.classList.add('right-0');
                
                searchResults.classList.add('hidden');
                searchResults.classList.remove('flex');
                searchInput.value = '';
            }

            document.addEventListener('click', function(e) {
                if (!searchWrapper.contains(e.target) && searchWrapper.classList.contains('w-64')) {
                    closeSearch();
                }
            });
        });
    </script>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu"
        class="fixed inset-0 z-[100] transform translate-x-full transition-transform duration-300 ease-in-out">
        <!-- Backdrop -->
        <div id="mobile-menu-backdrop"
            class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 pointer-events-none"></div>

        <!-- Drawer -->
        <div
            class="absolute right-0 top-0 bottom-0 w-4/5 max-w-sm bg-white shadow-2xl overflow-y-auto flex flex-col z-10">
            <div class="p-5 flex justify-between items-center border-b border-gray-200">
                <img src="{{ asset('assets/images/logo.PNG') }}" alt="Sona College"
                    class="h-10 w-auto object-contain">
                <button id="close-mobile-menu" class="text-gray-500 hover:text-red-500 p-2 text-2xl">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
            <div class="p-6 flex flex-col space-y-4 text-[#081F3D]">
                <a href="{{ url('/') }}"
                    class="font-medium text-lg hover:text-[#081F3D] border-b border-gray-100 pb-2 block">Home</a>

                <!-- About -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        About <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="{{ url('/about/vision-and-mission') }}" class="hover:text-[#081F3D]">Vision and
                            Mission</a>
                        <a href="#" class="hover:text-[#081F3D]">Core Values</a>
                        <a href="#" class="hover:text-[#081F3D]">Perspective Plan</a>
                        <a href="#" class="hover:text-[#081F3D]">Quality Policy</a>
                        <a href="#" class="hover:text-[#081F3D]">History</a>
                        <a href="#" class="hover:text-[#081F3D]">Founder's Profile</a>
                        <a href="#" class="hover:text-[#081F3D]">Management Profile</a>
                        <a href="#" class="hover:text-[#081F3D]">Chairman's Message</a>
                        <a href="#" class="hover:text-[#081F3D]">Principal's Message</a>
                        <a href="#" class="hover:text-[#081F3D]">Principal's Profile</a>
                        <a href="#" class="hover:text-[#081F3D]">Governing Body</a>
                        <a href="#" class="hover:text-[#081F3D]">Statutory & Non-Statutory Bodies and
                            Committees</a>
                        <a href="#" class="hover:text-[#081F3D]">Professional Society Activities</a>
                        <a href="#" class="hover:text-[#081F3D]">Professional bodies</a>
                        <a href="#" class="hover:text-[#081F3D]">Location</a>
                        <a href="#" class="hover:text-[#081F3D]">Sona Newsletter</a>
                        <a href="#" class="hover:text-[#081F3D]">Photo Gallery</a>
                    </div>
                </div>

                <!-- Departments -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        Departments <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">Mechanical Engineering</a>
                        <a href="#" class="hover:text-[#081F3D]">Mechatronics Engineering</a>
                        <a href="#" class="hover:text-[#081F3D]">Electrical & Electronics Engineering</a>
                        <a href="#" class="hover:text-[#081F3D]">Electronics & Communication Engineering</a>
                        <a href="#" class="hover:text-[#081F3D]">Bio Medical Engineering</a>
                        <a href="#" class="hover:text-[#081F3D]">Computer Science & Engineering</a>
                        <a href="#" class="hover:text-[#081F3D]">Information Technology</a>
                        <a href="#" class="hover:text-[#081F3D]">Civil Engineering</a>
                        <a href="#" class="hover:text-[#081F3D]">Fashion Technology</a>
                        <a href="#" class="hover:text-[#081F3D]">Master of Business Administration</a>
                        <a href="#" class="hover:text-[#081F3D]">Master of Computer Applications</a>
                        <a href="#" class="hover:text-[#081F3D]">Mathematics</a>
                        <a href="#" class="hover:text-[#081F3D]">Science</a>
                        <a href="#" class="hover:text-[#081F3D]">English</a>
                        <a href="#" class="hover:text-[#081F3D]">General Engineering</a>
                    </div>
                </div>

                <!-- Academics -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        Academics <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">Academic Schedule</a>
                        <a href="#" class="hover:text-[#081F3D]">Professional Code</a>
                        <a href="#" class="hover:text-[#081F3D]">Rules & Regulations</a>
                        <a href="#" class="hover:text-[#081F3D]">Student Handbook</a>
                        <a href="#" class="hover:text-[#081F3D]">Student Affairs</a>
                        <a href="#" class="hover:text-[#081F3D]">Research Programmes</a>
                        <a href="#" class="hover:text-[#081F3D]">ICT Tools & Resources</a>
                        <a href="#" class="hover:text-[#081F3D]">Academic Regulations</a>
                        <a href="#" class="hover:text-[#081F3D]">Innovative Teaching Learning</a>
                        <a href="#" class="hover:text-[#081F3D]">Faculty Development Cell</a>
                        <a href="#" class="hover:text-[#081F3D]">Sona NPTEL</a>
                        <a href="#" class="hover:text-[#081F3D]">Curriculum & Syllabus</a>
                        <a href="#" class="hover:text-[#081F3D]">Continuing Education</a>
                        <a href="#" class="hover:text-[#081F3D]">Equal Opportunity Cell</a>
                    </div>
                </div>

                <!-- Admissions -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        Admissions <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">Admission Criteria</a>
                        <a href="#" class="hover:text-[#081F3D]">Approval & Affiliation</a>
                        <a href="#" class="hover:text-[#081F3D]">Courses Offered</a>
                        <a href="#" class="hover:text-[#081F3D]">Apply Online</a>
                        <a href="#" class="hover:text-[#081F3D]">Sona Doctoral Fellowship (SDF) Admission</a>
                        <a href="#" class="hover:text-[#081F3D]">Eligibility Criteria</a>
                        <a href="#" class="hover:text-[#081F3D]">FAQs</a>
                        <a href="#" class="hover:text-[#081F3D]">Tution Fee Waiver Scheme</a>
                        <a href="#" class="hover:text-[#081F3D]">Admission Report</a>
                        <a href="#" class="hover:text-[#081F3D]">FN Admission Cell</a>
                        <a href="#" class="hover:text-[#081F3D]">No. of Seats Available</a>
                        <a href="#" class="hover:text-[#081F3D]">Admission Procedure</a>
                        <a href="#" class="hover:text-[#081F3D]">Application form</a>
                        <a href="#" class="hover:text-[#081F3D]">Fee Structure</a>
                        <a href="#" class="hover:text-[#081F3D]">Campus Life</a>
                        <a href="#" class="hover:text-[#081F3D]">Scholarship</a>
                    </div>
                </div>

                <!-- COE -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        COE <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">Introduction</a>
                        <a href="#" class="hover:text-[#081F3D]">Exam Schedule</a>
                        <a href="#" class="hover:text-[#081F3D]">End Semester Exam Timetable</a>
                        <a href="#" class="hover:text-[#081F3D]">Academic Calendar</a>
                        <a href="#" class="hover:text-[#081F3D]">Formats</a>
                        <a href="#" class="hover:text-[#081F3D]">Application Form For Duplicate Certificate</a>
                        <a href="#" class="hover:text-[#081F3D]">Online Exam Fee Payment</a>
                        <a href="#" class="hover:text-[#081F3D]">Revaluation Payment</a>
                        <a href="#" class="hover:text-[#081F3D]">Review Payment</a>
                        <a href="#" class="hover:text-[#081F3D]">Payment for Advanced Diploma</a>
                        <a href="#" class="hover:text-[#081F3D]">Notification</a>
                        <a href="#" class="hover:text-[#081F3D]">Transcript</a>
                        <a href="#" class="hover:text-[#081F3D]">Downloads - Forms</a>
                        <a href="#" class="hover:text-[#081F3D]">Results</a>
                        <a href="#" class="hover:text-[#081F3D]">Grievance Cell</a>
                    </div>
                </div>

                <!-- Placement -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        Placement <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">Introduction</a>
                        <a href="#" class="hover:text-[#081F3D]">Our Recruiters</a>
                        <a href="#" class="hover:text-[#081F3D]">Training Cell</a>
                        <a href="#" class="hover:text-[#081F3D]">Placement Details</a>
                        <a href="#" class="hover:text-[#081F3D]">Our Team</a>
                        <a href="#" class="hover:text-[#081F3D]">Career Planning Center</a>
                        <a href="#" class="hover:text-[#081F3D]">Alumni</a>
                    </div>
                </div>

                <!-- Library -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        Library <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">Introduction</a>
                        <a href="#" class="hover:text-[#081F3D] flex items-center">AUERC Remote Access <span
                                class="ml-2 bg-[#E10000] text-white text-[9px] px-1 rounded">NEW</span></a>
                        <a href="#" class="hover:text-[#081F3D]">Rules and Regulations</a>
                        <a href="#" class="hover:text-[#081F3D]">Services</a>
                        <a href="#" class="hover:text-[#081F3D]">Membership</a>
                        <a href="#" class="hover:text-[#081F3D]">Floor Plan Plans</a>
                        <a href="#" class="hover:text-[#081F3D]">Section</a>
                        <a href="#" class="hover:text-[#081F3D]">Team Members</a>
                    </div>
                </div>

                <!-- Research -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        Research <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">SonaCRND</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaCNM/MM</a>
                        <a href="#" class="hover:text-[#081F3D] flex items-center">Sona3Dx <span
                                class="ml-2 bg-[#E10000] text-white text-[9px] px-1 rounded">NEW</span></a>
                        <a href="#" class="hover:text-[#081F3D]">SonaMETFORM</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaSPEED</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaPERT</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaPEDAC</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaPLC</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaMINE</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaNET</a>
                        <a href="#" class="hover:text-[#081F3D]">SONA AI&DA</a>
                        <a href="#" class="hover:text-[#081F3D]">IoT Security Lab</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaFOSS</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaSIPRO</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaVLSIComm</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaCOIN</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaSERC</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaSTARCH</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaPAN</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaCRRP</a>
                        <a href="#" class="hover:text-[#081F3D]">Nano-COED</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaAROMA</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaREACH</a>
                        <a href="#" class="hover:text-[#081F3D]">SonaCRP</a>
                        <a href="#" class="hover:text-[#081F3D]">SONA SEDA</a>
                        <a href="#" class="hover:text-[#081F3D]">Sona AICTE IDEA Lab</a>
                        <a href="#" class="hover:text-[#081F3D]">Sponsored Projects</a>
                        <a href="#" class="hover:text-[#081F3D]">Patents</a>
                        <a href="#" class="hover:text-[#081F3D]">Training & Consultancy</a>
                        <a href="#" class="hover:text-[#081F3D]">Research Policy</a>
                        <a href="#" class="hover:text-[#081F3D]">Industry Academia Collaboration</a>
                        <a href="#" class="hover:text-[#081F3D]">Women's Technology Park</a>
                        <a href="#" class="hover:text-[#081F3D]">PhDs and Research Degrees</a>
                        <a href="#" class="hover:text-[#081F3D]">Areas of Research</a>
                        <a href="#" class="hover:text-[#081F3D]">List of Supervisor / Phd Scholars</a>
                    </div>
                </div>

                <!-- Facilities -->
                <div class="border-b border-gray-100 pb-2">
                    <button
                        class="w-full flex justify-between items-center font-medium text-lg hover:text-[#081F3D] mobile-submenu-toggle">
                        Facilities <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 pt-3 space-y-3 text-[13px] text-gray-600">
                        <a href="#" class="hover:text-[#081F3D]">Computing & Internet</a>
                        <a href="#" class="hover:text-[#081F3D]">Apple Lab</a>
                        <a href="#" class="hover:text-[#081F3D]">Satellite Live Lectures</a>
                        <a href="#" class="hover:text-[#081F3D]">National Service Scheme</a>
                        <a href="#" class="hover:text-[#081F3D]">National Cadet Corps</a>
                        <a href="#" class="hover:text-[#081F3D]">Youth Red Cross</a>
                        <a href="#" class="hover:text-[#081F3D]">Skills Development</a>
                        <a href="#" class="hover:text-[#081F3D]">Medical Center</a>
                        <a href="#" class="hover:text-[#081F3D]">Hostel</a>
                        <a href="#" class="hover:text-[#081F3D]">Transport</a>
                        <a href="#" class="hover:text-[#081F3D]">Canteen</a>
                        <a href="#" class="hover:text-[#081F3D]">Campus</a>
                        <a href="#" class="hover:text-[#081F3D]">Entrepreneurship Development Cell</a>
                        <a href="#" class="hover:text-[#081F3D]">Sona Business Incubation Centre</a>
                        <a href="#" class="hover:text-[#081F3D]">Institution's Innovation Council</a>
                        <a href="#" class="hover:text-[#081F3D]">Scholarship Schemes</a>
                        <div class="font-medium text-[#081F3D] pt-2 pb-1">SONA CLUBS</div>
                        <a href="#" class="hover:text-[#081F3D]">Blood Donor's Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Sonaria Music Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Sona Programming Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Sona Readers Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Tamil Ilakkiya Mandram</a>
                        <a href="#" class="hover:text-[#081F3D]">Modern Theatre Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Dexters club</a>
                        <a href="#" class="hover:text-[#081F3D]">IQ Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Science club</a>
                        <a href="#" class="hover:text-[#081F3D]">English club</a>
                        <a href="#" class="hover:text-[#081F3D]">Tremors club</a>
                        <a href="#" class="hover:text-[#081F3D]">Women Empowerment Cell</a>
                        <a href="#" class="hover:text-[#081F3D]">Sports Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Yoga Club</a>
                        <a href="#" class="hover:text-[#081F3D]">Cooking Club</a>
                    </div>
                </div>

                <div class="pt-4 flex flex-col space-y-4 text-md text-gray-500">
                    <a href="#" class="hover:text-[#081F3D]">Careers</a>
                    <a href="#" class="hover:text-[#081F3D]">Alumni</a>
                    <a href="#" class="hover:text-[#081F3D]">Contact</a>
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.getElementById('main-header');
            const logo = document.getElementById('header-logo');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.remove('bg-transparent', 'text-white');
                    header.classList.add('bg-white', 'text-[#081F3D]', 'shadow-md');
                } else {
                    header.classList.add('bg-transparent', 'text-white');
                    header.classList.remove('bg-white', 'text-[#081F3D]', 'shadow-md');
                }
            });

            // Mobile Menu Logic
            const mobileMenu = document.getElementById('mobile-menu');
            const openMobileMenuBtn = document.getElementById('open-mobile-menu');
            const closeMobileMenuBtn = document.getElementById('close-mobile-menu');
            const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');

            function openMenu() {
                mobileMenu.classList.remove('translate-x-full');
                mobileMenuBackdrop.classList.remove('opacity-0', 'pointer-events-none');
                mobileMenuBackdrop.classList.add('opacity-100');
                document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
            }

            function closeMenu() {
                mobileMenu.classList.add('translate-x-full');
                mobileMenuBackdrop.classList.remove('opacity-100');
                mobileMenuBackdrop.classList.add('opacity-0', 'pointer-events-none');
                document.body.style.overflow = ''; // Restore scrolling
            }

            if (openMobileMenuBtn) {
                openMobileMenuBtn.addEventListener('click', openMenu);
            }
            if (closeMobileMenuBtn) {
                closeMobileMenuBtn.addEventListener('click', closeMenu);
            }
            if (mobileMenuBackdrop) {
                mobileMenuBackdrop.addEventListener('click', closeMenu);
            }

            // Mobile Submenu Logic
            const submenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const submenu = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    submenu.classList.toggle('hidden');
                    submenu.classList.toggle('flex');
                    if (submenu.classList.contains('hidden')) {
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>
@endpush
