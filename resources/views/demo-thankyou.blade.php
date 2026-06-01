<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You &mdash; HotelBookingPanel</title>
    <meta name="description" content="Your demo request has been received. We'll be in touch shortly.">
    <link rel="icon" type="image/jpeg" href="{{ url('public/logo/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,300;0,14..32,400;0,14..32,500;0,14..32,600;0,14..32,700;0,14..32,800;0,14..32,900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }

        body {
            background: #ffffff;
            min-height: 100vh;
            color: #0f172a;
        }

        /* ── Animations ── */
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up   { animation: fade-up 0.65s cubic-bezier(.22,.68,0,1.2) both; }
        .fade-up-2 { animation: fade-up 0.65s 0.12s cubic-bezier(.22,.68,0,1.2) both; }
        .fade-up-3 { animation: fade-up 0.65s 0.24s cubic-bezier(.22,.68,0,1.2) both; }
        .fade-up-4 { animation: fade-up 0.65s 0.36s cubic-bezier(.22,.68,0,1.2) both; }
        .fade-up-5 { animation: fade-up 0.65s 0.48s cubic-bezier(.22,.68,0,1.2) both; }

        @keyframes check-pop {
            0%   { transform: scale(0.5); opacity: 0; }
            70%  { transform: scale(1.1); }
            100% { transform: scale(1); opacity: 1; }
        }
        .check-icon { animation: check-pop 0.55s 0.2s cubic-bezier(.22,.68,0,1.2) both; }

        @keyframes ping {
            75%, 100% { transform: scale(2.2); opacity: 0; }
        }
        .ping { animation: ping 1.6s cubic-bezier(0,0,0.2,1) infinite; }

        @keyframes pulse-dot {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.4; }
        }
        .pulse-dot { animation: pulse-dot 1.8s ease-in-out infinite; }

        /* ── Navbar ── */
        #ty-nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 50;
            background: rgba(255,255,255,0.88);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid #f1f5f9;
        }
        .ty-nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            height: 62px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .ty-nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .ty-nav-logo-wrap {
            background: rgba(59,130,246,0.12);
            border: 1px solid rgba(59,130,246,0.22);
            border-radius: 10px;
            padding: 6px 12px;
            display: flex;
            align-items: center;
        }
        .ty-back-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 500;
            color: #64748b;
            text-decoration: none;
            transition: color 0.2s;
        }
        .ty-back-btn:hover { color: #2563eb; }

        /* ── Background decorations ── */
        #ty-main {
            position: relative;
            overflow: hidden;
            background: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 24px 60px;
        }

        .ty-bg-orb-1 {
            position: absolute;
            top: -180px; right: -180px;
            width: 640px; height: 640px;
            background: radial-gradient(circle, rgba(59,130,246,0.1) 0%, rgba(99,102,241,0.04) 50%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .ty-bg-orb-2 {
            position: absolute;
            bottom: -120px; left: -120px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(14,165,233,0.07) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .ty-bg-dot-grid {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px);
            background-size: 28px 28px;
            opacity: 0.4;
            pointer-events: none;
        }
        .ty-bg-top-bar {
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent 0%, #3B82F6 30%, #60a5fa 70%, transparent 100%);
        }

        /* ── Content wrapper ── */
        .ty-content {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        /* ── Check icon ── */
        .ty-check-wrap {
            width: 88px; height: 88px;
            border-radius: 24px;
            background: rgba(59,130,246,0.08);
            border: 1px solid rgba(59,130,246,0.22);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 28px;
            box-shadow: 0 8px 32px rgba(59,130,246,0.15);
        }

        /* ── Badge ── */
        .ty-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 99px;
            background: rgba(59,130,246,0.07);
            border: 1px solid rgba(59,130,246,0.18);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
            color: #2563eb;
            margin-bottom: 20px;
        }

        /* ── Headline ── */
        .ty-h1 {
            font-size: clamp(2rem, 5vw, 2.75rem);
            font-weight: 900;
            color: #0f172a;
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin-bottom: 16px;
        }
        .ty-h1 span {
            background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .ty-sub {
            font-size: 15.5px;
            color: #475569;
            line-height: 1.7;
            max-width: 480px;
            margin: 0 auto 36px;
        }
        .ty-sub strong { color: #0f172a; font-weight: 600; }

        /* ── Steps ── */
        .ty-steps-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #94a3b8;
            margin-bottom: 14px;
        }

        .ty-steps {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 32px;
            text-align: left;
        }

        .ty-step-card {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 16px 18px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.04);
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .ty-step-card:hover {
            border-color: rgba(59,130,246,0.3);
            box-shadow: 0 4px 16px rgba(59,130,246,0.08);
        }

        .ty-step-num {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: rgba(59,130,246,0.08);
            border: 1px solid rgba(59,130,246,0.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 800;
            color: #2563eb;
            flex-shrink: 0;
        }

        .ty-step-title {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .ty-step-desc {
            font-size: 13px;
            color: #64748b;
            line-height: 1.6;
        }

        /* ── Action buttons ── */
        .ty-actions {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }

        .ty-btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 26px;
            border-radius: 12px;
            background: #3B82F6;
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(59,130,246,0.35);
            transition: background 0.18s, transform 0.18s, box-shadow 0.18s;
        }
        .ty-btn-primary:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(59,130,246,0.42);
        }

        .ty-btn-whatsapp {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 26px;
            border-radius: 12px;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            color: #16a34a;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: border-color 0.18s, transform 0.18s, box-shadow 0.18s;
        }
        .ty-btn-whatsapp:hover {
            border-color: rgba(34,197,94,0.45);
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(34,197,94,0.12);
        }

        /* ── Privacy note ── */
        .ty-privacy {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: #94a3b8;
        }

        /* ── Social proof strip ── */
        .ty-proof-strip {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-top: 28px;
            padding-top: 24px;
            border-top: 1px solid #f1f5f9;
        }
        .ty-proof-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            color: #64748b;
        }

        @media (max-width: 520px) {
            .ty-actions { flex-direction: column; }
            .ty-btn-primary, .ty-btn-whatsapp { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>

{{-- ── Navbar ── --}}
<nav id="ty-nav">
    <div class="ty-nav-inner">
        <a href="{{ url('/') }}" class="ty-nav-logo" aria-label="HotelBookingPanel Home">
            <div class="ty-nav-logo-wrap">
                <img src="{{ url('public/logo/logo-white.png') }}" alt="HotelBookingPanel" style="height:26px; width:auto; display:block;">
            </div>
        </a>
        <a href="{{ url('/') }}" class="ty-back-btn">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/>
            </svg>
            Back to Home
        </a>
    </div>
</nav>

{{-- ── Main ── --}}
<main id="ty-main">

    {{-- Background decorations --}}
    <div class="ty-bg-orb-1"></div>
    <div class="ty-bg-orb-2"></div>
    <div class="ty-bg-dot-grid"></div>
    <div class="ty-bg-top-bar"></div>

    <div class="ty-content">

        {{-- Check icon --}}
        <div class="check-icon ty-check-wrap">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </div>

        {{-- Badge --}}
        <div class="fade-up ty-badge">
            <span style="position:relative; width:8px; height:8px; display:inline-flex;">
                <span class="ping" style="position:absolute; inset:0; border-radius:50%; background:rgba(59,130,246,0.5);"></span>
                <span style="position:relative; width:8px; height:8px; border-radius:50%; background:#3B82F6; display:inline-block;"></span>
            </span>
            Request Received
        </div>

        {{-- Headline --}}
        <h1 class="fade-up-2 ty-h1">
            You're all set!<br>
            <span>We'll be in touch soon.</span>
        </h1>

        {{-- Sub --}}
        <p class="fade-up-3 ty-sub">
            Thank you for your interest in HotelBookingPanel. Our team reviews every request personally &mdash; expect a reply within <strong>4 business hours</strong>.
        </p>

        {{-- What happens next --}}
        <p class="fade-up-3 ty-steps-label">What happens next</p>

        <div class="fade-up-4 ty-steps">

            <div class="ty-step-card">
                <div class="ty-step-num">1</div>
                <div>
                    <p class="ty-step-title">Personalized demo scheduled</p>
                    <p class="ty-step-desc">We review your details and schedule a private walkthrough of the full platform &mdash; admin panel, booking engine, and hotel management.</p>
                </div>
            </div>

            <div class="ty-step-card">
                <div class="ty-step-num">2</div>
                <div>
                    <p class="ty-step-title">Tailored to your business</p>
                    <p class="ty-step-desc">The demo is customized around your hotel, team, and budget so you see exactly what HotelBookingPanel looks like for you.</p>
                </div>
            </div>

            <div class="ty-step-card">
                <div class="ty-step-num">3</div>
                <div>
                    <p class="ty-step-title">No obligation, ever</p>
                    <p class="ty-step-desc">The demo is completely free. You'll walk away with a clear picture of the platform &mdash; no pressure, no sales tricks.</p>
                </div>
            </div>

        </div>

        {{-- Action buttons --}}
        <div class="fade-up-5 ty-actions">
            <a href="{{ url('/') }}" class="ty-btn-primary">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                    <line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/>
                </svg>
                Back to HotelBookingPanel
            </a>
            <a href="https://wa.me/12027043668?text=Hi%2C%20I%20just%20submitted%20a%20demo%20request.%20Looking%20forward%20to%20hearing%20from%20you%21"
               target="_blank" rel="noopener"
               class="ty-btn-whatsapp">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#16a34a">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    <path d="M11.99 0C5.376 0 0 5.373 0 11.988c0 2.104.549 4.14 1.595 5.945L0 24l6.335-1.652A11.981 11.981 0 0011.99 24C18.604 24 24 18.627 24 12.012 24 5.373 18.604 0 11.99 0zm.01 21.823a9.886 9.886 0 01-5.03-1.372l-.362-.214-3.762.981.999-3.649-.235-.374a9.837 9.837 0 01-1.511-5.195c0-5.452 4.443-9.893 9.901-9.893 5.452 0 9.895 4.441 9.895 9.893 0 5.452-4.443 9.823-9.895 9.823z"/>
                </svg>
                Chat on WhatsApp
            </a>
        </div>

        {{-- Privacy note --}}
        <div class="fade-up-5 ty-privacy">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>
            </svg>
            Your information is private and never shared with third parties.
        </div>

        {{-- Social proof strip --}}
        <div class="fade-up-5 ty-proof-strip">
            <div class="ty-proof-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                Laravel + Vue.js Stack
            </div>
            <div class="ty-proof-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                Stripe &amp; PayPal Ready
            </div>
            <div class="ty-proof-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                Full Source Code Included
            </div>
        </div>

    </div>

</main>

</body>
</html>
