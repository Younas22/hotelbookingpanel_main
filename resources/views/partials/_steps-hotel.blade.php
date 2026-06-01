{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — 3-STEP PROCESS SECTION
     Include with: @include('partials._steps-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Steps Section ─── */
    #hbp-steps {
        background: #ffffff;
        font-family: 'Inter', sans-serif;
    }

    /* Section badge */
    .hbp-steps-badge {
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

    /* ── Cards row wrapper ── */
    .hbp-steps-row {
        display: flex;
        align-items: stretch;
        gap: 0;
    }

    /* ── Individual step card ── */
    .hbp-steps-card {
        position: relative;
        flex: 1 1 0;
        background: #fafbff;
        border: 1.5px solid #e9eef5;
        border-radius: 20px;
        padding: 36px 30px 34px;
        overflow: hidden;
        transition: transform 0.24s ease, box-shadow 0.24s ease, border-color 0.24s ease;
    }

    .hbp-steps-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 48px rgba(59, 130, 246, 0.13), 0 3px 10px rgba(0,0,0,0.04);
        border-color: rgba(59, 130, 246, 0.3);
    }

    /* Watermark big number */
    .hbp-steps-watermark {
        position: absolute;
        top: -14px;
        right: 18px;
        font-size: 110px;
        font-weight: 900;
        line-height: 1;
        letter-spacing: -0.05em;
        pointer-events: none;
        user-select: none;
        opacity: 0.045;
        color: #1d4ed8;
        transition: opacity 0.24s ease;
    }

    .hbp-steps-card:hover .hbp-steps-watermark {
        opacity: 0.07;
    }

    /* Step pill label */
    .hbp-steps-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 99px;
        font-size: 10.5px;
        font-weight: 800;
        letter-spacing: 0.09em;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    /* Large step number */
    .hbp-steps-num {
        font-size: 56px;
        font-weight: 900;
        line-height: 1;
        letter-spacing: -0.04em;
        margin-bottom: 18px;
        display: block;
    }

    /* Icon wrap */
    .hbp-steps-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 15px;
        flex-shrink: 0;
        margin-bottom: 20px;
        transition: transform 0.24s ease;
    }

    .hbp-steps-card:hover .hbp-steps-icon {
        transform: scale(1.1) rotate(-4deg);
    }

    /* Title */
    .hbp-steps-title {
        font-size: 19px;
        font-weight: 900;
        color: #0f172a;
        margin: 0 0 10px;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }

    /* Description */
    .hbp-steps-desc {
        font-size: 13.5px;
        line-height: 1.75;
        color: #64748b;
        margin: 0 0 18px;
    }

    /* Micro bullet list */
    .hbp-steps-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 7px;
    }

    .hbp-steps-list li {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12.5px;
        color: #475569;
        font-weight: 600;
    }

    .hbp-steps-list li span.hbp-steps-dot {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* Bottom card CTA strip */
    .hbp-steps-card-cta {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        margin-top: 22px;
        font-size: 12px;
        font-weight: 800;
        opacity: 0;
        transform: translateX(-4px);
        transition: opacity 0.22s ease, transform 0.22s ease;
    }

    .hbp-steps-card:hover .hbp-steps-card-cta {
        opacity: 1;
        transform: translateX(0);
    }

    /* ── Arrow connectors (desktop) ── */
    .hbp-steps-arrow {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 72px;
        flex-shrink: 0;
        padding-top: 40px; /* align roughly with the number */
        position: relative;
        z-index: 2;
    }

    .hbp-steps-arrow-inner {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .hbp-steps-arrow-line {
        flex: 1;
        height: 2px;
        background: repeating-linear-gradient(
            to right,
            #93c5fd 0px,
            #93c5fd 6px,
            transparent 6px,
            transparent 12px
        );
    }

    .hbp-steps-arrow-head {
        width: 0;
        height: 0;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-left: 9px solid #93c5fd;
        flex-shrink: 0;
    }

    .hbp-steps-arrow-label {
        font-size: 9.5px;
        font-weight: 700;
        color: #94a3b8;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-top: 6px;
        white-space: nowrap;
    }

    /* Mobile arrow (down) shown only on small screens */
    .hbp-steps-arrow-mobile {
        display: none;
        justify-content: center;
        padding: 6px 0;
    }

    /* ── Bottom CTA strip ── */
    .hbp-steps-bottom {
        margin-top: 60px;
        text-align: center;
    }

    /* Fade-in animation */
    .hbp-steps-fade {
        opacity: 0;
        transform: translateY(22px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }

    .hbp-steps-fade.hbp-steps-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* ── Responsive ── */
    @media (max-width: 767px) {
        .hbp-steps-row {
            flex-direction: column;
            gap: 0;
        }

        .hbp-steps-arrow {
            display: none;
        }

        .hbp-steps-arrow-mobile {
            display: flex;
        }

        .hbp-steps-card {
            border-radius: 16px;
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .hbp-steps-arrow {
            width: 48px;
        }
    }
</style>

<section id="hbp-steps" class="relative overflow-hidden" style="padding: 100px 0 108px;">

    {{-- Dot grid texture --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 28px 28px; opacity: 0.28;"></div>

    {{-- Blue radial accent --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none"
         style="width: 900px; height: 340px; background: radial-gradient(ellipse at 50% 0%, rgba(59,130,246,0.06) 0%, transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═══════════════════════════
             SECTION HEADER
        ═══════════════════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-16 hbp-steps-fade">

            {{-- Badge --}}
            <div class="inline-block mb-6">
                <div class="hbp-steps-badge">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    How It Works
                </div>
            </div>

            {{-- Headline --}}
            <h2 class="font-black tracking-tight leading-[1.1] mb-5"
                style="font-size: clamp(1.9rem, 3.5vw, 2.75rem); color: #0f172a;">
                Launch Your Hotel Business<br>
                <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%);
                             -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    In 3 Easy Steps
                </span>
            </h2>

            {{-- Subheadline --}}
            <p style="font-size: 16.5px; color: #64748b; line-height: 1.7;">
                From purchase to live bookings — the fastest path to owning a fully-branded hotel booking system, without hiring a dev team.
            </p>

        </div>

        {{-- ═══════════════════════════
             STEPS ROW
        ═══════════════════════════ --}}
        <div class="hbp-steps-row">

            {{-- ══════════════════
                 STEP 1
            ══════════════════ --}}
            <div class="hbp-steps-card hbp-steps-fade" style="transition-delay: 0.06s;">

                {{-- Watermark --}}
                <span class="hbp-steps-watermark">01</span>

                {{-- Step pill --}}
                <div class="hbp-steps-pill"
                     style="background: rgba(59,130,246,0.09); border: 1px solid rgba(59,130,246,0.22); color: #2563eb;">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z"/>
                    </svg>
                    Step 01
                </div>

                {{-- Big number --}}
                <span class="hbp-steps-num"
                      style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 60%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    01
                </span>

                {{-- Icon --}}
                <div class="hbp-steps-icon"
                     style="background: linear-gradient(135deg, #dbeafe, #bfdbfe); border: 1px solid rgba(59,130,246,0.2);">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="1" y="4" width="22" height="16" rx="2.5"/>
                        <line x1="1" y1="10" x2="23" y2="10"/>
                        <line x1="5" y1="15" x2="10" y2="15"/>
                        <line x1="13" y1="15" x2="15" y2="15"/>
                    </svg>
                </div>

                <h3 class="hbp-steps-title">Purchase License</h3>
                <p class="hbp-steps-desc">Choose your license, complete checkout in seconds, and receive your full source code package and license key instantly by email.</p>

                <ul class="hbp-steps-list">
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(59,130,246,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        One-time payment, no subscription
                    </li>
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(59,130,246,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Instant download + full source
                    </li>
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(59,130,246,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        License key delivered by email
                    </li>
                </ul>

                <div class="hbp-steps-card-cta" style="color: #3B82F6;">
                    <span>View pricing</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>

            </div>

            {{-- ── Arrow 1→2 (desktop) ── --}}
            <div class="hbp-steps-arrow">
                <div class="hbp-steps-arrow-inner">
                    <div class="hbp-steps-arrow-line"></div>
                    <div class="hbp-steps-arrow-head"></div>
                </div>
                <span class="hbp-steps-arrow-label">then</span>
            </div>

            {{-- ── Arrow 1→2 (mobile) ── --}}
            <div class="hbp-steps-arrow-mobile" style="margin: 16px 0;">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#93c5fd" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5v14M5 12l7 7 7-7"/>
                </svg>
            </div>

            {{-- ══════════════════
                 STEP 2
            ══════════════════ --}}
            <div class="hbp-steps-card hbp-steps-fade" style="transition-delay: 0.14s;">

                {{-- Watermark --}}
                <span class="hbp-steps-watermark" style="color: #7c3aed;">02</span>

                {{-- Step pill --}}
                <div class="hbp-steps-pill"
                     style="background: rgba(124,58,237,0.08); border: 1px solid rgba(124,58,237,0.22); color: #7c3aed;">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z"/>
                    </svg>
                    Step 02
                </div>

                {{-- Big number --}}
                <span class="hbp-steps-num"
                      style="background: linear-gradient(135deg, #6d28d9 0%, #7c3aed 55%, #a78bfa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    02
                </span>

                {{-- Icon --}}
                <div class="hbp-steps-icon"
                     style="background: linear-gradient(135deg, #ede9fe, #ddd6fe); border: 1px solid rgba(124,58,237,0.2);">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9"/>
                        <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>
                        <path d="M15 5l3 3"/>
                    </svg>
                </div>

                <h3 class="hbp-steps-title">Customize Your Branding</h3>
                <p class="hbp-steps-desc">Upload your logo, set your brand colors, configure your domain and hotel name. The setup guide walks you through every setting in minutes.</p>

                <ul class="hbp-steps-list">
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(124,58,237,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Logo, colors &amp; domain — yours
                    </li>
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(124,58,237,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Add rooms, photos &amp; pricing
                    </li>
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(124,58,237,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Connect your payment gateway
                    </li>
                </ul>

                <div class="hbp-steps-card-cta" style="color: #7c3aed;">
                    <span>See customization options</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>

            </div>

            {{-- ── Arrow 2→3 (desktop) ── --}}
            <div class="hbp-steps-arrow">
                <div class="hbp-steps-arrow-inner">
                    <div class="hbp-steps-arrow-line"></div>
                    <div class="hbp-steps-arrow-head"></div>
                </div>
                <span class="hbp-steps-arrow-label">then</span>
            </div>

            {{-- ── Arrow 2→3 (mobile) ── --}}
            <div class="hbp-steps-arrow-mobile" style="margin: 16px 0;">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#93c5fd" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5v14M5 12l7 7 7-7"/>
                </svg>
            </div>

            {{-- ══════════════════
                 STEP 3
            ══════════════════ --}}
            <div class="hbp-steps-card hbp-steps-fade" style="transition-delay: 0.22s;">

                {{-- Watermark --}}
                <span class="hbp-steps-watermark" style="color: #16a34a;">03</span>

                {{-- Step pill --}}
                <div class="hbp-steps-pill"
                     style="background: rgba(22,163,74,0.08); border: 1px solid rgba(22,163,74,0.22); color: #16a34a;">
                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z"/>
                    </svg>
                    Step 03
                </div>

                {{-- Big number --}}
                <span class="hbp-steps-num"
                      style="background: linear-gradient(135deg, #15803d 0%, #16a34a 55%, #4ade80 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    03
                </span>

                {{-- Icon --}}
                <div class="hbp-steps-icon"
                     style="background: linear-gradient(135deg, #dcfce7, #bbf7d0); border: 1px solid rgba(22,163,74,0.2);">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                        <path d="M9 16l2 2 4-4"/>
                    </svg>
                </div>

                <h3 class="hbp-steps-title">Start Accepting Hotel Bookings</h3>
                <p class="hbp-steps-desc">Go live and watch direct bookings roll in. Guests search, book, and pay — confirmations fire automatically, no third-party OTA taking a cut.</p>

                <ul class="hbp-steps-list">
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(22,163,74,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Bookings &amp; payments go live instantly
                    </li>
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(22,163,74,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Auto-confirmations sent to guests
                    </li>
                    <li>
                        <span class="hbp-steps-dot" style="background: rgba(22,163,74,0.1);">
                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        0% commission — all revenue is yours
                    </li>
                </ul>

                <div class="hbp-steps-card-cta" style="color: #16a34a;">
                    <span>View live demo</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>

            </div>

        </div>{{-- end steps row --}}

        {{-- ═══════════════════════════
             BOTTOM CTA
        ═══════════════════════════ --}}
        <div class="hbp-steps-bottom hbp-steps-fade" style="transition-delay: 0.30s;">

            {{-- Timeline summary bar --}}
            <div class="inline-flex items-center gap-3 mb-8 px-5 py-3 rounded-full"
                 style="background: #f1f5f9; border: 1px solid #e2e8f0;">
                <span style="font-size: 12px; color: #64748b; font-weight: 600;">Total setup time:</span>
                <span style="font-size: 13px; font-weight: 800; color: #0f172a; letter-spacing: -0.01em;">Under 24 hours</span>
                <span style="width: 5px; height: 5px; border-radius: 50%; background: #e2e8f0; display: block;"></span>
                <span style="font-size: 12px; color: #64748b; font-weight: 600;">No dev team required</span>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="{{ route('demo') }}"
                   class="inline-flex items-center gap-2.5 text-white font-bold px-8 py-3.5 rounded-xl"
                   style="background: #3B82F6; box-shadow: 0 4px 22px rgba(59,130,246,0.38); font-size: 14.5px; transition: transform 0.18s ease, box-shadow 0.18s ease;"
                   onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 30px rgba(59,130,246,0.45)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 22px rgba(59,130,246,0.38)'">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/>
                    </svg>
                    Get Started Today
                </a>
                <a href="{{ route('demo') }}"
                   class="inline-flex items-center gap-2 font-semibold px-8 py-3.5 rounded-xl"
                   style="background: #ffffff; border: 2px solid #e2e8f0; color: #374151; font-size: 14.5px; transition: border-color 0.18s ease, transform 0.18s ease;"
                   onmouseover="this.style.borderColor='#93c5fd';this.style.transform='translateY(-2px)'"
                   onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='translateY(0)'">
                    Watch Demo
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/>
                    </svg>
                </a>
            </div>

        </div>

    </div>
</section>

<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('hbp-steps-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.10 });

    document.querySelectorAll('#hbp-steps .hbp-steps-fade').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
