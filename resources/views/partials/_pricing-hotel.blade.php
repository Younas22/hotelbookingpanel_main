{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — PRICING SECTION
     Include with: @include('partials._pricing-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Pricing Section ─── */
    #hbp-price {
        background: #ffffff;
        font-family: 'Inter', sans-serif;
    }

    .hbp-price-badge {
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

    /* ── Gradient border card wrapper ── */
    .hbp-price-card-outer {
        position: relative;
        border-radius: 26px;
        padding: 2px;
        background: linear-gradient(145deg, #3B82F6 0%, #1d4ed8 40%, #7c3aed 100%);
        box-shadow:
            0 0 0 1px rgba(59, 130, 246, 0.12),
            0 32px 72px rgba(59, 130, 246, 0.18),
            0 8px 24px rgba(0, 0, 0, 0.06);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .hbp-price-card-outer:hover {
        box-shadow:
            0 0 0 1px rgba(59, 130, 246, 0.18),
            0 40px 90px rgba(59, 130, 246, 0.24),
            0 12px 32px rgba(0, 0, 0, 0.08);
        transform: translateY(-4px);
    }

    /* ── Card inner ── */
    .hbp-price-card-inner {
        border-radius: 24px;
        background: #ffffff;
        overflow: hidden;
    }

    /* ── Card top accent bar ── */
    .hbp-price-top-bar {
        height: 4px;
        background: linear-gradient(90deg, #1d4ed8 0%, #3B82F6 50%, #7c3aed 100%);
    }

    /* ── Card body ── */
    .hbp-price-body {
        padding: 38px 44px 40px;
    }

    @media (max-width: 639px) {
        .hbp-price-body { padding: 28px 22px 30px; }
    }

    /* ── Plan name area ── */
    .hbp-price-plan-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 5px 14px;
        border-radius: 99px;
        background: rgba(59, 130, 246, 0.08);
        border: 1px solid rgba(59, 130, 246, 0.2);
        font-size: 11px;
        font-weight: 800;
        color: #2563eb;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 16px;
    }

    .hbp-price-plan-name {
        font-size: 22px;
        font-weight: 900;
        color: #0f172a;
        margin: 0 0 6px;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }

    .hbp-price-plan-desc {
        font-size: 13.5px;
        color: #64748b;
        line-height: 1.6;
        margin: 0;
    }

    /* ── Price block ── */
    .hbp-price-block {
        margin: 28px 0;
        padding: 26px 28px;
        border-radius: 18px;
        background: linear-gradient(135deg, #f0f7ff 0%, #f5f3ff 100%);
        border: 1px solid rgba(59, 130, 246, 0.14);
        position: relative;
        overflow: hidden;
    }

    .hbp-price-block::before {
        content: '';
        position: absolute;
        top: -30px;
        right: -30px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .hbp-price-label {
        font-size: 11px;
        font-weight: 700;
        color: #94a3b8;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .hbp-price-amount {
        display: flex;
        align-items: flex-start;
        gap: 4px;
        line-height: 1;
        margin-bottom: 10px;
    }

    .hbp-price-currency {
        font-size: 28px;
        font-weight: 900;
        color: #1d4ed8;
        margin-top: 8px;
        line-height: 1;
    }

    .hbp-price-number {
        font-size: 72px;
        font-weight: 900;
        letter-spacing: -0.04em;
        line-height: 1;
        background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #7c3aed 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hbp-price-note {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        align-items: center;
    }

    .hbp-price-note-chip {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        border-radius: 99px;
        background: rgba(59, 130, 246, 0.08);
        border: 1px solid rgba(59, 130, 246, 0.16);
        font-size: 10.5px;
        font-weight: 700;
        color: #2563eb;
    }

    /* ── Feature list ── */
    .hbp-price-features-head {
        font-size: 11px;
        font-weight: 800;
        color: #94a3b8;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        margin-bottom: 16px;
    }

    .hbp-price-features-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px 24px;
        margin-bottom: 32px;
    }

    @media (max-width: 479px) {
        .hbp-price-features-grid { grid-template-columns: 1fr; }
    }

    .hbp-price-feat-item {
        display: flex;
        align-items: center;
        gap: 9px;
        font-size: 13px;
        color: #1e293b;
        font-weight: 600;
    }

    .hbp-price-feat-check {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: linear-gradient(135deg, #dbeafe, #bfdbfe);
        border: 1px solid rgba(59, 130, 246, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: transform 0.18s ease;
    }

    .hbp-price-feat-item:hover .hbp-price-feat-check {
        transform: scale(1.15);
    }

    /* ── Buttons ── */
    .hbp-price-btn-primary {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        width: 100%;
        padding: 16px 24px;
        border-radius: 14px;
        background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 100%);
        color: #ffffff;
        font-size: 15.5px;
        font-weight: 800;
        letter-spacing: -0.01em;
        border: none;
        cursor: pointer;
        text-decoration: none;
        box-shadow: 0 6px 22px rgba(59, 130, 246, 0.42), 0 2px 6px rgba(59,130,246,0.2);
        transition: transform 0.18s ease, box-shadow 0.18s ease, background 0.18s ease;
        margin-bottom: 10px;
    }

    .hbp-price-btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(59, 130, 246, 0.52), 0 4px 10px rgba(59,130,246,0.25);
        background: linear-gradient(135deg, #1e40af 0%, #2563eb 100%);
        color: #ffffff;
        text-decoration: none;
    }

    .hbp-price-btn-secondary {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 14px 24px;
        border-radius: 14px;
        background: #ffffff;
        color: #374151;
        font-size: 14.5px;
        font-weight: 700;
        border: 2px solid #e2e8f0;
        cursor: pointer;
        text-decoration: none;
        transition: border-color 0.18s ease, color 0.18s ease, transform 0.18s ease;
        margin-bottom: 20px;
    }

    .hbp-price-btn-secondary:hover {
        border-color: #93c5fd;
        color: #2563eb;
        transform: translateY(-1px);
        text-decoration: none;
    }

    /* ── Bottom assurances ── */
    .hbp-price-assurances {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px 20px;
        padding-top: 18px;
        border-top: 1px solid #f1f5f9;
    }

    .hbp-price-assurance {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: #64748b;
        font-weight: 600;
    }

    /* ── "Most Popular" floating badge ── */
    .hbp-price-popular {
        position: absolute;
        top: -16px;
        left: 50%;
        transform: translateX(-50%);
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 20px;
        border-radius: 99px;
        background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 60%, #7c3aed 100%);
        color: #ffffff;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        white-space: nowrap;
        box-shadow: 0 4px 16px rgba(59, 130, 246, 0.45);
        z-index: 10;
    }

    /* ── Trust badges row ── */
    .hbp-price-trust-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-top: 36px;
    }

    .hbp-price-trust-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 9px 18px;
        border-radius: 99px;
        background: #f8fafc;
        border: 1.5px solid #e2e8f0;
        font-size: 12.5px;
        font-weight: 700;
        color: #374151;
        transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
        cursor: default;
    }

    .hbp-price-trust-badge:hover {
        border-color: #93c5fd;
        box-shadow: 0 4px 14px rgba(59, 130, 246, 0.1);
        transform: translateY(-2px);
    }

    /* ── Value note strip ── */
    .hbp-price-value-strip {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
        border-radius: 12px;
        background: linear-gradient(135deg, rgba(22,163,74,0.07), rgba(16,185,129,0.07));
        border: 1px solid rgba(22, 163, 74, 0.18);
        margin-bottom: 28px;
    }

    /* Fade-in */
    .hbp-price-fade {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }

    .hbp-price-fade.hbp-price-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Decorative sparkle */
    .hbp-price-sparkle {
        position: absolute;
        pointer-events: none;
        opacity: 0.55;
        animation: hbp-sparkle-float 4s ease-in-out infinite;
    }

    .hbp-price-sparkle:nth-child(2) { animation-delay: 1.3s; }
    .hbp-price-sparkle:nth-child(3) { animation-delay: 2.6s; }

    @keyframes hbp-sparkle-float {
        0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.55; }
        50% { transform: translateY(-10px) rotate(15deg); opacity: 0.8; }
    }
</style>

<section id="hbp-price" class="relative overflow-hidden" style="padding: 104px 0 112px;">

    {{-- Dot grid background --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 28px 28px; opacity: 0.22;"></div>

    {{-- Large radial glow behind card --}}
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"
         style="width: 760px; height: 620px; background: radial-gradient(ellipse at center, rgba(59,130,246,0.07) 0%, rgba(124,58,237,0.04) 40%, transparent 70%);"></div>

    {{-- Top radial accent --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none"
         style="width: 1000px; height: 300px; background: radial-gradient(ellipse at 50% 0%, rgba(59,130,246,0.06) 0%, transparent 65%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═════════════ SECTION HEADER ═════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-14 hbp-price-fade">

            <div class="inline-block mb-6">
                <div class="hbp-price-badge">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                    </svg>
                    Pricing
                </div>
            </div>

            <h2 class="font-black tracking-tight leading-[1.1] mb-5"
                style="font-size: clamp(2rem, 3.8vw, 2.9rem); color: #0f172a;">
                One Investment.<br>
                <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 50%, #7c3aed 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Lifetime Ownership.
                </span>
            </h2>

            <p style="font-size: 16.5px; color: #64748b; line-height: 1.75; max-width: 540px; margin: 0 auto;">
                Everything included. No monthly fees. No subscriptions. Full source code ownership with complete white-label rights.
            </p>

        </div>

        {{-- ═════════════ PRICING CARD ═════════════ --}}
        <div class="hbp-price-fade" style="transition-delay: 0.08s; max-width: 680px; margin: 0 auto; position: relative;">

            {{-- Decorative sparkles --}}
            <svg class="hbp-price-sparkle" style="top: 8px; left: -28px;" width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" stroke="#93c5fd" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <svg class="hbp-price-sparkle" style="top: -10px; right: -22px;" width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" stroke="#c4b5fd" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <svg class="hbp-price-sparkle" style="bottom: 30px; right: -34px;" width="14" height="14" viewBox="0 0 24 24" fill="none">
                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" stroke="#93c5fd" stroke-width="2" stroke-linecap="round"/>
            </svg>

            {{-- Gradient border outer wrapper --}}
            <div class="hbp-price-card-outer">

                {{-- "Most Popular" floating badge --}}
                <div class="hbp-price-popular">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="#fde68a" stroke="none">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    Most Popular
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="#fde68a" stroke="none">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>

                {{-- Card inner --}}
                <div class="hbp-price-card-inner">

                    {{-- Top gradient bar --}}
                    <div class="hbp-price-top-bar"></div>

                    {{-- Card body --}}
                    <div class="hbp-price-body">

                        {{-- Plan identity --}}
                        <div class="hbp-price-plan-badge">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            </svg>
                            Complete Package
                        </div>

                        <h3 class="hbp-price-plan-name">HotelBookingPanel Complete Package</h3>
                        <p class="hbp-price-plan-desc">Everything you need to launch a professional hotel booking business — delivered as a fully-owned, white-label product.</p>

                        {{-- Value note --}}
                        <div class="hbp-price-value-strip" style="margin-top: 20px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                                <path d="M8 12l3 3 5-5"/>
                            </svg>
                            <span style="font-size: 12.5px; color: #15803d; font-weight: 700;">Equivalent to $2,500–$5,000/year in SaaS subscriptions — own it once, use it forever</span>
                        </div>

                        {{-- Price block --}}
                        <div class="hbp-price-block">
                            <div class="hbp-price-label">One-Time Investment</div>
                            <div class="hbp-price-amount">
                                <span class="hbp-price-currency">$</span>
                                <span class="hbp-price-number">4,999</span>
                            </div>
                            <div class="hbp-price-note">
                                <span class="hbp-price-note-chip">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                    One-Time Payment
                                </span>
                                <span class="hbp-price-note-chip">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                    Lifetime Ownership
                                </span>
                                <span class="hbp-price-note-chip">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                    No Recurring Charges
                                </span>
                            </div>
                        </div>

                        {{-- Divider --}}
                        <div style="height: 1px; background: linear-gradient(90deg, transparent, #e2e8f0 30%, #e2e8f0 70%, transparent); margin-bottom: 24px;"></div>

                        {{-- Features heading --}}
                        <div class="hbp-price-features-head">Everything Included</div>

                        {{-- Features 2-col grid --}}
                        <div class="hbp-price-features-grid">

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Complete Hotel Booking Website
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Multi-Language Ready
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Full Laravel Source Code
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Mobile Responsive Design
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                White-Label Branding
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                SEO Optimized
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Unlimited Hotel Listings
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Lifetime Updates
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Unlimited Customer Bookings
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Installation Assistance
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Online Payment Integration
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Technical Support
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Reservation Management System
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Full Customization Rights
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Customer Dashboard
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Own Domain &amp; Branding
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Admin Control Panel
                            </div>

                            <div class="hbp-price-feat-item">
                                <span class="hbp-price-feat-check">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                No Transaction Fees
                            </div>

                        </div>

                        {{-- Divider --}}
                        <div style="height: 1px; background: linear-gradient(90deg, transparent, #e2e8f0 30%, #e2e8f0 70%, transparent); margin-bottom: 24px;"></div>

                        {{-- CTA Buttons --}}
                        <a href="{{ route('demo') }}" class="hbp-price-btn-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/>
                            </svg>
                            Book Live Demo
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>

                        <a href="{{ route('contact') }}" class="hbp-price-btn-secondary">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22 6 12 13 2 6"/>
                            </svg>
                            Contact Sales
                        </a>

                        {{-- Assurances --}}
                        <div class="hbp-price-assurances">
                            <div class="hbp-price-assurance">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                </svg>
                                Secure Checkout
                            </div>
                            <div class="hbp-price-assurance">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/>
                                    <path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/>
                                </svg>
                                Lifetime Updates
                            </div>
                            <div class="hbp-price-assurance">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>
                                </svg>
                                Dedicated Support
                            </div>
                            <div class="hbp-price-assurance">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/><polyline points="16 12 12 8 8 12"/><line x1="12" y1="16" x2="12" y2="8"/>
                                </svg>
                                Instant Delivery
                            </div>
                        </div>

                    </div>{{-- end card body --}}
                </div>{{-- end card inner --}}
            </div>{{-- end card outer --}}

        </div>{{-- end card wrapper --}}

        {{-- ═════════════ TRUST BADGES ROW ═════════════ --}}
        <div class="hbp-price-trust-row hbp-price-fade" style="transition-delay: 0.18s;">

            <div class="hbp-price-trust-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/><path d="M8 12l3 3 5-5"/>
                </svg>
                One-Time Purchase
            </div>

            <div class="hbp-price-trust-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
                </svg>
                Full Source Code
            </div>

            <div class="hbp-price-trust-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
                </svg>
                White-Label
            </div>

            <div class="hbp-price-trust-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                Lifetime Ownership
            </div>

            <div class="hbp-price-trust-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                </svg>
                24/7 Support
            </div>

        </div>

    </div>
</section>

<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('hbp-price-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    document.querySelectorAll('#hbp-price .hbp-price-fade').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
