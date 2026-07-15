@extends('layouts.app')

@section('title', 'Sona College of Technology | Salem')

@section('content')
    <section class="hero" aria-label="Welcome">
        @php
            $heroPoster =
                collect(['images/hero/hero-bg.jpg', 'images/slide-1.webp', 'images/slide.webp'])->first(
                    fn($path) => file_exists(public_path($path)),
                ) ?? 'images/hero/hero-bg.jpg';

            $heroLeadershipSlides = [
                [
                    'image' => 'images/hero/leadership-card.jpg',
                    'orientation' => 'landscape',
                    'alt' => 'Leadership at Sona College of Technology',
                    'quote' =>
                        'Engineers, AI won\'t replace you. Curiosity, resilience and adaptability will define your future.',
                    'author' => 'Mr. Chocko Valliappa, Vice Chairman',
                    'link' => '#about',
                    'link_text' => 'Read more',
                ],
                [
                    'image' => 'images/hero/hero-bg.jpg',
                    'orientation' => 'landscape',
                    'alt' => 'Campus life at Sona College of Technology',
                    'quote' => 'We nurture engineers who lead with integrity, innovation, and a commitment to society.',
                    'author' => 'Sona College of Technology',
                    'link' => '#about',
                    'link_text' => 'Read more',
                ],
            ];

            $carouselImagePaths = collect();
            $carouselDir = public_path('images/hero/carousel');

            if (is_dir($carouselDir)) {
                foreach (scandir($carouselDir) as $file) {
                    if ($file === '.' || $file === '..') {
                        continue;
                    }

                    if (!preg_match('/\.(jpe?g|png|webp)$/i', $file)) {
                        continue;
                    }

                    $carouselImagePaths->push('images/hero/carousel/' . $file);
                }
            }

            foreach ($carouselImagePaths as $imagePath) {
                $alreadyListed = collect($heroLeadershipSlides)->contains(fn($slide) => $slide['image'] === $imagePath);

                if ($alreadyListed) {
                    continue;
                }

                $orientation = 'landscape';
                $basename = strtolower(basename($imagePath));

                if (str_contains($basename, 'portrait') || str_contains($basename, 'port-')) {
                    $orientation = 'portrait';
                } elseif (file_exists(public_path($imagePath))) {
                    $size = @getimagesize(public_path($imagePath));
                    if ($size && $size[1] > $size[0]) {
                        $orientation = 'portrait';
                    }
                }

                $heroLeadershipSlides[] = [
                    'image' => $imagePath,
                    'orientation' => $orientation,
                    'alt' => 'Leadership vision at Sona College of Technology',
                    'quote' =>
                        'Engineers, AI won\'t replace you. Curiosity, resilience and adaptability will define your future.',
                    'author' => 'Mr. Chocko Valliappa, Vice Chairman',
                    'link' => '#about',
                    'link_text' => 'Read more',
                ];
            }

            $heroLeadershipSlides = collect($heroLeadershipSlides)
                ->filter(fn($slide) => file_exists(public_path($slide['image'])))
                ->values()
                ->all();

            $heroVideoPath = collect(['videos/hero/home-banner.mp4', 'images/home-banner.mp4'])->first(
                fn($path) => file_exists(public_path($path)),
            );

            $heroStats = [
                [
                    'icon' => 'years',
                    'value' => '40+',
                    'label' => 'Years of Excellence',
                ],
                [
                    'icon' => 'students',
                    'value' => '18,000+',
                    'label' => 'Students',
                ],
                [
                    'icon' => 'faculty',
                    'value' => '350+',
                    'label' => 'Experienced Faculty',
                ],
                [
                    'icon' => 'recruiters',
                    'value' => '650+',
                    'label' => 'Top Recruiters',
                ],
                [
                    'icon' => 'package',
                    'value' => '₹48 LPA',
                    'label' => 'Highest Package',
                ],
            ];
        @endphp
        <div class="hero__background" role="presentation">
            <img class="hero__poster" src="{{ asset($heroPoster) }}" alt="" width="1920" height="1080"
                fetchpriority="high">
            @if ($heroVideoPath)
                <video class="hero__video" autoplay muted loop playsinline webkit-playsinline preload="auto"
                    poster="{{ asset($heroPoster) }}">
                    <source src="{{ asset($heroVideoPath) }}" type="video/mp4">
                </video>
            @endif
        </div>
        <div class="hero__overlay" aria-hidden="true"></div>

        <div class="container hero__shell">
            <div class="hero__layout">
                <div class="hero__copy">
                    <p class="hero__kicker">NAAC A++ &bull; NBA Accredited &bull; NIRF Ranked</p>
                    <h1>
                        Building Future <span class="hero__highlight">Engineers, Innovators &amp; Global Leaders</span>
                    </h1>
                    <p class="hero__lead">
                        Empowering excellence in engineering, research &amp; innovation since 1983.
                    </p>
                    <div class="hero__actions">
                        <a href="#admission" class="btn btn-accent btn-pill hero__btn">
                            Apply Now
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                        <a href="#" class="btn btn-hero-tour btn-pill hero__btn" target="_blank"
                            rel="noopener noreferrer">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            Virtual Tour
                        </a>
                    </div>
                </div>

                <div class="hero__visual">
                    @if (count($heroLeadershipSlides))
                        <div class="hero__card-carousel" data-hero-card-carousel aria-roledescription="carousel"
                            aria-label="Leadership vision">
                            @if (count($heroLeadershipSlides) > 1)
                                <div class="hero__card-nav" aria-label="Leadership slide controls">
                                    <button type="button" class="hero__card-arrow hero__card-arrow--prev"
                                        aria-label="Previous leadership slide">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                            <path d="M15 18l-6-6 6-6" />
                                        </svg>
                                    </button>
                                    <button type="button" class="hero__card-arrow hero__card-arrow--next"
                                        aria-label="Next leadership slide">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                            <path d="M9 18l6-6-6-6" />
                                        </svg>
                                    </button>
                                </div>
                            @endif

                            <div class="hero__card-stage">
                                @foreach ($heroLeadershipSlides as $index => $slide)
                                    <aside class="hero__card hero__card-slide{{ $index === 0 ? ' is-active' : '' }}"
                                        aria-label="Leadership vision slide {{ $index + 1 }} of {{ count($heroLeadershipSlides) }}"
                                        @if ($index !== 0) hidden @endif>
                                        <div
                                            class="hero__card-media hero__card-media--{{ $slide['orientation'] ?? 'landscape' }}">
                                            <img src="{{ asset($slide['image']) }}" alt="{{ $slide['alt'] ?? '' }}"
                                                width="420" height="260"
                                                loading="{{ $index === 0 ? 'eager' : 'lazy' }}" decoding="async">
                                            <span class="hero__card-badge">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M12 2l2.9 6.1 6.8.6-5.1 4.5 1.5 6.6L12 16.9l-6.1 3.3 1.5-6.6-5.1-4.5 6.8-.6L12 2z" />
                                                </svg>
                                                Leadership Vision
                                            </span>
                                        </div>
                                        <div class="hero__card-body">
                                            <blockquote class="hero__card-quote">
                                                &ldquo;{{ $slide['quote'] }}&rdquo;
                                            </blockquote>
                                            <p class="hero__card-author">&mdash; {{ $slide['author'] }}</p>
                                            <a href="{{ $slide['link'] ?? '#about' }}" class="hero__card-link">
                                                {{ $slide['link_text'] ?? 'Read more' }}
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                                </svg>
                                            </a>
                                        </div>
                                    </aside>
                                @endforeach
                            </div>

                            @if (count($heroLeadershipSlides) > 1)
                                <div class="hero__card-dots" role="tablist" aria-label="Leadership slide pagination">
                                    @foreach ($heroLeadershipSlides as $index => $slide)
                                        <button type="button"
                                            class="hero__card-dot{{ $index === 0 ? ' is-active' : '' }}" role="tab"
                                            aria-label="Go to slide {{ $index + 1 }}"
                                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}"></button>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="hero__stats" role="list" aria-label="Institution highlights">
            @foreach ($heroStats as $stat)
                <div class="hero__stat" role="listitem">
                    <span class="hero__stat-icon" aria-hidden="true">
                        @if ($stat['icon'] === 'years')
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.75">
                                <path d="M3 21h18M6 21V7l6-4 6 4v14" />
                                <path d="M10 11h4M10 15h4" />
                            </svg>
                        @elseif ($stat['icon'] === 'students')
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.75">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        @elseif ($stat['icon'] === 'faculty')
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.75">
                                <path d="M22 10l-10-5L2 10l10 5 10-5z" />
                                <path d="M6 12v5c0 1.5 3 3 6 3s6-1.5 6-3v-5" />
                            </svg>
                        @elseif ($stat['icon'] === 'recruiters')
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.75">
                                <rect x="2" y="7" width="20" height="14" rx="2" />
                                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                            </svg>
                        @else
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.75">
                                <circle cx="12" cy="8" r="6" />
                                <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                            </svg>
                        @endif
                    </span>
                    <p class="hero__stat-value">{{ $stat['value'] }}</p>
                    <p class="hero__stat-label">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    @php
        $announcements = [
            [
                'text' => 'Online Fee Payment for 2026-27 : B.E(IV, III & II year), MBA, MCA and ME/MTECH || Exam Fee',
                'url' => '#',
            ],
            [
                'text' => 'UGC Document Submitted',
                'url' => '#',
            ],
            [
                'text' => 'The SONATIMES Newsletter - June 2026 edition',
                'url' => '#',
            ],
        ];
    @endphp

    <div class="announcement-marquee" role="region" aria-label="Announcements">
        <div class="announcement-marquee__label" aria-hidden="true">
            <svg class="announcement-marquee__icon" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M3 11v2a1 1 0 0 0 1 1h1l4 4V6L5 10H4a1 1 0 0 0-1 1z" />
                <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
                <path d="M19.07 4.93a10 10 0 0 1 0 14.14" />
            </svg>
            <span>Announcements</span>
        </div>
        <div class="announcement-marquee__viewport">
            <div class="announcement-marquee__track" data-announcement-marquee>
                @foreach ([1, 2] as $loopSet)
                    <ul class="announcement-marquee__list" @if ($loopSet === 2) aria-hidden="true" @endif>
                        @foreach ($announcements as $item)
                            <li class="announcement-marquee__item">
                                <a href="{{ $item['url'] }}" class="announcement-marquee__link">{{ $item['text'] }}</a>
                                <span class="announcement-marquee__sep" aria-hidden="true">
                                    <svg class="announcement-marquee__sep-icon" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        aria-hidden="true">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                    </svg>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    @php
        $admissionColumns = [
            [
                'title' => 'B.E / B.Tech / M.E / M.Tech',
                'items' => [
                    ['icon' => 'document', 'label' => 'Online Application', 'url' => '#', 'external' => false],
                    ['icon' => 'enquiry', 'label' => 'Online Enquiry', 'url' => '#', 'external' => false],
                    [
                        'icon' => 'phone',
                        'label' => '+91 94426 68758 / +91 98404 47392',
                        'url' => 'tel:+919442668758',
                        'external' => false,
                    ],
                ],
            ],
            [
                'title' => 'MBA',
                'items' => [
                    ['icon' => 'document', 'label' => 'Online Application', 'url' => '#', 'external' => false],
                    ['icon' => 'enquiry', 'label' => 'Online Enquiry', 'url' => '#', 'external' => false],
                    [
                        'icon' => 'phone',
                        'label' => '+91 9489 600283 / +91 87781 49726',
                        'url' => 'tel:+919489600283',
                        'external' => false,
                    ],
                ],
            ],
            [
                'title' => 'MCA',
                'items' => [
                    ['icon' => 'document', 'label' => 'Online Application', 'url' => '#', 'external' => false],
                    ['icon' => 'enquiry', 'label' => 'Online Enquiry', 'url' => '#', 'external' => false],
                    [
                        'icon' => 'phone',
                        'label' => '+91 0427 4099822 / +91 99948 35579',
                        'url' => 'tel:+914274099822',
                        'external' => false,
                    ],
                ],
            ],
            [
                'title' => 'Foreign Admission - Contact',
                'items' => [
                    [
                        'icon' => 'phone',
                        'label' => '+91 94896 00282',
                        'url' => 'tel:+919489600282',
                        'external' => false,
                    ],
                    [
                        'icon' => 'phone',
                        'label' => '+91 94426 68758 (For Nepal)',
                        'url' => 'tel:+919442668758',
                        'external' => false,
                    ],
                    [
                        'icon' => 'whatsapp',
                        'label' => 'WhatsApp Enquiry',
                        'url' => 'https://wa.me/919489600282',
                        'external' => true,
                    ],
                ],
            ],
        ];
    @endphp

    <section class="admission-block" id="admission" aria-labelledby="admission-title">
        <div class="admission-block__header">
            <div class="container admission-block__header-inner">
                <h2 class="admission-block__title" id="admission-title">Admission 2026</h2>
                <p class="admission-block__code">Counselling Code - 2618</p>
            </div>
        </div>
        <div class="admission-block__body">
            <div class="container">
                <div class="admission-block__grid">
                    @foreach ($admissionColumns as $column)
                        <div class="admission-block__col">
                            <h3 class="admission-block__col-title">{{ $column['title'] }}</h3>
                            <ul class="admission-block__list">
                                @foreach ($column['items'] as $item)
                                    <li class="admission-block__item">
                                        <span class="admission-block__icon" aria-hidden="true">
                                            @if ($item['icon'] === 'document')
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                                    <polyline points="14 2 14 8 20 8" />
                                                    <line x1="16" y1="13" x2="8" y2="13" />
                                                    <line x1="16" y1="17" x2="8" y2="17" />
                                                </svg>
                                            @elseif ($item['icon'] === 'enquiry')
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                    <line x1="12" y1="17" x2="12.01" y2="17" />
                                                </svg>
                                            @elseif ($item['icon'] === 'whatsapp')
                                                <svg width="16" height="16" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                                                    <path
                                                        d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 0 0 .917.917l4.458-1.495A11.95 11.95 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.714 9.714 0 0 1-4.96-1.354l-.355-.21-2.645.887.887-2.578-.231-.374A9.75 9.75 0 1 1 12 21.75z" />
                                                </svg>
                                            @else
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <path
                                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                                                </svg>
                                            @endif
                                        </span>
                                        <a href="{{ $item['url'] }}" class="admission-block__link"
                                            @if ($item['external']) target="_blank" rel="noopener noreferrer" @endif>
                                            {{ $item['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section section--muted campus-news" id="news" aria-labelledby="campus-news-title">
        <div class="container">
            @php
                $campusNewsItems = [
                    [
                        'type' => 'news',
                        'label' => 'Featured News',
                        'day' => '10',
                        'month' => 'MAY',
                        'title' => 'Sona Institutions Launches Centre for Sustainable Energy Research',
                        'image' => 'images/news/research.jpg',
                        'alt' => 'Sustainable energy research at Sona',
                        'url' => '#',
                    ],
                    [
                        'type' => 'events',
                        'label' => 'Event',
                        'day' => '08',
                        'month' => 'MAY',
                        'title' => 'AI & Robotics Workshop Series 2027 in Association with Industry Experts',
                        'image' => 'images/news/featured.jpg',
                        'alt' => 'AI and robotics workshop',
                        'url' => '#',
                    ],
                    [
                        'type' => 'achievements',
                        'label' => 'Achievement',
                        'day' => '05',
                        'month' => 'MAY',
                        'title' => 'Sona Students Win National Level Hackathon Championship',
                        'image' => 'images/news/campus-life.jpg',
                        'alt' => 'Students celebrating campus achievement',
                        'url' => '#',
                    ],
                    [
                        'type' => 'events',
                        'label' => 'Event',
                        'day' => '02',
                        'month' => 'MAY',
                        'title' => 'International Conference on Emerging Technologies in Engineering',
                        'image' => 'images/news/alumni.jpg',
                        'alt' => 'International conference at Sona',
                        'url' => '#',
                    ],
                ];

                $featuredNews = $campusNewsItems[0];
            @endphp

            <div class="campus-news__header">
                <h2 class="campus-news__title" id="campus-news-title">News &amp; Events</h2>

                <div class="campus-news__filters" role="group" aria-label="Filter news and events">
                    <button type="button" class="campus-news__filter-btn is-active" data-news-filter="all">All</button>
                    <button type="button" class="campus-news__filter-btn" data-news-filter="news">News</button>
                    <button type="button" class="campus-news__filter-btn" data-news-filter="events">Events</button>
                    <button type="button" class="campus-news__filter-btn"
                        data-news-filter="achievements">Achievements</button>
                </div>
            </div>

            <div class="campus-news__layout" data-campus-news-panel>
                <article class="campus-news__featured" data-news-featured data-news-type="{{ $featuredNews['type'] }}">
                    <a href="{{ $featuredNews['url'] }}" class="campus-news__featured-media">
                        <img src="{{ asset($featuredNews['image']) }}" alt="{{ $featuredNews['alt'] }}" width="720"
                            height="420" loading="eager" decoding="async" data-news-featured-image>
                    </a>

                    <div class="campus-news__featured-body">
                        <div class="campus-news__date campus-news__date--featured" aria-hidden="true">
                            <span class="campus-news__date-day" data-news-featured-day>{{ $featuredNews['day'] }}</span>
                            <span class="campus-news__date-month"
                                data-news-featured-month>{{ $featuredNews['month'] }}</span>
                        </div>

                        <div class="campus-news__featured-copy">
                            <span class="campus-news__featured-label"
                                data-news-featured-label>{{ $featuredNews['label'] }}</span>
                            <h3 class="campus-news__featured-title">
                                <a href="{{ $featuredNews['url'] }}"
                                    data-news-featured-title>{{ $featuredNews['title'] }}</a>
                            </h3>
                            <a href="{{ $featuredNews['url'] }}" class="campus-news__read-more" data-news-featured-link>
                                Read More
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </article>

                <div class="campus-news__list" role="list">
                    @foreach ($campusNewsItems as $index => $item)
                        <a href="{{ $item['url'] }}" class="campus-news__item{{ $index === 0 ? ' is-active' : '' }}"
                            role="listitem" data-news-item data-news-type="{{ $item['type'] }}"
                            data-news-day="{{ $item['day'] }}" data-news-month="{{ $item['month'] }}"
                            data-news-label="{{ $item['label'] }}" data-news-title="{{ $item['title'] }}"
                            data-news-image="{{ asset($item['image']) }}" data-news-alt="{{ $item['alt'] }}"
                            data-news-url="{{ $item['url'] }}">
                            <span class="campus-news__date campus-news__date--list">
                                <span class="campus-news__date-day">{{ $item['day'] }}</span>
                                <span class="campus-news__date-month">{{ $item['month'] }}</span>
                            </span>
                            <span class="campus-news__item-title">{{ $item['title'] }}</span>
                            <span class="campus-news__item-arrow" aria-hidden="true">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="campus-news__footer">
                <a href="{{ url('/news-events') }}" class="campus-news__view-all">
                    View All News &amp; Events
                </a>
            </div>
        </div>
    </section>


    @php
        $researchCollagePrimary = file_exists(public_path('images/research/research-bg.webp'))
            ? 'images/research/research-bg.webp'
            : 'images/news/research.jpg';

        $researchCollageSecondary = file_exists(public_path('images/research/research-bg-1.webp'))
            ? 'images/research/research-bg-1.webp'
            : $researchCollagePrimary;
    @endphp

    @php
        $researchAttrs = [
            [
                'title' => '36+ Research & Centres of Excellence',
                'text' =>
                    'Interdisciplinary research centres across engineering, materials, aerospace, and computing foster an innovation culture where students and faculty collaborate on mission-ready solutions.',
                'url' => url('/research/centres'),
            ],
            [
                'title' => 'ISRO Collaboration',
                'text' =>
                    'Sona SPEED contributed to ISRO’s reusable launch vehicle landing experiment, reflecting hands-on innovation in autonomous aerospace systems and mission-critical engineering.',
                'url' => url('/research/isro-rlv-lex'),
            ],
            [
                'title' => 'Chandrayaan-3 & Advanced Materials',
                'text' =>
                    'Indigenous motor technology and breakthrough polymer research strengthen Sona’s footprint in national space programs and next-generation launch systems.',
                'url' => url('/research/chandrayaan-3'),
            ],
        ];
    @endphp

    <section class="section section--white research research--attrs" id="research" aria-labelledby="research-title">
        <div class="container research__layout">
            <div class="research__media" aria-hidden="true">
                <span class="research__dots"></span>
                <span class="research__ring"></span>
                <figure class="research__photo research__photo--primary">
                    <img src="{{ asset($researchCollagePrimary) }}" alt="Sona research laboratory"
                        width="640" height="800" loading="lazy" decoding="async">
                </figure>
                <figure class="research__photo research__photo--secondary">
                    <img src="{{ asset($researchCollageSecondary) }}" alt="Sona research collaboration"
                        width="520" height="650" loading="lazy" decoding="async">
                </figure>
            </div>

            <div class="research__copy">
                <p class="research__eyebrow">From Curiosity to Contribution</p>
                <h2 class="research__title" id="research-title">Explore Our Research</h2>

                <div class="research__attrs">
                    @foreach ($researchAttrs as $index => $item)
                        <article class="research__attr research__attr--{{ $index + 1 }}">
                            <span class="research__attr-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="3">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                            </span>
                            <div class="research__attr-body">
                                <h3 class="research__attr-title">
                                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                </h3>
                                <p class="research__attr-text">{{ $item['text'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white placement" id="placement" aria-labelledby="placement-title">
        <div class="container">
            <header class="section__header section__header--center placement__header">
                <div class="accent-line">
                    <h2 class="section__title" id="placement-title">Industry Collaboration &amp; Placement</h2>
                </div>
                <p class="section__lead placement__intro">
                    Sona&rsquo;s industry-academia interaction enthuses the spirit of innovation in the budding engineers!
                </p>
            </header>

            @php
                $placementStats = [
                    ['end' => 200, 'decimals' => 0, 'suffix' => '+', 'label' => 'Recruiters'],
                    ['end' => 37, 'decimals' => 0, 'suffix' => ' LPA', 'label' => 'Highest CTC (Intl.)'],
                    ['end' => 19.54, 'decimals' => 2, 'suffix' => ' LPA', 'label' => 'Highest CTC (Domestic)'],
                    ['end' => 98, 'decimals' => 0, 'suffix' => 'k/month', 'label' => 'Highest Stipend'],
                ];

                $placementRecruiters = [];
                $industryLogoDir = public_path('images/industry');

                if (is_dir($industryLogoDir)) {
                    $logoFiles = array_diff(scandir($industryLogoDir), ['.', '..']);
                    sort($logoFiles);

                    foreach ($logoFiles as $logoFile) {
                        $extension = strtolower(pathinfo($logoFile, PATHINFO_EXTENSION));

                        if (!in_array($extension, ['webp', 'png', 'jpg', 'jpeg', 'svg'], true)) {
                            continue;
                        }

                        $name = pathinfo($logoFile, PATHINFO_FILENAME);
                        $alt = ucwords(str_replace(['-', '_'], ' ', $name));

                        $placementRecruiters[] = [
                            'src' => 'images/industry/' . $logoFile,
                            'alt' => $alt,
                        ];
                    }
                }
            @endphp

            <div class="placement__stats" data-placement-stats role="list" aria-label="Placement highlights">
                @foreach ($placementStats as $stat)
                    <div class="placement__stat" role="listitem">
                        <p class="placement__stat-value" data-count-end="{{ $stat['end'] }}"
                            data-count-decimals="{{ $stat['decimals'] }}" data-count-suffix="{{ $stat['suffix'] }}">
                            0{{ $stat['suffix'] }}
                        </p>
                        <p class="placement__stat-label">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="placement__recruiters">
                <h3 class="placement__recruiters-title">Companies Recruiting Sona Graduates</h3>
                <div class="placement__logo-grid">
                    @foreach ($placementRecruiters as $recruiter)
                        <div class="placement__logo-item">
                            <img src="{{ asset($recruiter['src']) }}" alt="{{ $recruiter['alt'] }}" loading="lazy"
                                decoding="async">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @php
        $programsBannerBg =
            collect(['images/slide.webp'])->first(fn($path) => file_exists(public_path($path))) ??
            'images/hero/hero-bg.jpg';

        $programCards = [
            [
                'title' => 'Engineering & Technology',
                'text' => 'Future focused programs',
                'url' => url('/admissions/courses-offered'),
                'icon' => 'gear',
            ],
            [
                'title' => 'Management & Business',
                'text' => 'Leadership & Innovation',
                'url' => url('/admissions/courses-offered'),
                'icon' => 'briefcase',
            ],
            [
                'title' => 'Science & Humanities',
                'text' => 'Explore. Analyze. Excel.',
                'url' => url('/admissions/courses-offered'),
                'icon' => 'book',
            ],
            [
                'title' => 'Research & Innovation',
                'text' => 'Create. Discover. Transform.',
                'url' => url('/research/areas-of-research'),
                'icon' => 'flask',
            ],
        ];
    @endphp

    <section class="programs-banner" id="about" aria-labelledby="programs-banner-title"
        style="--programs-banner-bg: url('{{ asset($programsBannerBg) }}');">
        <div class="programs-banner__overlay" aria-hidden="true"></div>

        <div class="container programs-banner__inner">
            <div class="programs-banner__copy">
                <h2 class="programs-banner__title" id="programs-banner-title">
                    Empowering Engineers to Lead the Future
                </h2>
                <p class="programs-banner__lead">Choose. Learn. Innovate. Lead.</p>
                <a href="{{ url('/admissions/courses-offered') }}" class="programs-banner__cta">
                    Explore All Programs
                </a>
            </div>

            <div class="programs-banner__cards">
                @foreach ($programCards as $card)
                    <a href="{{ $card['url'] }}" class="programs-banner__card">
                        <span class="programs-banner__card-icon" aria-hidden="true">
                            @if ($card['icon'] === 'gear')
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">
                                    <circle cx="12" cy="12" r="3" />
                                    <path
                                        d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4" />
                                </svg>
                            @elseif ($card['icon'] === 'briefcase')
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">
                                    <rect x="3" y="7" width="18" height="13" rx="2" />
                                    <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 13h18" />
                                </svg>
                            @elseif ($card['icon'] === 'book')
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                </svg>
                            @else
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path d="M9 3h6v5a3 3 0 0 1-6 0V3z" />
                                    <path d="M10 13a4 4 0 0 0-4 4v2h12v-2a4 4 0 0 0-4-4h-4z" />
                                    <path d="M8 21h8" />
                                </svg>
                            @endif
                        </span>
                        <span class="programs-banner__card-copy">
                            <span class="programs-banner__card-title">{{ $card['title'] }}</span>
                            <span class="programs-banner__card-text">{{ $card['text'] }}</span>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--white life-sona" id="life" aria-labelledby="life-sona-title">
        @php
            $lifeCategories = [
                [
                    'icon' => '🎉',
                    'label' => 'Events & Celebrations',
                    'text' =>
                        'National and international conferences, symposiums, annual fests, and campus celebrations.',
                    'src' => 'images/news/featured.jpg',
                ],
                [
                    'icon' => '🎭',
                    'label' => 'Arts & Culture',
                    'text' => 'Music, dance, theatre, fine arts, and cultural festivals.',
                    'src' => 'images/news/alumni.jpg',
                ],
                [
                    'icon' => '📚',
                    'label' => 'Central Library',
                    'text' => 'Modern learning spaces, digital resources, journals, and research collections.',
                    'src' => 'images/slide-1.webp',
                ],
                [
                    'icon' => '🏆',
                    'label' => 'Sports & Fitness',
                    'text' => 'Indoor & outdoor sports, gymnasium, athletics, yoga, and wellness.',
                    'src' => 'images/news/campus-life.jpg',
                ],

                [
                    'icon' => '👨‍🎓',
                    'label' => 'Student Clubs & Communities',
                    'text' => 'Technical clubs, coding, photography, literature, robotics, and leadership clubs.',
                    'src' => 'images/slide.webp',
                ],
                [
                    'icon' => '🚀',
                    'label' => 'Placements & Career Development',
                    'text' => 'Career guidance, internships, placement training, and recruiter interactions.',
                    'src' => 'images/hero/leadership-card.jpg',
                ],
                [
                    'icon' => '🌍',
                    'label' => 'Global Opportunities',
                    'text' => 'International collaborations, MoUs, exchange programmes, and global exposure.',
                    'src' => 'images/slide-2.png',
                ],
                [
                    'icon' => '🏡',
                    'label' => 'Campus Living',
                    'text' => 'Hostels, cafeteria, medical centre, transport, green campus, and student amenities.',
                    'src' => 'images/hero/hero-bg.jpg',
                ],
                [
                    'icon' => '🤝',
                    'label' => 'Leadership & Social Responsibility',
                    'text' =>
                        'NSS, NCC, Youth Red Cross, community service, environmental initiatives, and leadership development.',
                    'src' => 'images/about/management/sona-tower.jpg',
                ],
            ];

            $lifeFallbacks = [
                'images/slide.webp',
                'images/slide-1.webp',
                'images/slide-2.png',
                'images/slide-3.png',
                'images/news/featured.jpg',
                'images/news/campus-life.jpg',
                'images/news/alumni.jpg',
                'images/news/research.jpg',
                'images/hero/hero-bg.jpg',
                'images/hero/leadership-card.jpg',
            ];

            $lifeSlides = [];
            foreach ($lifeCategories as $index => $category) {
                $src = $category['src'];
                if (!file_exists(public_path($src))) {
                    $src = $lifeFallbacks[$index % count($lifeFallbacks)];
                }

                $lifeSlides[] = [
                    'icon' => $category['icon'],
                    'label' => $category['label'],
                    'text' => $category['text'],
                    'src' => $src,
                ];
            }
        @endphp

        <div class="container life-sona__top">
            <div class="life-sona__intro">
                <p class="life-sona__eyebrow">Empower Your Global Future!</p>
                <h2 class="life-sona__title" id="life-sona-title">
                    Life @ <span>Sona</span>
                </h2>
            </div>

            <p class="life-sona__text">
                From celebrations and culture to research, placements, and campus living —
                discover every experience that shapes life at Sona.
            </p>

            <div class="life-sona__cta-wrap">
                <a href="{{ url('/about/photo-gallery') }}" class="life-sona__cta">
                    View Campus Life
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>

        <div class="life-sona__strip" data-life-campus-carousel>
            <div class="life-sona__strip-viewport">
                <div class="life-sona__strip-track" data-life-campus-track>
                    @foreach ($lifeSlides as $slide)
                        <article class="life-sona__card life-sona__campus-item">
                            <img src="{{ asset($slide['src']) }}" alt="{{ $slide['label'] }}" loading="lazy"
                                decoding="async">
                            <h3 class="life-sona__card-label">{{ $slide['label'] }}</h3>
                        </article>
                    @endforeach
                </div>
            </div>

            <button type="button" class="life-sona__strip-next life-sona__campus-arrow--next"
                aria-label="Next campus life photos">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5" aria-hidden="true">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </button>
        </div>
    </section>

    <section class="section section--white rankings" id="rankings" aria-labelledby="rankings-title">
        <div class="container">
            @php
                $rankingItems = [
                    [
                        'src' => 'images/rankings/naac.webp',
                        'alt' => 'NAAC A++ Accreditation',
                        'label' => 'NAAC A++ Accreditation',
                    ],
                    [
                        'src' => 'images/rankings/nba.webp',
                        'alt' => 'NBA Tier-1 Accreditation',
                        'label' => 'NBA Tier-1 Accreditation',
                    ],
                    [
                        'src' => 'images/rankings/nirf.webp',
                        'alt' => 'NIRF Top National Ranking',
                        'label' => 'NIRF Top National Ranking',
                    ],
                    [
                        'src' => 'images/rankings/ariia.webp',
                        'alt' => 'ARIIA #1 Innovation Rank',
                        'label' => 'ARIIA #1 Innovation Rank',
                    ],
                    [
                        'src' => 'images/rankings/aicte.webp',
                        'alt' => 'AICTE Industry Linked',
                        'label' => 'AICTE Industry Linked',
                    ],
                ];
            @endphp

            <header class="section__header section__header--center">
                <div class="accent-line">
                    <h2 class="section__title" id="rankings-title">Rankings &amp; Accreditations</h2>
                </div>
                <p class="section__lead rankings__lead">
                    Sona College of Technology is accredited by national agencies and recognised for maintaining
                    quality standards in technical education, academic excellence, and institutional development.
                </p>
            </header>

            <div class="rankings__cards">
                @foreach ($rankingItems as $item)
                    <article class="rankings__card">
                        <div class="rankings__card-logo">
                            <img src="{{ asset($item['src']) }}" alt="{{ $item['alt'] }}" loading="lazy"
                                decoding="async">
                        </div>
                        <p class="rankings__card-label">
                            <span class="rankings__check" aria-hidden="true">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="3">
                                    <path d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span>{{ $item['label'] }}</span>
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--white alumni" id="alumni" aria-labelledby="alumni-title">
        <div class="container">
            <div class="alumni__header">
                <div class="alumni__heading">
                    <p class="alumni__eyebrow">Success Stories</p>
                    <h2 class="alumni__title" id="alumni-title">Notable Alumni</h2>
                    <p class="alumni__intro">
                        Sona graduates lead innovation across technology, manufacturing, entrepreneurship, and global
                        enterprises.
                    </p>
                </div>
                <a href="{{ url('/about') }}" class="alumni__view-all">
                    View All Alumni
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            @php
                $alumniDir = public_path('images/alumni');
                $notableAlumni = [];

                if (is_dir($alumniDir)) {
                    $alumniFiles = array_diff(scandir($alumniDir), ['.', '..']);
                    sort($alumniFiles);

                    foreach ($alumniFiles as $file) {
                        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                        if (!in_array($extension, ['webp', 'png', 'jpg', 'jpeg'], true)) {
                            continue;
                        }

                        $name = ucwords(str_replace(['-', '_'], ' ', pathinfo($file, PATHINFO_FILENAME)));
                        $notableAlumni[] = [
                            'name' => $name,
                            'batch' => 'Sona College of Technology',
                            'role' => 'Industry Leader',
                            'company' => 'Leading Organization',
                            'image' => 'images/alumni/' . $file,
                        ];
                    }
                }

                if (count($notableAlumni) < 6) {
                    $alumniFallbacks = [
                        [
                            'name' => 'Arun Kumar S.',
                            'batch' => 'B.E. CSE, Sona College of Technology — 2012',
                            'role' => 'Senior Engineering Manager',
                            'company' => 'Global Technology Firm',
                            'image' => 'images/news/alumni.jpg',
                        ],
                        [
                            'name' => 'Priya Venkatesh',
                            'batch' => 'M.Tech, Sona College of Technology — 2015',
                            'role' => 'Product Development Lead',
                            'company' => 'Automotive Innovation',
                            'image' => 'images/news/featured.jpg',
                        ],
                        [
                            'name' => 'Ramesh Babu M.',
                            'batch' => 'B.E. Mechanical, Sona College of Technology — 2010',
                            'role' => 'Plant Operations Head',
                            'company' => 'Manufacturing Sector',
                            'image' => 'images/news/campus-life.jpg',
                        ],
                        [
                            'name' => 'Divya Shankar',
                            'batch' => 'MBA, Sona College of Technology — 2018',
                            'role' => 'Entrepreneur & Founder',
                            'company' => 'Startup Ecosystem',
                            'image' => 'images/hero/leadership-card.jpg',
                        ],
                        [
                            'name' => 'Karthik Rajan',
                            'batch' => 'B.E. ECE, Sona College of Technology — 2014',
                            'role' => 'Solutions Architect',
                            'company' => 'Enterprise Software',
                            'image' => 'images/news/research.jpg',
                        ],
                        [
                            'name' => 'Meena Lakshmi',
                            'batch' => 'MCA, Sona College of Technology — 2016',
                            'role' => 'Technology Consultant',
                            'company' => 'International IT Services',
                            'image' => 'images/news/alumni.jpg',
                        ],
                    ];

                    foreach ($alumniFallbacks as $alumnus) {
                        if (count($notableAlumni) >= 8) {
                            break;
                        }

                        $notableAlumni[] = $alumnus;
                    }
                }

                $notableAlumni = array_slice($notableAlumni, 0, 8);
            @endphp

            <div class="alumni__carousel" data-alumni-carousel>
                <button type="button" class="alumni__arrow alumni__arrow--prev" aria-label="Previous alumni">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" aria-hidden="true">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>
                <button type="button" class="alumni__arrow alumni__arrow--next" aria-label="Next alumni">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" aria-hidden="true">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>

                <div class="alumni__viewport">
                    <div class="alumni__track" data-alumni-track>
                        @foreach ($notableAlumni as $alumnus)
                            <article class="alumni__card">
                                <div class="alumni__card-inner">
                                    <div class="alumni__photo">
                                        <img src="{{ asset($alumnus['image']) }}" alt="{{ $alumnus['name'] }}"
                                            loading="lazy" decoding="async">
                                    </div>
                                    <div class="alumni__body">
                                        <h3 class="alumni__name">{{ $alumnus['name'] }}</h3>
                                        <p class="alumni__role">{{ $alumnus['role'] }}</p>
                                        @if (!empty($alumnus['company']))
                                            <p class="alumni__company">{{ $alumnus['company'] }}</p>
                                        @endif
                                        <p class="alumni__batch">{{ $alumnus['batch'] }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var heroBackground = document.querySelector('.hero__background');
            var heroVideo = document.querySelector('.hero__video');

            if (heroBackground && heroVideo) {
                var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                var playAttempts = 0;

                function enableVideo() {
                    heroBackground.classList.add('hero__background--video');
                    heroBackground.classList.remove('hero__background--fallback');
                }

                function disableVideo() {
                    heroBackground.classList.remove('hero__background--video');
                    heroBackground.classList.add('hero__background--fallback');
                }

                function tryPlayHeroVideo() {
                    if (prefersReducedMotion || playAttempts > 4) {
                        return;
                    }

                    playAttempts += 1;
                    heroVideo.muted = true;
                    heroVideo.defaultMuted = true;

                    var playPromise = heroVideo.play();
                    if (playPromise !== undefined) {
                        playPromise.then(enableVideo).catch(function() {
                            window.setTimeout(tryPlayHeroVideo, 400);
                        });
                    }
                }

                if (prefersReducedMotion) {
                    disableVideo();
                } else {
                    heroVideo.addEventListener('playing', enableVideo);
                    heroVideo.addEventListener('loadeddata', tryPlayHeroVideo);
                    heroVideo.addEventListener('canplay', tryPlayHeroVideo);
                    heroVideo.addEventListener('error', disableVideo);
                    tryPlayHeroVideo();
                }
            }

            var heroCardCarousel = document.querySelector('[data-hero-card-carousel]');
            if (heroCardCarousel) {
                var heroSlides = Array.prototype.slice.call(
                    heroCardCarousel.querySelectorAll('.hero__card-slide'),
                );
                var heroDots = Array.prototype.slice.call(
                    heroCardCarousel.querySelectorAll('.hero__card-dot'),
                );
                var heroPrevBtn = heroCardCarousel.querySelector('.hero__card-arrow--prev');
                var heroNextBtn = heroCardCarousel.querySelector('.hero__card-arrow--next');
                var heroCurrent = 0;
                var heroTimer = null;
                var heroDelay = 6000;
                var heroPaused = false;
                var heroReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                function heroGoTo(index) {
                    if (!heroSlides.length) return;

                    heroCurrent = (index + heroSlides.length) % heroSlides.length;

                    heroSlides.forEach(function(slide, i) {
                        var isActive = i === heroCurrent;
                        slide.classList.toggle('is-active', isActive);
                        slide.hidden = !isActive;
                    });

                    heroDots.forEach(function(dot, i) {
                        var isActive = i === heroCurrent;
                        dot.classList.toggle('is-active', isActive);
                        dot.setAttribute('aria-selected', isActive ? 'true' : 'false');
                    });
                }

                function heroNext() {
                    heroGoTo(heroCurrent + 1);
                }

                function heroPrev() {
                    heroGoTo(heroCurrent - 1);
                }

                function heroStopAutoplay() {
                    if (heroTimer) {
                        window.clearTimeout(heroTimer);
                        heroTimer = null;
                    }
                }

                function heroScheduleAutoplay() {
                    heroStopAutoplay();
                    if (heroPaused || heroReducedMotion || heroSlides.length < 2) return;

                    heroTimer = window.setTimeout(function() {
                        heroNext();
                        heroScheduleAutoplay();
                    }, heroDelay);
                }

                if (heroPrevBtn) {
                    heroPrevBtn.addEventListener('click', function() {
                        heroPrev();
                        heroScheduleAutoplay();
                    });
                }

                if (heroNextBtn) {
                    heroNextBtn.addEventListener('click', function() {
                        heroNext();
                        heroScheduleAutoplay();
                    });
                }

                heroDots.forEach(function(dot, index) {
                    dot.addEventListener('click', function() {
                        heroGoTo(index);
                        heroScheduleAutoplay();
                    });
                });

                heroCardCarousel.addEventListener('mouseenter', function() {
                    heroPaused = true;
                    heroStopAutoplay();
                });

                heroCardCarousel.addEventListener('mouseleave', function() {
                    heroPaused = false;
                    heroScheduleAutoplay();
                });

                heroCardCarousel.addEventListener('focusin', function() {
                    heroPaused = true;
                    heroStopAutoplay();
                });

                heroCardCarousel.addEventListener('focusout', function(event) {
                    if (!heroCardCarousel.contains(event.relatedTarget)) {
                        heroPaused = false;
                        heroScheduleAutoplay();
                    }
                });

                document.addEventListener('visibilitychange', function() {
                    if (document.hidden) {
                        heroStopAutoplay();
                    } else if (!heroPaused) {
                        heroScheduleAutoplay();
                    }
                });

                heroGoTo(0);
                heroScheduleAutoplay();
            }

            var panel = document.querySelector('[data-campus-news-panel]');
            if (panel) {
                var featured = panel.querySelector('[data-news-featured]');
                var featuredImage = panel.querySelector('[data-news-featured-image]');
                var featuredDay = panel.querySelector('[data-news-featured-day]');
                var featuredMonth = panel.querySelector('[data-news-featured-month]');
                var featuredLabel = panel.querySelector('[data-news-featured-label]');
                var featuredTitle = panel.querySelector('[data-news-featured-title]');
                var featuredLink = panel.querySelector('[data-news-featured-link]');
                var items = Array.prototype.slice.call(panel.querySelectorAll('[data-news-item]'));
                var filterBtns = Array.prototype.slice.call(document.querySelectorAll('[data-news-filter]'));
                var activeFilter = 'all';

                function setFeatured(item) {
                    if (!item || !featured) return;

                    items.forEach(function(el) {
                        el.classList.toggle('is-active', el === item);
                    });

                    if (featuredImage) {
                        featuredImage.src = item.dataset.newsImage || featuredImage.src;
                        featuredImage.alt = item.dataset.newsAlt || '';
                    }
                    if (featuredDay) featuredDay.textContent = item.dataset.newsDay || '';
                    if (featuredMonth) featuredMonth.textContent = item.dataset.newsMonth || '';
                    if (featuredLabel) featuredLabel.textContent = item.dataset.newsLabel || '';
                    if (featuredTitle) {
                        featuredTitle.textContent = item.dataset.newsTitle || '';
                        featuredTitle.href = item.dataset.newsUrl || '#';
                    }
                    if (featuredLink) featuredLink.href = item.dataset.newsUrl || '#';
                    featured.dataset.newsType = item.dataset.newsType || '';
                    var mediaLink = featured.querySelector('.campus-news__featured-media');
                    if (mediaLink) mediaLink.href = item.dataset.newsUrl || '#';
                }

                function applyFilter(filter) {
                    activeFilter = filter;
                    var firstVisible = null;

                    items.forEach(function(item) {
                        var match = filter === 'all' || item.dataset.newsType === filter;
                        item.classList.toggle('is-filtered-out', !match);
                        if (match && !firstVisible) firstVisible = item;
                    });

                    if (firstVisible) {
                        setFeatured(firstVisible);
                    }
                }

                filterBtns.forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        filterBtns.forEach(function(other) {
                            other.classList.toggle('is-active', other === btn);
                        });
                        applyFilter(btn.dataset.newsFilter || 'all');
                    });
                });

                items.forEach(function(item) {
                    item.addEventListener('click', function(event) {
                        event.preventDefault();
                        if (item.classList.contains('is-filtered-out')) return;
                        setFeatured(item);
                    });
                });
            }

        });

        document.addEventListener('DOMContentLoaded', function() {
            var carousel = document.querySelector('[data-life-campus-carousel]');
            if (!carousel) return;

            var track = carousel.querySelector('[data-life-campus-track]');
            var viewport = carousel.querySelector('.life-sona__strip-viewport, .life-sona__campus-viewport');
            var nextBtn = carousel.querySelector('.life-sona__campus-arrow--next');
            var prevBtn = carousel.querySelector('.life-sona__campus-arrow--prev');
            var current = 0;
            var timer = null;
            var delay = 3500;
            var isPaused = false;
            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            if (!track || !viewport) return;

            // Clone slides so autoplay always has room to move
            var originalItems = Array.prototype.slice.call(track.querySelectorAll('.life-sona__campus-item'));
            if (originalItems.length < 2) return;

            if (originalItems.length < 8) {
                originalItems.forEach(function(item) {
                    var clone = item.cloneNode(true);
                    clone.setAttribute('aria-hidden', 'true');
                    track.appendChild(clone);
                });
            }

            var items = Array.prototype.slice.call(track.querySelectorAll('.life-sona__campus-item'));

            function getPerView() {
                if (window.innerWidth <= 640) return 1;
                if (window.innerWidth <= 960) return 2;
                if (window.innerWidth <= 1200) return 3;
                return 4;
            }

            function getMaxIndex() {
                return Math.max(0, items.length - getPerView());
            }

            function update(animate) {
                var perView = getPerView();
                var maxIndex = getMaxIndex();

                if (current > maxIndex) {
                    current = 0;
                }

                carousel.style.setProperty('--life-campus-per-view', String(perView));

                if (animate === false) {
                    track.style.transition = 'none';
                } else {
                    track.style.transition = '';
                }

                var slideWidth = viewport.offsetWidth / perView;
                track.style.transform = 'translateX(-' + (current * slideWidth) + 'px)';

                if (animate === false) {
                    // Force reflow then restore transition
                    void track.offsetWidth;
                    track.style.transition = '';
                }

                var canSlide = maxIndex > 0;
                if (prevBtn) prevBtn.disabled = !canSlide;
                if (nextBtn) nextBtn.disabled = !canSlide;
            }

            function next() {
                var maxIndex = getMaxIndex();
                if (maxIndex === 0) return;

                if (current >= maxIndex) {
                    current = 0;
                } else {
                    current += 1;
                }
                update();
            }

            function prev() {
                var maxIndex = getMaxIndex();
                if (maxIndex === 0) return;

                if (current <= 0) {
                    current = maxIndex;
                } else {
                    current -= 1;
                }
                update();
            }

            function stopAutoplay() {
                if (timer) {
                    window.clearInterval(timer);
                    timer = null;
                }
            }

            function startAutoplay() {
                stopAutoplay();
                if (isPaused || reduceMotion || getMaxIndex() === 0) return;

                timer = window.setInterval(next, delay);
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    prev();
                    startAutoplay();
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    next();
                    startAutoplay();
                });
            }

            carousel.addEventListener('mouseenter', function() {
                isPaused = true;
                stopAutoplay();
            });

            carousel.addEventListener('mouseleave', function() {
                isPaused = false;
                startAutoplay();
            });

            carousel.addEventListener('focusin', function() {
                isPaused = true;
                stopAutoplay();
            });

            carousel.addEventListener('focusout', function() {
                isPaused = false;
                startAutoplay();
            });

            window.addEventListener('resize', function() {
                update(false);
                startAutoplay();
            });

            document.addEventListener('visibilitychange', function() {
                if (document.hidden) {
                    stopAutoplay();
                } else if (!isPaused) {
                    startAutoplay();
                }
            });

            update(false);
            startAutoplay();
        });

        document.addEventListener('DOMContentLoaded', function() {
            var carousel = document.querySelector('[data-alumni-carousel]');
            if (!carousel) return;

            var track = carousel.querySelector('[data-alumni-track]');
            var items = Array.prototype.slice.call(carousel.querySelectorAll('.alumni__card'));
            var prevBtn = carousel.querySelector('.alumni__arrow--prev');
            var nextBtn = carousel.querySelector('.alumni__arrow--next');
            var viewport = carousel.querySelector('.alumni__viewport');
            var current = 0;
            var timer = null;
            var delay = 5000;
            var isPaused = false;

            if (!track || items.length < 2) return;

            function getPerView() {
                var count = items.length;
                var perView;

                if (window.innerWidth <= 720) {
                    perView = 1;
                } else {
                    perView = 2;
                }

                perView = Math.min(perView, count);

                if (count >= 2 && perView >= count) {
                    perView = count - 1;
                }

                return Math.max(1, perView);
            }

            function getMaxIndex() {
                return Math.max(0, items.length - getPerView());
            }

            function update() {
                var perView = getPerView();
                var maxIndex = getMaxIndex();

                if (current > maxIndex) {
                    current = 0;
                }

                carousel.style.setProperty('--alumni-per-view', String(perView));

                var slideWidth = viewport.offsetWidth / perView;
                track.style.transform = 'translateX(-' + (current * slideWidth) + 'px)';

                var canSlide = maxIndex > 0;

                if (prevBtn) {
                    prevBtn.disabled = !canSlide;
                }

                if (nextBtn) {
                    nextBtn.disabled = !canSlide;
                }
            }

            function next() {
                var maxIndex = getMaxIndex();
                if (maxIndex === 0) {
                    return;
                }

                current = current >= maxIndex ? 0 : current + 1;
                update();
            }

            function prev() {
                var maxIndex = getMaxIndex();
                if (maxIndex === 0) {
                    return;
                }

                current = current <= 0 ? maxIndex : current - 1;
                update();
            }

            function scheduleAutoplay() {
                if (timer) {
                    window.clearTimeout(timer);
                    timer = null;
                }

                if (isPaused || items.length < 2 || getMaxIndex() === 0) {
                    return;
                }

                timer = window.setTimeout(function() {
                    next();
                    scheduleAutoplay();
                }, delay);
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    prev();
                    scheduleAutoplay();
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    next();
                    scheduleAutoplay();
                });
            }

            carousel.addEventListener('mouseenter', function() {
                isPaused = true;
                if (timer) {
                    window.clearTimeout(timer);
                    timer = null;
                }
            });

            carousel.addEventListener('mouseleave', function() {
                isPaused = false;
                scheduleAutoplay();
            });

            window.addEventListener('resize', function() {
                update();
                scheduleAutoplay();
            });

            document.addEventListener('visibilitychange', function() {
                if (document.hidden) {
                    if (timer) {
                        window.clearTimeout(timer);
                        timer = null;
                    }
                } else if (!isPaused) {
                    scheduleAutoplay();
                }
            });

            update();
            scheduleAutoplay();
        });

        document.addEventListener('DOMContentLoaded', function() {
            var statsBlock = document.querySelector('[data-placement-stats]');
            if (!statsBlock) return;

            var counters = Array.prototype.slice.call(statsBlock.querySelectorAll('[data-count-end]'));
            if (!counters.length) return;

            var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var duration = 1800;

            function formatValue(value, decimals) {
                if (decimals > 0) {
                    return value.toFixed(decimals);
                }

                return String(Math.round(value));
            }

            function setCounterValue(counter, value) {
                var decimals = parseInt(counter.dataset.countDecimals || '0', 10);
                var suffix = counter.dataset.countSuffix || '';
                var prefix = counter.dataset.countPrefix || '';
                counter.textContent = prefix + formatValue(value, decimals) + suffix;
            }

            function resetCounters() {
                counters.forEach(function(counter) {
                    setCounterValue(counter, 0);
                    counter.removeAttribute('data-count-animated');
                });
            }

            function animateCounter(counter) {
                var end = parseFloat(counter.dataset.countEnd);
                if (Number.isNaN(end)) return;

                var decimals = parseInt(counter.dataset.countDecimals || '0', 10);
                var startTime = null;

                if (prefersReducedMotion) {
                    setCounterValue(counter, end);
                    counter.setAttribute('data-count-animated', 'true');
                    return;
                }

                function step(timestamp) {
                    if (!startTime) {
                        startTime = timestamp;
                    }

                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    setCounterValue(counter, end * eased);

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        counter.setAttribute('data-count-animated', 'true');
                    }
                }

                window.requestAnimationFrame(step);
            }

            function animateCounters() {
                counters.forEach(function(counter) {
                    if (counter.getAttribute('data-count-animated') === 'true') {
                        return;
                    }

                    animateCounter(counter);
                });
            }

            resetCounters();

            if (!('IntersectionObserver' in window)) {
                animateCounters();
                return;
            }

            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounters();
                    } else {
                        resetCounters();
                    }
                });
            }, {
                threshold: 0.35,
            });

            observer.observe(statsBlock);
        });
    </script>
@endpush
