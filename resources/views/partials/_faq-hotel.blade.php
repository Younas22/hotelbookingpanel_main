{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — FAQ SECTION
     Include with: @include('partials._faq-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── FAQ Section ─── */
    #hbp-faq {
        background: #ffffff;
        font-family: 'Inter', sans-serif;
    }

    .hbp-faq-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        border-radius: 99px;
        background: rgba(59, 130, 246, 0.07);
        border: 1px solid rgba(59, 130, 246, 0.18);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.13em;
        text-transform: uppercase;
        color: #2563eb;
    }

    /* ── Accordion item ── */
    .hbp-faq-item {
        border: 1.5px solid #e9eef5;
        border-radius: 16px;
        overflow: hidden;
        transition: border-color 0.22s ease, box-shadow 0.22s ease;
        background: #ffffff;
    }

    .hbp-faq-item.hbp-faq-open {
        border-color: rgba(59, 130, 246, 0.32);
        box-shadow: 0 6px 24px rgba(59, 130, 246, 0.09), 0 1px 4px rgba(0,0,0,0.03);
    }

    .hbp-faq-item:not(.hbp-faq-open):hover {
        border-color: rgba(59, 130, 246, 0.2);
        box-shadow: 0 3px 12px rgba(59, 130, 246, 0.06);
    }

    /* ── Question trigger button ── */
    .hbp-faq-trigger {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 22px 24px;
        background: none;
        border: none;
        cursor: pointer;
        text-align: left;
        position: relative;
        transition: background 0.18s ease;
    }

    .hbp-faq-item.hbp-faq-open .hbp-faq-trigger {
        background: rgba(59, 130, 246, 0.025);
    }

    /* Left accent bar */
    .hbp-faq-trigger::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 0;
        border-radius: 0 3px 3px 0;
        background: linear-gradient(to bottom, #3B82F6, #1d4ed8);
        transition: height 0.25s ease;
    }

    .hbp-faq-item.hbp-faq-open .hbp-faq-trigger::before {
        height: 52%;
    }

    /* Number badge */
    .hbp-faq-num {
        width: 30px;
        height: 30px;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: 800;
        flex-shrink: 0;
        background: #f1f5f9;
        color: #94a3b8;
        border: 1px solid #e9eef5;
        transition: background 0.22s ease, color 0.22s ease, border-color 0.22s ease;
    }

    .hbp-faq-item.hbp-faq-open .hbp-faq-num {
        background: rgba(59, 130, 246, 0.1);
        color: #2563eb;
        border-color: rgba(59, 130, 246, 0.22);
    }

    /* Question text */
    .hbp-faq-question {
        flex: 1;
        font-size: 15.5px;
        font-weight: 700;
        color: #374151;
        line-height: 1.4;
        transition: color 0.18s ease;
    }

    .hbp-faq-item.hbp-faq-open .hbp-faq-question {
        color: #0f172a;
        font-weight: 800;
    }

    /* Chevron icon */
    .hbp-faq-chevron {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        background: #f8fafc;
        border: 1px solid #e9eef5;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: background 0.22s ease, border-color 0.22s ease, transform 0.28s ease;
    }

    .hbp-faq-chevron svg {
        transition: transform 0.28s ease;
    }

    .hbp-faq-item.hbp-faq-open .hbp-faq-chevron {
        background: rgba(59, 130, 246, 0.1);
        border-color: rgba(59, 130, 246, 0.22);
    }

    .hbp-faq-item.hbp-faq-open .hbp-faq-chevron svg {
        transform: rotate(180deg);
    }

    /* ── Answer panel ── */
    .hbp-faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hbp-faq-item.hbp-faq-open .hbp-faq-answer {
        max-height: 400px;
    }

    .hbp-faq-answer-inner {
        padding: 0 24px 22px 70px;
    }

    @media (max-width: 479px) {
        .hbp-faq-answer-inner { padding: 0 18px 20px 18px; }
        .hbp-faq-trigger { padding: 18px 18px; }
    }

    .hbp-faq-answer-text {
        font-size: 14px;
        line-height: 1.8;
        color: #64748b;
        border-top: 1px solid #f1f5f9;
        padding-top: 16px;
    }

    /* Highlight key words inside answer */
    .hbp-faq-answer-text strong {
        color: #1e293b;
        font-weight: 700;
    }

    /* Highlight chip inside answer */
    .hbp-faq-chip {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 2px 8px;
        border-radius: 6px;
        background: rgba(59, 130, 246, 0.07);
        color: #2563eb;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
    }

    /* ── Bottom CTA card ── */
    .hbp-faq-cta {
        background: linear-gradient(135deg, #f0f7ff 0%, #f5f3ff 100%);
        border: 1.5px solid rgba(59, 130, 246, 0.16);
        border-radius: 20px;
        padding: 32px 36px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 20px;
        margin-top: 16px;
    }

    .hbp-faq-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 22px;
        border-radius: 11px;
        font-size: 13.5px;
        font-weight: 800;
        text-decoration: none;
        transition: transform 0.18s ease, box-shadow 0.18s ease;
        white-space: nowrap;
    }

    .hbp-faq-cta-btn:hover {
        transform: translateY(-2px);
        text-decoration: none;
    }

    .hbp-faq-cta-btn-primary {
        background: linear-gradient(135deg, #1d4ed8, #3B82F6);
        color: #ffffff;
        box-shadow: 0 4px 16px rgba(59, 130, 246, 0.35);
    }

    .hbp-faq-cta-btn-primary:hover {
        box-shadow: 0 7px 22px rgba(59, 130, 246, 0.45);
        color: #ffffff;
    }

    .hbp-faq-cta-btn-ghost {
        background: #ffffff;
        color: #374151;
        border: 2px solid #e2e8f0;
    }

    .hbp-faq-cta-btn-ghost:hover {
        border-color: #93c5fd;
        color: #2563eb;
    }

    /* ── Fade-in ── */
    .hbp-faq-fade {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .hbp-faq-fade.hbp-faq-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<section id="hbp-faq" class="relative overflow-hidden" style="padding: 100px 0 108px;">

    {{-- Dot grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 28px 28px; opacity: 0.22;"></div>

    {{-- Top radial accent --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none"
         style="width: 900px; height: 300px; background: radial-gradient(ellipse at 50% 0%, rgba(59,130,246,0.06) 0%, transparent 68%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═════════════ HEADER ═════════════ --}}
        <div class="text-center max-w-xl mx-auto mb-14 hbp-faq-fade">
            <div class="inline-block mb-6">
                <div class="hbp-faq-badge">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/>
                    </svg>
                    FAQ
                </div>
            </div>

            <h2 class="font-black tracking-tight leading-[1.1] mb-5"
                style="font-size: clamp(1.9rem, 3.5vw, 2.75rem); color: #0f172a;">
                Frequently Asked
                <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Questions
                </span>
            </h2>

            <p style="font-size: 16px; color: #64748b; line-height: 1.7;">
                Everything you need to know before making a decision. Can't find your answer? Reach out directly.
            </p>
        </div>

        {{-- ═════════════ ACCORDION ═════════════ --}}
        <div class="max-w-3xl mx-auto hbp-faq-fade" style="transition-delay: 0.06s; display: flex; flex-direction: column; gap: 10px;">

            {{-- ── Q1 ── --}}
            <div class="hbp-faq-item hbp-faq-open" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="true">
                    <span class="hbp-faq-num">01</span>
                    <span class="hbp-faq-question">What do I receive after purchase?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer style="max-height: 400px;">
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            You receive the <strong>complete HotelBookingPanel source code</strong> as a downloadable package, delivered instantly to your email after checkout. This includes the full Laravel application, all frontend views and assets, database migration files, a <span class="hbp-faq-chip">step-by-step setup guide</span>, and installation documentation — everything you need to go from zero to live.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ── Q2 ── --}}
            <div class="hbp-faq-item" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="false">
                    <span class="hbp-faq-num">02</span>
                    <span class="hbp-faq-question">Is this a one-time payment?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer>
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            Yes — <strong>absolutely</strong>. HotelBookingPanel is sold as a one-time license with <strong>no monthly fees</strong>, no subscription charges, and no per-booking commissions. You pay once and own the system forever, including all future updates delivered at no additional cost.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ── Q3 ── --}}
            <div class="hbp-faq-item" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="false">
                    <span class="hbp-faq-num">03</span>
                    <span class="hbp-faq-question">Can I use my own domain?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer>
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            Yes. You can install and run HotelBookingPanel on <strong>any domain or subdomain you own</strong>. The system is fully <span class="hbp-faq-chip">white-label</span> — your guests will never see any HotelBookingPanel branding. It runs entirely under your own brand, domain, and identity.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ── Q4 ── --}}
            <div class="hbp-faq-item" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="false">
                    <span class="hbp-faq-num">04</span>
                    <span class="hbp-faq-question">Do I get the source code?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer>
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            Yes — <strong>100% of the source code</strong>. The application is not encrypted or obfuscated in any way. You have full read and write access to every file, controller, model, and Blade template, giving you complete freedom to extend, modify, or hand the codebase to any Laravel developer.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ── Q5 ── --}}
            <div class="hbp-faq-item" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="false">
                    <span class="hbp-faq-num">05</span>
                    <span class="hbp-faq-question">Can I customize the system?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer>
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            Absolutely. Since you own the <strong>full source code</strong> built on Laravel, you can customize every aspect of the platform — branding, color schemes, features, database structure, third-party integrations, and design. You can also bring in any Laravel developer to work on it without restriction.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ── Q6 ── --}}
            <div class="hbp-faq-item" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="false">
                    <span class="hbp-faq-num">06</span>
                    <span class="hbp-faq-question">How long does setup take?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer>
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            Most clients are live within <span class="hbp-faq-chip">24 hours of purchase</span>. The package includes detailed installation documentation, and our team provides <strong>installation assistance</strong> to ensure a smooth setup on your hosting environment. A standard shared or VPS hosting plan running PHP and MySQL is all you need.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ── Q7 ── --}}
            <div class="hbp-faq-item" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="false">
                    <span class="hbp-faq-num">07</span>
                    <span class="hbp-faq-question">Do you provide support?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer>
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            Yes. Every purchase includes <strong>technical support</strong> to help with installation, configuration, and general technical questions. Our support team is available via email and typically responds within a few hours. Lifetime updates are also included at no extra charge, so your platform stays current automatically.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ── Q8 ── --}}
            <div class="hbp-faq-item" data-faq>
                <button class="hbp-faq-trigger" data-faq-trigger aria-expanded="false">
                    <span class="hbp-faq-num">08</span>
                    <span class="hbp-faq-question">Is it mobile responsive?</span>
                    <span class="hbp-faq-chevron">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </span>
                </button>
                <div class="hbp-faq-answer" data-faq-answer>
                    <div class="hbp-faq-answer-inner">
                        <p class="hbp-faq-answer-text">
                            Yes. HotelBookingPanel is <strong>fully responsive</strong> and pixel-perfect on every screen size — smartphones, tablets, and desktops. Both the customer-facing booking website and the admin dashboard adapt seamlessly to any device, ensuring your guests can book and your team can manage, from anywhere.
                        </p>
                    </div>
                </div>
            </div>

        </div>{{-- end accordion --}}

        {{-- ═════════════ BOTTOM CTA CARD ═════════════ --}}
        <div class="max-w-3xl mx-auto hbp-faq-fade" style="transition-delay: 0.14s;">
            <div class="hbp-faq-cta">

                {{-- Icon --}}
                <div style="width: 48px; height: 48px; border-radius: 14px; background: rgba(59,130,246,0.1); border: 1px solid rgba(59,130,246,0.2); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                    </svg>
                </div>

                {{-- Text --}}
                <div style="flex: 1; min-width: 0;">
                    <div style="font-size: 15.5px; font-weight: 800; color: #0f172a; margin-bottom: 3px; letter-spacing: -0.01em;">
                        Still have questions?
                    </div>
                    <div style="font-size: 13.5px; color: #64748b; line-height: 1.5;">
                        Our team is happy to answer anything not covered here. Usually responds within a few hours.
                    </div>
                </div>

                {{-- Buttons --}}
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <a href="#contact" class="hbp-faq-cta-btn hbp-faq-cta-btn-primary">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22 6 12 13 2 6"/>
                        </svg>
                        Contact Us
                    </a>
                    <a href="#demo" class="hbp-faq-cta-btn hbp-faq-cta-btn-ghost">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/>
                        </svg>
                        View Demo
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
(function () {
    /* ── Accordion logic ── */
    document.querySelectorAll('#hbp-faq [data-faq]').forEach(function (item) {
        var trigger = item.querySelector('[data-faq-trigger]');
        var answer  = item.querySelector('[data-faq-answer]');
        var chevron = item.querySelector('.hbp-faq-chevron svg');

        trigger.addEventListener('click', function () {
            var isOpen = item.classList.contains('hbp-faq-open');

            /* Close all items */
            document.querySelectorAll('#hbp-faq [data-faq]').forEach(function (el) {
                el.classList.remove('hbp-faq-open');
                el.querySelector('[data-faq-trigger]').setAttribute('aria-expanded', 'false');
                el.querySelector('.hbp-faq-chevron svg').setAttribute('stroke', '#64748b');
            });

            /* Open clicked item if it was closed */
            if (!isOpen) {
                item.classList.add('hbp-faq-open');
                trigger.setAttribute('aria-expanded', 'true');
                chevron.setAttribute('stroke', '#3B82F6');
            }
        });
    });

    /* ── Scroll fade-in ── */
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('hbp-faq-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    document.querySelectorAll('#hbp-faq .hbp-faq-fade').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
