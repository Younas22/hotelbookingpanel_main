{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — FEATURES SECTION
     Include with: @include('partials._features-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Features Section ─── */
    #hbp-features {
        background: #ffffff;
        font-family: 'Inter', sans-serif;
    }

    /* Section badge */
    .hbp-feat-badge {
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

    /* Feature card base */
    .hbp-feat-card {
        position: relative;
        background: #fafbff;
        border: 1px solid #e9eef5;
        border-radius: 18px;
        padding: 28px 26px 26px;
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease, background 0.22s ease;
        overflow: hidden;
    }

    /* Hover state */
    .hbp-feat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 36px rgba(59, 130, 246, 0.12), 0 2px 8px rgba(0,0,0,0.04);
        border-color: rgba(59, 130, 246, 0.32);
        background: #f5f8ff;
    }

    /* Subtle corner glow on hover */
    .hbp-feat-card::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 18px;
        background: radial-gradient(ellipse at 0% 0%, rgba(59,130,246,0.07) 0%, transparent 60%);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }
    .hbp-feat-card:hover::before {
        opacity: 1;
    }

    /* Icon wrap */
    .hbp-feat-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 13px;
        flex-shrink: 0;
        margin-bottom: 18px;
        transition: transform 0.22s ease;
    }
    .hbp-feat-card:hover .hbp-feat-icon {
        transform: scale(1.08);
    }

    /* Card title */
    .hbp-feat-title {
        font-size: 16px;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 9px;
        line-height: 1.25;
        letter-spacing: -0.01em;
    }

    /* Card description */
    .hbp-feat-desc {
        font-size: 13.5px;
        line-height: 1.7;
        color: #64748b;
        margin: 0;
    }

    /* Bottom arrow indicator */
    .hbp-feat-arrow {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        margin-top: 16px;
        font-size: 12px;
        font-weight: 700;
        color: #93c5fd;
        opacity: 0;
        transform: translateX(-4px);
        transition: opacity 0.22s ease, transform 0.22s ease, color 0.22s ease;
    }
    .hbp-feat-card:hover .hbp-feat-arrow {
        opacity: 1;
        transform: translateX(0);
        color: #3B82F6;
    }

    /* Divider line above arrow */
    .hbp-feat-divider {
        height: 1px;
        background: #e9eef5;
        margin: 16px 0 0;
        transition: background 0.22s ease;
    }
    .hbp-feat-card:hover .hbp-feat-divider {
        background: rgba(59, 130, 246, 0.18);
    }

    /* Section fade-in animation */
    .hbp-section-fade {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .hbp-section-fade.hbp-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<section id="hbp-features" class="relative overflow-hidden" style="padding: 96px 0 104px;">

    {{-- Subtle background texture --}}
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 28px 28px; opacity: 0.3;"></div>

    {{-- Top blue gradient accent --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none" style="width: 700px; height: 260px; background: radial-gradient(ellipse at 50% 0%, rgba(59,130,246,0.07) 0%, transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═══════════════════════════
             SECTION HEADER
        ═══════════════════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-16 hbp-section-fade">

            {{-- Badge --}}
            <div class="inline-block mb-6">
                <div class="hbp-feat-badge">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    Platform Features
                </div>
            </div>

            {{-- Headline --}}
            <h2 class="font-black tracking-tight leading-[1.1] mb-5" style="font-size: clamp(1.9rem, 3.5vw, 2.75rem); color: #0f172a;">
                Everything You Need To Run A<br>
                <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Hotel Booking Business
                </span>
            </h2>

            {{-- Subheadline --}}
            <p style="font-size: 16.5px; color: #64748b; line-height: 1.7;">
                One platform. One license. Built for hotel businesses that want to take direct bookings, manage reservations, and deliver a five-star guest experience — without monthly fees.
            </p>

        </div>

        {{-- ═══════════════════════════
             FEATURE CARDS GRID — 3×2
        ═══════════════════════════ --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

            {{-- ── Card 1: Hotel Booking Engine ── --}}
            <div class="hbp-feat-card hbp-section-fade" style="transition-delay: 0.06s;">
                <div class="hbp-feat-icon" style="background: linear-gradient(135deg, #dbeafe, #bfdbfe); border: 1px solid rgba(59,130,246,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3 class="hbp-feat-title">Hotel Booking Engine</h3>
                <p class="hbp-feat-desc">Powerful search-and-book engine with room type selection, date picker, guest count, and instant pricing — giving customers a seamless direct booking experience from any device.</p>
                <div class="hbp-feat-divider"></div>
                <div class="hbp-feat-arrow">
                    <span>Learn more</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </div>

            {{-- ── Card 2: Real-Time Availability ── --}}
            <div class="hbp-feat-card hbp-section-fade" style="transition-delay: 0.12s;">
                <div class="hbp-feat-icon" style="background: linear-gradient(135deg, #dcfce7, #bbf7d0); border: 1px solid rgba(22,163,74,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                        <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01"/>
                    </svg>
                </div>
                <h3 class="hbp-feat-title">Real-Time Availability</h3>
                <p class="hbp-feat-desc">Live availability calendar updated instantly across all booking channels. Rooms are blocked the moment a reservation is confirmed, eliminating double bookings with zero manual effort.</p>
                <div class="hbp-feat-divider"></div>
                <div class="hbp-feat-arrow">
                    <span>Learn more</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </div>

            {{-- ── Card 3: Online Payments ── --}}
            <div class="hbp-feat-card hbp-section-fade" style="transition-delay: 0.18s;">
                <div class="hbp-feat-icon" style="background: linear-gradient(135deg, #fef3c7, #fde68a); border: 1px solid rgba(217,119,6,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="1" y="4" width="22" height="16" rx="2"/>
                        <line x1="1" y1="10" x2="23" y2="10"/>
                        <line x1="5" y1="15" x2="9" y2="15"/>
                        <line x1="12" y1="15" x2="14" y2="15"/>
                    </svg>
                </div>
                <h3 class="hbp-feat-title">Online Payments</h3>
                <p class="hbp-feat-desc">Secure payment processing via Stripe and PayPal with support for full payments, partial deposits, and automated refunds. Multi-currency support for international guests built in.</p>
                <div class="hbp-feat-divider"></div>
                <div class="hbp-feat-arrow">
                    <span>Learn more</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </div>

            {{-- ── Card 4: Reservation Management ── --}}
            <div class="hbp-feat-card hbp-section-fade" style="transition-delay: 0.24s;">
                <div class="hbp-feat-icon" style="background: linear-gradient(135deg, #ede9fe, #ddd6fe); border: 1px solid rgba(124,58,237,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <h3 class="hbp-feat-title">Reservation Management</h3>
                <p class="hbp-feat-desc">Full reservation lifecycle from booking confirmation through check-in to check-out. Modify, cancel, or extend stays, send automated guest notifications, and manage special requests effortlessly.</p>
                <div class="hbp-feat-divider"></div>
                <div class="hbp-feat-arrow">
                    <span>Learn more</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </div>

            {{-- ── Card 5: Customer Dashboard ── --}}
            <div class="hbp-feat-card hbp-section-fade" style="transition-delay: 0.30s;">
                <div class="hbp-feat-icon" style="background: linear-gradient(135deg, #e0f2fe, #bae6fd); border: 1px solid rgba(2,132,199,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M16 11l1.5 1.5L20 10"/>
                    </svg>
                </div>
                <h3 class="hbp-feat-title">Customer Dashboard</h3>
                <p class="hbp-feat-desc">Personalised guest portal where customers can view upcoming and past bookings, download invoices, manage their profile, and request modifications — reducing front-desk workload significantly.</p>
                <div class="hbp-feat-divider"></div>
                <div class="hbp-feat-arrow">
                    <span>Learn more</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </div>

            {{-- ── Card 6: Admin Control Panel ── --}}
            <div class="hbp-feat-card hbp-section-fade" style="transition-delay: 0.36s;">
                <div class="hbp-feat-icon" style="background: linear-gradient(135deg, #fce7f3, #fbcfe8); border: 1px solid rgba(190,24,93,0.15);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#be185d" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7" rx="1.5"/>
                        <rect x="14" y="3" width="7" height="7" rx="1.5"/>
                        <rect x="3" y="14" width="7" height="7" rx="1.5"/>
                        <rect x="14" y="14" width="7" height="7" rx="1.5"/>
                    </svg>
                </div>
                <h3 class="hbp-feat-title">Admin Control Panel</h3>
                <p class="hbp-feat-desc">Comprehensive dashboard for managing hotels, rooms, pricing rules, seasonal rates, and promotions. Monitor revenue, occupancy, and customer activity from a single powerful interface.</p>
                <div class="hbp-feat-divider"></div>
                <div class="hbp-feat-arrow">
                    <span>Learn more</span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </div>

        </div>

        {{-- ═══════════════════════════
             BOTTOM CTA
        ═══════════════════════════ --}}
        <div class="mt-16 text-center hbp-section-fade" style="transition-delay: 0.42s;">
            <p class="text-sm mb-6" style="color: #94a3b8;">
                All features included in a single one-time license.
                <span style="color: #0f172a; font-weight: 700;">No monthly fees. No subscriptions.</span>
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="#demo"
                   class="inline-flex items-center gap-2.5 text-white font-bold px-7 py-3.5 rounded-xl"
                   style="background: #3B82F6; box-shadow: 0 4px 20px rgba(59,130,246,0.35); font-size: 14px; transition: transform 0.18s ease, box-shadow 0.18s ease;"
                   onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 28px rgba(59,130,246,0.42)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 20px rgba(59,130,246,0.35)'">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/>
                    </svg>
                    View Live Demo
                </a>
                <a href="#pricing"
                   class="inline-flex items-center gap-2 font-semibold px-7 py-3.5 rounded-xl"
                   style="background: #ffffff; border: 2px solid #e2e8f0; color: #374151; font-size: 14px; transition: border-color 0.18s ease, transform 0.18s ease;"
                   onmouseover="this.style.borderColor='#93c5fd';this.style.transform='translateY(-2px)'"
                   onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='translateY(0)'">
                    See Pricing
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</section>

<script>
(function() {
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('hbp-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('#hbp-features .hbp-section-fade').forEach(function(el) {
        observer.observe(el);
    });
})();
</script>
