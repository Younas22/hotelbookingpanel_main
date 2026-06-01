{{-- ═══════════════════════════════════════════════════════════════
     HOTELBOOKINGPANEL — FOOTER
     Include with: @include('partials._footer-hotel')
═══════════════════════════════════════════════════════════════ --}}

<style>
    /* ─── Footer Section ─── */
    #hbp-footer {
        background: #0a0f1e;
        font-family: 'Inter', sans-serif;
        position: relative;
        overflow: hidden;
    }

    #hbp-footer::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse 700px 400px at 10% 0%, rgba(59,130,246,0.08) 0%, transparent 70%),
            radial-gradient(ellipse 500px 300px at 90% 100%, rgba(37,99,235,0.06) 0%, transparent 70%);
        pointer-events: none;
    }

    .hbp-foot-inner {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 24px 0;
    }

    /* ─── Top grid ─── */
    .hbp-foot-grid {
        display: grid;
        grid-template-columns: 1.8fr 1fr 1fr 1.4fr;
        gap: 48px 40px;
        padding-bottom: 64px;
        border-bottom: 1px solid rgba(255,255,255,0.07);
    }

    /* ─── Brand column ─── */
    .hbp-foot-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 18px;
        text-decoration: none;
    }

    .hbp-foot-logo-icon {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, #3B82F6, #2563eb);
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 4px 16px rgba(59,130,246,0.35);
    }

    .hbp-foot-logo-text {
        font-size: 16px;
        font-weight: 800;
        color: #ffffff;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }

    .hbp-foot-tagline {
        font-size: 20px;
        font-weight: 700;
        color: #e2e8f0;
        line-height: 1.4;
        max-width: 320px;
        margin-bottom: 28px;
        letter-spacing: -0.02em;
    }

    .hbp-foot-tagline span {
        color: #3B82F6;
    }

    /* Social pills */
    .hbp-foot-socials {
        display: flex;
        gap: 10px;
    }

    .hbp-foot-social-btn {
        width: 36px;
        height: 36px;
        border-radius: 9px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #8b9ab5;
        text-decoration: none;
        transition: background 0.2s, border-color 0.2s, color 0.2s;
    }

    .hbp-foot-social-btn:hover {
        background: rgba(59,130,246,0.15);
        border-color: rgba(59,130,246,0.4);
        color: #60a5fa;
    }

    /* ─── Nav columns ─── */
    .hbp-foot-col-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.13em;
        text-transform: uppercase;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .hbp-foot-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .hbp-foot-links a {
        font-size: 14px;
        font-weight: 400;
        color: #8b9ab5;
        text-decoration: none;
        transition: color 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .hbp-foot-links a::before {
        content: '';
        width: 0;
        height: 1px;
        background: #3B82F6;
        transition: width 0.2s;
        display: inline-block;
    }

    .hbp-foot-links a:hover {
        color: #e2e8f0;
    }

    .hbp-foot-links a:hover::before {
        width: 10px;
    }

    /* ─── Contact column ─── */
    .hbp-foot-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 18px;
    }

    .hbp-foot-contact-icon {
        width: 34px;
        height: 34px;
        border-radius: 9px;
        background: rgba(59,130,246,0.1);
        border: 1px solid rgba(59,130,246,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    .hbp-foot-contact-label {
        font-size: 11px;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 3px;
    }

    .hbp-foot-contact-value {
        font-size: 13.5px;
        font-weight: 500;
        color: #cbd5e1;
        text-decoration: none;
        transition: color 0.2s;
        line-height: 1.4;
        word-break: break-all;
    }

    .hbp-foot-contact-value:hover {
        color: #60a5fa;
    }

    /* ─── Bottom bar ─── */
    .hbp-foot-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 22px 0 28px;
        gap: 16px;
        flex-wrap: wrap;
    }

    .hbp-foot-copy {
        font-size: 13px;
        color: #475569;
    }

    .hbp-foot-copy span {
        color: #64748b;
    }

    .hbp-foot-bar-links {
        display: flex;
        gap: 10px;
    }

    .hbp-foot-bar-links a {
        font-size: 12px;
        font-weight: 500;
        color: #94a3b8;
        text-decoration: none;
        padding: 5px 14px;
        border-radius: 20px;
        border: 1px solid rgba(255,255,255,0.1);
        background: rgba(255,255,255,0.04);
        transition: background 0.2s, border-color 0.2s, color 0.2s;
        letter-spacing: 0.01em;
    }

    .hbp-foot-bar-links a:hover {
        background: rgba(59,130,246,0.12);
        border-color: rgba(59,130,246,0.35);
        color: #60a5fa;
    }

    /* ─── Divider line decoration ─── */
    .hbp-foot-divider-line {
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(59,130,246,0.4) 30%, rgba(59,130,246,0.4) 70%, transparent);
        margin-bottom: 0;
    }

    /* ─── Responsive ─── */
    @media (max-width: 900px) {
        .hbp-foot-grid {
            grid-template-columns: 1fr 1fr;
            gap: 40px 32px;
        }

        .hbp-foot-brand {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 560px) {
        .hbp-foot-grid {
            grid-template-columns: 1fr;
        }

        .hbp-foot-brand {
            grid-column: auto;
        }

        .hbp-foot-bar {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .hbp-foot-bar-links {
            gap: 16px;
            flex-wrap: wrap;
        }
    }

    /* ─── Fade-in animation ─── */
    .hbp-foot-fade {
        opacity: 0;
        transform: translateY(22px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }

    .hbp-foot-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<footer id="hbp-footer">

    <div class="hbp-foot-inner">

        {{-- ── Top grid ── --}}
        <div class="hbp-foot-grid">

            {{-- Brand column --}}
            <div class="hbp-foot-brand hbp-foot-fade">
                <!-- <a href="{{ url('/') }}" class="hbp-foot-logo">
                    <img src="{{ url('public/logo/logo-white.png') }}" alt="HotelBookingPanel" style="height:32px;width:auto;display:block;">
                </a> -->

                <p class="hbp-foot-tagline">
                    Complete Hotel Booking Software<br>Built To Own, <span>Not To Rent.</span>
                </p>

                <div class="hbp-foot-socials" style="display: none;">
                    {{-- X / Twitter --}}
                    <a href="#" class="hbp-foot-social-btn" aria-label="X / Twitter">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.747l7.73-8.835L1.254 2.25H8.08l4.265 5.637 5.899-5.637Zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77Z"/>
                        </svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="#" class="hbp-foot-social-btn" aria-label="LinkedIn">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
                        </svg>
                    </a>
                    {{-- Facebook --}}
                    <a href="#" class="hbp-foot-social-btn" aria-label="Facebook">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                    {{-- YouTube --}}
                    <a href="#" class="hbp-foot-social-btn" aria-label="YouTube">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#0a0f1e"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Platform column --}}
            <div class="hbp-foot-fade" style="transition-delay:0.08s;">
                <p class="hbp-foot-col-label">Platform</p>
                <ul class="hbp-foot-links">
                    <li><a href="{{ route('features') }}">Features</a></li>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('demo') }}">Demo</a></li>
                </ul>
            </div>

            {{-- Support column --}}
            <div class="hbp-foot-fade" style="transition-delay:0.14s;">
                <p class="hbp-foot-col-label">Support</p>
                <ul class="hbp-foot-links">
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            {{-- Contact column --}}
            <div class="hbp-foot-fade" style="transition-delay:0.2s;">
                <p class="hbp-foot-col-label">Contact</p>

                <div class="hbp-foot-contact-item">
                    <div class="hbp-foot-contact-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div>
                        <p class="hbp-foot-contact-label">Email</p>
                        <a href="mailto:sales@hotelbookingpanel.com" class="hbp-foot-contact-value">
                            sales@hotelbookingpanel.com
                        </a>
                    </div>
                </div>

                <div class="hbp-foot-contact-item">
                    <div class="hbp-foot-contact-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="#3B82F6">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.126.553 4.122 1.523 5.858L.057 23.082a.75.75 0 0 0 .921.921l5.225-1.466A11.94 11.94 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.795 9.795 0 0 1-5.003-1.375l-.358-.213-3.104.871.872-3.104-.213-.358A9.795 9.795 0 0 1 2.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="hbp-foot-contact-label">WhatsApp Support</p>
                        <a href="https://wa.me/12027043668" class="hbp-foot-contact-value" target="_blank" rel="noopener">
                            +1 202-704-3668
                        </a>
                    </div>
                </div>
            </div>

        </div>{{-- /grid --}}

        {{-- ── Bottom bar ── --}}
        <div class="hbp-foot-divider-line"></div>

        <div class="hbp-foot-bar">
            <p class="hbp-foot-copy">
                &copy; 2026 <span>HotelBookingPanel</span>. All rights reserved.
            </p>
            <nav class="hbp-foot-bar-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </nav>
        </div>

    </div>{{-- /inner --}}

</footer>

<script>
(function () {
    const els = document.querySelectorAll('#hbp-footer .hbp-foot-fade');
    if (!els.length) return;
    const io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                e.target.classList.add('hbp-foot-visible');
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.12 });
    els.forEach(function (el) { io.observe(el); });
})();
</script>
