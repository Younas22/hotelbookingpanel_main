{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — CUSTOMER BOOKING WEBSITE SECTION
     Include with: @include('partials._booking-website-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Booking Website Section ─── */
    #hbp-bw {
        background: #f8fafc;
        border-top: 1px solid #f1f5f9;
        font-family: 'Inter', sans-serif;
    }

    /* Browser / phone card wrapper */
    .hbp-bw-frame {
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 4px 28px rgba(0,0,0,0.08), 0 0 0 1px rgba(0,0,0,0.05);
        background: #ffffff;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .hbp-bw-frame:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 48px rgba(59,130,246,0.14), 0 0 0 1px rgba(59,130,246,0.1);
    }

    /* Browser chrome bar */
    .hbp-bw-chrome {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 9px 13px;
        flex-shrink: 0;
    }
    .hbp-bw-dot {
        width: 10px; height: 10px;
        border-radius: 50%;
        display: block;
        flex-shrink: 0;
    }
    .hbp-bw-urlbar {
        flex: 1;
        margin: 0 8px;
    }
    .hbp-bw-urlinner {
        background: #eef2f7;
        border: 1px solid #e2e8f0;
        border-radius: 5px;
        padding: 3px 9px;
        max-width: 270px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* Screen label beneath each mockup */
    .hbp-bw-label {
        margin-top: 13px;
        text-align: center;
    }
    .hbp-bw-label-row {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-bottom: 3px;
    }
    .hbp-bw-label-icon {
        width: 22px; height: 22px;
        border-radius: 7px;
        background: #dbeafe;
        border: 1px solid rgba(59,130,246,0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .hbp-bw-label-name {
        font-size: 13.5px;
        font-weight: 800;
        color: #1e293b;
        letter-spacing: -0.01em;
    }
    .hbp-bw-label-sub {
        font-size: 11.5px;
        color: #94a3b8;
        font-weight: 500;
    }

    /* Phone frame */
    .hbp-bw-phone {
        border-radius: 30px;
        background: #1e293b;
        box-shadow: 0 8px 40px rgba(0,0,0,0.18), 0 0 0 2px rgba(255,255,255,0.06);
        overflow: hidden;
        position: relative;
    }
    .hbp-bw-phone-inner {
        border-radius: 24px;
        overflow: hidden;
        background: #f8fafc;
        margin: 7px;
        position: relative;
    }
    .hbp-bw-phone-notch {
        position: absolute;
        top: 0; left: 50%;
        transform: translateX(-50%);
        width: 72px; height: 20px;
        background: #1e293b;
        border-radius: 0 0 14px 14px;
        z-index: 10;
    }

    /* Section fade */
    .hbp-bw-fade {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }
    .hbp-bw-fade.hbp-bw-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<section id="hbp-bw" class="relative overflow-hidden" style="padding: 96px 0 108px;">

    {{-- Background dot texture --}}
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 28px 28px; opacity: 0.22;"></div>
    {{-- Top accent glow --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none" style="width:800px;height:280px;background:radial-gradient(ellipse at 50% 0%,rgba(59,130,246,0.06) 0%,transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═══════════════════════════════
             SECTION HEADER
        ═══════════════════════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-14 hbp-bw-fade">

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 mb-5 px-4 py-1.5 rounded-full" style="background:rgba(59,130,246,0.07);border:1px solid rgba(59,130,246,0.18);">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5" fill="#3B82F6" stroke="none"/><path d="M21 15l-5-5L5 21"/>
                </svg>
                <span class="text-[11px] font-bold tracking-[0.13em] uppercase" style="color:#2563eb;">Live Platform Preview</span>
            </div>

            {{-- Title --}}
            <h2 class="font-black tracking-tight leading-[1.1] mb-4" style="font-size:clamp(1.9rem,3.5vw,2.75rem);color:#0f172a;">
                Customer Booking Website
            </h2>

            {{-- Subtitle --}}
            <p style="font-size:17px;color:#64748b;line-height:1.7;">
                A modern booking experience your customers will love.
            </p>

        </div>

        {{-- ═══════════════════════════════════════
             TOP ROW — Homepage (wide) + Mobile Phone
        ═══════════════════════════════════════ --}}
        <div class="grid lg:grid-cols-12 gap-5 mb-5 items-start">

            {{-- ── 1. HOMEPAGE MOCKUP (7 cols) ── --}}
            <div class="lg:col-span-7 hbp-bw-fade" style="transition-delay:0.08s;">
                <div class="hbp-bw-frame">

                    {{-- Chrome --}}
                    <div class="hbp-bw-chrome">
                        <span class="hbp-bw-dot" style="background:#fc5a5a;"></span>
                        <span class="hbp-bw-dot" style="background:#fdbc40;"></span>
                        <span class="hbp-bw-dot" style="background:#34c84a;"></span>
                        <div class="hbp-bw-urlbar">
                            <div class="hbp-bw-urlinner">
                                <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                <span style="font-size:10px;color:#94a3b8;font-weight:500;">yourhotel.com</span>
                            </div>
                        </div>
                    </div>

                    {{-- Page content --}}
                    <div style="height:350px;overflow:hidden;background:#ffffff;">

                        {{-- Navbar --}}
                        <div style="background:#ffffff;border-bottom:1px solid #f1f5f9;padding:9px 16px;display:flex;align-items:center;justify-content:space-between;flex-shrink:0;">
                            <div style="display:flex;align-items:center;gap:7px;">
                                <div style="width:26px;height:26px;border-radius:7px;background:linear-gradient(135deg,#3B82F6,#1d4ed8);display:flex;align-items:center;justify-content:center;">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline stroke="white" stroke-width="1.8" fill="none" points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <span style="font-size:12px;font-weight:900;color:#0f172a;letter-spacing:-0.02em;">HotelPanel</span>
                            </div>
                            <div style="display:flex;align-items:center;gap:16px;">
                                <span style="font-size:9.5px;color:#64748b;font-weight:500;">Hotels</span>
                                <span style="font-size:9.5px;color:#64748b;font-weight:500;">Destinations</span>
                                <span style="font-size:9.5px;color:#64748b;font-weight:500;">Deals</span>
                                <span style="font-size:9.5px;color:#64748b;font-weight:500;">Sign In</span>
                                <div style="background:#3B82F6;color:white;font-size:9px;font-weight:700;padding:4px 12px;border-radius:7px;">Book Now</div>
                            </div>
                        </div>

                        {{-- Hero + Search --}}
                        <div style="background:linear-gradient(135deg,#1e3a8a 0%,#2563eb 50%,#60a5fa 100%);padding:22px 20px 20px;text-align:center;">
                            <p style="font-size:8px;font-weight:700;color:rgba(255,255,255,0.65);letter-spacing:0.12em;text-transform:uppercase;margin:0 0 5px;">10,000+ Hotels Worldwide · Best Price Guarantee</p>
                            <h3 style="font-size:18px;font-weight:900;color:#ffffff;margin:0 0 15px;letter-spacing:-0.025em;line-height:1.15;">Find Your Perfect Hotel Stay</h3>

                            {{-- Search box --}}
                            <div style="background:#ffffff;border-radius:12px;padding:10px 12px;display:flex;align-items:center;gap:0;max-width:560px;margin:0 auto;box-shadow:0 6px 24px rgba(0,0,0,0.2);">
                                <div style="flex:2;padding-right:11px;border-right:1px solid #f1f5f9;">
                                    <div style="font-size:6.5px;color:#94a3b8;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:2px;">Destination</div>
                                    <div style="font-size:10.5px;font-weight:700;color:#0f172a;display:flex;align-items:center;gap:4px;">
                                        <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                        Dubai, UAE
                                    </div>
                                </div>
                                <div style="flex:1.2;padding:0 11px;border-right:1px solid #f1f5f9;">
                                    <div style="font-size:6.5px;color:#94a3b8;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:2px;">Check-in</div>
                                    <div style="font-size:10.5px;font-weight:700;color:#0f172a;">Jun 15</div>
                                </div>
                                <div style="flex:1.2;padding:0 11px;border-right:1px solid #f1f5f9;">
                                    <div style="font-size:6.5px;color:#94a3b8;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:2px;">Check-out</div>
                                    <div style="font-size:10.5px;font-weight:700;color:#0f172a;">Jun 18</div>
                                </div>
                                <div style="flex:1;padding:0 11px;border-right:1px solid #f1f5f9;">
                                    <div style="font-size:6.5px;color:#94a3b8;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:2px;">Guests</div>
                                    <div style="font-size:10.5px;font-weight:700;color:#0f172a;">2 Adults</div>
                                </div>
                                <div style="padding-left:11px;">
                                    <div style="background:#3B82F6;color:white;border-radius:8px;padding:8px 14px;font-size:10px;font-weight:800;display:flex;align-items:center;gap:4px;white-space:nowrap;">
                                        <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                                        Search
                                    </div>
                                </div>
                            </div>

                            {{-- Popular destinations --}}
                            <div style="display:flex;align-items:center;justify-content:center;gap:6px;margin-top:10px;">
                                <span style="font-size:8px;color:rgba(255,255,255,0.55);">Popular:</span>
                                <span style="background:rgba(255,255,255,0.15);color:white;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;backdrop-filter:blur(4px);">🇦🇪 Dubai</span>
                                <span style="background:rgba(255,255,255,0.15);color:white;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;backdrop-filter:blur(4px);">🇬🇧 London</span>
                                <span style="background:rgba(255,255,255,0.15);color:white;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;backdrop-filter:blur(4px);">🇲🇻 Maldives</span>
                                <span style="background:rgba(255,255,255,0.15);color:white;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;backdrop-filter:blur(4px);">🇸🇬 Singapore</span>
                            </div>
                        </div>

                        {{-- Featured Hotels --}}
                        <div style="padding:13px 16px;">
                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:9px;">
                                <span style="font-size:11.5px;font-weight:900;color:#0f172a;">Featured Hotels</span>
                                <span style="font-size:9px;color:#3B82F6;font-weight:700;">View all →</span>
                            </div>
                            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:8px;">

                                {{-- Card 1 --}}
                                <div style="border:1px solid #e2e8f0;border-radius:10px;overflow:hidden;">
                                    <div style="height:52px;background:linear-gradient(135deg,#dbeafe,#93c5fd);display:flex;align-items:center;justify-content:center;position:relative;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.5" opacity="0.45"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                        <span style="position:absolute;top:4px;right:5px;font-size:6.5px;font-weight:700;background:rgba(255,255,255,0.9);color:#0f172a;padding:1px 5px;border-radius:4px;">★ 4.9</span>
                                    </div>
                                    <div style="padding:7px 8px;">
                                        <div style="font-size:9px;font-weight:800;color:#0f172a;margin-bottom:1px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Grand Palace Hotel</div>
                                        <div style="font-size:7.5px;color:#94a3b8;margin-bottom:5px;">Dubai, UAE</div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;">
                                            <span style="font-size:7px;color:#f59e0b;">★★★★★</span>
                                            <span style="font-size:9.5px;font-weight:900;color:#0f172a;">$180<span style="font-size:7px;font-weight:500;color:#94a3b8;">/n</span></span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Card 2 --}}
                                <div style="border:1px solid #e2e8f0;border-radius:10px;overflow:hidden;">
                                    <div style="height:52px;background:linear-gradient(135deg,#dcfce7,#86efac);display:flex;align-items:center;justify-content:center;position:relative;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.5" opacity="0.45"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                        <span style="position:absolute;top:4px;right:5px;font-size:6.5px;font-weight:700;background:rgba(255,255,255,0.9);color:#0f172a;padding:1px 5px;border-radius:4px;">★ 4.8</span>
                                    </div>
                                    <div style="padding:7px 8px;">
                                        <div style="font-size:9px;font-weight:800;color:#0f172a;margin-bottom:1px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Skyline Resort</div>
                                        <div style="font-size:7.5px;color:#94a3b8;margin-bottom:5px;">London, UK</div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;">
                                            <span style="font-size:7px;color:#f59e0b;">★★★★<span style="color:#e2e8f0;">★</span></span>
                                            <span style="font-size:9.5px;font-weight:900;color:#0f172a;">$120<span style="font-size:7px;font-weight:500;color:#94a3b8;">/n</span></span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Card 3 --}}
                                <div style="border:1px solid #e2e8f0;border-radius:10px;overflow:hidden;">
                                    <div style="height:52px;background:linear-gradient(135deg,#ede9fe,#c4b5fd);display:flex;align-items:center;justify-content:center;position:relative;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="1.5" opacity="0.45"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                        <span style="position:absolute;top:4px;right:5px;font-size:6.5px;font-weight:700;background:rgba(255,255,255,0.9);color:#0f172a;padding:1px 5px;border-radius:4px;">★ 5.0</span>
                                    </div>
                                    <div style="padding:7px 8px;">
                                        <div style="font-size:9px;font-weight:800;color:#0f172a;margin-bottom:1px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Azure Cliff Retreat</div>
                                        <div style="font-size:7.5px;color:#94a3b8;margin-bottom:5px;">Maldives</div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;">
                                            <span style="font-size:7px;color:#f59e0b;">★★★★★</span>
                                            <span style="font-size:9.5px;font-weight:900;color:#0f172a;">$340<span style="font-size:7px;font-weight:500;color:#94a3b8;">/n</span></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- Label --}}
                <div class="hbp-bw-label">
                    <div class="hbp-bw-label-row">
                        <div class="hbp-bw-label-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        </div>
                        <span class="hbp-bw-label-name">Homepage</span>
                    </div>
                    <div class="hbp-bw-label-sub">Attract & convert visitors</div>
                </div>
            </div>

            {{-- ── 5. MOBILE RESPONSIVE VIEW (5 cols) ── --}}
            <div class="lg:col-span-5 flex flex-col items-center hbp-bw-fade" style="transition-delay:0.15s;">

                {{-- Phone frame --}}
                <div class="hbp-bw-phone" style="width:200px;height:424px;flex-shrink:0;">
                    <div class="hbp-bw-phone-notch"></div>
                    <div class="hbp-bw-phone-inner" style="height:calc(100% - 14px);display:flex;flex-direction:column;">

                        {{-- Status bar --}}
                        <div style="background:#ffffff;padding:18px 14px 4px;display:flex;align-items:center;justify-content:space-between;flex-shrink:0;">
                            <span style="font-size:9px;font-weight:800;color:#0f172a;">9:41</span>
                            <div style="display:flex;align-items:center;gap:5px;">
                                <svg width="13" height="9" viewBox="0 0 26 18"><rect x="0" y="9" width="5" height="9" rx="1.2" fill="#0f172a"/><rect x="7" y="6" width="5" height="12" rx="1.2" fill="#0f172a"/><rect x="14" y="3" width="5" height="15" rx="1.2" fill="#0f172a"/><rect x="21" y="0" width="5" height="18" rx="1.2" fill="#0f172a"/></svg>
                                <svg width="14" height="9" viewBox="0 0 28 18"><path d="M14 4C10 4 6.4 5.6 3.8 8.2L0.2 4.6C3.8 1.7 8.7 0 14 0s10.2 1.7 13.8 4.6l-3.6 3.6C21.6 5.6 18 4 14 4z" fill="#0f172a" opacity="0.5"/><path d="M14 10c-2.2 0-4.2.9-5.6 2.3L5 8.9C7.2 6.7 10.5 5.5 14 5.5s6.8 1.2 9 3.4l-3.4 3.4C18.2 10.9 16.2 10 14 10z" fill="#0f172a" opacity="0.75"/><circle cx="14" cy="17" r="2.2" fill="#0f172a"/></svg>
                                <svg width="16" height="9" viewBox="0 0 32 18"><rect x="0" y="1" width="26" height="16" rx="3" stroke="#0f172a" stroke-width="1.8" fill="none"/><rect x="27" y="6" width="4" height="6" rx="2" fill="#0f172a" opacity="0.4"/><rect x="2" y="3" width="20" height="12" rx="2" fill="#0f172a"/></svg>
                            </div>
                        </div>

                        {{-- App header --}}
                        <div style="background:#ffffff;padding:3px 12px 10px;border-bottom:1px solid #f1f5f9;flex-shrink:0;">
                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                <div style="display:flex;align-items:center;gap:5px;">
                                    <div style="width:22px;height:22px;border-radius:6px;background:linear-gradient(135deg,#3B82F6,#1d4ed8);display:flex;align-items:center;justify-content:center;">
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="white"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                    </div>
                                    <span style="font-size:13px;font-weight:900;color:#0f172a;letter-spacing:-0.01em;">HotelPanel</span>
                                </div>
                                <div style="width:28px;height:28px;border-radius:50%;background:#f1f5f9;display:flex;align-items:center;justify-content:center;">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </div>
                            </div>
                            {{-- Search bar --}}
                            <div style="background:#f1f5f9;border-radius:11px;padding:9px 12px;display:flex;align-items:center;gap:7px;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                                <span style="font-size:12px;color:#94a3b8;">Search destination...</span>
                            </div>
                        </div>

                        {{-- Date + filter row --}}
                        <div style="background:#ffffff;padding:8px 12px;display:flex;align-items:center;gap:5px;border-bottom:1px solid #f1f5f9;flex-shrink:0;">
                            <div style="background:#dbeafe;border-radius:99px;padding:4px 9px;display:flex;align-items:center;gap:3px;flex-shrink:0;">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                <span style="font-size:9.5px;font-weight:700;color:#1d4ed8;">Jun 15–18</span>
                            </div>
                            <div style="background:#f1f5f9;border-radius:99px;padding:4px 9px;flex-shrink:0;">
                                <span style="font-size:9.5px;font-weight:600;color:#475569;">2 Guests</span>
                            </div>
                            <div style="background:#f1f5f9;border-radius:99px;padding:4px 9px;flex-shrink:0;display:flex;align-items:center;gap:3px;">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5"><line x1="4" y1="6" x2="20" y2="6"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="11" y1="18" x2="13" y2="18"/></svg>
                                <span style="font-size:9.5px;font-weight:600;color:#475569;">Filters</span>
                            </div>
                        </div>

                        {{-- Hotel result cards --}}
                        <div style="padding:10px;overflow:hidden;display:flex;flex-direction:column;gap:7px;flex:1;">

                            {{-- Card 1 --}}
                            <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:12px;overflow:hidden;display:flex;box-shadow:0 1px 4px rgba(0,0,0,0.04);">
                                <div style="width:60px;flex-shrink:0;background:linear-gradient(135deg,#dbeafe,#93c5fd);display:flex;align-items:center;justify-content:center;">
                                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.6" opacity="0.6"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <div style="padding:8px 10px;flex:1;min-width:0;">
                                    <div style="font-size:10px;font-weight:800;color:#0f172a;margin-bottom:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Grand Palace Hotel</div>
                                    <div style="font-size:8px;color:#94a3b8;margin-bottom:4px;">Dubai · <span style="color:#f59e0b;">★★★★★</span></div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;">
                                        <span style="font-size:10px;font-weight:900;color:#0f172a;">$180<span style="font-size:7.5px;font-weight:500;color:#94a3b8;">/night</span></span>
                                        <span style="font-size:8px;font-weight:700;background:#dcfce7;color:#15803d;padding:2px 7px;border-radius:99px;">Available</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Card 2 --}}
                            <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:12px;overflow:hidden;display:flex;box-shadow:0 1px 4px rgba(0,0,0,0.04);">
                                <div style="width:60px;flex-shrink:0;background:linear-gradient(135deg,#dcfce7,#86efac);display:flex;align-items:center;justify-content:center;">
                                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.6" opacity="0.6"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <div style="padding:8px 10px;flex:1;min-width:0;">
                                    <div style="font-size:10px;font-weight:800;color:#0f172a;margin-bottom:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Skyline Resort</div>
                                    <div style="font-size:8px;color:#94a3b8;margin-bottom:4px;">London · <span style="color:#f59e0b;">★★★★</span><span style="color:#e2e8f0;">★</span></div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;">
                                        <span style="font-size:10px;font-weight:900;color:#0f172a;">$120<span style="font-size:7.5px;font-weight:500;color:#94a3b8;">/night</span></span>
                                        <span style="font-size:8px;font-weight:700;background:#dcfce7;color:#15803d;padding:2px 7px;border-radius:99px;">Available</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Card 3 --}}
                            <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:12px;overflow:hidden;display:flex;box-shadow:0 1px 4px rgba(0,0,0,0.04);">
                                <div style="width:60px;flex-shrink:0;background:linear-gradient(135deg,#ede9fe,#c4b5fd);display:flex;align-items:center;justify-content:center;">
                                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="1.6" opacity="0.6"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <div style="padding:8px 10px;flex:1;min-width:0;">
                                    <div style="font-size:10px;font-weight:800;color:#0f172a;margin-bottom:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Azure Cliff Retreat</div>
                                    <div style="font-size:8px;color:#94a3b8;margin-bottom:4px;">Maldives · <span style="color:#f59e0b;">★★★★★</span></div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;">
                                        <span style="font-size:10px;font-weight:900;color:#0f172a;">$340<span style="font-size:7.5px;font-weight:500;color:#94a3b8;">/night</span></span>
                                        <span style="font-size:8px;font-weight:700;background:#dcfce7;color:#15803d;padding:2px 7px;border-radius:99px;">Available</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Card 4 (partial) --}}
                            <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:12px;overflow:hidden;display:flex;box-shadow:0 1px 4px rgba(0,0,0,0.04);opacity:0.5;">
                                <div style="width:60px;flex-shrink:0;background:linear-gradient(135deg,#fef3c7,#fde68a);display:flex;align-items:center;justify-content:center;">
                                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="1.6" opacity="0.6"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <div style="padding:8px 10px;flex:1;min-width:0;">
                                    <div style="font-size:10px;font-weight:800;color:#0f172a;margin-bottom:2px;">Marina Bay Suites</div>
                                    <div style="font-size:8px;color:#94a3b8;margin-bottom:4px;">Singapore · <span style="color:#f59e0b;">★★★★</span><span style="color:#e2e8f0;">★</span></div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;">
                                        <span style="font-size:10px;font-weight:900;color:#0f172a;">$195<span style="font-size:7.5px;font-weight:500;color:#94a3b8;">/night</span></span>
                                        <span style="font-size:8px;font-weight:700;background:#dcfce7;color:#15803d;padding:2px 7px;border-radius:99px;">Available</span>
                                    </div>
                                </div>
                            </div>

                        </div>{{-- end cards --}}

                    </div>{{-- end phone-inner --}}
                </div>{{-- end phone --}}

                {{-- Label --}}
                <div class="hbp-bw-label">
                    <div class="hbp-bw-label-row">
                        <div class="hbp-bw-label-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18" stroke-width="2.5"/></svg>
                        </div>
                        <span class="hbp-bw-label-name">Mobile Responsive View</span>
                    </div>
                    <div class="hbp-bw-label-sub">Optimised for every device</div>
                </div>

            </div>{{-- end mobile col --}}

        </div>{{-- end top row --}}

        {{-- ═══════════════════════════════════════════════════════
             BOTTOM ROW — Hotel Listing · Hotel Details · Checkout
        ═══════════════════════════════════════════════════════════ --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

            {{-- ── 2. HOTEL LISTING PAGE ── --}}
            <div class="hbp-bw-fade" style="transition-delay:0.22s;">
                <div class="hbp-bw-frame">
                    <div class="hbp-bw-chrome">
                        <span class="hbp-bw-dot" style="background:#fc5a5a;"></span>
                        <span class="hbp-bw-dot" style="background:#fdbc40;"></span>
                        <span class="hbp-bw-dot" style="background:#34c84a;"></span>
                        <div class="hbp-bw-urlbar">
                            <div class="hbp-bw-urlinner">
                                <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                <span style="font-size:9.5px;color:#94a3b8;font-weight:500;">yourhotel.com/hotels?city=dubai</span>
                            </div>
                        </div>
                    </div>
                    <div style="height:286px;overflow:hidden;background:#f8fafc;padding:11px;">

                        {{-- Result header --}}
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                            <div>
                                <div style="font-size:11px;font-weight:900;color:#0f172a;">Hotels in Dubai</div>
                                <div style="font-size:8px;color:#94a3b8;">47 properties · sorted by price</div>
                            </div>
                            <div style="display:flex;align-items:center;gap:4px;">
                                <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:5px;padding:3px 7px;font-size:8px;color:#475569;display:flex;align-items:center;gap:3px;">
                                    Sort <svg width="7" height="7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                                </div>
                            </div>
                        </div>

                        {{-- Filter pills --}}
                        <div style="display:flex;gap:4px;margin-bottom:8px;flex-wrap:wrap;">
                            <span style="background:#3B82F6;color:white;font-size:8px;font-weight:700;padding:3px 9px;border-radius:99px;">All</span>
                            <span style="background:#ffffff;color:#475569;border:1px solid #e2e8f0;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;">Price ▾</span>
                            <span style="background:#ffffff;color:#475569;border:1px solid #e2e8f0;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;">5 Stars</span>
                            <span style="background:#ffffff;color:#475569;border:1px solid #e2e8f0;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;">Breakfast</span>
                            <span style="background:#ffffff;color:#475569;border:1px solid #e2e8f0;font-size:8px;font-weight:600;padding:3px 9px;border-radius:99px;">Pool</span>
                        </div>

                        {{-- Hotel results --}}
                        <div style="display:flex;flex-direction:column;gap:6px;">

                            <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:10px;overflow:hidden;display:flex;">
                                <div style="width:70px;flex-shrink:0;background:linear-gradient(135deg,#dbeafe,#93c5fd);display:flex;align-items:center;justify-content:center;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.6" opacity="0.55"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <div style="padding:8px 9px;flex:1;display:flex;align-items:center;justify-content:space-between;">
                                    <div>
                                        <div style="font-size:9.5px;font-weight:800;color:#0f172a;margin-bottom:1px;">Grand Palace Hotel</div>
                                        <div style="font-size:7.5px;color:#94a3b8;margin-bottom:3px;">Dubai, UAE</div>
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <span style="font-size:8px;color:#f59e0b;">★★★★★</span>
                                            <span style="font-size:7px;color:#94a3b8;">(248)</span>
                                        </div>
                                    </div>
                                    <div style="text-align:right;flex-shrink:0;">
                                        <div style="font-size:12px;font-weight:900;color:#0f172a;line-height:1.1;">$180</div>
                                        <div style="font-size:7px;color:#94a3b8;margin-bottom:4px;">/night</div>
                                        <div style="background:#3B82F6;color:white;font-size:8px;font-weight:700;padding:3px 9px;border-radius:5px;">Book</div>
                                    </div>
                                </div>
                            </div>

                            <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:10px;overflow:hidden;display:flex;">
                                <div style="width:70px;flex-shrink:0;background:linear-gradient(135deg,#dcfce7,#86efac);display:flex;align-items:center;justify-content:center;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.6" opacity="0.55"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <div style="padding:8px 9px;flex:1;display:flex;align-items:center;justify-content:space-between;">
                                    <div>
                                        <div style="font-size:9.5px;font-weight:800;color:#0f172a;margin-bottom:1px;">Marina Bay Suites</div>
                                        <div style="font-size:7.5px;color:#94a3b8;margin-bottom:3px;">Dubai, UAE</div>
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <span style="font-size:8px;color:#f59e0b;">★★★★<span style="color:#e2e8f0;">★</span></span>
                                            <span style="font-size:7px;color:#94a3b8;">(189)</span>
                                        </div>
                                    </div>
                                    <div style="text-align:right;flex-shrink:0;">
                                        <div style="font-size:12px;font-weight:900;color:#0f172a;line-height:1.1;">$145</div>
                                        <div style="font-size:7px;color:#94a3b8;margin-bottom:4px;">/night</div>
                                        <div style="background:#3B82F6;color:white;font-size:8px;font-weight:700;padding:3px 9px;border-radius:5px;">Book</div>
                                    </div>
                                </div>
                            </div>

                            <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:10px;overflow:hidden;display:flex;">
                                <div style="width:70px;flex-shrink:0;background:linear-gradient(135deg,#ede9fe,#c4b5fd);display:flex;align-items:center;justify-content:center;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="1.6" opacity="0.55"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </div>
                                <div style="padding:8px 9px;flex:1;display:flex;align-items:center;justify-content:space-between;">
                                    <div>
                                        <div style="font-size:9.5px;font-weight:800;color:#0f172a;margin-bottom:1px;">Desert Rose Hotel</div>
                                        <div style="font-size:7.5px;color:#94a3b8;margin-bottom:3px;">Dubai, UAE</div>
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <span style="font-size:8px;color:#f59e0b;">★★★★★</span>
                                            <span style="font-size:7px;color:#94a3b8;">(312)</span>
                                        </div>
                                    </div>
                                    <div style="text-align:right;flex-shrink:0;">
                                        <div style="font-size:12px;font-weight:900;color:#0f172a;line-height:1.1;">$220</div>
                                        <div style="font-size:7px;color:#94a3b8;margin-bottom:4px;">/night</div>
                                        <div style="background:#3B82F6;color:white;font-size:8px;font-weight:700;padding:3px 9px;border-radius:5px;">Book</div>
                                    </div>
                                </div>
                            </div>

                        </div>{{-- end results --}}
                    </div>
                </div>
                <div class="hbp-bw-label">
                    <div class="hbp-bw-label-row">
                        <div class="hbp-bw-label-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6" stroke-width="2.5"/><line x1="3" y1="12" x2="3.01" y2="12" stroke-width="2.5"/><line x1="3" y1="18" x2="3.01" y2="18" stroke-width="2.5"/></svg>
                        </div>
                        <span class="hbp-bw-label-name">Hotel Listing Page</span>
                    </div>
                    <div class="hbp-bw-label-sub">Browse & filter properties</div>
                </div>
            </div>

            {{-- ── 3. HOTEL DETAILS PAGE ── --}}
            <div class="hbp-bw-fade" style="transition-delay:0.29s;">
                <div class="hbp-bw-frame">
                    <div class="hbp-bw-chrome">
                        <span class="hbp-bw-dot" style="background:#fc5a5a;"></span>
                        <span class="hbp-bw-dot" style="background:#fdbc40;"></span>
                        <span class="hbp-bw-dot" style="background:#34c84a;"></span>
                        <div class="hbp-bw-urlbar">
                            <div class="hbp-bw-urlinner">
                                <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                <span style="font-size:9.5px;color:#94a3b8;font-weight:500;">yourhotel.com/hotel/grand-palace</span>
                            </div>
                        </div>
                    </div>
                    <div style="height:286px;overflow:hidden;background:#ffffff;">

                        {{-- Photo gallery header --}}
                        <div style="height:76px;position:relative;display:grid;grid-template-columns:2.2fr 1fr;gap:2px;overflow:hidden;">
                            <div style="background:linear-gradient(135deg,#1e3a8a,#2563eb);"></div>
                            <div style="display:grid;grid-template-rows:1fr 1fr;gap:2px;">
                                <div style="background:linear-gradient(135deg,#3B82F6,#60a5fa);"></div>
                                <div style="background:linear-gradient(135deg,#0284c7,#38bdf8);"></div>
                            </div>
                            <div style="position:absolute;bottom:6px;left:10px;display:flex;gap:4px;">
                                <span style="background:rgba(0,0,0,0.5);color:white;font-size:7.5px;font-weight:700;padding:2px 7px;border-radius:5px;backdrop-filter:blur(3px);">📷 12 Photos</span>
                            </div>
                            <div style="position:absolute;bottom:6px;right:10px;display:flex;gap:3px;">
                                <span style="background:rgba(255,255,255,0.9);font-size:7.5px;font-weight:700;padding:2px 7px;border-radius:5px;color:#0f172a;">♡</span>
                                <span style="background:rgba(255,255,255,0.9);font-size:7.5px;font-weight:700;padding:2px 7px;border-radius:5px;color:#0f172a;">↗</span>
                            </div>
                        </div>

                        {{-- Hotel info --}}
                        <div style="padding:10px 12px;border-bottom:1px solid #f1f5f9;">
                            <div style="display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:4px;">
                                <div>
                                    <div style="font-size:12px;font-weight:900;color:#0f172a;margin-bottom:2px;">Grand Palace Hotel</div>
                                    <div style="display:flex;align-items:center;gap:5px;">
                                        <span style="font-size:8.5px;color:#f59e0b;">★★★★★</span>
                                        <span style="font-size:8px;color:#64748b;">4.9 · 248 reviews</span>
                                    </div>
                                </div>
                                <div style="text-align:right;">
                                    <div style="font-size:14px;font-weight:900;color:#0f172a;line-height:1;">$180</div>
                                    <div style="font-size:7.5px;color:#94a3b8;">per night</div>
                                </div>
                            </div>
                            <div style="display:flex;align-items:center;gap:4px;">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <span style="font-size:8.5px;color:#64748b;">Sheikh Zayed Rd, Dubai, UAE</span>
                            </div>
                        </div>

                        {{-- Tabs --}}
                        <div style="display:flex;border-bottom:1px solid #f1f5f9;padding:0 12px;">
                            <span style="font-size:9px;font-weight:800;color:#2563eb;padding:7px 9px;border-bottom:2px solid #3B82F6;">Rooms</span>
                            <span style="font-size:9px;color:#94a3b8;padding:7px 9px;border-bottom:2px solid transparent;">Overview</span>
                            <span style="font-size:9px;color:#94a3b8;padding:7px 9px;border-bottom:2px solid transparent;">Amenities</span>
                            <span style="font-size:9px;color:#94a3b8;padding:7px 9px;border-bottom:2px solid transparent;">Reviews</span>
                        </div>

                        {{-- Room types --}}
                        <div style="padding:9px 12px;display:flex;flex-direction:column;gap:7px;">

                            <div style="border:1.5px solid #e2e8f0;border-radius:10px;padding:9px 10px;display:flex;align-items:center;justify-content:space-between;">
                                <div>
                                    <div style="font-size:9.5px;font-weight:800;color:#0f172a;margin-bottom:2px;">Deluxe Room</div>
                                    <div style="font-size:7.5px;color:#94a3b8;margin-bottom:4px;">32 m² · King Bed · 2 Guests</div>
                                    <div style="display:flex;gap:4px;">
                                        <span style="font-size:7px;background:#f0fdf4;color:#15803d;border:1px solid #bbf7d0;padding:1px 6px;border-radius:99px;">Free WiFi</span>
                                        <span style="font-size:7px;background:#f0fdf4;color:#15803d;border:1px solid #bbf7d0;padding:1px 6px;border-radius:99px;">Breakfast</span>
                                    </div>
                                </div>
                                <div style="text-align:right;flex-shrink:0;margin-left:8px;">
                                    <div style="font-size:13px;font-weight:900;color:#0f172a;line-height:1;">$180</div>
                                    <div style="font-size:7px;color:#94a3b8;margin-bottom:5px;">/night</div>
                                    <div style="background:#3B82F6;color:white;font-size:8px;font-weight:700;padding:4px 10px;border-radius:6px;">Select</div>
                                </div>
                            </div>

                            <div style="border:1.5px solid #e2e8f0;border-radius:10px;padding:9px 10px;display:flex;align-items:center;justify-content:space-between;">
                                <div>
                                    <div style="font-size:9.5px;font-weight:800;color:#0f172a;margin-bottom:2px;">Executive Suite</div>
                                    <div style="font-size:7.5px;color:#94a3b8;margin-bottom:4px;">58 m² · King Bed · 4 Guests</div>
                                    <div style="display:flex;gap:4px;">
                                        <span style="font-size:7px;background:#f0fdf4;color:#15803d;border:1px solid #bbf7d0;padding:1px 6px;border-radius:99px;">Free WiFi</span>
                                        <span style="font-size:7px;background:#eff6ff;color:#1d4ed8;border:1px solid #bfdbfe;padding:1px 6px;border-radius:99px;">Pool Access</span>
                                    </div>
                                </div>
                                <div style="text-align:right;flex-shrink:0;margin-left:8px;">
                                    <div style="font-size:13px;font-weight:900;color:#0f172a;line-height:1;">$320</div>
                                    <div style="font-size:7px;color:#94a3b8;margin-bottom:5px;">/night</div>
                                    <div style="background:#3B82F6;color:white;font-size:8px;font-weight:700;padding:4px 10px;border-radius:6px;">Select</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="hbp-bw-label">
                    <div class="hbp-bw-label-row">
                        <div class="hbp-bw-label-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16" stroke-width="2.5"/></svg>
                        </div>
                        <span class="hbp-bw-label-name">Hotel Details Page</span>
                    </div>
                    <div class="hbp-bw-label-sub">Explore rooms & amenities</div>
                </div>
            </div>

            {{-- ── 4. BOOKING CHECKOUT PAGE ── --}}
            <div class="hbp-bw-fade" style="transition-delay:0.36s;">
                <div class="hbp-bw-frame">
                    <div class="hbp-bw-chrome">
                        <span class="hbp-bw-dot" style="background:#fc5a5a;"></span>
                        <span class="hbp-bw-dot" style="background:#fdbc40;"></span>
                        <span class="hbp-bw-dot" style="background:#34c84a;"></span>
                        <div class="hbp-bw-urlbar">
                            <div class="hbp-bw-urlinner">
                                <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                <span style="font-size:9.5px;color:#94a3b8;font-weight:500;">yourhotel.com/checkout</span>
                            </div>
                        </div>
                    </div>
                    <div style="height:286px;overflow:hidden;background:#f8fafc;">

                        {{-- Progress steps --}}
                        <div style="background:#ffffff;border-bottom:1px solid #e2e8f0;padding:9px 12px;display:flex;align-items:center;justify-content:center;gap:4px;">
                            <div style="display:flex;align-items:center;gap:3px;">
                                <div style="width:18px;height:18px;border-radius:50%;background:#e2e8f0;display:flex;align-items:center;justify-content:center;">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <span style="font-size:8px;color:#94a3b8;font-weight:600;">Search</span>
                            </div>
                            <div style="width:18px;height:1px;background:#e2e8f0;"></div>
                            <div style="display:flex;align-items:center;gap:3px;">
                                <div style="width:18px;height:18px;border-radius:50%;background:#e2e8f0;display:flex;align-items:center;justify-content:center;">
                                    <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <span style="font-size:8px;color:#94a3b8;font-weight:600;">Select</span>
                            </div>
                            <div style="width:18px;height:1.5px;background:#3B82F6;"></div>
                            <div style="display:flex;align-items:center;gap:3px;">
                                <div style="width:18px;height:18px;border-radius:50%;background:#3B82F6;display:flex;align-items:center;justify-content:center;">
                                    <span style="font-size:8px;font-weight:900;color:white;">3</span>
                                </div>
                                <span style="font-size:8px;color:#2563eb;font-weight:800;">Checkout</span>
                            </div>
                            <div style="width:18px;height:1px;background:#e2e8f0;"></div>
                            <div style="display:flex;align-items:center;gap:3px;">
                                <div style="width:18px;height:18px;border-radius:50%;background:#f1f5f9;border:1.5px solid #e2e8f0;display:flex;align-items:center;justify-content:center;">
                                    <span style="font-size:8px;font-weight:700;color:#94a3b8;">4</span>
                                </div>
                                <span style="font-size:8px;color:#94a3b8;font-weight:600;">Confirm</span>
                            </div>
                        </div>

                        {{-- 2-col: Form + Summary --}}
                        <div style="display:grid;grid-template-columns:1.15fr 1fr;gap:8px;padding:10px 11px;overflow:hidden;">

                            {{-- Guest form --}}
                            <div>
                                <div style="font-size:9.5px;font-weight:800;color:#0f172a;margin-bottom:7px;">Guest Details</div>
                                <div style="display:grid;grid-template-columns:1fr 1fr;gap:5px;margin-bottom:5px;">
                                    <div>
                                        <div style="font-size:6.5px;color:#64748b;font-weight:700;margin-bottom:2px;text-transform:uppercase;letter-spacing:0.04em;">First Name</div>
                                        <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:5px;padding:5px 7px;font-size:9px;color:#0f172a;font-weight:500;">James</div>
                                    </div>
                                    <div>
                                        <div style="font-size:6.5px;color:#64748b;font-weight:700;margin-bottom:2px;text-transform:uppercase;letter-spacing:0.04em;">Last Name</div>
                                        <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:5px;padding:5px 7px;font-size:9px;color:#0f172a;font-weight:500;">Wilson</div>
                                    </div>
                                </div>
                                <div style="margin-bottom:5px;">
                                    <div style="font-size:6.5px;color:#64748b;font-weight:700;margin-bottom:2px;text-transform:uppercase;letter-spacing:0.04em;">Email Address</div>
                                    <div style="background:#ffffff;border:1.5px solid #3B82F6;border-radius:5px;padding:5px 7px;font-size:9px;color:#0f172a;font-weight:500;display:flex;align-items:center;gap:4px;">
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><path d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                        james@example.com
                                    </div>
                                </div>
                                <div style="margin-bottom:5px;">
                                    <div style="font-size:6.5px;color:#64748b;font-weight:700;margin-bottom:2px;text-transform:uppercase;letter-spacing:0.04em;">Phone</div>
                                    <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:5px;padding:5px 7px;font-size:9px;color:#0f172a;font-weight:500;">+971 50 123 4567</div>
                                </div>
                                <div>
                                    <div style="font-size:6.5px;color:#64748b;font-weight:700;margin-bottom:2px;text-transform:uppercase;letter-spacing:0.04em;">Special Requests</div>
                                    <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:5px;padding:5px 7px;font-size:8px;color:#94a3b8;height:28px;">Early check-in if available...</div>
                                </div>
                            </div>

                            {{-- Booking summary --}}
                            <div>
                                <div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:10px;padding:9px 10px;">
                                    <div style="font-size:9px;font-weight:800;color:#0f172a;margin-bottom:7px;">Booking Summary</div>
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:7px;padding-bottom:7px;border-bottom:1px solid #f1f5f9;">
                                        <div style="width:32px;height:32px;border-radius:7px;flex-shrink:0;background:linear-gradient(135deg,#dbeafe,#93c5fd);display:flex;align-items:center;justify-content:center;">
                                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:8.5px;font-weight:800;color:#0f172a;">Grand Palace Hotel</div>
                                            <div style="font-size:7px;color:#94a3b8;">Deluxe Room</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                        <span style="font-size:7.5px;color:#64748b;">Check-in</span>
                                        <span style="font-size:7.5px;font-weight:700;color:#0f172a;">Jun 15</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:7px;">
                                        <span style="font-size:7.5px;color:#64748b;">Check-out</span>
                                        <span style="font-size:7.5px;font-weight:700;color:#0f172a;">Jun 18</span>
                                    </div>
                                    <div style="border-top:1px dashed #e2e8f0;padding-top:6px;margin-bottom:6px;">
                                        <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                            <span style="font-size:7.5px;color:#64748b;">$180 × 3 nights</span>
                                            <span style="font-size:7.5px;font-weight:600;color:#0f172a;">$540</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;">
                                            <span style="font-size:7.5px;color:#64748b;">Taxes &amp; fees</span>
                                            <span style="font-size:7.5px;font-weight:600;color:#0f172a;">$54</span>
                                        </div>
                                    </div>
                                    <div style="border-top:1.5px solid #e2e8f0;padding-top:5px;display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:9px;font-weight:900;color:#0f172a;">Total</span>
                                        <span style="font-size:14px;font-weight:900;color:#0f172a;">$594</span>
                                    </div>
                                    <div style="background:#3B82F6;color:white;border-radius:7px;padding:7px;text-align:center;font-size:9px;font-weight:800;display:flex;align-items:center;justify-content:center;gap:4px;margin-bottom:5px;">
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                        Pay Securely · $594
                                    </div>
                                    <div style="text-align:center;font-size:7px;color:#94a3b8;display:flex;align-items:center;justify-content:center;gap:3px;">
                                        <svg width="7" height="7" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                        256-bit SSL · Stripe secured
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="hbp-bw-label">
                    <div class="hbp-bw-label-row">
                        <div class="hbp-bw-label-icon">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                        </div>
                        <span class="hbp-bw-label-name">Booking Checkout Page</span>
                    </div>
                    <div class="hbp-bw-label-sub">Secure, fast payment flow</div>
                </div>
            </div>

        </div>{{-- end bottom row --}}

    </div>
</section>

<script>
(function () {
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('hbp-bw-visible'); io.unobserve(e.target); }
        });
    }, { threshold: 0.10 });
    document.querySelectorAll('#hbp-bw .hbp-bw-fade').forEach(function (el) { io.observe(el); });
})();
</script>
