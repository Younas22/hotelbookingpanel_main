{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — PREMIUM HERO SECTION
     Include with: @include('partials._hero-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Hero Section ─── */
    #hbp-hero {
        background: #ffffff;
        font-family: 'Inter', sans-serif;
    }

    /* Animated trust badge dot */
    @keyframes hbp-ping {
        75%, 100% { transform: scale(2); opacity: 0; }
    }
    .hbp-ping { animation: hbp-ping 1.6s cubic-bezier(0, 0, 0.2, 1) infinite; }

    /* Primary CTA hover lift */
    .hbp-btn-primary {
        background: #3B82F6;
        box-shadow: 0 4px 20px rgba(59, 130, 246, 0.38);
        transition: transform 0.18s ease, box-shadow 0.18s ease, background 0.18s ease;
    }
    .hbp-btn-primary:hover {
        background: #2563eb;
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(59, 130, 246, 0.45);
    }

    /* Secondary CTA */
    .hbp-btn-secondary {
        background: #ffffff;
        border: 2px solid #e2e8f0;
        transition: border-color 0.18s ease, color 0.18s ease, transform 0.18s ease;
    }
    .hbp-btn-secondary:hover {
        border-color: #93c5fd;
        color: #2563eb;
        transform: translateY(-2px);
    }

    /* Trust badge items */
    .hbp-trust-badge {
        background: #f0f9ff;
        border: 1px solid rgba(59, 130, 246, 0.18);
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
    .hbp-trust-badge:hover {
        border-color: rgba(59, 130, 246, 0.4);
        box-shadow: 0 2px 12px rgba(59, 130, 246, 0.08);
    }

    /* Dashboard mockup card */
    .hbp-mockup-card {
        box-shadow: 0 30px 70px rgba(0,0,0,0.13), 0 0 0 1px rgba(0,0,0,0.05);
    }

    /* Floating notification badges */
    .hbp-float-badge {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        box-shadow: 0 8px 28px rgba(0,0,0,0.12);
        animation: hbp-float-badge 3s ease-in-out infinite;
    }
    .hbp-float-badge-2 {
        animation-delay: 1.5s;
    }
    @keyframes hbp-float-badge {
        0%, 100% { transform: translateY(0); }
        50%       { transform: translateY(-5px); }
    }

    /* Sidebar nav item hover */
    .hbp-sidebar-nav-item:hover {
        background: rgba(255,255,255,0.06);
    }

    /* Responsive: stack on mobile */
    @media (max-width: 1023px) {
        #hbp-hero .hbp-dashboard-wrap {
            display: none;
        }
    }
</style>

<section id="hbp-hero" class="relative overflow-hidden" style="min-height: 100vh; display: flex; align-items: center;">

    {{-- ─── Background decorations ─── --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        {{-- Main blue radial orb (top right) --}}
        <div class="absolute rounded-full" style="top:-180px; right:-180px; width:680px; height:680px; background: radial-gradient(circle, rgba(59,130,246,0.11) 0%, rgba(99,102,241,0.05) 45%, transparent 70%);"></div>
        {{-- Secondary orb (bottom left) --}}
        <div class="absolute rounded-full" style="bottom:-120px; left:-100px; width:440px; height:440px; background: radial-gradient(circle, rgba(14,165,233,0.07) 0%, transparent 70%);"></div>
        {{-- Subtle dot grid --}}
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 28px 28px; opacity: 0.4;"></div>
        {{-- Top accent bar --}}
        <div class="absolute top-0 left-0 right-0 h-[3px]" style="background: linear-gradient(90deg, transparent 0%, #3B82F6 30%, #60a5fa 70%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 xl:gap-16 items-center">

            {{-- ════════════════════════════════
                 LEFT COLUMN — Copy & CTAs
            ════════════════════════════════ --}}
            <div>

                {{-- Product label badge --}}
                <div class="inline-flex items-center gap-2.5 mb-7 px-4 py-2 rounded-full" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.2);">
                    <span class="relative flex flex-shrink-0" style="width:8px; height:8px;">
                        <span class="hbp-ping absolute inline-flex w-full h-full rounded-full" style="background: rgba(59,130,246,0.6);"></span>
                        <span class="relative inline-flex rounded-full w-2 h-2" style="background:#3B82F6;"></span>
                    </span>
                    <span class="text-xs font-bold tracking-[0.12em] uppercase" style="color:#2563eb;">HotelBookingPanel — White-Label SaaS Platform</span>
                </div>

                {{-- Main headline --}}
                <h1 class="font-black tracking-tight leading-[1.07] mb-6" style="font-size: clamp(2.2rem, 4vw, 3.35rem); color: #0f172a;">
                    Launch Your Own<br>
                    <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        Hotel Booking Website
                    </span>
                </h1>

                {{-- Subheadline --}}
                <p class="leading-relaxed mb-9" style="font-size:1.065rem; color:#475569; max-width:490px;">
                    Complete white-label hotel booking platform with full source code ownership. Sell hotels online under your own brand with direct bookings, online payments, customer management, and admin control.
                </p>

                {{-- ─── 2×2 Trust Badge Grid ─── --}}
                <div class="grid grid-cols-2 gap-3 mb-9" style="max-width: 480px;">

                    <div class="hbp-trust-badge flex items-center gap-3 px-4 py-3.5 rounded-xl">
                        <span class="flex-shrink-0 flex items-center justify-center w-7 h-7 rounded-lg" style="background: rgba(59,130,246,0.12);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </span>
                        <span class="font-semibold text-sm" style="color:#1e293b;">Full Source Code</span>
                    </div>

                    <div class="hbp-trust-badge flex items-center gap-3 px-4 py-3.5 rounded-xl">
                        <span class="flex-shrink-0 flex items-center justify-center w-7 h-7 rounded-lg" style="background: rgba(59,130,246,0.12);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
                            </svg>
                        </span>
                        <span class="font-semibold text-sm" style="color:#1e293b;">White-Label Branding</span>
                    </div>

                    <div class="hbp-trust-badge flex items-center gap-3 px-4 py-3.5 rounded-xl">
                        <span class="flex-shrink-0 flex items-center justify-center w-7 h-7 rounded-lg" style="background: rgba(59,130,246,0.12);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                            </svg>
                        </span>
                        <span class="font-semibold text-sm" style="color:#1e293b;">One-Time Payment</span>
                    </div>

                    <div class="hbp-trust-badge flex items-center gap-3 px-4 py-3.5 rounded-xl">
                        <span class="flex-shrink-0 flex items-center justify-center w-7 h-7 rounded-lg" style="background: rgba(59,130,246,0.12);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </span>
                        <span class="font-semibold text-sm" style="color:#1e293b;">Lifetime Ownership</span>
                    </div>

                </div>

                {{-- ─── CTA Buttons ─── --}}
                <div class="flex flex-col sm:flex-row gap-3 mb-5">

                    {{-- Primary: View Demo --}}
                    <a href="{{ route('demo') }}"
                       class="hbp-btn-primary inline-flex items-center justify-center gap-2.5 text-white font-bold px-8 py-4 rounded-xl"
                       style="font-size:15px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <polygon points="10 8 16 12 10 16 10 8"/>
                        </svg>
                        View Demo
                    </a>

                    {{-- Secondary: View Pricing --}}
                    <a href="{{ route('pricing') }}"
                       class="hbp-btn-secondary inline-flex items-center justify-center gap-2 font-semibold px-8 py-4 rounded-xl"
                       style="font-size:15px; color:#374151;">
                        View Pricing
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>

                </div>

                {{-- Micro-trust line --}}
                <p style="font-size:12px; color:#94a3b8;">
                    No monthly fees &nbsp;·&nbsp; No subscriptions &nbsp;·&nbsp; Own the platform forever
                </p>

                {{-- Social proof strip --}}
                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mt-8 pt-8" style="border-top: 1px solid #f1f5f9;">
                    <div class="flex items-center gap-2" style="font-size:13px; color:#64748b;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        Laravel + Vue.js Stack
                    </div>
                    <div class="flex items-center gap-2" style="font-size:13px; color:#64748b;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        Stripe &amp; PayPal Ready
                    </div>
                    <div class="flex items-center gap-2" style="font-size:13px; color:#64748b;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        Deploy in 30 Minutes
                    </div>
                </div>

            </div>

            {{-- ════════════════════════════════
                 RIGHT COLUMN — Dashboard Mockup
            ════════════════════════════════ --}}
            <div class="hbp-dashboard-wrap relative">

                {{-- Background glow behind mockup --}}
                <div class="absolute pointer-events-none" style="inset:-30px; background: radial-gradient(ellipse at 60% 40%, rgba(59,130,246,0.14) 0%, transparent 65%); filter:blur(25px); border-radius:50%;"></div>

                {{-- ─── Browser Window Frame ─── --}}
                <div class="hbp-mockup-card relative rounded-2xl overflow-hidden" style="background:#ffffff;">

                    {{-- Browser chrome bar --}}
                    <div class="flex items-center gap-2 px-4 py-3" style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                        <span class="w-3 h-3 rounded-full" style="background:#fc5a5a;"></span>
                        <span class="w-3 h-3 rounded-full" style="background:#fdbc40;"></span>
                        <span class="w-3 h-3 rounded-full" style="background:#34c84a;"></span>
                        <div class="flex-1 mx-4">
                            <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-md" style="background:#eef2f7; border:1px solid #e2e8f0; max-width:260px; margin:0 auto;">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                <span style="font-size:10px; color:#94a3b8; font-weight:500;">admin.yourhotelbooking.com/dashboard</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <div class="w-6 h-6 rounded-md flex items-center justify-center" style="background:#eef2f7;">
                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
                            </div>
                        </div>
                    </div>

                    {{-- ─── Dashboard Content ─── --}}
                    <div class="flex" style="height:430px; font-family:'Inter',sans-serif;">

                        {{-- Sidebar --}}
                        <div class="flex-shrink-0 flex flex-col py-4 gap-0.5" style="width:155px; background:#1e293b; padding-left:12px; padding-right:12px;">

                            {{-- Brand --}}
                            <div class="flex items-center gap-2 px-2 pb-4 mb-2" style="border-bottom:1px solid rgba(255,255,255,0.07);">
                                <div class="flex items-center justify-center w-7 h-7 rounded-lg flex-shrink-0" style="background:linear-gradient(135deg,#3B82F6,#2563eb);">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline stroke="white" stroke-width="1.5" points="9 22 9 12 15 12 15 22" fill="none"/></svg>
                                </div>
                                <span style="font-size:11.5px; font-weight:800; color:#ffffff; letter-spacing:-0.01em;">HotelPanel</span>
                            </div>

                            {{-- Active: Dashboard --}}
                            <div class="flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg" style="background:rgba(59,130,246,0.22);">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                                <span style="font-size:11px; font-weight:700; color:#93c5fd;">Dashboard</span>
                            </div>

                            {{-- Hotels --}}
                            <div class="hbp-sidebar-nav-item flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                <span style="font-size:11px; color:#64748b;">Hotels</span>
                                <span class="ml-auto" style="font-size:9px; background:rgba(59,130,246,0.2); color:#60a5fa; padding:1px 6px; border-radius:99px; font-weight:700;">47</span>
                            </div>

                            {{-- Bookings --}}
                            <div class="hbp-sidebar-nav-item flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                                <span style="font-size:11px; color:#64748b;">Bookings</span>
                                <span class="ml-auto" style="font-size:9px; background:rgba(34,197,94,0.18); color:#4ade80; padding:1px 5px; border-radius:99px; font-weight:700;">12</span>
                            </div>

                            {{-- Reservations --}}
                            <div class="hbp-sidebar-nav-item flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                <span style="font-size:11px; color:#64748b;">Reservations</span>
                            </div>

                            {{-- Customers --}}
                            <div class="hbp-sidebar-nav-item flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                                <span style="font-size:11px; color:#64748b;">Customers</span>
                            </div>

                            {{-- Payments --}}
                            <div class="hbp-sidebar-nav-item flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                                <span style="font-size:11px; color:#64748b;">Payments</span>
                            </div>

                            {{-- Reports --}}
                            <div class="hbp-sidebar-nav-item flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                                <span style="font-size:11px; color:#64748b;">Reports</span>
                            </div>

                            {{-- Divider + Settings --}}
                            <div class="mt-auto pt-3" style="border-top:1px solid rgba(255,255,255,0.07);">
                                <div class="hbp-sidebar-nav-item flex items-center gap-2.5 px-2.5 py-2.5 rounded-lg cursor-pointer">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
                                    <span style="font-size:11px; color:#64748b;">Settings</span>
                                </div>
                            </div>
                        </div>

                        {{-- ─── Main Content Area ─── --}}
                        <div class="flex-1 overflow-hidden" style="background:#f8fafc; padding:14px; display:flex; flex-direction:column; gap:10px;">

                            {{-- Page header --}}
                            <div class="flex items-center justify-between flex-shrink-0">
                                <div>
                                    <h2 style="font-size:13px; font-weight:800; color:#0f172a; margin:0 0 1px;">Dashboard Overview</h2>
                                    <p style="font-size:9px; color:#94a3b8; margin:0;">Welcome back, Admin · June 2026</p>
                                </div>
                                <button style="font-size:9px; font-weight:700; background:#3B82F6; color:white; border:none; border-radius:7px; padding:5px 12px; cursor:pointer; display:flex; align-items:center; gap:4px;">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                    Add Hotel
                                </button>
                            </div>

                            {{-- ─── Stats Row ─── --}}
                            <div class="grid grid-cols-4 gap-2 flex-shrink-0">

                                <div style="background:white; border:1px solid #e2e8f0; border-radius:10px; padding:10px 12px; box-shadow:0 1px 3px rgba(0,0,0,0.04);">
                                    <div style="font-size:8px; color:#94a3b8; font-weight:600; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:4px;">Revenue</div>
                                    <div style="font-size:16px; font-weight:900; color:#0f172a; line-height:1;">$48,720</div>
                                    <div style="font-size:8px; color:#16a34a; margin-top:3px; font-weight:700; display:flex; align-items:center; gap:2px;">
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                                        +12.4% this month
                                    </div>
                                </div>

                                <div style="background:white; border:1px solid #e2e8f0; border-radius:10px; padding:10px 12px; box-shadow:0 1px 3px rgba(0,0,0,0.04);">
                                    <div style="font-size:8px; color:#94a3b8; font-weight:600; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:4px;">Bookings</div>
                                    <div style="font-size:16px; font-weight:900; color:#0f172a; line-height:1;">1,284</div>
                                    <div style="font-size:8px; color:#16a34a; margin-top:3px; font-weight:700; display:flex; align-items:center; gap:2px;">
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                                        +8.1% vs last month
                                    </div>
                                </div>

                                <div style="background:white; border:1px solid #e2e8f0; border-radius:10px; padding:10px 12px; box-shadow:0 1px 3px rgba(0,0,0,0.04);">
                                    <div style="font-size:8px; color:#94a3b8; font-weight:600; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:4px;">Hotels Listed</div>
                                    <div style="font-size:16px; font-weight:900; color:#0f172a; line-height:1;">47</div>
                                    <div style="font-size:8px; color:#3B82F6; margin-top:3px; font-weight:700;">+3 new this week</div>
                                </div>

                                <div style="background:white; border:1px solid #e2e8f0; border-radius:10px; padding:10px 12px; box-shadow:0 1px 3px rgba(0,0,0,0.04);">
                                    <div style="font-size:8px; color:#94a3b8; font-weight:600; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:4px;">Customers</div>
                                    <div style="font-size:16px; font-weight:900; color:#0f172a; line-height:1;">892</div>
                                    <div style="font-size:8px; color:#3B82F6; margin-top:3px; font-weight:700;">Active members</div>
                                </div>

                            </div>

                            {{-- ─── Chart + Hotel List ─── --}}
                            <div class="grid grid-cols-5 gap-2 flex-shrink-0">

                                {{-- Revenue Bar Chart --}}
                                <div class="col-span-3" style="background:white; border:1px solid #e2e8f0; border-radius:10px; padding:11px; box-shadow:0 1px 3px rgba(0,0,0,0.04);">
                                    <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:8px;">
                                        <span style="font-size:9px; font-weight:800; color:#0f172a;">Revenue Overview</span>
                                        <div style="display:flex; gap:6px; align-items:center;">
                                            <span style="font-size:7.5px; color:#94a3b8; display:flex; align-items:center; gap:2px;"><span style="display:inline-block;width:7px;height:7px;border-radius:2px;background:#dbeafe;"></span>2025</span>
                                            <span style="font-size:7.5px; color:#64748b; display:flex; align-items:center; gap:2px;"><span style="display:inline-block;width:7px;height:7px;border-radius:2px;background:#3B82F6;"></span>2026</span>
                                        </div>
                                    </div>
                                    <svg viewBox="0 0 210 72" xmlns="http://www.w3.org/2000/svg" style="width:100%; height:68px; overflow:visible;">
                                        <defs>
                                            <linearGradient id="barGrad" x1="0" y1="0" x2="0" y2="1">
                                                <stop offset="0%" stop-color="#3B82F6"/>
                                                <stop offset="100%" stop-color="#60a5fa"/>
                                            </linearGradient>
                                        </defs>
                                        {{-- Horizontal grid lines --}}
                                        <line x1="0" y1="58" x2="210" y2="58" stroke="#f1f5f9" stroke-width="1"/>
                                        <line x1="0" y1="40" x2="210" y2="40" stroke="#f1f5f9" stroke-width="1" stroke-dasharray="3,3"/>
                                        <line x1="0" y1="22" x2="210" y2="22" stroke="#f1f5f9" stroke-width="1" stroke-dasharray="3,3"/>
                                        {{-- Previous year bars (light) --}}
                                        <rect x="5"   y="46" width="9" height="12" rx="2.5" fill="#dbeafe"/>
                                        <rect x="26"  y="39" width="9" height="19" rx="2.5" fill="#dbeafe"/>
                                        <rect x="47"  y="33" width="9" height="25" rx="2.5" fill="#bfdbfe"/>
                                        <rect x="68"  y="28" width="9" height="30" rx="2.5" fill="#bfdbfe"/>
                                        <rect x="89"  y="22" width="9" height="36" rx="2.5" fill="#93c5fd"/>
                                        <rect x="110" y="18" width="9" height="40" rx="2.5" fill="#93c5fd"/>
                                        <rect x="131" y="20" width="9" height="38" rx="2.5" fill="#93c5fd"/>
                                        <rect x="152" y="16" width="9" height="42" rx="2.5" fill="#60a5fa"/>
                                        <rect x="173" y="12" width="9" height="46" rx="2.5" fill="#3B82F6"/>
                                        {{-- Current year bars (dark blue, slightly offset) --}}
                                        <rect x="15"  y="50" width="9" height="8"  rx="2.5" fill="url(#barGrad)" opacity="0.5"/>
                                        <rect x="36"  y="44" width="9" height="14" rx="2.5" fill="url(#barGrad)" opacity="0.5"/>
                                        <rect x="57"  y="36" width="9" height="22" rx="2.5" fill="url(#barGrad)" opacity="0.6"/>
                                        <rect x="78"  y="30" width="9" height="28" rx="2.5" fill="url(#barGrad)" opacity="0.7"/>
                                        <rect x="99"  y="20" width="9" height="38" rx="2.5" fill="url(#barGrad)" opacity="0.8"/>
                                        <rect x="120" y="13" width="9" height="45" rx="2.5" fill="url(#barGrad)"/>
                                        <rect x="141" y="10" width="9" height="48" rx="2.5" fill="url(#barGrad)"/>
                                        <rect x="162" y="6"  width="9" height="52" rx="2.5" fill="url(#barGrad)"/>
                                        <rect x="183" y="2"  width="9" height="56" rx="2.5" fill="url(#barGrad)"/>
                                        {{-- Month labels --}}
                                        <text x="12"  y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">Jan</text>
                                        <text x="33"  y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">Feb</text>
                                        <text x="54"  y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">Mar</text>
                                        <text x="75"  y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">Apr</text>
                                        <text x="96"  y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">May</text>
                                        <text x="117" y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">Jun</text>
                                        <text x="138" y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">Jul</text>
                                        <text x="159" y="68" text-anchor="middle" font-size="5" fill="#cbd5e1" font-family="Inter,sans-serif">Aug</text>
                                        <text x="180" y="68" text-anchor="middle" font-size="5" fill="#3B82F6" font-family="Inter,sans-serif" font-weight="700">Sep</text>
                                    </svg>
                                </div>

                                {{-- Top Hotels --}}
                                <div class="col-span-2" style="background:white; border:1px solid #e2e8f0; border-radius:10px; padding:11px; box-shadow:0 1px 3px rgba(0,0,0,0.04);">
                                    <div style="font-size:9px; font-weight:800; color:#0f172a; margin-bottom:9px;">Top Performing</div>
                                    <div style="display:flex; flex-direction:column; gap:8px;">

                                        <div style="display:flex; align-items:center; gap:8px;">
                                            <div style="width:28px; height:28px; border-radius:7px; flex-shrink:0; background:linear-gradient(135deg,#dbeafe 0%,#bfdbfe 100%); display:flex; align-items:center; justify-content:center;">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                            </div>
                                            <div style="flex:1; min-width:0;">
                                                <div style="font-size:9px; font-weight:700; color:#0f172a; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Grand Palace Hotel</div>
                                                <div style="font-size:7.5px; color:#94a3b8;">Dubai &nbsp;·&nbsp; ★ 4.9</div>
                                            </div>
                                            <div style="font-size:9px; font-weight:800; color:#0f172a;">$14k</div>
                                        </div>

                                        <div style="display:flex; align-items:center; gap:8px;">
                                            <div style="width:28px; height:28px; border-radius:7px; flex-shrink:0; background:linear-gradient(135deg,#e0f2fe 0%,#bae6fd 100%); display:flex; align-items:center; justify-content:center;">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                            </div>
                                            <div style="flex:1; min-width:0;">
                                                <div style="font-size:9px; font-weight:700; color:#0f172a; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Skyline Resort</div>
                                                <div style="font-size:7.5px; color:#94a3b8;">London &nbsp;·&nbsp; ★ 4.8</div>
                                            </div>
                                            <div style="font-size:9px; font-weight:800; color:#0f172a;">$11k</div>
                                        </div>

                                        <div style="display:flex; align-items:center; gap:8px;">
                                            <div style="width:28px; height:28px; border-radius:7px; flex-shrink:0; background:linear-gradient(135deg,#ede9fe 0%,#ddd6fe 100%); display:flex; align-items:center; justify-content:center;">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                            </div>
                                            <div style="flex:1; min-width:0;">
                                                <div style="font-size:9px; font-weight:700; color:#0f172a; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Azure Cliff Retreat</div>
                                                <div style="font-size:7.5px; color:#94a3b8;">Maldives &nbsp;·&nbsp; ★ 5.0</div>
                                            </div>
                                            <div style="font-size:9px; font-weight:800; color:#0f172a;">$9k</div>
                                        </div>

                                        <div style="display:flex; align-items:center; gap:8px;">
                                            <div style="width:28px; height:28px; border-radius:7px; flex-shrink:0; background:linear-gradient(135deg,#dcfce7 0%,#bbf7d0 100%); display:flex; align-items:center; justify-content:center;">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                            </div>
                                            <div style="flex:1; min-width:0;">
                                                <div style="font-size:9px; font-weight:700; color:#0f172a; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Marina Bay Suites</div>
                                                <div style="font-size:7.5px; color:#94a3b8;">Singapore &nbsp;·&nbsp; ★ 4.7</div>
                                            </div>
                                            <div style="font-size:9px; font-weight:800; color:#0f172a;">$8k</div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            {{-- ─── Recent Reservations Table ─── --}}
                            <div style="background:white; border:1px solid #e2e8f0; border-radius:10px; overflow:hidden; box-shadow:0 1px 3px rgba(0,0,0,0.04); flex:1;">
                                {{-- Table header --}}
                                <div style="display:flex; align-items:center; justify-content:space-between; padding:8px 12px; border-bottom:1px solid #f1f5f9;">
                                    <span style="font-size:9px; font-weight:800; color:#0f172a;">Recent Reservations</span>
                                    <span style="font-size:8px; color:#3B82F6; font-weight:700; cursor:pointer;">View all →</span>
                                </div>
                                {{-- Column headings --}}
                                <div style="display:grid; grid-template-columns:2.2fr 1.2fr 1fr 1.2fr 0.9fr; padding:5px 12px; background:#fafafa; border-bottom:1px solid #f1f5f9;">
                                    <span style="font-size:7px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.06em;">Guest</span>
                                    <span style="font-size:7px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.06em;">Hotel</span>
                                    <span style="font-size:7px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.06em;">Check-in</span>
                                    <span style="font-size:7px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.06em;">Status</span>
                                    <span style="font-size:7px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.06em;">Amount</span>
                                </div>
                                {{-- Row 1 --}}
                                <div style="display:grid; grid-template-columns:2.2fr 1.2fr 1fr 1.2fr 0.9fr; padding:7px 12px; border-bottom:1px solid #fafafa; align-items:center;">
                                    <div style="display:flex; align-items:center; gap:6px;">
                                        <div style="width:18px; height:18px; border-radius:50%; background:linear-gradient(135deg,#dbeafe,#3B82F6); flex-shrink:0; display:flex; align-items:center; justify-content:center;">
                                            <span style="font-size:7px; font-weight:800; color:white;">JW</span>
                                        </div>
                                        <span style="font-size:9px; font-weight:600; color:#0f172a;">James Wilson</span>
                                    </div>
                                    <span style="font-size:8.5px; color:#475569;">Grand Palace</span>
                                    <span style="font-size:8.5px; color:#64748b;">Jun 15</span>
                                    <span style="display:inline-flex; align-items:center; gap:3px; font-size:7px; font-weight:700; color:#15803d; background:#dcfce7; padding:2px 7px; border-radius:99px; width:fit-content;">
                                        <span style="width:4px;height:4px;border-radius:50%;background:#16a34a;display:inline-block;"></span>Confirmed
                                    </span>
                                    <span style="font-size:9px; font-weight:800; color:#0f172a;">$420</span>
                                </div>
                                {{-- Row 2 --}}
                                <div style="display:grid; grid-template-columns:2.2fr 1.2fr 1fr 1.2fr 0.9fr; padding:7px 12px; border-bottom:1px solid #fafafa; align-items:center;">
                                    <div style="display:flex; align-items:center; gap:6px;">
                                        <div style="width:18px; height:18px; border-radius:50%; background:linear-gradient(135deg,#fce7f3,#ec4899); flex-shrink:0; display:flex; align-items:center; justify-content:center;">
                                            <span style="font-size:7px; font-weight:800; color:white;">PS</span>
                                        </div>
                                        <span style="font-size:9px; font-weight:600; color:#0f172a;">Priya Sharma</span>
                                    </div>
                                    <span style="font-size:8.5px; color:#475569;">Skyline Resort</span>
                                    <span style="font-size:8.5px; color:#64748b;">Jun 18</span>
                                    <span style="display:inline-flex; align-items:center; gap:3px; font-size:7px; font-weight:700; color:#0369a1; background:#e0f2fe; padding:2px 7px; border-radius:99px; width:fit-content;">
                                        <span style="width:4px;height:4px;border-radius:50%;background:#0284c7;display:inline-block;"></span>Pending
                                    </span>
                                    <span style="font-size:9px; font-weight:800; color:#0f172a;">$780</span>
                                </div>
                                {{-- Row 3 --}}
                                <div style="display:grid; grid-template-columns:2.2fr 1.2fr 1fr 1.2fr 0.9fr; padding:7px 12px; align-items:center;">
                                    <div style="display:flex; align-items:center; gap:6px;">
                                        <div style="width:18px; height:18px; border-radius:50%; background:linear-gradient(135deg,#fef3c7,#f59e0b); flex-shrink:0; display:flex; align-items:center; justify-content:center;">
                                            <span style="font-size:7px; font-weight:800; color:white;">MR</span>
                                        </div>
                                        <span style="font-size:9px; font-weight:600; color:#0f172a;">Marco Rossi</span>
                                    </div>
                                    <span style="font-size:8.5px; color:#475569;">Azure Cliff</span>
                                    <span style="font-size:8.5px; color:#64748b;">Jun 20</span>
                                    <span style="display:inline-flex; align-items:center; gap:3px; font-size:7px; font-weight:700; color:#15803d; background:#dcfce7; padding:2px 7px; border-radius:99px; width:fit-content;">
                                        <span style="width:4px;height:4px;border-radius:50%;background:#16a34a;display:inline-block;"></span>Confirmed
                                    </span>
                                    <span style="font-size:9px; font-weight:800; color:#0f172a;">$1,240</span>
                                </div>
                            </div>

                        </div>{{-- end main content --}}
                    </div>{{-- end flex dashboard --}}
                </div>{{-- end browser frame --}}

                {{-- ─── Floating notification: New Booking ─── --}}
                <div class="hbp-float-badge absolute flex items-center gap-3 px-3.5 py-2.5 rounded-xl"
                     style="top:-18px; right:-14px; z-index:20;">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full flex-shrink-0" style="background:#dcfce7;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <div>
                        <div style="font-size:11px; font-weight:800; color:#0f172a;">New Booking!</div>
                        <div style="font-size:9.5px; color:#64748b;">Grand Palace &nbsp;·&nbsp; $640</div>
                    </div>
                </div>

                {{-- ─── Floating notification: Payment ─── --}}
                <div class="hbp-float-badge hbp-float-badge-2 absolute flex items-center gap-3 px-3.5 py-2.5 rounded-xl"
                     style="bottom:-18px; left:-14px; z-index:20;">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full flex-shrink-0" style="background:#dbeafe;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                        </svg>
                    </div>
                    <div>
                        <div style="font-size:11px; font-weight:800; color:#0f172a;">Payment Received</div>
                        <div style="font-size:9.5px; color:#64748b;">$1,240 &nbsp;via&nbsp; Stripe</div>
                    </div>
                </div>

            </div>{{-- end right column --}}

        </div>{{-- end grid --}}
    </div>{{-- end container --}}

</section>{{-- end #hbp-hero --}}
