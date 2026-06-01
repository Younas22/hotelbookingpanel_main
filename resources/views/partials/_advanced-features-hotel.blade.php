{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — ADVANCED FEATURES SECTION
     Include with: @include('partials._advanced-features-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Advanced Features Section ─── */
    #hbp-adv {
        background: #f8fafc;
        font-family: 'Inter', sans-serif;
    }

    .hbp-adv-badge {
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

    /* ── Bento grid ── */
    .hbp-adv-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    @media (max-width: 1023px) {
        .hbp-adv-grid { grid-template-columns: repeat(2, 1fr); }
        .hbp-adv-span3 { grid-column: span 2; }
    }

    @media (max-width: 639px) {
        .hbp-adv-grid { grid-template-columns: 1fr; }
        .hbp-adv-span2,
        .hbp-adv-span3 { grid-column: span 1; }
    }

    /* ── Card base ── */
    .hbp-adv-card {
        position: relative;
        background: #ffffff;
        border: 1.5px solid #e9eef5;
        border-radius: 20px;
        padding: 28px 26px;
        overflow: hidden;
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
    }

    .hbp-adv-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 40px rgba(59, 130, 246, 0.11), 0 2px 8px rgba(0,0,0,0.04);
        border-color: rgba(59, 130, 246, 0.28);
    }

    /* Radial corner glow on hover */
    .hbp-adv-card::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 20px;
        opacity: 0;
        transition: opacity 0.28s ease;
        pointer-events: none;
        background: radial-gradient(ellipse at 0% 0%, rgba(59,130,246,0.055) 0%, transparent 60%);
    }
    .hbp-adv-card:hover::before { opacity: 1; }

    /* Featured tag */
    .hbp-adv-tag {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        border-radius: 99px;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        margin-bottom: 16px;
    }

    /* Icon wrap */
    .hbp-adv-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 46px;
        height: 46px;
        border-radius: 13px;
        flex-shrink: 0;
        margin-bottom: 16px;
        transition: transform 0.22s ease;
    }
    .hbp-adv-card:hover .hbp-adv-icon { transform: scale(1.1) rotate(-3deg); }

    /* Title */
    .hbp-adv-title {
        font-size: 16px;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 9px;
        letter-spacing: -0.015em;
        line-height: 1.25;
    }

    /* Description */
    .hbp-adv-desc {
        font-size: 13px;
        line-height: 1.75;
        color: #64748b;
        margin: 0;
    }

    /* Bullet list */
    .hbp-adv-list {
        list-style: none;
        padding: 0;
        margin: 14px 0 0;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }
    .hbp-adv-list li {
        display: flex;
        align-items: center;
        gap: 7px;
        font-size: 12px;
        color: #475569;
        font-weight: 600;
    }
    .hbp-adv-list li .hbp-adv-dot {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* ── Fade-in ── */
    .hbp-adv-fade {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 0.52s ease, transform 0.52s ease;
    }
    .hbp-adv-fade.hbp-adv-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* ── Room mockup (inside span-2 card) ── */
    .hbp-adv-room-mock {
        position: absolute;
        top: 24px;
        right: 24px;
        width: 190px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0,0,0,0.07);
        transition: transform 0.28s ease, box-shadow 0.28s ease;
        pointer-events: none;
    }
    .hbp-adv-card:hover .hbp-adv-room-mock {
        transform: translateY(-3px) rotate(1deg);
        box-shadow: 0 10px 28px rgba(59,130,246,0.14);
    }

    /* ── Reviews mockup (inside span-2 card) ── */
    .hbp-adv-review-stack {
        position: absolute;
        top: 24px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        width: 200px;
        pointer-events: none;
    }
    .hbp-adv-review-card {
        background: #ffffff;
        border: 1px solid #e9eef5;
        border-radius: 12px;
        padding: 10px 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: transform 0.28s ease;
    }
    .hbp-adv-card:hover .hbp-adv-review-card:nth-child(1) { transform: translateY(-2px); }
    .hbp-adv-card:hover .hbp-adv-review-card:nth-child(2) { transform: translateY(-4px); }
    .hbp-adv-card:hover .hbp-adv-review-card:nth-child(3) { transform: translateY(-6px); }

    /* ── Payment logos row (inside span-3 card) ── */
    .hbp-adv-gw-logo {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 8px 14px;
        border-radius: 10px;
        border: 1.5px solid #e2e8f0;
        background: #fafbff;
        font-size: 12px;
        font-weight: 800;
        color: #374151;
        transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
    }
    .hbp-adv-gw-logo:hover {
        border-color: #93c5fd;
        box-shadow: 0 4px 12px rgba(59,130,246,0.1);
        transform: translateY(-2px);
    }

    @media (max-width: 639px) {
        .hbp-adv-room-mock,
        .hbp-adv-review-stack { display: none; }
    }
</style>

<section id="hbp-adv" class="relative overflow-hidden" style="padding: 100px 0 108px;">

    {{-- Subtle dot grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 26px 26px; opacity: 0.22;"></div>

    {{-- Blue radial at top --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none"
         style="width: 900px; height: 320px; background: radial-gradient(ellipse at 50% 0%, rgba(59,130,246,0.065) 0%, transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═════════════ HEADER ═════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-14 hbp-adv-fade">
            <div class="inline-block mb-6">
                <div class="hbp-adv-badge">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
                    </svg>
                    Full Feature Set
                </div>
            </div>
            <h2 class="font-black tracking-tight leading-[1.1] mb-5"
                style="font-size: clamp(1.9rem, 3.5vw, 2.75rem); color: #0f172a;">
                Advanced Hotel<br>
                <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Booking Features
                </span>
            </h2>
            <p style="font-size: 16.5px; color: #64748b; line-height: 1.7;">
                Every tool you need to manage rooms, guests, pricing, and payments — out of the box, no plugins required.
            </p>
        </div>

        {{-- ═════════════ BENTO GRID ═════════════ --}}
        <div class="hbp-adv-grid">

            {{-- ══ Card 1: Room Management (span-2, featured) ══ --}}
            <div class="hbp-adv-card hbp-adv-span2 hbp-adv-fade" style="min-height: 230px; transition-delay: 0.05s;">

                {{-- Room mockup (top-right) --}}
                <div class="hbp-adv-room-mock">
                    {{-- Image placeholder --}}
                    <div style="height: 72px; background: linear-gradient(135deg, #dbeafe 0%, #ede9fe 100%); display: flex; align-items: center; justify-content: center;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#93c5fd" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5" fill="#93c5fd" stroke="none"/><polyline points="21 15 16 10 5 21"/>
                        </svg>
                    </div>
                    <div style="padding: 10px 12px;">
                        <div style="font-size: 11px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">Deluxe King Suite</div>
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 7px;">
                            <span style="display: flex; align-items: center; gap: 3px; font-size: 10px; color: #64748b; font-weight: 600;">
                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg>
                                2 Guests
                            </span>
                            <span style="display: flex; align-items: center; gap: 3px; font-size: 10px; color: #64748b; font-weight: 600;">
                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                36 m²
                            </span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <div>
                                <span style="font-size: 13px; font-weight: 900; color: #1d4ed8;">$189</span>
                                <span style="font-size: 9px; color: #94a3b8; font-weight: 600;">/night</span>
                            </div>
                            <div style="background: #dcfce7; color: #16a34a; font-size: 9px; font-weight: 800; padding: 2px 7px; border-radius: 99px;">Available</div>
                        </div>
                    </div>
                </div>

                {{-- Tag --}}
                <div class="hbp-adv-tag" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.2); color: #2563eb;">
                    <svg width="8" height="8" viewBox="0 0 24 24" fill="#2563eb" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                    Core Feature
                </div>

                <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #dbeafe, #bfdbfe); border: 1px solid rgba(59,130,246,0.2);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3 class="hbp-adv-title">Room Management</h3>
                <p class="hbp-adv-desc" style="max-width: 55%;">Add unlimited room types with photos, descriptions, amenities, capacity rules, and per-night pricing. Manage availability blocks and maintenance windows from one clean dashboard.</p>
                <ul class="hbp-adv-list">
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(59,130,246,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Unlimited room types &amp; photos
                    </li>
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(59,130,246,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Block dates for maintenance
                    </li>
                </ul>
            </div>

            {{-- ══ Card 2: Availability Calendar ══ --}}
            <div class="hbp-adv-card hbp-adv-fade" style="transition-delay: 0.10s;">
                <div class="hbp-adv-tag" style="background: rgba(79,70,229,0.08); border: 1px solid rgba(79,70,229,0.2); color: #4f46e5;">
                    <svg width="8" height="8" viewBox="0 0 24 24" fill="#4f46e5" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                    Live Sync
                </div>
                <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #e0e7ff, #c7d2fe); border: 1px solid rgba(79,70,229,0.2);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                        <rect x="8" y="14" width="3" height="3" rx="0.5" fill="#4f46e5" stroke="none"/>
                        <rect x="13" y="14" width="3" height="3" rx="0.5" fill="rgba(79,70,229,0.3)" stroke="none"/>
                    </svg>
                </div>
                <h3 class="hbp-adv-title">Availability Calendar</h3>
                <p class="hbp-adv-desc">Live calendar synced across all booking channels. Rooms lock the moment a reservation is confirmed — no double bookings, ever.</p>
                <ul class="hbp-adv-list">
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(79,70,229,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Real-time room locking
                    </li>
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(79,70,229,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Multi-month overview
                    </li>
                </ul>
            </div>

            {{-- ══ Card 3: Booking Confirmation Emails ══ --}}
            <div class="hbp-adv-card hbp-adv-fade" style="transition-delay: 0.15s;">
                <div class="hbp-adv-tag" style="background: rgba(22,163,74,0.08); border: 1px solid rgba(22,163,74,0.2); color: #16a34a;">
                    <svg width="8" height="8" viewBox="0 0 24 24" fill="#16a34a" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                    Auto-Send
                </div>
                <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #dcfce7, #bbf7d0); border: 1px solid rgba(22,163,74,0.2);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22 6 12 13 2 6"/>
                        <path d="M9 14l2 2 4-4" stroke="#16a34a" stroke-width="2.2"/>
                    </svg>
                </div>
                <h3 class="hbp-adv-title">Booking Confirmation Emails</h3>
                <p class="hbp-adv-desc">Branded confirmation, reminder, and check-in emails fire automatically. Fully customizable templates with your logo and hotel details.</p>
                <ul class="hbp-adv-list">
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(22,163,74,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Editable HTML templates
                    </li>
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(22,163,74,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Pre-arrival reminders
                    </li>
                </ul>
            </div>

            {{-- ══ Card 4: Discount Coupons ══ --}}
            <div class="hbp-adv-card hbp-adv-fade" style="transition-delay: 0.20s;">
                <div class="hbp-adv-tag" style="background: rgba(217,119,6,0.08); border: 1px solid rgba(217,119,6,0.2); color: #d97706;">
                    <svg width="8" height="8" viewBox="0 0 24 24" fill="#d97706" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                    Revenue Boost
                </div>
                <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #fef3c7, #fde68a); border: 1px solid rgba(217,119,6,0.2);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                </div>
                <h3 class="hbp-adv-title">Discount Coupons</h3>
                <p class="hbp-adv-desc">Create percentage or fixed-amount coupon codes with usage limits, expiry dates, and per-room or per-booking rules to drive direct bookings.</p>
                <ul class="hbp-adv-list">
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(217,119,6,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        % or fixed discount types
                    </li>
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(217,119,6,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Expiry &amp; usage limits
                    </li>
                </ul>
            </div>

            {{-- ══ Card 5: Seasonal Pricing ══ --}}
            <div class="hbp-adv-card hbp-adv-fade" style="transition-delay: 0.25s;">
                <div class="hbp-adv-tag" style="background: rgba(190,24,93,0.07); border: 1px solid rgba(190,24,93,0.2); color: #be185d;">
                    <svg width="8" height="8" viewBox="0 0 24 24" fill="#be185d" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                    Smart Rates
                </div>
                <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #fce7f3, #fbcfe8); border: 1px solid rgba(190,24,93,0.2);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"/>
                        <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                    </svg>
                </div>
                <h3 class="hbp-adv-title">Seasonal Pricing</h3>
                <p class="hbp-adv-desc">Set dynamic rates for peak seasons, weekends, or special events. Override base prices for any date range with automatic priority rules.</p>
                <ul class="hbp-adv-list">
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(190,24,93,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Date-range rate overrides
                    </li>
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(190,24,93,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Weekend &amp; event surcharges
                    </li>
                </ul>
            </div>

            {{-- ══ Card 6: Multi-Language ══ --}}
            <div class="hbp-adv-card hbp-adv-fade" style="transition-delay: 0.30s;">
                <div class="hbp-adv-tag" style="background: rgba(13,148,136,0.08); border: 1px solid rgba(13,148,136,0.2); color: #0d9488;">
                    <svg width="8" height="8" viewBox="0 0 24 24" fill="#0d9488" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                    Global Ready
                </div>
                <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #ccfbf1, #99f6e4); border: 1px solid rgba(13,148,136,0.2);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="2" y1="12" x2="22" y2="12"/>
                        <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                    </svg>
                </div>
                <h3 class="hbp-adv-title">Multi-Language Support</h3>
                <p class="hbp-adv-desc">Serve international guests in their own language. Add any locale via simple translation files — no code changes required.</p>
                <ul class="hbp-adv-list">
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(13,148,136,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        JSON translation files
                    </li>
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(13,148,136,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        RTL layout support
                    </li>
                </ul>
            </div>

            {{-- ══ Card 7: Customer Reviews (span-2, featured) ══ --}}
            <div class="hbp-adv-card hbp-adv-span2 hbp-adv-fade" style="min-height: 230px; transition-delay: 0.35s;">

                {{-- Review stack (top-right) --}}
                <div class="hbp-adv-review-stack">
                    <div class="hbp-adv-review-card">
                        <div style="display: flex; align-items: center; gap: 6px; margin-bottom: 5px;">
                            <div style="width: 22px; height: 22px; border-radius: 50%; background: linear-gradient(135deg, #dbeafe, #ede9fe); display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 800; color: #4f46e5; flex-shrink: 0;">S</div>
                            <span style="font-size: 10.5px; font-weight: 700; color: #0f172a;">Sarah M.</span>
                            <div style="display: flex; gap: 1px; margin-left: auto;">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            </div>
                        </div>
                        <p style="font-size: 10px; color: #64748b; line-height: 1.5; margin: 0;">"Booking was seamless. The room was exactly as described!"</p>
                    </div>
                    <div class="hbp-adv-review-card">
                        <div style="display: flex; align-items: center; gap: 6px; margin-bottom: 5px;">
                            <div style="width: 22px; height: 22px; border-radius: 50%; background: linear-gradient(135deg, #dcfce7, #bbf7d0); display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 800; color: #16a34a; flex-shrink: 0;">J</div>
                            <span style="font-size: 10.5px; font-weight: 700; color: #0f172a;">James K.</span>
                            <div style="display: flex; gap: 1px; margin-left: auto;">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#e2e8f0" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            </div>
                        </div>
                        <p style="font-size: 10px; color: #64748b; line-height: 1.5; margin: 0;">"Great system. Instant confirmation and easy check-in process."</p>
                    </div>
                    <div class="hbp-adv-review-card" style="opacity: 0.7;">
                        <div style="display: flex; align-items: center; gap: 6px; margin-bottom: 5px;">
                            <div style="width: 22px; height: 22px; border-radius: 50%; background: linear-gradient(135deg, #fce7f3, #fbcfe8); display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 800; color: #be185d; flex-shrink: 0;">A</div>
                            <span style="font-size: 10.5px; font-weight: 700; color: #0f172a;">Aisha R.</span>
                            <div style="display: flex; gap: 1px; margin-left: auto;">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            </div>
                        </div>
                        <p style="font-size: 10px; color: #64748b; line-height: 1.5; margin: 0;">"Direct booking saved us OTA fees. Highly recommend!"</p>
                    </div>
                </div>

                {{-- Tag --}}
                <div class="hbp-adv-tag" style="background: rgba(202,138,4,0.08); border: 1px solid rgba(202,138,4,0.2); color: #ca8a04;">
                    <svg width="8" height="8" viewBox="0 0 24 24" fill="#ca8a04" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                    Social Proof
                </div>

                <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #fef9c3, #fef08a); border: 1px solid rgba(202,138,4,0.2);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h3 class="hbp-adv-title">Customer Reviews</h3>
                <p class="hbp-adv-desc" style="max-width: 52%;">Guests can leave star ratings and written reviews after their stay. Verified reviews build trust and convert hesitant visitors into bookings.</p>
                <ul class="hbp-adv-list">
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(202,138,4,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Verified post-stay reviews only
                    </li>
                    <li>
                        <span class="hbp-adv-dot" style="background: rgba(202,138,4,0.1);">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </span>
                        Star rating + rich-text response
                    </li>
                </ul>
            </div>

            {{-- ══ Card 8: Payment Gateway Integration (span-3 full width, horizontal) ══ --}}
            <div class="hbp-adv-card hbp-adv-span3 hbp-adv-fade" style="transition-delay: 0.40s;">
                <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 32px;">

                    {{-- Left: content --}}
                    <div style="flex: 1 1 280px; min-width: 0;">
                        <div class="hbp-adv-tag" style="background: rgba(37,99,235,0.08); border: 1px solid rgba(37,99,235,0.2); color: #2563eb;">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="#2563eb" stroke="none"><circle cx="12" cy="12" r="10"/></svg>
                            Payments
                        </div>
                        <div class="hbp-adv-icon" style="background: linear-gradient(135deg, #dbeafe, #bfdbfe); border: 1px solid rgba(37,99,235,0.2);">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="4" width="22" height="16" rx="2.5"/>
                                <line x1="1" y1="10" x2="23" y2="10"/>
                                <line x1="5" y1="15" x2="9" y2="15"/>
                                <line x1="12" y1="15" x2="14" y2="15"/>
                            </svg>
                        </div>
                        <h3 class="hbp-adv-title">Payment Gateway Integration</h3>
                        <p class="hbp-adv-desc" style="max-width: 480px;">Connect Stripe, PayPal, or any major gateway in minutes. Support full payments, deposits, and automated refunds — with multi-currency built in for international guests.</p>
                        <ul class="hbp-adv-list" style="flex-direction: row; flex-wrap: wrap; gap: 8px 20px;">
                            <li>
                                <span class="hbp-adv-dot" style="background: rgba(37,99,235,0.1);">
                                    <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Full &amp; partial deposit modes
                            </li>
                            <li>
                                <span class="hbp-adv-dot" style="background: rgba(37,99,235,0.1);">
                                    <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Automated refunds
                            </li>
                            <li>
                                <span class="hbp-adv-dot" style="background: rgba(37,99,235,0.1);">
                                    <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                Multi-currency support
                            </li>
                            <li>
                                <span class="hbp-adv-dot" style="background: rgba(37,99,235,0.1);">
                                    <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                PCI-compliant checkout
                            </li>
                        </ul>
                    </div>

                    {{-- Right: gateway logos --}}
                    <div style="flex: 0 1 auto; display: flex; flex-wrap: wrap; gap: 10px; align-items: center;">

                        {{-- Stripe --}}
                        <div class="hbp-adv-gw-logo">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                            <span>Stripe</span>
                        </div>

                        {{-- PayPal --}}
                        <div class="hbp-adv-gw-logo">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0070ba" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 11c0-2.5 2-4 4.5-4H15c2 0 3 1 3 2.5 0 2.5-2 4-4.5 4H11l-1 5H7L7 11z"/><path d="M5 8C5 5.5 7 4 9.5 4H13c2 0 3 1 3 2.5"/></svg>
                            <span>PayPal</span>
                        </div>

                        {{-- Visa --}}
                        <div class="hbp-adv-gw-logo">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#1a1f71" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><path d="M10 15l1.5-6h1.5L11.5 15zM8 9l-2 6H4.5l2-6z"/></svg>
                            <span style="color: #1a1f71;">Visa</span>
                        </div>

                        {{-- Mastercard --}}
                        <div class="hbp-adv-gw-logo">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#eb001b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="12" r="7"/><circle cx="15" cy="12" r="7"/></svg>
                            <span>Mastercard</span>
                        </div>

                        {{-- Bank Transfer --}}
                        <div class="hbp-adv-gw-logo">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7"/><rect x="3" y="9" width="18" height="2"/><path d="M5 11v7M9 11v7M15 11v7M19 11v7M3 18h18"/></svg>
                            <span>Bank Transfer</span>
                        </div>

                        {{-- More badge --}}
                        <div style="display: inline-flex; align-items: center; padding: 8px 14px; border-radius: 10px; background: linear-gradient(135deg, rgba(59,130,246,0.07), rgba(99,102,241,0.07)); border: 1.5px dashed rgba(59,130,246,0.28); font-size: 12px; font-weight: 800; color: #3B82F6;">
                            + More
                        </div>

                    </div>
                </div>
            </div>

        </div>{{-- end bento grid --}}

    </div>
</section>

<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('hbp-adv-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.09 });

    document.querySelectorAll('#hbp-adv .hbp-adv-fade').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
