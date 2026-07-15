@extends('layouts.app')

@section('title', 'Quality Policy | Sona College of Technology')

@section('content')
    @php
        $initiatives = [
            'Contributing to the academic standing and overall knowledge development of the students',
            'Maintaining state-of-the-art infrastructure and congenial learning environment',
            'Enhancing the competence of the faculty to a very high level and to make them adopt all modern and innovative methods in teaching-learning process',
            'Inculcating moral and ethical values among the students and staff',
            'Collaborating with industry, other institutions and organizations for mutual benefit',
            'Promoting Research and Development programme for the growth of the economy',
            'Disseminating technical knowledge in the region through continuing education programmes',
            'Ensuring continual improvement of Quality Management System',
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
                <span aria-current="page">Quality Policy</span>
            </nav>
            <h1 class="page-banner__title">Quality Policy</h1>
        </div>
    </section>

    <section class="page-content section section--muted">
        <div class="container">
            <div class="page-shell">
                @include('partials.about-sidebar')

                <article class="page-main">
                    <div class="page-main__body">
                        <section class="vm-block">
                            <h2 class="vm-block__title">Quality Policy</h2>
                            <p class="section__text">
                                SONA COLLEGE OF TECHNOLOGY is committed to provide quality education to the students
                                enabling them to excel in the fields of Science, Engineering, Technology and Management
                                to cater to the changing and challenging needs of society and industry through the
                                following initiatives:
                            </p>
                            <ul class="vm-list">
                                @foreach ($initiatives as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
