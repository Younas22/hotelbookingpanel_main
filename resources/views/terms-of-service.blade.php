@extends('layouts.public')

@push('styles')
<style>
    #tos-hero {
        background: #ffffff;
        border-bottom: 1px solid #f1f5f9;
        padding: 64px 24px 56px;
        position: relative;
        overflow: hidden;
    }
    #tos-hero::before {
        content: '';
        position: absolute;
        top: -160px; right: -160px;
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(59,130,246,0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    #tos-hero::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent 0%, #3B82F6 30%, #60a5fa 70%, transparent 100%);
    }
    .tos-badge {
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
    .tos-title {
        font-size: clamp(1.8rem, 4vw, 2.6rem);
        font-weight: 900;
        color: #0f172a;
        letter-spacing: -0.03em;
        line-height: 1.15;
        margin-bottom: 14px;
    }
    .tos-title span {
        background: linear-gradient(135deg, #1d4ed8, #3B82F6 60%, #60a5fa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .tos-meta {
        font-size: 13.5px;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    #tos-body {
        max-width: 800px;
        margin: 0 auto;
        padding: 56px 24px 80px;
    }

    .tos-section {
        margin-bottom: 40px;
    }
    .tos-section-title {
        font-size: 17px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 12px;
        padding-left: 14px;
        border-left: 3px solid #3B82F6;
    }
    .tos-text {
        font-size: 15px;
        color: #475569;
        line-height: 1.8;
        margin-bottom: 12px;
    }
    .tos-list {
        list-style: none;
        padding: 0;
        margin: 0 0 12px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .tos-list li {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        padding-left: 20px;
        position: relative;
    }
    .tos-list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 10px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #3B82F6;
    }
    .tos-highlight {
        background: rgba(59,130,246,0.05);
        border: 1px solid rgba(59,130,246,0.15);
        border-radius: 10px;
        padding: 16px 20px;
        margin-bottom: 16px;
    }
    .tos-highlight p {
        font-size: 14.5px;
        color: #1e40af;
        line-height: 1.7;
        font-weight: 500;
    }
    .tos-divider {
        height: 1px;
        background: #f1f5f9;
        margin: 40px 0;
    }
    .tos-contact-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 24px 28px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }
    .tos-contact-icon {
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
    .tos-contact-box a {
        color: #2563eb;
        text-decoration: none;
        font-weight: 600;
    }
    .tos-contact-box a:hover { text-decoration: underline; }
</style>
@endpush

@section('content')

{{-- Hero --}}
<section id="tos-hero">
    <div style="max-width: 800px; margin: 0 auto; position: relative; z-index: 1;">
        <div class="tos-badge">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            Legal
        </div>
        <h1 class="tos-title">Terms of <span>Service</span></h1>
        <p class="tos-meta">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Last updated: June 1, 2026 &nbsp;&middot;&nbsp; HotelBookingPanel
        </p>
    </div>
</section>

{{-- Body --}}
<div id="tos-body">

    <div class="tos-section">
        <div class="tos-highlight">
            <p>Please read these Terms of Service carefully before purchasing or using the HotelBookingPanel software. By completing a purchase or accessing our platform, you agree to be bound by these terms.</p>
        </div>
        <p class="tos-text">
            These Terms of Service govern your purchase and use of the <strong style="color:#0f172a;">HotelBookingPanel</strong> white-label hotel booking software ("Software") sold by HotelBookingPanel ("we", "us", or "our").
        </p>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">1. License Grant</h2>
        <p class="tos-text">
            Upon purchasing a license, we grant you a <strong style="color:#0f172a;">non-exclusive, perpetual, worldwide license</strong> to install, use, modify, and deploy the Software for your own hotel booking business or for client projects under your own brand.
        </p>
        <ul class="tos-list">
            <li>You may install the Software on one or more servers you own or control.</li>
            <li>You may customize the Software's code, design, and branding to match your business.</li>
            <li>You may use the Software to build and operate a hotel booking service for your clients.</li>
            <li>You may <strong style="color:#0f172a;">not</strong> resell or redistribute the original source code to third parties.</li>
        </ul>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">2. One-Time Payment &amp; No Subscription</h2>
        <p class="tos-text">
            HotelBookingPanel is sold under a <strong style="color:#0f172a;">one-time license fee</strong>. There are no monthly fees, recurring subscriptions, or hidden charges associated with your license. Once paid, you own the license permanently.
        </p>
        <ul class="tos-list">
            <li>Payment must be completed in full before source code access is granted.</li>
            <li>All payments are processed securely via our designated payment channels.</li>
            <li>Prices are subject to change; your purchased license price is locked at the time of purchase.</li>
        </ul>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">3. Source Code Ownership</h2>
        <p class="tos-text">
            Upon purchase, you receive the <strong style="color:#0f172a;">full source code</strong> of the Software. You own the code you receive and may modify it freely. However, intellectual property rights in the original codebase remain with HotelBookingPanel.
        </p>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">4. Prohibited Uses</h2>
        <p class="tos-text">You may not use the Software to:</p>
        <ul class="tos-list">
            <li>Resell, sublicense, or redistribute the original source code as a standalone product.</li>
            <li>Engage in any illegal activities, fraud, or violate applicable laws or regulations.</li>
            <li>Reverse engineer portions of the Software for competitive purposes against HotelBookingPanel.</li>
            <li>Remove or obscure any copyright notices included in the original code.</li>
        </ul>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">5. Support &amp; Updates</h2>
        <p class="tos-text">
            Your license includes access to our support team for installation and setup assistance. Software updates, if provided, will be communicated via email. Major version upgrades may be offered at a discounted rate for existing license holders.
        </p>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">6. Refund Policy</h2>
        <p class="tos-text">
            Due to the digital nature of the Software, <strong style="color:#0f172a;">all sales are final</strong> once source code has been delivered. If you experience a technical issue that cannot be resolved by our support team, we will work with you in good faith to find a satisfactory solution.
        </p>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">7. Disclaimer of Warranties</h2>
        <p class="tos-text">
            The Software is provided "as is" without warranty of any kind, express or implied. We do not warrant that the Software will be error-free or uninterrupted. You assume full responsibility for the deployment and operation of the Software in your environment.
        </p>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">8. Limitation of Liability</h2>
        <p class="tos-text">
            To the maximum extent permitted by applicable law, HotelBookingPanel shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of the Software, even if we have been advised of the possibility of such damages.
        </p>
    </div>

    <div class="tos-section">
        <h2 class="tos-section-title">9. Changes to These Terms</h2>
        <p class="tos-text">
            We reserve the right to update these Terms of Service at any time. Updated terms will be posted on this page. Continued use of the Software after changes constitutes acceptance of the new terms.
        </p>
    </div>

    <div class="tos-divider"></div>

    <div class="tos-contact-box">
        <div class="tos-contact-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
            </svg>
        </div>
        <div>
            <p style="font-size:14px; font-weight:700; color:#0f172a; margin-bottom:5px;">Questions about these terms?</p>
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
