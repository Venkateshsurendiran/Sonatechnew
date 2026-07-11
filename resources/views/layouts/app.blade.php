<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="{{ $metaDescription ?? 'Sona College of Technology, Salem — Engineering education with research excellence and strong placements.' }}">

    <title>@yield('title', 'Sona College of Technology')</title>

    {{-- Local theme: colors, fonts, font sizes (no CDN required) --}}
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    @stack('styles')
</head>
<body @if(request()->is('/')) class="is-home" @endif>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.side-rail')

    <button type="button" class="scroll-top" id="scroll-top" aria-label="Scroll to top">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            aria-hidden="true">
            <path d="M12 19V5" />
            <path d="M5 12l7-7 7 7" />
        </svg>
    </button>

    <script>
        (function() {
            var scrollTopBtn = document.getElementById('scroll-top');
            if (!scrollTopBtn) return;

            var showAfter = 320;

            function toggleScrollTop() {
                scrollTopBtn.classList.toggle('is-visible', window.scrollY > showAfter);
            }

            window.addEventListener('scroll', toggleScrollTop, { passive: true });
            toggleScrollTop();

            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        })();
    </script>

    @stack('scripts')
</body>
</html>
