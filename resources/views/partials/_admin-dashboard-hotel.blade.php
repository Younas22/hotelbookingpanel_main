{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — ADMIN DASHBOARD SECTION
     Include with: @include('partials._admin-dashboard-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Admin Dashboard Section ─── */
    #hbp-adm {
        background: #f8fafc;
        border-top: 1px solid #f1f5f9;
        font-family: 'Inter', sans-serif;
    }

    /* Browser frame */
    .hbp-adm-frame {
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 8px 48px rgba(0,0,0,0.12), 0 0 0 1px rgba(0,0,0,0.06);
        background: #ffffff;
        transition: transform 0.28s ease, box-shadow 0.28s ease;
    }
    .hbp-adm-frame:hover {
        transform: translateY(-5px);
        box-shadow: 0 24px 64px rgba(59,130,246,0.16), 0 0 0 1px rgba(59,130,246,0.12);
    }

    /* Feature item (left list) */
    .hbp-adm-feature {
        display: flex;
        align-items: flex-start;
        gap: 13px;
        padding: 12px 14px;
        border-radius: 12px;
        border: 1px solid transparent;
        transition: background 0.18s ease, border-color 0.18s ease, transform 0.18s ease;
        cursor: default;
    }
    .hbp-adm-feature:hover {
        background: #f0f6ff;
        border-color: rgba(59,130,246,0.14);
        transform: translateX(4px);
    }
    .hbp-adm-feature.hbp-adm-feat-active {
        background: #eff6ff;
        border-color: rgba(59,130,246,0.22);
    }
    .hbp-adm-feat-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: transform 0.18s ease;
    }
    .hbp-adm-feature:hover .hbp-adm-feat-icon {
        transform: scale(1.08);
    }
    .hbp-adm-feat-title {
        font-size: 13px;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 2px;
        line-height: 1.25;
    }
    .hbp-adm-feat-desc {
        font-size: 11.5px;
        color: #64748b;
        margin: 0;
        line-height: 1.55;
    }

    /* Fade animations */
    .hbp-adm-fade {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }
    .hbp-adm-fade.hbp-adm-visible { opacity: 1; transform: translateY(0); }

    .hbp-adm-fade-left {
        opacity: 0;
        transform: translateX(-20px);
        transition: opacity 0.58s ease, transform 0.58s ease;
    }
    .hbp-adm-fade-left.hbp-adm-visible { opacity: 1; transform: translateX(0); }

    .hbp-adm-fade-right {
        opacity: 0;
        transform: translateX(20px);
        transition: opacity 0.58s ease, transform 0.58s ease;
    }
    .hbp-adm-fade-right.hbp-adm-visible { opacity: 1; transform: translateX(0); }
</style>

<section id="hbp-adm" class="relative overflow-hidden" style="padding: 96px 0 108px;">

    {{-- Dot texture --}}
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 28px 28px; opacity: 0.22;"></div>
    {{-- Top glow --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none" style="width:900px;height:300px;background:radial-gradient(ellipse at 50% 0%,rgba(59,130,246,0.07) 0%,transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═══════════════════════════════
             SECTION HEADER
        ═══════════════════════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-14 hbp-adm-fade">

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 mb-5 px-4 py-1.5 rounded-full" style="background:rgba(59,130,246,0.07);border:1px solid rgba(59,130,246,0.18);">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/>
                    <rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/>
                </svg>
                <span class="text-[11px] font-bold tracking-[0.13em] uppercase" style="color:#2563eb;">Admin Dashboard</span>
            </div>

            {{-- Title --}}
            <h2 class="font-black tracking-tight leading-[1.1] mb-4" style="font-size:clamp(1.9rem,3.5vw,2.75rem);color:#0f172a;">
                Powerful Admin Dashboard
            </h2>

            {{-- Subtitle --}}
            <p style="font-size:17px;color:#64748b;line-height:1.7;">
                One central command centre to manage every aspect of your hotel business — from reservations and revenue to coupons and analytics.
            </p>

        </div>

        {{-- ═══════════════════════════════
             2-COLUMN LAYOUT
        ═══════════════════════════════ --}}
        <div class="grid lg:grid-cols-12 gap-10 items-start">

            {{-- ── LEFT: Feature List ── --}}
            <div class="lg:col-span-5 hbp-adm-fade-left" style="transition-delay:0.08s;">
                <div class="flex flex-col gap-1">

                    {{-- 1. Manage Hotels --}}
                    <div class="hbp-adm-feature hbp-adm-feat-active">
                        <div class="hbp-adm-feat-icon" style="background:linear-gradient(135deg,#dbeafe,#bfdbfe);border:1px solid rgba(59,130,246,0.18);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hbp-adm-feat-title">Manage Hotels</p>
                            <p class="hbp-adm-feat-desc">Add unlimited hotels, rooms, amenities, pricing rules, and seasonal rates from one central place.</p>
                        </div>
                    </div>

                    {{-- 2. Manage Reservations --}}
                    <div class="hbp-adm-feature">
                        <div class="hbp-adm-feat-icon" style="background:linear-gradient(135deg,#dcfce7,#bbf7d0);border:1px solid rgba(22,163,74,0.15);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hbp-adm-feat-title">Manage Reservations</p>
                            <p class="hbp-adm-feat-desc">View, confirm, modify, or cancel bookings in real time with automated guest notifications.</p>
                        </div>
                    </div>

                    {{-- 3. Manage Customers --}}
                    <div class="hbp-adm-feature">
                        <div class="hbp-adm-feat-icon" style="background:linear-gradient(135deg,#ede9fe,#ddd6fe);border:1px solid rgba(124,58,237,0.15);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hbp-adm-feat-title">Manage Customers</p>
                            <p class="hbp-adm-feat-desc">Full guest profiles with booking history, preferences, and contact details to build lasting relationships.</p>
                        </div>
                    </div>

                    {{-- 4. Revenue Reports --}}
                    <div class="hbp-adm-feature">
                        <div class="hbp-adm-feat-icon" style="background:linear-gradient(135deg,#fef3c7,#fde68a);border:1px solid rgba(217,119,6,0.15);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/>
                                <line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hbp-adm-feat-title">Revenue Reports</p>
                            <p class="hbp-adm-feat-desc">Daily, weekly, and monthly revenue breakdowns. Export PDF reports for accounting and forecasting.</p>
                        </div>
                    </div>

                    {{-- 5. Payment Tracking --}}
                    <div class="hbp-adm-feature">
                        <div class="hbp-adm-feat-icon" style="background:linear-gradient(135deg,#e0f2fe,#bae6fd);border:1px solid rgba(2,132,199,0.15);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/>
                                <line x1="5" y1="15" x2="9" y2="15"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hbp-adm-feat-title">Payment Tracking</p>
                            <p class="hbp-adm-feat-desc">Monitor all transactions, refunds, and pending payments with full status history and reconciliation tools.</p>
                        </div>
                    </div>

                    {{-- 6. Coupon System --}}
                    <div class="hbp-adm-feature">
                        <div class="hbp-adm-feat-icon" style="background:linear-gradient(135deg,#fce7f3,#fbcfe8);border:1px solid rgba(190,24,93,0.15);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7" stroke-width="2.8"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hbp-adm-feat-title">Coupon System</p>
                            <p class="hbp-adm-feat-desc">Create discount codes with expiry dates, usage limits, and percentage or fixed-amount values.</p>
                        </div>
                    </div>

                    {{-- 7. Booking Analytics --}}
                    <div class="hbp-adm-feature">
                        <div class="hbp-adm-feat-icon" style="background:linear-gradient(135deg,#d1fae5,#a7f3d0);border:1px solid rgba(5,150,105,0.15);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hbp-adm-feat-title">Booking Analytics</p>
                            <p class="hbp-adm-feat-desc">Occupancy rates, booking trends, peak season insights, and channel performance at a glance.</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- ── RIGHT: Dashboard Mockup ── --}}
            <div class="lg:col-span-7 hbp-adm-fade-right" style="transition-delay:0.18s;">

                <div class="hbp-adm-frame">

                    {{-- Chrome bar --}}
                    <div style="background:#f8fafc;border-bottom:1px solid #e2e8f0;display:flex;align-items:center;gap:5px;padding:9px 13px;">
                        <span style="width:10px;height:10px;border-radius:50%;background:#fc5a5a;display:block;flex-shrink:0;"></span>
                        <span style="width:10px;height:10px;border-radius:50%;background:#fdbc40;display:block;flex-shrink:0;"></span>
                        <span style="width:10px;height:10px;border-radius:50%;background:#34c84a;display:block;flex-shrink:0;"></span>
                        <div style="flex:1;margin:0 8px;">
                            <div style="background:#eef2f7;border:1px solid #e2e8f0;border-radius:5px;padding:3px 9px;max-width:300px;margin:0 auto;display:flex;align-items:center;gap:5px;">
                                <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                <span style="font-size:9.5px;color:#94a3b8;font-weight:500;">admin.hotelbookingpanel.com/dashboard</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dashboard Body --}}
                    <div style="height:468px;overflow:hidden;display:flex;background:#f1f5f9;">

                        {{-- ─── SIDEBAR ─── --}}
                        <div style="width:150px;flex-shrink:0;background:#0f172a;display:flex;flex-direction:column;overflow:hidden;">

                            {{-- Logo --}}
                            <div style="padding:13px 13px 12px;border-bottom:1px solid rgba(255,255,255,0.06);">
                                <div style="display:flex;align-items:center;gap:7px;">
                                    <div style="width:26px;height:26px;border-radius:7px;background:linear-gradient(135deg,#3B82F6,#1d4ed8);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                    </div>
                                    <div>
                                        <div style="font-size:10px;font-weight:900;color:#f1f5f9;letter-spacing:-0.01em;">HotelPanel</div>
                                        <div style="font-size:7px;color:#475569;font-weight:500;">Admin Panel</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Nav label --}}
                            <div style="padding:10px 13px 5px;">
                                <span style="font-size:6.5px;font-weight:700;color:#334155;letter-spacing:0.1em;text-transform:uppercase;">Main Menu</span>
                            </div>

                            {{-- Dashboard (active) --}}
                            <div style="display:flex;align-items:center;gap:8px;padding:8px 13px;background:rgba(59,130,246,0.14);border-right:2.5px solid #3B82F6;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2.3" stroke-linecap="round"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg>
                                <span style="font-size:10px;font-weight:700;color:#93c5fd;">Dashboard</span>
                            </div>

                            {{-- Hotels --}}
                            <div style="display:flex;align-items:center;gap:8px;padding:8px 13px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                <span style="font-size:10px;color:#64748b;">Hotels</span>
                            </div>

                            {{-- Reservations --}}
                            <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 13px;">
                                <div style="display:flex;align-items:center;gap:8px;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                    <span style="font-size:10px;color:#64748b;">Reservations</span>
                                </div>
                                <span style="font-size:7.5px;font-weight:800;background:#ef4444;color:white;border-radius:99px;padding:1px 5px;line-height:1.4;">12</span>
                            </div>

                            {{-- Customers --}}
                            <div style="display:flex;align-items:center;gap:8px;padding:8px 13px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                                <span style="font-size:10px;color:#64748b;">Customers</span>
                            </div>

                            {{-- Reports --}}
                            <div style="display:flex;align-items:center;gap:8px;padding:8px 13px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                                <span style="font-size:10px;color:#64748b;">Reports</span>
                            </div>

                            {{-- Payments --}}
                            <div style="display:flex;align-items:center;gap:8px;padding:8px 13px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                                <span style="font-size:10px;color:#64748b;">Payments</span>
                            </div>

                            {{-- Coupons --}}
                            <div style="display:flex;align-items:center;gap:8px;padding:8px 13px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7" stroke-width="2.8"/></svg>
                                <span style="font-size:10px;color:#64748b;">Coupons</span>
                            </div>

                            {{-- Analytics --}}
                            <div style="display:flex;align-items:center;gap:8px;padding:8px 13px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                                <span style="font-size:10px;color:#64748b;">Analytics</span>
                            </div>

                            {{-- Spacer + User --}}
                            <div style="flex:1;"></div>
                            <div style="padding:10px 13px;border-top:1px solid rgba(255,255,255,0.06);display:flex;align-items:center;gap:7px;">
                                <div style="width:26px;height:26px;border-radius:50%;background:linear-gradient(135deg,#3B82F6,#1d4ed8);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <span style="font-size:9px;font-weight:900;color:white;">A</span>
                                </div>
                                <div>
                                    <div style="font-size:9px;font-weight:700;color:#e2e8f0;line-height:1.2;">Admin</div>
                                    <div style="font-size:7px;color:#475569;">Super Admin</div>
                                </div>
                            </div>
                        </div>

                        {{-- ─── MAIN CONTENT ─── --}}
                        <div style="flex:1;display:flex;flex-direction:column;overflow:hidden;min-width:0;">

                            {{-- Top header bar --}}
                            <div style="background:#ffffff;border-bottom:1px solid #e2e8f0;padding:10px 16px;display:flex;align-items:center;justify-content:space-between;flex-shrink:0;">
                                <div>
                                    <div style="font-size:12px;font-weight:900;color:#0f172a;line-height:1.25;">Dashboard Overview</div>
                                    <div style="font-size:8.5px;color:#94a3b8;margin-top:1px;">Mon, 1 June 2026 · Welcome back, Admin!</div>
                                </div>
                                <div style="display:flex;align-items:center;gap:7px;">
                                    <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:7px;padding:5px 9px;display:flex;align-items:center;gap:4px;">
                                        <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                        <span style="font-size:8.5px;color:#475569;font-weight:600;">This Month</span>
                                        <svg width="7" height="7" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                                    </div>
                                    <div style="position:relative;width:30px;height:30px;border-radius:8px;background:#f8fafc;border:1px solid #e2e8f0;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
                                        <span style="position:absolute;top:5px;right:6px;width:6px;height:6px;border-radius:50%;background:#ef4444;display:block;border:1.5px solid #ffffff;"></span>
                                    </div>
                                </div>
                            </div>

                            {{-- Content area --}}
                            <div style="flex:1;overflow:hidden;padding:13px 16px;display:flex;flex-direction:column;gap:10px;">

                                {{-- ── STAT CARDS ── --}}
                                <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:8px;flex-shrink:0;">

                                    {{-- Revenue --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:10px 11px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:7px;">
                                            <span style="font-size:7px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:0.07em;">Revenue</span>
                                            <div style="width:20px;height:20px;border-radius:6px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 100 7h5a3.5 3.5 0 110 7H6"/></svg>
                                            </div>
                                        </div>
                                        <div style="font-size:16px;font-weight:900;color:#0f172a;line-height:1;margin-bottom:5px;">$48.2k</div>
                                        <div style="display:flex;align-items:center;gap:2px;">
                                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.8"><polyline points="18 15 12 9 6 15"/></svg>
                                            <span style="font-size:8px;font-weight:700;color:#16a34a;">+18.2%</span>
                                        </div>
                                    </div>

                                    {{-- Bookings --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:10px 11px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:7px;">
                                            <span style="font-size:7px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:0.07em;">Bookings</span>
                                            <div style="width:20px;height:20px;border-radius:6px;background:#dcfce7;display:flex;align-items:center;justify-content:center;">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                            </div>
                                        </div>
                                        <div style="font-size:16px;font-weight:900;color:#0f172a;line-height:1;margin-bottom:5px;">1,284</div>
                                        <div style="display:flex;align-items:center;gap:2px;">
                                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.8"><polyline points="18 15 12 9 6 15"/></svg>
                                            <span style="font-size:8px;font-weight:700;color:#16a34a;">+9.4%</span>
                                        </div>
                                    </div>

                                    {{-- Customers --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:10px 11px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:7px;">
                                            <span style="font-size:7px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:0.07em;">Guests</span>
                                            <div style="width:20px;height:20px;border-radius:6px;background:#ede9fe;display:flex;align-items:center;justify-content:center;">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                                            </div>
                                        </div>
                                        <div style="font-size:16px;font-weight:900;color:#0f172a;line-height:1;margin-bottom:5px;">3,742</div>
                                        <div style="display:flex;align-items:center;gap:2px;">
                                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.8"><polyline points="18 15 12 9 6 15"/></svg>
                                            <span style="font-size:8px;font-weight:700;color:#16a34a;">+24.1%</span>
                                        </div>
                                    </div>

                                    {{-- Hotels --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:10px 11px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:7px;">
                                            <span style="font-size:7px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:0.07em;">Hotels</span>
                                            <div style="width:20px;height:20px;border-radius:6px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                            </div>
                                        </div>
                                        <div style="font-size:16px;font-weight:900;color:#0f172a;line-height:1;margin-bottom:5px;">24</div>
                                        <div style="display:flex;align-items:center;gap:2px;">
                                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.8"><polyline points="18 15 12 9 6 15"/></svg>
                                            <span style="font-size:8px;font-weight:700;color:#16a34a;">+3 new</span>
                                        </div>
                                    </div>

                                </div>{{-- end stat cards --}}

                                {{-- ── CHART + RECENT BOOKINGS ── --}}
                                <div style="display:grid;grid-template-columns:1.45fr 1fr;gap:8px;flex:1;min-height:0;">

                                    {{-- Revenue Chart --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:11px;overflow:hidden;display:flex;flex-direction:column;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;flex-shrink:0;">
                                            <div>
                                                <div style="font-size:10px;font-weight:800;color:#0f172a;">Revenue Overview</div>
                                                <div style="font-size:7.5px;color:#94a3b8;margin-top:1px;">Jan – Jun 2026</div>
                                            </div>
                                            <span style="background:#eff6ff;color:#2563eb;border:1px solid #bfdbfe;font-size:7.5px;font-weight:700;padding:2px 8px;border-radius:99px;">Monthly</span>
                                        </div>

                                        {{-- Bar chart --}}
                                        <div style="flex:1;display:flex;align-items:flex-end;gap:6px;position:relative;min-height:80px;">
                                            {{-- Horizontal guide lines --}}
                                            <div style="position:absolute;inset:0;bottom:20px;display:flex;flex-direction:column;justify-content:space-between;pointer-events:none;">
                                                <div style="border-top:1px dashed #f1f5f9;"></div>
                                                <div style="border-top:1px dashed #f1f5f9;"></div>
                                                <div style="border-top:1px solid #e2e8f0;"></div>
                                            </div>
                                            {{-- Jan --}}
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;gap:3px;z-index:1;">
                                                <div style="width:100%;background:linear-gradient(180deg,#93c5fd,#3B82F6);border-radius:4px 4px 0 0;height:44%;"></div>
                                                <span style="font-size:6.5px;color:#94a3b8;flex-shrink:0;">Jan</span>
                                            </div>
                                            {{-- Feb --}}
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;gap:3px;z-index:1;">
                                                <div style="width:100%;background:linear-gradient(180deg,#93c5fd,#3B82F6);border-radius:4px 4px 0 0;height:57%;"></div>
                                                <span style="font-size:6.5px;color:#94a3b8;flex-shrink:0;">Feb</span>
                                            </div>
                                            {{-- Mar --}}
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;gap:3px;z-index:1;">
                                                <div style="width:100%;background:linear-gradient(180deg,#93c5fd,#3B82F6);border-radius:4px 4px 0 0;height:50%;"></div>
                                                <span style="font-size:6.5px;color:#94a3b8;flex-shrink:0;">Mar</span>
                                            </div>
                                            {{-- Apr --}}
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;gap:3px;z-index:1;">
                                                <div style="width:100%;background:linear-gradient(180deg,#93c5fd,#3B82F6);border-radius:4px 4px 0 0;height:72%;"></div>
                                                <span style="font-size:6.5px;color:#94a3b8;flex-shrink:0;">Apr</span>
                                            </div>
                                            {{-- May --}}
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;gap:3px;z-index:1;">
                                                <div style="width:100%;background:linear-gradient(180deg,#93c5fd,#3B82F6);border-radius:4px 4px 0 0;height:68%;"></div>
                                                <span style="font-size:6.5px;color:#94a3b8;flex-shrink:0;">May</span>
                                            </div>
                                            {{-- Jun (active) --}}
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;gap:3px;z-index:1;">
                                                <div style="width:100%;background:linear-gradient(180deg,#60a5fa,#1d4ed8);border-radius:4px 4px 0 0;height:100%;box-shadow:0 0 10px rgba(59,130,246,0.45);"></div>
                                                <span style="font-size:6.5px;color:#2563eb;font-weight:800;flex-shrink:0;">Jun</span>
                                            </div>
                                        </div>
                                    </div>{{-- end chart --}}

                                    {{-- Recent Bookings --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:11px;overflow:hidden;display:flex;flex-direction:column;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:9px;flex-shrink:0;">
                                            <div style="font-size:10px;font-weight:800;color:#0f172a;">Recent Bookings</div>
                                            <span style="font-size:8px;color:#3B82F6;font-weight:700;">View all →</span>
                                        </div>

                                        <div style="display:flex;flex-direction:column;gap:0;flex:1;">

                                            {{-- Booking 1 --}}
                                            <div style="display:flex;align-items:center;justify-content:space-between;padding:7px 0;border-bottom:1px solid #f1f5f9;">
                                                <div style="display:flex;align-items:center;gap:7px;">
                                                    <div style="width:28px;height:28px;border-radius:50%;background:linear-gradient(135deg,#3B82F6,#1d4ed8);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                        <span style="font-size:9px;font-weight:900;color:white;">JW</span>
                                                    </div>
                                                    <div>
                                                        <div style="font-size:9px;font-weight:700;color:#0f172a;line-height:1.2;">James Wilson</div>
                                                        <div style="font-size:7px;color:#94a3b8;">Grand Palace · Deluxe Rm</div>
                                                    </div>
                                                </div>
                                                <span style="font-size:7px;font-weight:700;background:#dcfce7;color:#15803d;padding:2px 7px;border-radius:99px;flex-shrink:0;">Confirmed</span>
                                            </div>

                                            {{-- Booking 2 --}}
                                            <div style="display:flex;align-items:center;justify-content:space-between;padding:7px 0;border-bottom:1px solid #f1f5f9;">
                                                <div style="display:flex;align-items:center;gap:7px;">
                                                    <div style="width:28px;height:28px;border-radius:50%;background:linear-gradient(135deg,#7c3aed,#6d28d9);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                        <span style="font-size:9px;font-weight:900;color:white;">SA</span>
                                                    </div>
                                                    <div>
                                                        <div style="font-size:9px;font-weight:700;color:#0f172a;line-height:1.2;">Sarah Ahmed</div>
                                                        <div style="font-size:7px;color:#94a3b8;">Skyline Resort · Suite</div>
                                                    </div>
                                                </div>
                                                <span style="font-size:7px;font-weight:700;background:#fef3c7;color:#b45309;padding:2px 7px;border-radius:99px;flex-shrink:0;">Pending</span>
                                            </div>

                                            {{-- Booking 3 --}}
                                            <div style="display:flex;align-items:center;justify-content:space-between;padding:7px 0;border-bottom:1px solid #f1f5f9;">
                                                <div style="display:flex;align-items:center;gap:7px;">
                                                    <div style="width:28px;height:28px;border-radius:50%;background:linear-gradient(135deg,#16a34a,#15803d);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                        <span style="font-size:9px;font-weight:900;color:white;">MK</span>
                                                    </div>
                                                    <div>
                                                        <div style="font-size:9px;font-weight:700;color:#0f172a;line-height:1.2;">Mike Khan</div>
                                                        <div style="font-size:7px;color:#94a3b8;">Azure Cliff · Standard</div>
                                                    </div>
                                                </div>
                                                <span style="font-size:7px;font-weight:700;background:#dcfce7;color:#15803d;padding:2px 7px;border-radius:99px;flex-shrink:0;">Confirmed</span>
                                            </div>

                                            {{-- Booking 4 --}}
                                            <div style="display:flex;align-items:center;justify-content:space-between;padding:7px 0;">
                                                <div style="display:flex;align-items:center;gap:7px;">
                                                    <div style="width:28px;height:28px;border-radius:50%;background:linear-gradient(135deg,#f59e0b,#d97706);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                        <span style="font-size:9px;font-weight:900;color:white;">RL</span>
                                                    </div>
                                                    <div>
                                                        <div style="font-size:9px;font-weight:700;color:#0f172a;line-height:1.2;">Rachel Lee</div>
                                                        <div style="font-size:7px;color:#94a3b8;">Marina Bay · Executive</div>
                                                    </div>
                                                </div>
                                                <span style="font-size:7px;font-weight:700;background:#fee2e2;color:#dc2626;padding:2px 7px;border-radius:99px;flex-shrink:0;">Cancelled</span>
                                            </div>

                                        </div>
                                    </div>{{-- end recent bookings --}}

                                </div>{{-- end chart + bookings grid --}}

                                {{-- ── BOTTOM STAT ROW ── --}}
                                <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:8px;flex-shrink:0;">

                                    {{-- Occupancy Ring --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:10px 12px;display:flex;align-items:center;gap:9px;">
                                        <div style="position:relative;width:38px;height:38px;flex-shrink:0;">
                                            <svg width="38" height="38" viewBox="0 0 38 38">
                                                <circle cx="19" cy="19" r="15" fill="none" stroke="#e2e8f0" stroke-width="3.5"/>
                                                <circle cx="19" cy="19" r="15" fill="none" stroke="#3B82F6" stroke-width="3.5"
                                                    stroke-dasharray="71.6 94.25"
                                                    stroke-dashoffset="23.56"
                                                    stroke-linecap="round"
                                                    transform="rotate(-90 19 19)"/>
                                            </svg>
                                            <span style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:8.5px;font-weight:900;color:#0f172a;">76%</span>
                                        </div>
                                        <div>
                                            <div style="font-size:10px;font-weight:800;color:#0f172a;line-height:1.2;">Occupancy</div>
                                            <div style="font-size:7.5px;color:#94a3b8;">This month</div>
                                        </div>
                                    </div>

                                    {{-- Active Coupons --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:10px 12px;display:flex;align-items:center;gap:9px;">
                                        <div style="width:38px;height:38px;border-radius:10px;background:linear-gradient(135deg,#fce7f3,#fbcfe8);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="2.2" stroke-linecap="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7" stroke-width="2.8"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:17px;font-weight:900;color:#0f172a;line-height:1.1;">8</div>
                                            <div style="font-size:7.5px;color:#94a3b8;">Active Coupons</div>
                                        </div>
                                    </div>

                                    {{-- Avg. Booking --}}
                                    <div style="background:#ffffff;border:1px solid #e9eef5;border-radius:10px;padding:10px 12px;display:flex;align-items:center;gap:9px;">
                                        <div style="width:38px;height:38px;border-radius:10px;background:linear-gradient(135deg,#d1fae5,#a7f3d0);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.2" stroke-linecap="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:17px;font-weight:900;color:#0f172a;line-height:1.1;">$376</div>
                                            <div style="font-size:7.5px;color:#94a3b8;">Avg. Booking</div>
                                        </div>
                                    </div>

                                </div>{{-- end bottom stats --}}

                            </div>{{-- end content area --}}
                        </div>{{-- end main content --}}

                    </div>{{-- end dashboard body --}}
                </div>{{-- end browser frame --}}

            </div>{{-- end right col --}}
        </div>{{-- end 2-col --}}

        {{-- ═══════════════════════════════
             BOTTOM CTA
        ═══════════════════════════════ --}}
        <div class="mt-14 text-center hbp-adm-fade" style="transition-delay:0.42s;">
            <p class="text-sm mb-6" style="color:#94a3b8;">
                Full admin access included in every license.
                <span style="color:#0f172a;font-weight:700;">No extra modules. No hidden fees.</span>
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="#demo"
                   class="inline-flex items-center gap-2.5 text-white font-bold px-7 py-3.5 rounded-xl"
                   style="background:#3B82F6;box-shadow:0 4px 20px rgba(59,130,246,0.35);font-size:14px;transition:transform 0.18s ease,box-shadow 0.18s ease;"
                   onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 28px rgba(59,130,246,0.42)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 20px rgba(59,130,246,0.35)'">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/>
                    </svg>
                    View Admin Demo
                </a>
                <a href="#pricing"
                   class="inline-flex items-center gap-2 font-semibold px-7 py-3.5 rounded-xl"
                   style="background:#ffffff;border:2px solid #e2e8f0;color:#374151;font-size:14px;transition:border-color 0.18s ease,transform 0.18s ease;"
                   onmouseover="this.style.borderColor='#93c5fd';this.style.transform='translateY(-2px)'"
                   onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='translateY(0)'">
                    See Pricing
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>

<script>
(function () {
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                e.target.classList.add('hbp-adm-visible');
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.08 });
    document.querySelectorAll('#hbp-adm .hbp-adm-fade, #hbp-adm .hbp-adm-fade-left, #hbp-adm .hbp-adm-fade-right').forEach(function (el) {
        io.observe(el);
    });
})();
</script>
