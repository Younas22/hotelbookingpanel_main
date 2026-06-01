{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — BENEFITS SECTION
     Include with: @include('partials._benefits-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Benefits Section ─── */
    #hbp-benefits {
        background: #f8fafc;
        font-family: 'Inter', sans-serif;
    }

    /* Section badge */
    .hbp-ben-badge {
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

    /* Benefit card base */
    .hbp-ben-card {
        position: relative;
        background: #ffffff;
        border: 1px solid #e9eef5;
        border-radius: 18px;
        padding: 28px 24px 26px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
        overflow: hidden;
    }

    .hbp-ben-card::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 18px;
        background: radial-gradient(ellipse at 0% 0%, rgba(59,130,246,0.06) 0%, transparent 65%);
        opacity: 0;
        transition: opacity 0.28s ease;
        pointer-events: none;
    }

    .hbp-ben-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 40px rgba(59, 130, 246, 0.11), 0 2px 8px rgba(0,0,0,0.04);
        border-color: rgba(59, 130, 246, 0.28);
    }

    .hbp-ben-card:hover::before {
        opacity: 1;
    }

    /* Icon wrap */
    .hbp-ben-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 14px;
        flex-shrink: 0;
        margin-bottom: 18px;
        transition: transform 0.22s ease;
    }

    .hbp-ben-card:hover .hbp-ben-icon {
        transform: scale(1.1) rotate(-3deg);
    }

    /* Checkmark pill */
    .hbp-ben-check {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 9px;
        border-radius: 99px;
        background: rgba(22, 163, 74, 0.08);
        border: 1px solid rgba(22, 163, 74, 0.18);
        font-size: 10px;
        font-weight: 700;
        color: #16a34a;
        margin-bottom: 12px;
        letter-spacing: 0.04em;
    }

    /* Card title */
    .hbp-ben-title {
        font-size: 15.5px;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 9px;
        line-height: 1.25;
        letter-spacing: -0.01em;
    }

    /* Card description */
    .hbp-ben-desc {
        font-size: 13px;
        line-height: 1.7;
        color: #64748b;
        margin: 0;
    }

    /* Decorative corner dot */
    .hbp-ben-card::after {
        content: '';
        position: absolute;
        top: 18px;
        right: 18px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #e2e8f0;
        transition: background 0.22s ease, transform 0.22s ease;
    }

    .hbp-ben-card:hover::after {
        background: #93c5fd;
        transform: scale(1.4);
    }

    /* Section fade-in */
    .hbp-ben-fade {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .hbp-ben-fade.hbp-ben-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Bottom stats strip */
    .hbp-ben-strip {
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        padding: 28px 36px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 0;
    }

    .hbp-ben-stat {
        flex: 1 1 160px;
        text-align: center;
        padding: 12px 24px;
        position: relative;
    }

    .hbp-ben-stat + .hbp-ben-stat::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 36px;
        width: 1px;
        background: #e2e8f0;
    }

    @media (max-width: 639px) {
        .hbp-ben-stat + .hbp-ben-stat::before { display: none; }
    }

    .hbp-ben-stat-num {
        font-size: 26px;
        font-weight: 900;
        color: #0f172a;
        letter-spacing: -0.03em;
        line-height: 1;
        margin-bottom: 4px;
    }

    .hbp-ben-stat-label {
        font-size: 12px;
        color: #94a3b8;
        font-weight: 600;
    }
</style>

<section id="hbp-benefits" class="relative overflow-hidden" style="padding: 100px 0 108px;">

    {{-- Dot grid background --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 26px 26px; opacity: 0.25;"></div>

    {{-- Top gradient accent --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none"
         style="width: 800px; height: 320px; background: radial-gradient(ellipse at 50% 0%, rgba(59,130,246,0.06) 0%, transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═══════════════════════════
             SECTION HEADER
        ═══════════════════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-16 hbp-ben-fade">

            {{-- Badge --}}
            <div class="inline-block mb-6">
                <div class="hbp-ben-badge">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z"/>
                    </svg>
                    Why Choose HotelBookingPanel
                </div>
            </div>

            {{-- Headline --}}
            <h2 class="font-black tracking-tight leading-[1.1] mb-5"
                style="font-size: clamp(1.9rem, 3.5vw, 2.75rem); color: #0f172a;">
                Built To Own.
                <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%);
                             -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Designed To Scale.
                </span>
            </h2>

            {{-- Subheadline --}}
            <p style="font-size: 16.5px; color: #64748b; line-height: 1.7;">
                One purchase. Everything included. No lock-in, no surprises — just a complete, production-ready platform that grows with your business.
            </p>

        </div>

        {{-- ═══════════════════════════
             BENEFIT CARDS GRID — 4×2
        ═══════════════════════════ --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-10">

            {{-- ── Card 1: One-Time Purchase ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.05s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #dcfce7, #bbf7d0); border: 1px solid rgba(22,163,74,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                        <path d="M8 12l3 3 5-5"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    No Subscription
                </div>
                <h3 class="hbp-ben-title">One-Time Purchase</h3>
                <p class="hbp-ben-desc">Pay once and own it forever. No monthly bills, no per-booking fees — your margin stays yours from day one.</p>
            </div>

            {{-- ── Card 2: Full Source Code ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.10s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #dbeafe, #bfdbfe); border: 1px solid rgba(59,130,246,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                        <line x1="12" y1="4" x2="12" y2="20" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    100% Open
                </div>
                <h3 class="hbp-ben-title">Full Source Code</h3>
                <p class="hbp-ben-desc">Get every line of the codebase. Customize, extend, and integrate without asking anyone for permission.</p>
            </div>

            {{-- ── Card 3: White-Label Branding ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.15s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #ede9fe, #ddd6fe); border: 1px solid rgba(124,58,237,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    Your Brand
                </div>
                <h3 class="hbp-ben-title">White-Label Branding</h3>
                <p class="hbp-ben-desc">Replace every logo, color, and domain with your own. Launch as a fully branded product under your name.</p>
            </div>

            {{-- ── Card 4: Unlimited Bookings ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.20s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #fef3c7, #fde68a); border: 1px solid rgba(217,119,6,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18.178 8c5.096 0 5.096 8 0 8-5.095 0-7.133-8-12.739-8C.344 8 .344 16 5.44 16c5.096 0 7.134-8 12.739-8z"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    No Limits
                </div>
                <h3 class="hbp-ben-title">Unlimited Bookings</h3>
                <p class="hbp-ben-desc">Handle one booking or one million — no caps, no throttling, no extra fees as your reservation volume grows.</p>
            </div>

            {{-- ── Card 5: Lifetime Updates ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.25s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #e0f2fe, #bae6fd); border: 1px solid rgba(2,132,199,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 4 23 10 17 10"/>
                        <polyline points="1 20 1 14 7 14"/>
                        <path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    Always Current
                </div>
                <h3 class="hbp-ben-title">Lifetime Updates</h3>
                <p class="hbp-ben-desc">New features, security patches, and improvements land in your codebase automatically — free, forever.</p>
            </div>

            {{-- ── Card 6: SEO Friendly ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.30s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #fce7f3, #fbcfe8); border: 1px solid rgba(190,24,93,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="M21 21l-4.35-4.35"/>
                        <path d="M11 8v6M8 11h6"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    Rank Higher
                </div>
                <h3 class="hbp-ben-title">SEO Friendly</h3>
                <p class="hbp-ben-desc">Clean semantic HTML, fast load times, and structured data baked in — so your hotel pages rank without extra plugins.</p>
            </div>

            {{-- ── Card 7: Mobile Responsive ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.35s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #ecfdf5, #a7f3d0); border: 1px solid rgba(5,150,105,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="5" y="2" width="14" height="20" rx="2"/>
                        <circle cx="12" cy="18" r="1" fill="#059669"/>
                        <line x1="8" y1="6" x2="16" y2="6"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    All Devices
                </div>
                <h3 class="hbp-ben-title">Mobile Responsive</h3>
                <p class="hbp-ben-desc">Pixel-perfect on every screen size. Guests book smoothly on phone, tablet, or desktop — no pinching required.</p>
            </div>

            {{-- ── Card 8: Fast Deployment ── --}}
            <div class="hbp-ben-card hbp-ben-fade" style="transition-delay: 0.40s;">
                <div class="hbp-ben-icon"
                     style="background: linear-gradient(135deg, #fff7ed, #fed7aa); border: 1px solid rgba(234,88,12,0.18);">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <div class="hbp-ben-check">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                    Live in Hours
                </div>
                <h3 class="hbp-ben-title">Fast Deployment</h3>
                <p class="hbp-ben-desc">From purchase to live site in hours, not weeks. Clear docs, standard stack, no proprietary setup wizards to fight.</p>
            </div>

        </div>

        {{-- ═══════════════════════════
             BOTTOM STATS STRIP
        ═══════════════════════════ --}}
        <div class="hbp-ben-strip hbp-ben-fade" style="transition-delay: 0.46s;">

            <div class="hbp-ben-stat">
                <div class="hbp-ben-stat-num" style="background: linear-gradient(135deg, #1d4ed8, #3B82F6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">$0</div>
                <div class="hbp-ben-stat-label">Monthly Fees</div>
            </div>

            <div class="hbp-ben-stat">
                <div class="hbp-ben-stat-num" style="background: linear-gradient(135deg, #16a34a, #22c55e); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">∞</div>
                <div class="hbp-ben-stat-label">Bookings Allowed</div>
            </div>

            <div class="hbp-ben-stat">
                <div class="hbp-ben-stat-num" style="background: linear-gradient(135deg, #7c3aed, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">1×</div>
                <div class="hbp-ben-stat-label">One-Time Payment</div>
            </div>

            <div class="hbp-ben-stat">
                <div class="hbp-ben-stat-num" style="background: linear-gradient(135deg, #ea580c, #fb923c); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">&lt;24h</div>
                <div class="hbp-ben-stat-label">Deploy Time</div>
            </div>

        </div>

    </div>
</section>

<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('hbp-ben-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.10 });

    document.querySelectorAll('#hbp-benefits .hbp-ben-fade').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
