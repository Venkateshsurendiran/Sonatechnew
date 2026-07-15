@extends('layouts.app')

@section('title', 'Core Values | Sona College of Technology')

@section('content')
    @php
        $coreValues = [
            [
                'label' => 'Industry interaction',
                'icon' => '<path d="M3 21h18"/><path d="M5 21V8l7-5 7 5v13"/><path d="M9 21v-6h6v6"/>',
            ],
            [
                'label' => 'Green campus',
                'icon' => '<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>',
            ],
            [
                'label' => 'Community development',
                'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
            ],
            [
                'label' => 'Global vision',
                'icon' => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
            ],
            [
                'label' => 'Student centric learning environment',
                'icon' => '<path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>',
            ],
            [
                'label' => 'Transparency',
                'icon' => '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>',
            ],
            [
                'label' => 'Synergy through team work',
                'icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
            ],
            [
                'label' => 'Commitment to excellence',
                'icon' => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
            ],
        ];
    @endphp

    <section class="page-banner" aria-label="Page title">
        <div class="page-banner__media" style="background-image: url('{{ asset('images/slide-1.webp') }}');" aria-hidden="true"></div>
        <div class="page-banner__overlay" aria-hidden="true"></div>
        <div class="container page-banner__inner">
            <nav class="page-banner__breadcrumb" aria-label="Breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span aria-hidden="true">/</span>
                <span>About Us</span>
                <span aria-hidden="true">/</span>
                <span aria-current="page">Core Values</span>
            </nav>
            <h1 class="page-banner__title">Core Values</h1>
        </div>
    </section>

    <section class="page-content section section--muted">
        <div class="container">
            <div class="page-shell">
                @include('partials.about-sidebar')

                <article class="page-main">
                    <div class="page-main__body">
                        <section class="vm-block">
                            <h2 class="vm-block__title">Core Values</h2>

                            <div class="core-values-grid" role="list">
                                @foreach ($coreValues as $item)
                                    <div class="core-value" role="listitem">
                                        <span class="core-value__icon" aria-hidden="true">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                {!! $item['icon'] !!}
                                            </svg>
                                        </span>
                                        <span class="core-value__label">{{ $item['label'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
