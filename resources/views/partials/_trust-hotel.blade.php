{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — TRUST SECTION
     Include with: @include('partials._trust-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Trust Section ─── */
    #hbp-trust {
        background: #ffffff;
        border-top: 1px solid #f1f5f9;
        border-bottom: 1px solid #f1f5f9;
    }

    /* Stat card hover */
    .hbp-stat-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hbp-stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(59, 130, 246, 0.10);
    }

    /* Stat number count-up shimmer */
    .hbp-stat-number {
        background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 60%, #60a5fa 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Logo marquee */
    .hbp-marquee-track {
        display: flex;
        gap: 0;
        animation: hbp-marquee 32s linear infinite;
        will-change: transform;
    }
    .hbp-marquee-track:hover {
        animation-play-state: paused;
    }
    @keyframes hbp-marquee {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    /* Individual logo pill */
    .hbp-logo-pill {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 10px 22px;
        margin: 0 10px;
        border-radius: 12px;
        border: 1px solid #e9eef5;
        background: #fafbff;
        white-space: nowrap;
        flex-shrink: 0;
        transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        cursor: default;
        user-select: none;
    }
    .hbp-logo-pill:hover {
        border-color: rgba(59, 130, 246, 0.3);
        box-shadow: 0 3px 14px rgba(59, 130, 246, 0.08);
        background: #f0f6ff;
    }

    .hbp-logo-pill .hbp-logo-icon {
        flex-shrink: 0;
        opacity: 0.6;
        transition: opacity 0.2s ease;
    }
    .hbp-logo-pill:hover .hbp-logo-icon {
        opacity: 1;
    }

    .hbp-logo-pill .hbp-logo-name {
        font-size: 13px;
        font-weight: 700;
        color: #9ca3af;
        letter-spacing: -0.01em;
        transition: color 0.2s ease;
    }
    .hbp-logo-pill:hover .hbp-logo-name {
        color: #374151;
    }

    /* Fade edges on marquee */
    .hbp-marquee-fade-left {
        background: linear-gradient(to right, #ffffff 0%, transparent 100%);
    }
    .hbp-marquee-fade-right {
        background: linear-gradient(to left, #ffffff 0%, transparent 100%);
    }

    /* Trust indicators row */
    .hbp-trust-chip {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 7px 16px;
        border-radius: 99px;
        font-size: 12.5px;
        font-weight: 600;
        color: #475569;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        transition: border-color 0.18s ease, color 0.18s ease;
    }
    .hbp-trust-chip:hover {
        border-color: rgba(59,130,246,0.35);
        color: #1e40af;
    }
</style>

<section id="hbp-trust" class="relative overflow-hidden" style="padding: 72px 0 64px;">

    {{-- Subtle dot texture --}}
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 24px 24px; opacity: 0.35;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ─── Section headline ─── --}}
        <div class="text-center mb-12">
            <p class="text-xs font-bold tracking-[0.18em] uppercase mb-3" style="color: #94a3b8;">
                Powering Hotel Businesses Globally
            </p>
            <h2 class="font-black tracking-tight" style="font-size: clamp(1.7rem, 3vw, 2.3rem); color: #0f172a; line-height: 1.1;">
                Trusted by Hotel Businesses
                <span style="background: linear-gradient(135deg, #1d4ed8, #3B82F6, #60a5fa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Worldwide</span>
            </h2>
        </div>

        {{-- ═══════════════════════════════
             STATS ROW — 4 Cards
        ═══════════════════════════════ --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-14">

            {{-- 100+ Hotel Businesses --}}
            <div class="hbp-stat-card flex flex-col items-center text-center px-6 py-7 rounded-2xl" style="background: #fafbff; border: 1px solid #e9eef5;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-4" style="background: linear-gradient(135deg, #dbeafe, #bfdbfe); border: 1px solid rgba(59,130,246,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <div class="hbp-stat-number font-black mb-1" style="font-size: 2.4rem; line-height: 1;">100<span style="font-size:1.6rem;">+</span></div>
                <div class="font-semibold text-sm" style="color: #374151;">Hotel Businesses</div>
                <div class="text-xs mt-1" style="color: #94a3b8;">Launched &amp; live globally</div>
            </div>

            {{-- 15 Minutes Deployment --}}
            <div class="hbp-stat-card flex flex-col items-center text-center px-6 py-7 rounded-2xl" style="background: #fafbff; border: 1px solid #e9eef5;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-4" style="background: linear-gradient(135deg, #dcfce7, #bbf7d0); border: 1px solid rgba(22,163,74,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div class="font-black mb-1" style="font-size: 2.4rem; line-height: 1; background: linear-gradient(135deg, #15803d, #16a34a, #4ade80); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">15<span style="font-size:1.3rem;"> min</span></div>
                <div class="font-semibold text-sm" style="color: #374151;">Deployment Time</div>
                <div class="text-xs mt-1" style="color: #94a3b8;">From purchase to live site</div>
            </div>

            {{-- Lifetime Ownership --}}
            <div class="hbp-stat-card flex flex-col items-center text-center px-6 py-7 rounded-2xl" style="background: #fafbff; border: 1px solid #e9eef5;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-4" style="background: linear-gradient(135deg, #fef3c7, #fde68a); border: 1px solid rgba(217,119,6,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4" stroke="#d97706" stroke-width="1.8"/>
                    </svg>
                </div>
                <div class="font-black mb-1" style="font-size: 2.4rem; line-height: 1; background: linear-gradient(135deg, #b45309, #d97706, #fbbf24); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">∞</div>
                <div class="font-semibold text-sm" style="color: #374151;">Lifetime Ownership</div>
                <div class="text-xs mt-1" style="color: #94a3b8;">Pay once, own forever</div>
            </div>

            {{-- 24/7 Support --}}
            <div class="hbp-stat-card flex flex-col items-center text-center px-6 py-7 rounded-2xl" style="background: #fafbff; border: 1px solid #e9eef5;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-4" style="background: linear-gradient(135deg, #ede9fe, #ddd6fe); border: 1px solid rgba(124,58,237,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                        <line x1="9" y1="10" x2="15" y2="10"/>
                        <line x1="12" y1="7" x2="12" y2="13"/>
                    </svg>
                </div>
                <div class="font-black mb-1" style="font-size: 2.4rem; line-height: 1; background: linear-gradient(135deg, #5b21b6, #7c3aed, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">24/7</div>
                <div class="font-semibold text-sm" style="color: #374151;">Expert Support</div>
                <div class="text-xs mt-1" style="color: #94a3b8;">Always here when you need us</div>
            </div>

        </div>

        {{-- ═══════════════════════════════
             LOGOS MARQUEE
        ═══════════════════════════════ --}}
        <div class="mb-10">
            <p class="text-center text-xs font-semibold tracking-[0.16em] uppercase mb-6" style="color: #cbd5e1;">
                Hotels &amp; resorts running on HotelBookingPanel
            </p>

            {{-- Marquee wrapper with fade edges --}}
            <div class="relative overflow-hidden" style="mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%); -webkit-mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);">
                <div style="display: flex; overflow: visible;">
                    <div class="hbp-marquee-track">

                        {{-- ── SET A (14 logos) ── --}}

                        {{-- Grand Vista Hotels --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            <span class="hbp-logo-name">Grand Vista Hotels</span>
                        </div>

                        {{-- Azure Resorts --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                            <span class="hbp-logo-name">Azure Resorts</span>
                        </div>

                        {{-- Prestige Suites --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <span class="hbp-logo-name">Prestige Suites</span>
                        </div>

                        {{-- Coastal Stay --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                            <span class="hbp-logo-name">Coastal Stay</span>
                        </div>

                        {{-- Horizon Hotels --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                            <span class="hbp-logo-name">Horizon Hotels</span>
                        </div>

                        {{-- Skyline Residences --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                            <span class="hbp-logo-name">Skyline Residences</span>
                        </div>

                        {{-- BlueBay Hotels --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12M12 12C12 7 7 3 2 3M12 12C12 7 17 3 22 3M12 12C9.5 17 6.5 19.5 2 20M12 12C14.5 17 17.5 19.5 22 20"/></svg>
                            <span class="hbp-logo-name">BlueBay Hotels</span>
                        </div>

                        {{-- The Palace Group --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            <span class="hbp-logo-name">The Palace Group</span>
                        </div>

                        {{-- Serene Escapes --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0118 0v6"/><path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3v5zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3v5z"/></svg>
                            <span class="hbp-logo-name">Serene Escapes</span>
                        </div>

                        {{-- Royal Nest Inn --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#b45309" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                            <span class="hbp-logo-name">Royal Nest Inn</span>
                        </div>

                        {{-- Verdant Valley Resort --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#15803d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            <span class="hbp-logo-name">Verdant Valley Resort</span>
                        </div>

                        {{-- Summit Peak Lodge --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 20 2 20"/><line x1="12" y1="8" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            <span class="hbp-logo-name">Summit Peak Lodge</span>
                        </div>

                        {{-- Harbor Lights Hotel --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0369a1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                            <span class="hbp-logo-name">Harbor Lights Hotel</span>
                        </div>

                        {{-- Crimson Spire Hotel --}}
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
                            <span class="hbp-logo-name">Crimson Spire Hotel</span>
                        </div>

                        {{-- ── SET B (exact duplicate for seamless loop) ── --}}

                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            <span class="hbp-logo-name">Grand Vista Hotels</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                            <span class="hbp-logo-name">Azure Resorts</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <span class="hbp-logo-name">Prestige Suites</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                            <span class="hbp-logo-name">Coastal Stay</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                            <span class="hbp-logo-name">Horizon Hotels</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                            <span class="hbp-logo-name">Skyline Residences</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12M12 12C12 7 7 3 2 3M12 12C12 7 17 3 22 3M12 12C9.5 17 6.5 19.5 2 20M12 12C14.5 17 17.5 19.5 22 20"/></svg>
                            <span class="hbp-logo-name">BlueBay Hotels</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            <span class="hbp-logo-name">The Palace Group</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0118 0v6"/><path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3v5zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3v5z"/></svg>
                            <span class="hbp-logo-name">Serene Escapes</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#b45309" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                            <span class="hbp-logo-name">Royal Nest Inn</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#15803d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            <span class="hbp-logo-name">Verdant Valley Resort</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 20 2 20"/><line x1="12" y1="8" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            <span class="hbp-logo-name">Summit Peak Lodge</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0369a1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                            <span class="hbp-logo-name">Harbor Lights Hotel</span>
                        </div>
                        <div class="hbp-logo-pill">
                            <svg class="hbp-logo-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
                            <span class="hbp-logo-name">Crimson Spire Hotel</span>
                        </div>

                    </div>{{-- end marquee track --}}
                </div>
            </div>{{-- end marquee wrapper --}}
        </div>

        {{-- ═══════════════════════════════
             TRUST INDICATORS BOTTOM ROW
        ═══════════════════════════════ --}}
        <div class="flex flex-wrap items-center justify-center gap-3">

            <div class="hbp-trust-chip">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                SSL Secured Platform
            </div>

            <div class="hbp-trust-chip">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                GDPR Compliant
            </div>

            <div class="hbp-trust-chip">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                Stripe &amp; PayPal Ready
            </div>

            <div class="hbp-trust-chip">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                Full Source Code Included
            </div>

            <div class="hbp-trust-chip">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                No Monthly Fees Ever
            </div>

            <div class="hbp-trust-chip">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Self-Hosted &amp; Independent
            </div>

            <div class="hbp-trust-chip">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Free Installation Support
            </div>

        </div>

    </div>
</section>
