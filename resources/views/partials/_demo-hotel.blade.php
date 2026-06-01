{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — LIVE DEMO SECTION
     Include with: @include('partials._demo-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Demo Section ─── */
    #hbp-demo {
        background: #f8fafc;
        font-family: 'Inter', sans-serif;
    }

    .hbp-demo-badge {
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

    /* ── Demo card ── */
    .hbp-demo-card {
        background: #ffffff;
        border: 1.5px solid #e9eef5;
        border-radius: 22px;
        overflow: hidden;
        transition: transform 0.24s ease, box-shadow 0.24s ease, border-color 0.24s ease;
        display: flex;
        flex-direction: column;
    }

    .hbp-demo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 52px rgba(59, 130, 246, 0.13), 0 4px 12px rgba(0,0,0,0.05);
        border-color: rgba(59, 130, 246, 0.28);
    }

    /* ── Browser chrome bar ── */
    .hbp-demo-chrome {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 9px 13px;
        flex-shrink: 0;
    }

    .hbp-demo-chrome-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: block;
        flex-shrink: 0;
    }

    .hbp-demo-chrome-bar {
        flex: 1;
        margin: 0 8px;
    }

    .hbp-demo-chrome-url {
        background: #eef2f7;
        border: 1px solid #e2e8f0;
        border-radius: 5px;
        padding: 3px 9px;
        max-width: 280px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* ── Mockup preview area ── */
    .hbp-demo-preview {
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }

    /* Gradient fade at bottom of preview */
    .hbp-demo-preview::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 48px;
        background: linear-gradient(to bottom, transparent, #ffffff);
        pointer-events: none;
        z-index: 2;
    }

    .hbp-demo-card:hover .hbp-demo-preview::after {
        background: linear-gradient(to bottom, transparent, #ffffff);
    }

    /* ── Card body ── */
    .hbp-demo-body {
        padding: 26px 28px 30px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .hbp-demo-card-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 99px;
        font-size: 10.5px;
        font-weight: 800;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .hbp-demo-card-title {
        font-size: 20px;
        font-weight: 900;
        color: #0f172a;
        margin: 0 0 10px;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }

    .hbp-demo-card-desc {
        font-size: 13.5px;
        color: #64748b;
        line-height: 1.7;
        margin: 0 0 22px;
    }

    /* ── Credentials block ── */
    .hbp-demo-creds {
        background: #f8fafc;
        border: 1px solid #e9eef5;
        border-radius: 14px;
        padding: 16px 18px;
        margin-bottom: 22px;
    }

    .hbp-demo-creds-head {
        font-size: 10px;
        font-weight: 800;
        color: #94a3b8;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .hbp-demo-cred-row {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 0;
    }

    .hbp-demo-cred-row + .hbp-demo-cred-row {
        border-top: 1px solid #f1f5f9;
    }

    .hbp-demo-cred-label {
        font-size: 11px;
        font-weight: 700;
        color: #94a3b8;
        width: 60px;
        flex-shrink: 0;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }

    .hbp-demo-cred-value {
        flex: 1;
        font-size: 12.5px;
        font-weight: 700;
        color: #334155;
        font-family: 'Courier New', monospace;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 7px;
        padding: 5px 10px;
        letter-spacing: 0.02em;
    }

    .hbp-demo-cred-copy {
        width: 28px;
        height: 28px;
        border-radius: 7px;
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex-shrink: 0;
        transition: background 0.15s ease, border-color 0.15s ease;
    }

    .hbp-demo-cred-copy:hover {
        background: #dbeafe;
        border-color: #93c5fd;
    }

    /* ── CTA button - blue ── */
    .hbp-demo-btn-blue {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 14px 20px;
        border-radius: 13px;
        background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 100%);
        color: #ffffff;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 5px 18px rgba(59, 130, 246, 0.38);
        transition: transform 0.18s ease, box-shadow 0.18s ease;
        margin-top: auto;
    }

    .hbp-demo-btn-blue:hover {
        transform: translateY(-2px);
        box-shadow: 0 9px 26px rgba(59, 130, 246, 0.48);
        color: #ffffff;
        text-decoration: none;
    }

    /* ── CTA button - dark ── */
    .hbp-demo-btn-dark {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 14px 20px;
        border-radius: 13px;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #ffffff;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 5px 18px rgba(15, 23, 42, 0.28);
        transition: transform 0.18s ease, box-shadow 0.18s ease;
        margin-top: auto;
    }

    .hbp-demo-btn-dark:hover {
        transform: translateY(-2px);
        box-shadow: 0 9px 26px rgba(15, 23, 42, 0.38);
        color: #ffffff;
        text-decoration: none;
    }

    /* ── Trust strip above badges ── */
    .hbp-demo-trust-msg {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    /* ── Trust badges ── */
    .hbp-demo-trust-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .hbp-demo-trust-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 8px 16px;
        border-radius: 99px;
        background: #ffffff;
        border: 1.5px solid #e2e8f0;
        font-size: 12.5px;
        font-weight: 700;
        color: #374151;
        transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
    }

    .hbp-demo-trust-badge:hover {
        border-color: #93c5fd;
        box-shadow: 0 4px 14px rgba(59, 130, 246, 0.1);
        transform: translateY(-2px);
    }

    /* Fade-in */
    .hbp-demo-fade {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.52s ease, transform 0.52s ease;
    }

    .hbp-demo-fade.hbp-demo-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Live pulse dot */
    .hbp-demo-live-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #22c55e;
        flex-shrink: 0;
        position: relative;
    }

    .hbp-demo-live-dot::after {
        content: '';
        position: absolute;
        inset: -3px;
        border-radius: 50%;
        background: rgba(34, 197, 94, 0.3);
        animation: hbp-demo-pulse 1.8s ease-in-out infinite;
    }

    @keyframes hbp-demo-pulse {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.7); opacity: 0; }
    }
</style>

<section id="hbp-demo" class="relative overflow-hidden" style="padding: 100px 0 108px;">

    {{-- Dot grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 26px 26px; opacity: 0.22;"></div>

    {{-- Top radial --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none"
         style="width: 900px; height: 320px; background: radial-gradient(ellipse at 50% 0%, rgba(59,130,246,0.065) 0%, transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        {{-- ═════════════ HEADER ═════════════ --}}
        <div class="text-center max-w-2xl mx-auto mb-14 hbp-demo-fade">

            <div class="inline-block mb-6">
                <div class="hbp-demo-badge">
                    <span class="hbp-demo-live-dot"></span>
                    Live Demo
                </div>
            </div>

            <h2 class="font-black tracking-tight leading-[1.1] mb-5"
                style="font-size: clamp(1.9rem, 3.5vw, 2.75rem); color: #0f172a;">
                Explore The
                <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Live Demo
                </span>
            </h2>

            <p style="font-size: 16.5px; color: #64748b; line-height: 1.75;">
                Experience the complete hotel booking platform before you buy. Test the customer website, explore the admin dashboard, and see how easily you can manage bookings, hotels, customers, and payments.
            </p>

        </div>

        {{-- ═════════════ TWO DEMO CARDS ═════════════ --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-7 mb-14">

            {{-- ══════════════════════════════
                 CARD 1 — Customer Website Demo
            ══════════════════════════════ --}}
            <div class="hbp-demo-card hbp-demo-fade" style="transition-delay: 0.06s;">

                {{-- Browser chrome --}}
                <div class="hbp-demo-chrome">
                    <span class="hbp-demo-chrome-dot" style="background:#fc5a5a;"></span>
                    <span class="hbp-demo-chrome-dot" style="background:#fdbc40;"></span>
                    <span class="hbp-demo-chrome-dot" style="background:#34c84a;"></span>
                    <div class="hbp-demo-chrome-bar">
                        <div class="hbp-demo-chrome-url">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>
                            </svg>
                            <span style="font-size:10px;color:#94a3b8;">[INSERT CUSTOMER WEBSITE DEMO URL]</span>
                        </div>
                    </div>
                </div>

                {{-- Website mockup preview --}}
                <div class="hbp-demo-preview" style="background: #f8fafc; min-height: 240px;">

                    {{-- Search bar --}}
                    <div style="padding: 14px 16px 10px; border-bottom: 1px solid #e9eef5; background: #ffffff;">
                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 8px 12px;">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                            <span style="font-size: 11px; color: #94a3b8; font-weight: 600; flex: 1;">Search hotels, destinations...</span>
                            <div style="display: flex; align-items: center; gap: 6px; padding-left: 8px; border-left: 1px solid #e2e8f0;">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                <span style="font-size: 10px; color: #94a3b8; font-weight: 600;">Check-in — Check-out</span>
                            </div>
                            <div style="background: #3B82F6; color: #fff; font-size: 10px; font-weight: 800; padding: 4px 10px; border-radius: 7px; white-space: nowrap;">Search</div>
                        </div>
                    </div>

                    {{-- Hotel results --}}
                    <div style="padding: 10px 14px; display: flex; flex-direction: column; gap: 8px;">

                        {{-- Result 1 --}}
                        <div style="background: #ffffff; border: 1px solid #e9eef5; border-radius: 12px; display: flex; overflow: hidden;">
                            <div style="width: 80px; min-height: 76px; background: linear-gradient(135deg, #dbeafe, #ede9fe); flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#93c5fd" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            </div>
                            <div style="padding: 10px 12px; flex: 1; min-width: 0;">
                                <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 6px;">
                                    <div>
                                        <div style="font-size: 11.5px; font-weight: 800; color: #0f172a; margin-bottom: 2px;">Grand Palace Hotel</div>
                                        <div style="font-size: 10px; color: #94a3b8; font-weight: 600; display: flex; align-items: center; gap: 3px;">
                                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                            Dubai, UAE
                                        </div>
                                    </div>
                                    <div style="text-align: right; flex-shrink: 0;">
                                        <div style="font-size: 13px; font-weight: 900; color: #1d4ed8;">$249</div>
                                        <div style="font-size: 9px; color: #94a3b8; font-weight: 600;">/night</div>
                                    </div>
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px; margin-top: 6px;">
                                    <div style="display: flex; gap: 1px;">
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                    </div>
                                    <span style="font-size: 9px; color: #64748b; font-weight: 600;">4.9 (128 reviews)</span>
                                    <span style="margin-left: auto; background: #dcfce7; color: #16a34a; font-size: 9px; font-weight: 800; padding: 2px 7px; border-radius: 99px;">Available</span>
                                </div>
                            </div>
                        </div>

                        {{-- Result 2 --}}
                        <div style="background: #ffffff; border: 1px solid #e9eef5; border-radius: 12px; display: flex; overflow: hidden;">
                            <div style="width: 80px; min-height: 76px; background: linear-gradient(135deg, #dcfce7, #bbf7d0); flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#86efac" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            </div>
                            <div style="padding: 10px 12px; flex: 1; min-width: 0;">
                                <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 6px;">
                                    <div>
                                        <div style="font-size: 11.5px; font-weight: 800; color: #0f172a; margin-bottom: 2px;">Serenity Resort &amp; Spa</div>
                                        <div style="font-size: 10px; color: #94a3b8; font-weight: 600; display: flex; align-items: center; gap: 3px;">
                                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                            Maldives
                                        </div>
                                    </div>
                                    <div style="text-align: right; flex-shrink: 0;">
                                        <div style="font-size: 13px; font-weight: 900; color: #1d4ed8;">$389</div>
                                        <div style="font-size: 9px; color: #94a3b8; font-weight: 600;">/night</div>
                                    </div>
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px; margin-top: 6px;">
                                    <div style="display: flex; gap: 1px;">
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#f59e0b" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        <svg width="8" height="8" viewBox="0 0 24 24" fill="#e2e8f0" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                    </div>
                                    <span style="font-size: 9px; color: #64748b; font-weight: 600;">4.7 (94 reviews)</span>
                                    <span style="margin-left: auto; background: #dcfce7; color: #16a34a; font-size: 9px; font-weight: 800; padding: 2px 7px; border-radius: 99px;">Available</span>
                                </div>
                            </div>
                        </div>

                        {{-- Result 3 (partial, fades out) --}}
                        <div style="background: #ffffff; border: 1px solid #e9eef5; border-radius: 12px; display: flex; overflow: hidden; opacity: 0.45;">
                            <div style="width: 80px; min-height: 60px; background: linear-gradient(135deg, #fef3c7, #fde68a); flex-shrink: 0;"></div>
                            <div style="padding: 10px 12px; flex: 1;">
                                <div style="height: 10px; background: #e9eef5; border-radius: 4px; width: 60%; margin-bottom: 6px;"></div>
                                <div style="height: 8px; background: #f1f5f9; border-radius: 4px; width: 40%;"></div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Card body --}}
                <div class="hbp-demo-body">

                    <div class="hbp-demo-card-tag"
                         style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.2); color: #2563eb;">
                        <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                        </svg>
                        Customer-Facing
                    </div>

                    <h3 class="hbp-demo-card-title">Customer Website Demo</h3>
                    <p class="hbp-demo-card-desc">See the hotel booking experience your customers will use. Browse hotels, search availability, view room details, and complete bookings online.</p>

                    <a href="[INSERT CUSTOMER WEBSITE DEMO URL]" target="_blank" class="hbp-demo-btn-blue">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/>
                        </svg>
                        View Website Demo
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>
                        </svg>
                    </a>

                </div>

            </div>

            {{-- ══════════════════════════════
                 CARD 2 — Admin Dashboard Demo
            ══════════════════════════════ --}}
            <div class="hbp-demo-card hbp-demo-fade" style="transition-delay: 0.14s;">

                {{-- Browser chrome --}}
                <div class="hbp-demo-chrome">
                    <span class="hbp-demo-chrome-dot" style="background:#fc5a5a;"></span>
                    <span class="hbp-demo-chrome-dot" style="background:#fdbc40;"></span>
                    <span class="hbp-demo-chrome-dot" style="background:#34c84a;"></span>
                    <div class="hbp-demo-chrome-bar">
                        <div class="hbp-demo-chrome-url">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>
                            </svg>
                            <span style="font-size:10px;color:#94a3b8;">[INSERT ADMIN PANEL URL]</span>
                        </div>
                    </div>
                </div>

                {{-- Admin dashboard mockup --}}
                <div class="hbp-demo-preview" style="background: #0f172a; min-height: 240px;">

                    {{-- Admin sidebar strip --}}
                    <div style="display: flex; height: 100%;">

                        {{-- Sidebar --}}
                        <div style="width: 46px; background: #1e293b; border-right: 1px solid rgba(255,255,255,0.06); padding: 12px 10px; display: flex; flex-direction: column; gap: 8px; flex-shrink: 0;">
                            <div style="width: 26px; height: 26px; border-radius: 7px; background: #3B82F6; display: flex; align-items: center; justify-content: center; margin-bottom: 4px;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            </div>
                            <div style="width: 26px; height: 26px; border-radius: 7px; background: rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
                            </div>
                            <div style="width: 26px; height: 26px; border-radius: 7px; background: rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            </div>
                            <div style="width: 26px; height: 26px; border-radius: 7px; background: rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                            <div style="width: 26px; height: 26px; border-radius: 7px; background: rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                            </div>
                        </div>

                        {{-- Main content --}}
                        <div style="flex: 1; padding: 12px; overflow: hidden;">

                            {{-- Page title --}}
                            <div style="font-size: 10px; font-weight: 800; color: #e2e8f0; margin-bottom: 10px; letter-spacing: 0.02em;">Dashboard Overview</div>

                            {{-- Stat cards row --}}
                            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 6px; margin-bottom: 10px;">
                                <div style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 8px 7px;">
                                    <div style="font-size: 8px; color: rgba(255,255,255,0.4); font-weight: 600; margin-bottom: 3px;">Revenue</div>
                                    <div style="font-size: 12px; font-weight: 900; color: #60a5fa; letter-spacing: -0.02em;">$24.5k</div>
                                </div>
                                <div style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 8px 7px;">
                                    <div style="font-size: 8px; color: rgba(255,255,255,0.4); font-weight: 600; margin-bottom: 3px;">Bookings</div>
                                    <div style="font-size: 12px; font-weight: 900; color: #4ade80; letter-spacing: -0.02em;">342</div>
                                </div>
                                <div style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 8px 7px;">
                                    <div style="font-size: 8px; color: rgba(255,255,255,0.4); font-weight: 600; margin-bottom: 3px;">Guests</div>
                                    <div style="font-size: 12px; font-weight: 900; color: #c084fc; letter-spacing: -0.02em;">1,208</div>
                                </div>
                                <div style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 8px 7px;">
                                    <div style="font-size: 8px; color: rgba(255,255,255,0.4); font-weight: 600; margin-bottom: 3px;">Hotels</div>
                                    <div style="font-size: 12px; font-weight: 900; color: #fb923c; letter-spacing: -0.02em;">18</div>
                                </div>
                            </div>

                            {{-- Recent bookings table --}}
                            <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.07); border-radius: 8px; overflow: hidden;">
                                <div style="padding: 7px 10px; border-bottom: 1px solid rgba(255,255,255,0.07); display: flex; align-items: center; justify-content: space-between;">
                                    <span style="font-size: 9px; font-weight: 700; color: rgba(255,255,255,0.6);">Recent Bookings</span>
                                    <span style="font-size: 8px; color: #60a5fa; font-weight: 700;">View all →</span>
                                </div>
                                {{-- Row 1 --}}
                                <div style="padding: 6px 10px; display: flex; align-items: center; gap: 8px; border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <div style="width: 20px; height: 20px; border-radius: 50%; background: linear-gradient(135deg, #3B82F6, #7c3aed); display: flex; align-items: center; justify-content: center; font-size: 8px; font-weight: 800; color: #fff; flex-shrink: 0;">S</div>
                                    <div style="flex: 1; min-width: 0;">
                                        <div style="font-size: 9px; font-weight: 700; color: rgba(255,255,255,0.85);">Sarah Mitchell</div>
                                        <div style="font-size: 8px; color: rgba(255,255,255,0.35); font-weight: 600;">Deluxe Suite · 3 nights</div>
                                    </div>
                                    <div style="text-align: right; flex-shrink: 0;">
                                        <div style="font-size: 9px; font-weight: 800; color: #60a5fa;">$747</div>
                                        <div style="background: rgba(74,222,128,0.15); color: #4ade80; font-size: 7.5px; font-weight: 800; padding: 1px 6px; border-radius: 99px;">Confirmed</div>
                                    </div>
                                </div>
                                {{-- Row 2 --}}
                                <div style="padding: 6px 10px; display: flex; align-items: center; gap: 8px; border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <div style="width: 20px; height: 20px; border-radius: 50%; background: linear-gradient(135deg, #16a34a, #0d9488); display: flex; align-items: center; justify-content: center; font-size: 8px; font-weight: 800; color: #fff; flex-shrink: 0;">J</div>
                                    <div style="flex: 1; min-width: 0;">
                                        <div style="font-size: 9px; font-weight: 700; color: rgba(255,255,255,0.85);">James Thornton</div>
                                        <div style="font-size: 8px; color: rgba(255,255,255,0.35); font-weight: 600;">Ocean View Room · 5 nights</div>
                                    </div>
                                    <div style="text-align: right; flex-shrink: 0;">
                                        <div style="font-size: 9px; font-weight: 800; color: #60a5fa;">$1,245</div>
                                        <div style="background: rgba(251,191,36,0.15); color: #fbbf24; font-size: 7.5px; font-weight: 800; padding: 1px 6px; border-radius: 99px;">Pending</div>
                                    </div>
                                </div>
                                {{-- Row 3 (partial) --}}
                                <div style="padding: 6px 10px; display: flex; align-items: center; gap: 8px; opacity: 0.4;">
                                    <div style="width: 20px; height: 20px; border-radius: 50%; background: rgba(255,255,255,0.1); flex-shrink: 0;"></div>
                                    <div style="flex: 1;">
                                        <div style="height: 7px; background: rgba(255,255,255,0.1); border-radius: 3px; width: 55%; margin-bottom: 4px;"></div>
                                        <div style="height: 6px; background: rgba(255,255,255,0.07); border-radius: 3px; width: 40%;"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Card body --}}
                <div class="hbp-demo-body">

                    <div class="hbp-demo-card-tag"
                         style="background: rgba(15,23,42,0.07); border: 1px solid rgba(15,23,42,0.14); color: #1e293b;">
                        <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/>
                        </svg>
                        Admin Panel
                    </div>

                    <h3 class="hbp-demo-card-title">Admin Dashboard Demo</h3>
                    <p class="hbp-demo-card-desc">Access the admin panel and explore hotel management, reservations, customer records, reports, and platform settings.</p>

                    {{-- Credentials --}}
                    <div class="hbp-demo-creds">
                        <div class="hbp-demo-creds-head">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>
                            </svg>
                            Demo Credentials
                        </div>
                        <div class="hbp-demo-cred-row">
                            <span class="hbp-demo-cred-label">Email</span>
                            <span class="hbp-demo-cred-value">[INSERT DEMO EMAIL]</span>
                            <button class="hbp-demo-cred-copy" title="Copy email" onclick="navigator.clipboard&&navigator.clipboard.writeText('[INSERT DEMO EMAIL]')">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                                </svg>
                            </button>
                        </div>
                        <div class="hbp-demo-cred-row">
                            <span class="hbp-demo-cred-label">Password</span>
                            <span class="hbp-demo-cred-value">[INSERT DEMO PASSWORD]</span>
                            <button class="hbp-demo-cred-copy" title="Copy password" onclick="navigator.clipboard&&navigator.clipboard.writeText('[INSERT DEMO PASSWORD]')">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <a href="[INSERT ADMIN PANEL URL]" target="_blank" class="hbp-demo-btn-dark">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/>
                        </svg>
                        Open Admin Demo
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>
                        </svg>
                    </a>

                </div>

            </div>

        </div>{{-- end cards grid --}}

        {{-- ═════════════ TRUST ROW ═════════════ --}}
        <div class="hbp-demo-fade" style="transition-delay: 0.22s;">

            {{-- No sales call message --}}
            <div class="hbp-demo-trust-msg">
                <div style="height: 1px; width: 60px; background: linear-gradient(to right, transparent, #e2e8f0);"></div>
                <div style="display: flex; align-items: center; gap: 8px; padding: 8px 18px; border-radius: 99px; background: #ffffff; border: 1px solid #e2e8f0;">
                    <span class="hbp-demo-live-dot"></span>
                    <span style="font-size: 13px; color: #374151; font-weight: 700;">No sales call required.</span>
                    <span style="font-size: 13px; color: #64748b; font-weight: 500;">Explore the complete system at your own pace.</span>
                </div>
                <div style="height: 1px; width: 60px; background: linear-gradient(to left, transparent, #e2e8f0);"></div>
            </div>

            {{-- Trust badges --}}
            <div class="hbp-demo-trust-row">

                <div class="hbp-demo-trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/><path d="M8 12l3 3 5-5"/>
                    </svg>
                    Live Working System
                </div>

                <div class="hbp-demo-trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
                    </svg>
                    Full Source Code Included
                </div>

                <div class="hbp-demo-trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
                    </svg>
                    White-Label Platform
                </div>

                <div class="hbp-demo-trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                    </svg>
                    One-Time Purchase
                </div>

                <div class="hbp-demo-trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    Lifetime Ownership
                </div>

            </div>
        </div>

    </div>
</section>

<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('hbp-demo-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    document.querySelectorAll('#hbp-demo .hbp-demo-fade').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
