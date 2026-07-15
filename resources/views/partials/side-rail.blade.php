<aside class="side-rail is-collapsed" id="side-rail" aria-label="Quick admission links">
    {{-- Collapsed: vertical tab only --}}
    <button type="button" class="side-rail__tab" id="side-rail-open" aria-label="Open admission panel">
        <span class="side-rail__tab-label">Admission 2026</span>
    </button>

    {{-- Open: compact panel flush to right edge --}}
    <div class="side-rail__panel" id="side-rail-panel" hidden>
        <div class="side-rail__bar side-rail__bar--head">
            <span class="side-rail__bar-text">Admission 2026</span>
            <button type="button" class="side-rail__close" id="side-rail-close" aria-label="Close">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                    aria-hidden="true">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="side-rail__group" data-side-rail-group>
            <button type="button" class="side-rail__bar side-rail__bar--enquiry" data-side-rail-toggle
                aria-expanded="false">
                <span class="side-rail__bar-left">
                    <svg class="side-rail__ico" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <rect x="2" y="4" width="20" height="16" rx="2" />
                        <path d="M22 6l-10 7L2 6" />
                    </svg>
                    <span>Online Enquiry</span>
                </span>
                <svg class="side-rail__arrow" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <div class="side-rail__sub" hidden>
                <a href="#">B.E / B.Tech Enquiry</a>
                <a href="#">MBA Enquiry</a>
                <a href="#">MCA Enquiry</a>
                <a href="#">M.E / M.Tech Enquiry</a>
            </div>
        </div>

        <div class="side-rail__group" data-side-rail-group>
            <button type="button" class="side-rail__bar side-rail__bar--apply" data-side-rail-toggle
                aria-expanded="false">
                <span class="side-rail__bar-left">
                    <svg class="side-rail__ico" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z" />
                    </svg>
                    <span>Apply Online</span>
                </span>
                <svg class="side-rail__arrow" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <div class="side-rail__sub" hidden>
                <a href="#">B.E / B.Tech Application</a>
                <a href="#">MBA Application</a>
                <a href="#">MCA Application</a>
                <a href="#">M.E / M.Tech Application</a>
            </div>
        </div>
    </div>
</aside>

<script>
    (function() {
        var rail = document.getElementById('side-rail');
        var panel = document.getElementById('side-rail-panel');
        var openBtn = document.getElementById('side-rail-open');
        var closeBtn = document.getElementById('side-rail-close');
        if (!rail || !panel || !openBtn || !closeBtn) return;

        var key = 'sona-side-rail';

        function collapse(on) {
            rail.classList.toggle('is-collapsed', on);
            panel.hidden = on;
            openBtn.hidden = !on;
        }

        function shutSubs(except) {
            rail.querySelectorAll('[data-side-rail-group]').forEach(function(g) {
                if (g === except) return;
                var btn = g.querySelector('[data-side-rail-toggle]');
                var sub = g.querySelector('.side-rail__sub');
                if (btn) {
                    btn.setAttribute('aria-expanded', 'false');
                    btn.classList.remove('is-open');
                }
                if (sub) sub.hidden = true;
            });
        }

        try {
            collapse(sessionStorage.getItem(key) !== '0');
        } catch (e) {
            collapse(true);
        }

        closeBtn.addEventListener('click', function() {
            shutSubs();
            collapse(true);
            try { sessionStorage.setItem(key, '1'); } catch (e) {}
        });

        openBtn.addEventListener('click', function() {
            collapse(false);
            try { sessionStorage.setItem(key, '0'); } catch (e) {}
        });

        rail.querySelectorAll('[data-side-rail-toggle]').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var g = btn.closest('[data-side-rail-group]');
                var sub = g && g.querySelector('.side-rail__sub');
                if (!sub) return;
                var open = btn.getAttribute('aria-expanded') === 'true';
                shutSubs(g);
                btn.setAttribute('aria-expanded', open ? 'false' : 'true');
                sub.hidden = open;
                btn.classList.toggle('is-open', !open);
            });
        });
    })();
</script>
