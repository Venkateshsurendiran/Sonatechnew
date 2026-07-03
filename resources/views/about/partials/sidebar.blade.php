@php
    $menuItems = [
        ['title' => 'Vision and Mission', 'url' => url('/about/vision-and-mission')],
        ['title' => 'Core Values', 'url' => url('/about/core-values')],
        ['title' => 'Perspective Plan', 'url' => url('/about/perspective-plan')],
        ['title' => 'Quality Policy', 'url' => url('/about/quality-policy')],
        ['title' => 'History', 'url' => url('/about/history')],
        ['title' => 'Founder\'s Profile', 'url' => '#'],
        ['title' => 'Management Profile', 'url' => '#'],
        ['title' => 'Chairman\'s Message', 'url' => '#'],
        ['title' => 'Principal\'s Message', 'url' => '#'],
        ['title' => 'Principal\'s Profile', 'url' => '#'],
        ['title' => 'Governing Body', 'url' => '#'],
        ['title' => 'Statutory & Non-Statutory Bodies and Committees', 'url' => '#'],
        ['title' => 'Minutes of the meeting', 'url' => '#'],
        ['title' => 'Location', 'url' => '#'],
        ['title' => 'Sona Newsletter', 'url' => '#'],
        ['title' => 'Professional Society Activities', 'url' => '#'],
    ];
    $activePage = $activePage ?? 'Vision and Mission';
@endphp

<div class="bg-white/80 backdrop-blur-xl shadow-xl shadow-blue-900/5 rounded-2xl overflow-hidden border border-white">
    <!-- Sidebar Header -->
    <div class="bg-gradient-to-br from-blue-50 to-white py-6 px-6 border-b border-blue-50">
        <h3 class="text-xl font-medium tracking-wide text-[#081F3D] flex items-center justify-center gap-3">
            <span class="text-yellow-500 text-lg bg-yellow-50 w-8 h-8 flex items-center justify-center rounded-full"><i class="fa-solid fa-bookmark"></i></span> About Us
        </h3>
    </div>

    <!-- Sidebar Links -->
    <ul class="flex flex-col p-3 space-y-1">
        @foreach($menuItems as $item)
            @php
                $isActive = $activePage === $item['title'];
            @endphp
            <li>
                <a href="{{ $item['url'] }}" 
                   class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 {{ $isActive ? 'bg-[#081F3D] text-white shadow-md' : 'text-gray-600 hover:bg-blue-50 hover:text-[#081F3D]' }}">
                    <span class="mr-3 text-[10px] transition-transform duration-300 {{ $isActive ? 'text-yellow-400' : 'text-gray-300 group-hover:text-yellow-500' }}"><i class="fa-solid fa-chevron-right"></i></span> 
                    {{ $item['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
