@php
    $aboutLinks = [
        ['label' => 'Vision and Mission', 'url' => '/about/vision-mission'],
        ['label' => 'Core Values', 'url' => '/about/core-values'],
        ['label' => 'Perspective Plan', 'url' => '/about/perspective-plan'],
        ['label' => 'Quality Policy', 'url' => '/about/quality-policy'],
        ['label' => 'History', 'url' => '/about/history'],
        ['label' => 'Founder\'s Profile', 'url' => '/about/founders-profile'],
        ['label' => 'Management Profile', 'url' => '/about/management-profile'],
        ['label' => 'Chairman\'s Message', 'url' => '/about/chairmans-message'],
        ['label' => 'Chairman\'s Books', 'url' => '/about/chairmans-books'],
        ['label' => 'Principal\'s Message', 'url' => '/about/principals-message'],
        ['label' => 'Principal\'s Profile', 'url' => '/about/principals-profile'],
        ['label' => 'Governing Body', 'url' => '/about/governing-body'],
        ['label' => 'Statutory & Non-Statutory Bodies and Committees', 'url' => '/about/statutory-bodies'],
        ['label' => 'Minutes of the meeting', 'url' => '/about/minutes-of-the-meeting'],
        ['label' => 'Location', 'url' => '/about/location'],
        ['label' => 'Sona Newsletter', 'url' => '/about/sona-newsletter'],
        ['label' => 'Photo Gallery', 'url' => '/about/photo-gallery'],
        ['label' => 'Professional Society Activities', 'url' => '/about/professional-society-activities'],
    ];
@endphp

<aside class="page-sidebar" aria-label="About Us">
    <h2 class="page-sidebar__title">About Us</h2>
    <nav class="page-sidebar__nav">
        <ul class="page-sidebar__list">
            @foreach ($aboutLinks as $link)
                @php
                    $isActive = request()->is(ltrim($link['url'], '/'));
                @endphp
                <li class="page-sidebar__item{{ $isActive ? ' is-active' : '' }}">
                    <a href="{{ url($link['url']) }}"
                       class="page-sidebar__link{{ $isActive ? ' is-active' : '' }}"
                       @if($isActive) aria-current="page" @endif>
                        <span class="page-sidebar__chevron" aria-hidden="true"></span>
                        <span class="page-sidebar__label">{{ $link['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
