@extends('layouts.public')

@push('styles')
<style>
    #pp-hero {
        background: #ffffff;
        border-bottom: 1px solid #f1f5f9;
        padding: 64px 24px 56px;
        position: relative;
        overflow: hidden;
    }
    #pp-hero::before {
        content: '';
        position: absolute;
        top: -160px; right: -160px;
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(59,130,246,0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    #pp-hero::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent 0%, #3B82F6 30%, #60a5fa 70%, transparent 100%);
    }
    .pp-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 5px 14px;
        border-radius: 99px;
        background: rgba(59,130,246,0.07);
        border: 1px solid rgba(59,130,246,0.18);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #2563eb;
        margin-bottom: 18px;
    }
    .pp-title {
        font-size: clamp(1.8rem, 4vw, 2.6rem);
        font-weight: 900;
        color: #0f172a;
        letter-spacing: -0.03em;
        line-height: 1.15;
        margin-bottom: 14px;
    }
    .pp-title span {
        background: linear-gradient(135deg, #1d4ed8, #3B82F6 60%, #60a5fa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .pp-meta {
        font-size: 13.5px;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    #pp-body {
        max-width: 800px;
        margin: 0 auto;
        padding: 56px 24px 80px;
    }

    .pp-section {
        margin-bottom: 40px;
    }
    .pp-section-title {
        font-size: 17px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 12px;
        padding-left: 14px;
        border-left: 3px solid #3B82F6;
    }
    .pp-text {
        font-size: 15px;
        color: #475569;
        line-height: 1.8;
        margin-bottom: 12px;
    }
    .pp-list {
        list-style: none;
        padding: 0;
        margin: 0 0 12px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .pp-list li {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        padding-left: 20px;
        position: relative;
    }
    .pp-list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 10px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #3B82F6;
    }
    .pp-divider {
        height: 1px;
        background: #f1f5f9;
        margin: 40px 0;
    }
    .pp-contact-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 24px 28px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }
    .pp-contact-icon {
        width: 42px;
        height: 42px;
        border-radius: 11px;
        background: rgba(59,130,246,0.08);
        border: 1px solid rgba(59,130,246,0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .pp-contact-box a {
        color: #2563eb;
        text-decoration: none;
        font-weight: 600;
    }
    .pp-contact-box a:hover { text-decoration: underline; }
</style>
@endpush

@section('content')

{{-- Hero --}}
<section id="pp-hero">
    <div style="max-width: 800px; margin: 0 auto; position: relative; z-index: 1;">
        <div class="pp-badge">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            Legal
        </div>
        <h1 class="pp-title">Privacy <span>Policy</span></h1>
        <p class="pp-meta">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Last updated: June 1, 2026 &nbsp;&middot;&nbsp; HotelBookingPanel
        </p>
    </div>
</section>

{{-- Body --}}
<div id="pp-body">

    <div class="pp-section">
        <p class="pp-text">
            This Privacy Policy describes how <strong style="color:#0f172a;">HotelBookingPanel</strong> ("we", "us", or "our") collects, uses, and protects your information when you visit our website or purchase our software. By using our services, you agree to the practices described in this policy.
        </p>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">1. Information We Collect</h2>
        <p class="pp-text">We collect the following types of information when you interact with our website or request a demo:</p>
        <ul class="pp-list">
            <li><strong style="color:#0f172a;">Contact information</strong> — name, email address, phone number, and business name provided via our demo request or contact forms.</li>
            <li><strong style="color:#0f172a;">Usage data</strong> — pages visited, time spent on pages, browser type, device type, and IP address collected automatically via analytics tools.</li>
            <li><strong style="color:#0f172a;">Communication data</strong> — messages you send us via email, WhatsApp, or contact forms.</li>
        </ul>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">2. How We Use Your Information</h2>
        <p class="pp-text">We use the information we collect to:</p>
        <ul class="pp-list">
            <li>Respond to your demo requests and inquiries in a timely manner.</li>
            <li>Schedule and conduct personalized product demonstrations.</li>
            <li>Send you information about our products, updates, and promotions (you can opt out anytime).</li>
            <li>Improve our website, services, and user experience.</li>
            <li>Comply with legal obligations and protect our legal rights.</li>
        </ul>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">3. Data Sharing and Third Parties</h2>
        <p class="pp-text">
            We do <strong style="color:#0f172a;">not sell, rent, or trade</strong> your personal information to third parties. We may share your data only in the following limited circumstances:
        </p>
        <ul class="pp-list">
            <li><strong style="color:#0f172a;">Service providers</strong> — trusted tools we use to operate our website (e.g., analytics, email services) under strict confidentiality agreements.</li>
            <li><strong style="color:#0f172a;">Legal requirements</strong> — when required by law, court order, or government authority.</li>
        </ul>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">4. Cookies and Analytics</h2>
        <p class="pp-text">
            Our website uses cookies and Google Analytics to understand how visitors interact with our content. Cookies are small text files stored on your device. You can disable cookies in your browser settings at any time, though some features of the site may not function properly.
        </p>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">5. Data Security</h2>
        <p class="pp-text">
            We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. All data transmissions on our website are secured via HTTPS/SSL encryption.
        </p>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">6. Data Retention</h2>
        <p class="pp-text">
            We retain your personal information only for as long as necessary to fulfill the purposes outlined in this policy, or as required by applicable law. Demo inquiry data is typically retained for 24 months unless you request deletion.
        </p>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">7. Your Rights</h2>
        <p class="pp-text">You have the right to:</p>
        <ul class="pp-list">
            <li>Request access to the personal data we hold about you.</li>
            <li>Request correction or deletion of your personal data.</li>
            <li>Withdraw consent to marketing communications at any time.</li>
            <li>Lodge a complaint with a relevant data protection authority.</li>
        </ul>
    </div>

    <div class="pp-section">
        <h2 class="pp-section-title">8. Changes to This Policy</h2>
        <p class="pp-text">
            We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated date. We encourage you to review this policy periodically.
        </p>
    </div>

    <div class="pp-divider"></div>

    <div class="pp-contact-box">
        <div class="pp-contact-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
            </svg>
        </div>
        <div>
            <p style="font-size:14px; font-weight:700; color:#0f172a; margin-bottom:5px;">Questions about this policy?</p>
            <p style="font-size:13.5px; color:#64748b; line-height:1.6;">
                Contact us at <a href="mailto:sales@hotelbookingpanel.com">sales@hotelbookingpanel.com</a> or
                <a href="https://wa.me/12027043668" target="_blank" rel="noopener">WhatsApp +1 202-704-3668</a>.
                We typically respond within 4 business hours.
            </p>
        </div>
    </div>

</div>

@include('partials._footer-hotel')

@endsection
