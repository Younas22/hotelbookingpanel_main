@extends('layouts.public')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <style>
        html, body { overflow-x: hidden !important; }

        /* ── Light-theme overrides for contact form card ── */
        #contact .contact-form-card {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            box-shadow: 0 4px 40px rgba(0,0,0,0.07), 0 1px 3px rgba(0,0,0,0.04) !important;
        }
        #contact .contact-form-card::before {
            background: linear-gradient(90deg, transparent 5%, rgba(59,130,246,0.35) 50%, transparent 95%) !important;
        }
        #contact .contact-form-card::after {
            background: radial-gradient(ellipse at top center, rgba(59,130,246,0.04) 0%, transparent 70%) !important;
        }
        #contact .contact-input {
            background: #f8fafc !important;
            border: 1px solid #e2e8f0 !important;
            color: #0f172a !important;
        }
        #contact .contact-input::placeholder { color: #94a3b8 !important; }
        #contact .contact-input:hover { border-color: #93c5fd !important; }
        #contact .contact-input:focus {
            border-color: rgba(59,130,246,0.55) !important;
            background: #ffffff !important;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.1) !important;
        }
        #contact .contact-label { color: #475569 !important; }
        #contact select option { background: #ffffff !important; color: #0f172a !important; }

        /* ── Select2 light theme ── */
        .select2-container { width: 100% !important; }
        .select2-container--default .select2-selection--single {
            background: #f8fafc !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 10px !important;
            height: 44px !important;
            outline: none !important;
            transition: border-color 0.2s ease, box-shadow 0.2s ease !important;
        }
        .select2-container--default.select2-container--open .select2-selection--single {
            border-color: rgba(59,130,246,0.5) !important;
            border-radius: 10px !important;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.1) !important;
        }
        .select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
        .select2-container--default.select2-container--open.select2-container--above .select2-selection--single {
            border-radius: 10px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #0f172a !important;
            font-size: 13.5px !important;
            line-height: 44px !important;
            padding: 0 36px 0 14px !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            white-space: nowrap !important;
            display: block !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #94a3b8 !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 44px !important;
            width: 34px !important;
            top: 0 !important;
            right: 4px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #94a3b8 transparent transparent transparent !important;
            border-width: 5px 4px 0 4px !important;
        }
        .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #94a3b8 transparent !important;
            border-width: 0 4px 5px 4px !important;
        }
        .select2-dropdown {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 10px !important;
            box-shadow: 0 10px 40px rgba(0,0,0,0.12) !important;
            overflow: hidden !important;
        }
        .select2-dropdown--below { margin-top: 6px !important; }
        .select2-dropdown--above { margin-bottom: 6px !important; }
        .select2-container--default .select2-search--dropdown {
            padding: 8px 10px 6px !important;
        }
        .select2-container--default .select2-search--dropdown .select2-search__field {
            background: #f8fafc !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 7px !important;
            color: #0f172a !important;
            font-size: 13px !important;
            padding: 7px 10px !important;
            width: 100% !important;
            box-sizing: border-box !important;
            outline: none !important;
            -webkit-appearance: none !important;
            box-shadow: none !important;
            transition: border-color 0.15s ease !important;
        }
        .select2-container--default .select2-search--dropdown .select2-search__field:focus {
            outline: none !important;
            box-shadow: none !important;
            border-color: rgba(59,130,246,0.45) !important;
        }
        .select2-results__options {
            max-height: 220px !important;
            overflow-y: auto !important;
            padding: 4px 0 !important;
        }
        .select2-results__options::-webkit-scrollbar { width: 4px; }
        .select2-results__options::-webkit-scrollbar-track { background: transparent; }
        .select2-results__options::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .select2-container--default .select2-results__option {
            color: #374151 !important;
            font-size: 13px !important;
            padding: 8px 14px !important;
            line-height: 1.4 !important;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background: rgba(59,130,246,0.1) !important;
            color: #1d4ed8 !important;
        }
        .select2-container--default .select2-results__option[aria-selected=true] {
            background: rgba(59,130,246,0.07) !important;
            color: #2563eb !important;
        }

        /* Ping animation for badge dot */
        @keyframes hbp-ping {
            75%, 100% { transform: scale(2); opacity: 0; }
        }
        .hbp-ping { animation: hbp-ping 1.6s cubic-bezier(0, 0, 0.2, 1) infinite; }
    </style>
@endpush

@section('content')
<section id="contact" class="relative overflow-hidden" style="background: #ffffff; padding: 100px 0 120px;">

    {{-- Dot grid background --}}
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 28px 28px; opacity: 0.35;"></div>

    {{-- Blue radial orb top-right --}}
    <div class="absolute pointer-events-none" style="top: -180px; right: -180px; width: 680px; height: 680px; background: radial-gradient(circle, rgba(59,130,246,0.1) 0%, rgba(99,102,241,0.04) 45%, transparent 70%);"></div>
    {{-- Secondary orb bottom-left --}}
    <div class="absolute pointer-events-none" style="bottom: -120px; left: -100px; width: 440px; height: 440px; background: radial-gradient(circle, rgba(14,165,233,0.06) 0%, transparent 70%);"></div>

    {{-- Top accent bar --}}
    <div class="absolute top-0 left-0 right-0 pointer-events-none" style="height: 3px; background: linear-gradient(90deg, transparent 0%, #3B82F6 30%, #60a5fa 70%, transparent 100%);"></div>

    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.1fr] gap-12 lg:gap-14 xl:gap-20 items-start">

            {{-- ════ LEFT COLUMN ════ --}}
            <div class="lg:pt-3 section-fade">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2.5 mb-7 px-4 py-2 rounded-full" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.2);">
                    <span class="relative flex flex-shrink-0" style="width:8px; height:8px;">
                        <span class="hbp-ping absolute inline-flex w-full h-full rounded-full" style="background: rgba(59,130,246,0.6);"></span>
                        <span class="relative inline-flex rounded-full w-2 h-2" style="background:#3B82F6;"></span>
                    </span>
                    <span style="font-size:11px; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; color:#2563eb;">HotelBookingPanel &mdash; Limited Licenses Available</span>
                </div>

                {{-- Headline --}}
                <h2 class="font-black tracking-tight leading-[1.07] mb-6" style="font-size: clamp(2rem, 3.8vw, 3rem); color: #0f172a;">
                    Launch Your Own<br>Hotel Booking Platform<br>
                    <span style="background: linear-gradient(135deg, #1d4ed8 0%, #3B82F6 55%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">That Runs Itself.</span>
                </h2>

                <p class="leading-relaxed mb-6" style="font-size: 1.05rem; color: #475569; max-width: 440px;">
                    Full white-label hotel booking system with complete source code ownership. One-time license &mdash; no subscriptions, no recurring fees.
                </p>

                {{-- WhatsApp block --}}
                <div class="mb-6 p-4 rounded-xl" style="background: rgba(22,163,74,0.06); border: 1px solid rgba(22,163,74,0.2);">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0" style="background: rgba(22,163,74,0.12);">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="#22c55e"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.99 0C5.376 0 0 5.373 0 11.988c0 2.104.549 4.14 1.595 5.945L0 24l6.335-1.652A11.981 11.981 0 0011.99 24C18.604 24 24 18.627 24 12.012 24 5.373 18.604 0 11.99 0zm.01 21.823a9.886 9.886 0 01-5.03-1.372l-.362-.214-3.762.981.999-3.649-.235-.374a9.837 9.837 0 01-1.511-5.195c0-5.452 4.443-9.893 9.901-9.893 5.452 0 9.895 4.441 9.895 9.893 0 5.452-4.443 9.823-9.895 9.823z"/></svg>
                        </div>
                        <div>
                            <div style="color: #0f172a; font-weight: 600; font-size: 13.5px;">Prefer a faster response?</div>
                            <div style="color: #64748b; font-size: 12px;">Talk to a real person on WhatsApp right now.</div>
                        </div>
                    </div>
                    <a href="https://wa.me/12027043668?text=Hi%2C%20I%27m%20interested%20in%20HotelBookingPanel.%20Can%20you%20show%20me%20a%20live%20demo%3F"
                       target="_blank" rel="noopener"
                       class="wa-hero-cta w-full flex items-center justify-center gap-2.5 font-bold py-2.5 rounded-lg text-[13px] text-white"
                       style="background: linear-gradient(135deg, #16a34a, #22c55e); animation: wa-pulse-glow 2.5s ease-in-out infinite;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.99 0C5.376 0 0 5.373 0 11.988c0 2.104.549 4.14 1.595 5.945L0 24l6.335-1.652A11.981 11.981 0 0011.99 24C18.604 24 24 18.627 24 12.012 24 5.373 18.604 0 11.99 0zm.01 21.823a9.886 9.886 0 01-5.03-1.372l-.362-.214-3.762.981.999-3.649-.235-.374a9.837 9.837 0 01-1.511-5.195c0-5.452 4.443-9.893 9.901-9.893 5.452 0 9.895 4.441 9.895 9.893 0 5.452-4.443 9.823-9.895 9.823z"/></svg>
                        Message Us on WhatsApp &mdash; Instant Reply
                    </a>
                </div>

                {{-- Price badge --}}
                <div class="inline-flex items-center gap-3 mb-9 px-5 py-3 rounded-2xl" style="background: rgba(59,130,246,0.07); border: 1px solid rgba(59,130,246,0.2);">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                    <span style="font-size: 13px; font-weight: 600; color: #1e293b;">One-Time License</span>
                    <span class="w-px h-4 flex-shrink-0" style="background: #e2e8f0;"></span>
                    <span style="font-size: 22px; font-weight: 900; color: #1d4ed8; line-height: 1;">$4,999</span>
                    <span style="font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.06em;">Fixed</span>
                </div>

                {{-- Trust items --}}
                <div class="space-y-4 mb-9">
                    <div class="contact-trust-item">
                        <div class="contact-trust-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 13.5px; font-weight: 600; color: #0f172a; line-height: 1.4;">One-time license &mdash; no subscriptions</div>
                            <div style="font-size: 12px; color: #64748b; margin-top: 2px;">Pay once, use forever. Zero recurring charges.</div>
                        </div>
                    </div>
                    <div class="contact-trust-item">
                        <div class="contact-trust-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 13.5px; font-weight: 600; color: #0f172a; line-height: 1.4;">Fully self-hosted on your own server</div>
                            <div style="font-size: 12px; color: #64748b; margin-top: 2px;">Your data, your infrastructure, your complete control.</div>
                        </div>
                    </div>
                    <div class="contact-trust-item">
                        <div class="contact-trust-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 13.5px; font-weight: 600; color: #0f172a; line-height: 1.4;">Complete source code included</div>
                            <div style="font-size: 12px; color: #64748b; margin-top: 2px;">Modify, extend, and white-label without restriction.</div>
                        </div>
                    </div>
                    <div class="contact-trust-item">
                        <div class="contact-trust-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 13.5px; font-weight: 600; color: #0f172a; line-height: 1.4;">White-label branding freedom</div>
                            <div style="font-size: 12px; color: #64748b; margin-top: 2px;">Full white-label customization. Deploy as your own brand.</div>
                        </div>
                    </div>
                </div>

                {{-- Stats row --}}
                <div class="flex items-center gap-6 pt-7" style="border-top: 1px solid #f1f5f9;">
                    <div>
                        <div style="font-size: 24px; font-weight: 900; color: #0f172a; line-height: 1;">30 min</div>
                        <div style="font-size: 11.5px; color: #94a3b8; margin-top: 4px;">Avg. setup time</div>
                    </div>
                    <div class="w-px h-9 flex-shrink-0" style="background: #e2e8f0;"></div>
                    <div>
                        <div style="font-size: 24px; font-weight: 900; color: #0f172a; line-height: 1;">100%</div>
                        <div style="font-size: 11.5px; color: #94a3b8; margin-top: 4px;">Source code access</div>
                    </div>
                    <div class="w-px h-9 flex-shrink-0" style="background: #e2e8f0;"></div>
                    <div>
                        <div style="font-size: 24px; font-weight: 900; color: #0f172a; line-height: 1;">&infin;</div>
                        <div style="font-size: 11.5px; color: #94a3b8; margin-top: 4px;">Bookings / month</div>
                    </div>
                </div>

            </div>

            {{-- ════ RIGHT COLUMN — FORM ════ --}}
            <div class="section-fade" style="transition-delay: 0.12s;">
                <div class="contact-form-card">
                    <div class="mb-6 relative z-10">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="relative flex h-2 w-2 flex-shrink-0">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                            </div>
                            <span style="font-size: 11px; font-weight: 700; color: #2563eb; letter-spacing: 0.12em; text-transform: uppercase;">We reply within 4 hours &mdash; usually faster</span>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Request Your Private Demo</h3>
                        <p style="font-size: 13px; color: #64748b; line-height: 1.6;">See the live admin panel, booking system, and hotel management &mdash; tailored to your business. No obligation.</p>
                    </div>

                    <div id="cfFormWrap" class="relative z-10">
                        @if($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-xl text-sm" style="background: rgba(239,68,68,0.08); border: 1px solid rgba(239,68,68,0.25); color: #dc2626;">
                            <strong>Please fix the following:</strong>
                            <ul class="mt-1 list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form id="contactForm" action="{{ route('demo.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="contact-label" for="cf_name">
                                        <span class="inline-flex items-center gap-1.5">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                            Full Name <span style="color:#3B82F6; margin-left:2px;">*</span>
                                        </span>
                                    </label>
                                    <input type="text" id="cf_name" name="name" class="contact-input" placeholder="John Smith" autocomplete="name" required>
                                </div>
                                <div>
                                    <label class="contact-label" for="cf_company">
                                        <span class="inline-flex items-center gap-1.5">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                                            Company
                                        </span>
                                    </label>
                                    <input type="text" id="cf_company" name="company" class="contact-input" placeholder="My Hotel Group" autocomplete="organization">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="contact-label" for="cf_email">
                                        <span class="inline-flex items-center gap-1.5">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                            Email Address <span style="color:#3B82F6; margin-left:2px;">*</span>
                                        </span>
                                    </label>
                                    <input type="email" id="cf_email" name="email" class="contact-input" placeholder="john@example.com" autocomplete="email" required>
                                </div>
                                <div>
                                    <label class="contact-label" for="cf_whatsapp">
                                        <span class="inline-flex items-center gap-1.5">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                                            WhatsApp
                                        </span>
                                    </label>
                                    <input type="tel" id="cf_whatsapp" name="whatsapp" class="contact-input" placeholder="+1 (555) 000-0000" autocomplete="tel">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="contact-label" for="cf_country">
                                        <span class="inline-flex items-center gap-1.5">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
                                            Country <span style="color:#3B82F6; margin-left:2px;">*</span>
                                        </span>
                                    </label>
                                    <select id="cf_country" name="country" required>
                                        <option value="">Select your country&hellip;</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="contact-label" for="cf_employees">
                                        <span class="inline-flex items-center gap-1.5">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                                            Total Employees <span style="color:#3B82F6; margin-left:2px;">*</span>
                                        </span>
                                    </label>
                                    <select id="cf_employees" name="total_employees" class="contact-input contact-select" required>
                                        <option value="" disabled selected>Select range&hellip;</option>
                                        <option value="1-5">1 &ndash; 5</option>
                                        <option value="6-10">6 &ndash; 10</option>
                                        <option value="11-25">11 &ndash; 25</option>
                                        <option value="26-50">26 &ndash; 50</option>
                                        <option value="51-100">51 &ndash; 100</option>
                                        <option value="100+">100+</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="contact-label" for="cf_budget">
                                    <span class="inline-flex items-center gap-1.5">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                                        System Setup Budget <span style="color:#3B82F6; margin-left:2px;">*</span>
                                    </span>
                                </label>
                                <select id="cf_budget" name="budget" class="contact-input contact-select" required>
                                    <option value="" disabled selected>What is your budget?&hellip;</option>
                                    <option value="$1500">$1,500</option>
                                    <option value="$2500">$2,500</option>
                                    <option value="$5000">$5,000</option>
                                </select>
                            </div>
                            <div>
                                <label class="contact-label" for="cf_message">
                                    <span class="inline-flex items-center gap-1.5">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                                        Message
                                    </span>
                                </label>
                                <textarea id="cf_message" name="message" class="contact-input" rows="4" placeholder="Tell us about your hotel business and what you're looking to build&hellip;" style="resize: vertical; min-height: 112px;"></textarea>
                            </div>
                            <div class="pt-1">
                                <button type="submit" id="cfSubmitBtn"
                                    class="btn-cta w-full flex items-center justify-center gap-2.5 px-6 py-[14px] rounded-xl font-bold text-[15px] text-white"
                                    style="background: linear-gradient(135deg, #1d4ed8, #3B82F6); box-shadow: 0 4px 24px rgba(59,130,246,0.35);">
                                    <span>Request License Demo &mdash; $4,999 One-Time</span>
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </button>
                                <p class="text-center mt-2.5" style="font-size: 11.5px; color: #94a3b8;">No obligation &middot; We respond within 4 hours &middot; 100% private</p>
                            </div>
                        </form>
                    </div>

                    <div id="cfSuccess" class="hidden relative z-10 text-center py-6">
                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.2);">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Request Sent!</h4>
                        <p style="font-size: 13.5px; color: #64748b; max-width: 280px; margin: 0 auto;">We've received your request and will get back to you within 24 hours.</p>
                    </div>

                    <div class="mt-5 flex items-center justify-center gap-1.5 relative z-10" style="font-size: 11.5px; color: #94a3b8;">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                        Your information is private and never shared with third parties.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(function () {
    $('#cf_country').select2({
        placeholder: 'Select your country…',
        allowClear: false,
        theme: 'default'
    });

    $('#contactForm').on('submit', function () {
        var btn = document.getElementById('cfSubmitBtn');
        if (btn) {
            btn.disabled = true;
            btn.querySelector('span').textContent = 'Sending…';
        }
    });
});
</script>
@endpush
