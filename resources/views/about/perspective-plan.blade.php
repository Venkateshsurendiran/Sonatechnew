@extends('layouts.app')

@section('title', 'Perspective Plan | Sona College of Technology')

@section('content')
    @php
        $plans = [
            'Improving Under Graduate (UG) and Post Graduate (PG) Education by incorporating Modern Teaching Learning methods.',
            'Increased initiative to be taken to get funds from the Department of Science and Technology, UGC and other funding agencies.',
            'Focus on developmental aspects such as student intake, curriculum improvement, infrastructure enhancement, accreditation and twinning programme with foreign university.',
            'Improving Research and Development, Industry Interaction, Internal Revenue Generation, Collaboration with Foreign Universities, Alumni Interaction, Entrepreneurship, and Social Responsibility Initiatives.',
            'Envisioning the establishment of a deemed university and aiming to offer world-class education and research through reputed international collaborations.',
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
                <span aria-current="page">Perspective Plan</span>
            </nav>
            <h1 class="page-banner__title">Perspective Plan</h1>
        </div>
    </section>

    <section class="page-content section section--muted">
        <div class="container">
            <div class="page-shell">
                @include('partials.about-sidebar')

                <article class="page-main">
                    <div class="page-main__body">
                        <section class="vm-block">
                            <h2 class="vm-block__title">Perspective Plan</h2>
                            <ul class="vm-list">
                                @foreach ($plans as $plan)
                                    <li>{{ $plan }}</li>
                                @endforeach
                            </ul>
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
