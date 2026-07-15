@extends('layouts.app')

@section('title', 'Management Profile | Sona College of Technology')

@section('content')
    @php
        $profiles = [
            [
                'name' => 'Shri. Karumuttu Thiagarajar',
                'role' => null,
                'image' => 'images/about/management/karumuttu-thiagarajar.jpg',
                'text' => 'The doyen of textile industries in 1920s, Karumuttu Thiagarajar Chettiar, envisioned an educated Indian society which, with all its traditional values and wealth, can lead and serve the globe to attain prosperity. To serve this purpose, he established Thiagarajar Engineering College in Madurai, and Thiagarajar Polytechnic College, Salem, and sowed the seeds of quality technical education in India. He was a proud Indian first and fought for Her freedom along with other great freedom fighters of this nation.',
            ],
            [
                'name' => 'Shri. M. S. Chockalingam',
                'role' => 'Founder — Sona College',
                'image' => 'images/about/management/ms-chockalingam.jpg',
                'text' => 'Sri M. S. Chockalingam rightly called the “Textile Wizard,” founded Sona College of Technology in 1997. He passionately nurtured Thiagarajar Polytechnic College to create man power equipped with technical skills. His friends and admirers fondly called him “Sona,” and true to his name, he led an exemplary life devoted to education and had a conviction that professional education was the sure-fire means to industrial and economic growth of the nation.',
            ],
            [
                'name' => 'Mr. C. Valliappa',
                'role' => 'Chairman',
                'image' => 'images/about/management/c-valliappa.jpg',
                'extra_image' => 'images/about/management/sona-tower.jpg',
                'extra_image_alt' => 'Sona Tower',
                'text' => 'Mr. Valliappa is a Chairman par excellence having been given the Herculean task of maintaining the world class organizations and institutions. He is a wizard when it comes to management and improvisation and the astronomical growth of the Sona Group is a witness to it. Under his able guidance and erudition, The Sona Group has seen a business school, an arts and science college, a public school of international standard and a medical college of naturopathy and yoga added to its name. He is a visionary by all means and is fitting to be called the Father of IT in India. He was the first to house an IT firm, the Texas Instrument, at the Sona Tower. He is a multi faceted personality bringing his magical touch to areas such as textile, education and construction. He has held prestigious positions in Chamber of Commerce, FKCCI, BCIC, KTMA, to mention a few.',
            ],
            [
                'name' => 'Mr. Chocko Valliappa',
                'role' => 'Vice Chairman',
                'image' => 'images/about/management/chocko-valliappa.jpg',
                'text' => 'Born into a family of entrepreneurs, Mr. Chocko Valliappa’s path has led him to be the stalwart in the business front he is today. A compendium of knowledge and resource, he is an integral part of The Sona Group’s success story. Administration, international business and operations, corporate affairs, strategic planning and marketing, and planning of corporate policies are his forte. Mr. Chocko possesses an in-depth knowledge of European, Asian, and Pan-American markets and a comprehensive expertise in forging alliances and joint ventures of strategic importance. All these and more make Mr. Chocko a dynamic leader with great business acumen that is second to none.',
            ],
            [
                'name' => 'Mr. Thyagu Valliappa',
                'role' => 'Vice Chairman',
                'image' => 'images/about/management/thyagu-valliappa.jpg',
                'text' => 'Mr. Thyagu Valliappa is a young and energetic entrepreneur with an experience and expertise beyond his age. His success is stretched across textile, management, IT, education and logistics. He specialises in idea creation and system management where he brings his unique “grassroots to up” approach that always delivers. He has multiple accolades to his name of which the patents for the World’s first stretchable silk and mosquito repellent garment stand testimony. He masters in innovation and that is reflected in all areas of his work. He has to his credit the success of brands such as Play Factory, Sona Valliappa Mill, Sona Miller, Sona Star and the new Sona Medical College of Naturopathy and Yoga. He has turned The Sona Group to a global brand with all the heights The Sona Group has scaled to show for.',
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
                <span aria-current="page">Management Profile</span>
            </nav>
            <h1 class="page-banner__title">Management Profile</h1>
        </div>
    </section>

    <section class="page-content section section--muted">
        <div class="container">
            <div class="page-shell">
                @include('partials.about-sidebar')

                <article class="page-main">
                    <div class="page-main__body">
                        <section class="vm-block">
                            <h2 class="vm-block__title">Management Profile</h2>

                            <div class="mgmt-profiles">
                                @foreach ($profiles as $index => $profile)
                                    <article class="mgmt-profile{{ $index % 2 === 1 ? ' mgmt-profile--reverse' : '' }}">
                                        <figure class="mgmt-profile__media">
                                            @if (file_exists(public_path($profile['image'])))
                                                <img src="{{ asset($profile['image']) }}" alt="{{ $profile['name'] }}"
                                                    loading="lazy" decoding="async">
                                            @endif
                                            @if (!empty($profile['extra_image']) && file_exists(public_path($profile['extra_image'])))
                                                <img src="{{ asset($profile['extra_image']) }}"
                                                    alt="{{ $profile['extra_image_alt'] ?? '' }}" class="mgmt-profile__extra"
                                                    loading="lazy" decoding="async">
                                            @endif
                                        </figure>

                                        <div class="mgmt-profile__body">
                                            <h3 class="mgmt-profile__name">{{ $profile['name'] }}</h3>
                                            @if (!empty($profile['role']))
                                                <p class="mgmt-profile__role">{{ $profile['role'] }}</p>
                                            @endif
                                            <p class="section__text">{{ $profile['text'] }}</p>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
