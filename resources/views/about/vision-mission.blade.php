@extends('layouts.app')

@section('title', 'Vision and Mission | Sona College of Technology')

@section('content')
    <section class="page-banner" aria-label="Page title">
        <div class="page-banner__media" style="background-image: url('{{ asset('images/slide-1.webp') }}');" aria-hidden="true"></div>
        <div class="page-banner__overlay" aria-hidden="true"></div>
        <div class="container page-banner__inner">
            <nav class="page-banner__breadcrumb" aria-label="Breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span aria-hidden="true">/</span>
                <span>About Us</span>
                <span aria-hidden="true">/</span>
                <span aria-current="page">Vision and Mission</span>
            </nav>
            <h1 class="page-banner__title">Vision and Mission</h1>
        </div>
    </section>

    <section class="page-content section section--muted">
        <div class="container">
            <div class="page-shell">
                @include('partials.about-sidebar')

                <article class="page-main">
                    <div class="page-main__body">
                        <section class="vm-block">
                            <h2 class="vm-block__title">Vision</h2>
                            <p class="section__text">
                                To become an institute of great repute, in the fields of Science, Engineering,
                                Technology and Management studies, by offering a full range of programmes of global
                                standard to foster research, and to transform the students into globally competent
                                personalities.
                            </p>
                        </section>

                        <section class="vm-block">
                            <h2 class="vm-block__title">Mission</h2>
                            <p class="section__text">
                                Sona College of Technology is a private engineering institution that offers engineering
                                degree programmes at under graduate level and post graduate level, computer applications
                                and management studies at post graduate level and doctoral programmes in the areas of
                                engineering and science and humanities.
                            </p>
                            <p class="section__text">
                                The college aims to provide a full-fledged education, to produce graduates with
                                competency to excel in the organizations they serve and to cater to the needs of the
                                community as a whole.
                            </p>
                            <p class="section__text section__text--emphasis">
                                Our mission for next three years will be
                            </p>
                            <ul class="vm-list">
                                <li>To offer Graduate, Post-graduate, Doctoral and other value-added programmes beneficial for the students</li>
                                <li>To establish state-of-the-art facilities and resources required to achieve excellence in teaching-learning, and supplementary processes</li>
                                <li>To provide Faculty and Staff with the required qualification and competence and to provide opportunity to upgrade their knowledge and skills</li>
                                <li>To motivate the students to pursue higher education, appear for competitive exams, and other value added programmes for their holistic development</li>
                                <li>To provide opportunities to the students and bring out their inherent talent</li>
                                <li>To establish Centres of excellence in the emerging areas of research</li>
                                <li>To have regular interaction with the Industries in the area of R &amp; D, and offer consultancy, training and testing services</li>
                                <li>To offer Continuing education, and Non-formal vocational education programmes that are beneficial to the society</li>
                                <li>To inculcate entrepreneurial attitude in the students and to provide a platform to start their own startups in the campus.</li>
                            </ul>
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
