<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials._seo')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,300;0,14..32,400;0,14..32,500;0,14..32,600;0,14..32,700;0,14..32,800;1,14..32,400&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ url('public/assets/js/tailwind.config.js') }}"></script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ url('public/assets/css/limoschedule.css') }}?v={{ filemtime(public_path('assets/css/limoschedule.css')) }}">

    <style>
        body { background: #ffffff; color: #0f172a; font-family: 'Inter', sans-serif; }
        /* Keep navbar white even when .scrolled class is added by JS */
        #navbar.scrolled { background: #ffffff !important; border-bottom-color: #e2e8f0 !important; box-shadow: 0 1px 12px rgba(0,0,0,0.08) !important; }

        @keyframes wa-pulse-glow {
            0%,100% { box-shadow: 0 4px 18px rgba(34,197,94,0.4); }
            50%      { box-shadow: 0 4px 32px rgba(34,197,94,0.7), 0 0 0 8px rgba(34,197,94,0); }
        }
        @keyframes wa-float-pulse {
            0%,100% { box-shadow: 0 4px 24px rgba(34,197,94,0.5), 0 0 0 0 rgba(34,197,94,0.4); }
            50%      { box-shadow: 0 4px 36px rgba(34,197,94,0.7), 0 0 0 14px rgba(34,197,94,0); }
        }
        .wa-hero-cta { transition: transform 0.2s ease; }
        .wa-hero-cta:hover { transform: translateY(-2px); }
        #float-wa-btn:hover { transform: scale(1.1) !important; }
        #float-wa-btn:hover #float-wa-tooltip { opacity: 1 !important; }
        @media (max-width: 1279px) { #float-wa-btn { display: none !important; } }

        /* Blog cards */
        .blog-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 14px;
            overflow: hidden;
            transition: border-color .25s, transform .25s, box-shadow .25s;
            display: flex; flex-direction: column;
        }
        .blog-card:hover {
            border-color: rgba(59,130,246,0.35);
            transform: translateY(-3px);
            box-shadow: 0 8px 32px rgba(59,130,246,0.12);
        }
        .blog-card-img { width: 100%; aspect-ratio: 16/9; object-fit: cover; display: block; }
        .blog-card-img-placeholder {
            width: 100%; aspect-ratio: 16/9;
            background: linear-gradient(135deg, rgba(59,130,246,0.08), rgba(59,130,246,0.03));
            display: flex; align-items: center; justify-content: center;
        }
        .category-badge {
            display: inline-block; font-size: 11px; font-weight: 600; letter-spacing: .04em;
            text-transform: uppercase; color: #60a5fa;
            background: rgba(59,130,246,0.12); border: 1px solid rgba(59,130,246,0.2);
            padding: 2px 8px; border-radius: 20px;
        }
        .line-clamp-3 {
            display: -webkit-box; -webkit-line-clamp: 3;
            -webkit-box-orient: vertical; overflow: hidden;
        }
        .line-clamp-2 {
            display: -webkit-box; -webkit-line-clamp: 2;
            -webkit-box-orient: vertical; overflow: hidden;
        }

        /* Blog content (detail page) */
        .prose-blog { color: #d1d5db; }
        .prose-blog * { color: inherit; background-color: transparent; }
        .prose-blog h1,.prose-blog h2,.prose-blog h3,.prose-blog h4,.prose-blog h5,.prose-blog h6 {
            color: #f3f4f6 !important; font-weight: 700; margin: 1.6em 0 .6em; line-height: 1.3;
        }
        .prose-blog h2 { font-size: 1.5rem; }
        .prose-blog h3 { font-size: 1.25rem; }
        .prose-blog p { margin: 0 0 1.1em; line-height: 1.85; color: #d1d5db !important; }
        .prose-blog span { color: inherit !important; }
        .prose-blog strong,.prose-blog b { color: #f3f4f6 !important; }
        .prose-blog a { color: #60a5fa !important; text-decoration: underline; }
        .prose-blog ul,.prose-blog ol { padding-left: 1.6em; margin-bottom: 1.1em; color: #d1d5db !important; }
        .prose-blog li { margin-bottom: .4em; color: #d1d5db !important; }
        .prose-blog blockquote {
            border-left: 3px solid #3B82F6; margin: 1.4em 0;
            padding: .8em 1.2em; background: rgba(59,130,246,0.06) !important;
            border-radius: 0 8px 8px 0; color: #9ca3af !important; font-style: italic;
        }
        .prose-blog pre {
            background: rgba(0,0,0,0.5) !important; border: 1px solid rgba(255,255,255,0.1);
            border-radius: 10px; padding: 1.2em; overflow-x: auto;
            font-size: .9rem; margin-bottom: 1.2em;
        }
        .prose-blog code {
            background: rgba(255,255,255,0.08) !important; padding: 2px 6px;
            border-radius: 4px; font-size: .88em; color: #93c5fd !important;
        }
        .prose-blog pre code { background: none !important; padding: 0; color: #e5e7eb !important; }
        .prose-blog img { max-width: 100%; border-radius: 10px; margin: 1.2em 0; }
        .prose-blog hr { border-color: rgba(255,255,255,0.1); margin: 2em 0; }
        .prose-blog table { width: 100%; border-collapse: collapse; margin-bottom: 1.2em; }
        .prose-blog th,.prose-blog td { padding: .6em .9em; border: 1px solid rgba(255,255,255,0.1); color: #d1d5db !important; }
        .prose-blog th { background: rgba(255,255,255,0.05) !important; color: #f3f4f6 !important; font-weight: 600; }
    </style>

    @stack('styles')
    <script src="https://chat.limoschedule.com/widget.js"></script>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZMFKF24L1V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZMFKF24L1V');
</script>
</head>
<body>

<!-- ─── Navbar ─── -->
<header
    id="navbar"
    class="fixed top-0 left-0 right-0 z-50"
    style="background: #ffffff; border-bottom: 1px solid #e2e8f0; box-shadow: 0 1px 6px rgba(0,0,0,0.05);"
    role="banner"
>
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-[66px]">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex-shrink-0 block" aria-label="LimoSchedule — Home">
                <img src="{{ url('public/logo/logo-white.png') }}" alt="HotelBookingPanel" class="h-[34px] w-auto block" loading="eager" decoding="sync">
            </a>

            <!-- Desktop Nav links -->
            <nav class="hidden xl:flex items-center" aria-label="Primary navigation">
                <ul class="flex items-center gap-0.5 list-none m-0 p-0">
                    <li><a href="{{ route('features') }}"
                        class="nav-link text-[13.5px] font-medium px-3.5 py-2 rounded-lg block whitespace-nowrap transition-colors duration-150 {{ request()->routeIs('features') ? 'text-blue-600 bg-blue-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">Features</a></li>
                    <li><a href="{{ route('pricing') }}"
                        class="nav-link text-[13.5px] font-medium px-3.5 py-2 rounded-lg block whitespace-nowrap transition-colors duration-150 {{ request()->routeIs('pricing') ? 'text-blue-600 bg-blue-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">Pricing</a></li>
                    <li><a href="{{ route('demo') }}"
                        class="nav-link text-[13.5px] font-medium px-3.5 py-2 rounded-lg block whitespace-nowrap transition-colors duration-150 {{ request()->routeIs('demo') ? 'text-blue-600 bg-blue-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">Demo</a></li>
                    <li><a href="{{ route('faq') }}"
                        class="nav-link text-[13.5px] font-medium px-3.5 py-2 rounded-lg block whitespace-nowrap transition-colors duration-150 {{ request()->routeIs('faq') ? 'text-blue-600 bg-blue-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}"
                        class="nav-link text-[13.5px] font-medium px-3.5 py-2 rounded-lg block whitespace-nowrap transition-colors duration-150 {{ request()->routeIs('contact') ? 'text-blue-600 bg-blue-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">Contact</a></li>
                </ul>
            </nav>

            <!-- Desktop Right CTAs -->
            <div class="hidden xl:flex items-center gap-3 flex-shrink-0">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-[13.5px] font-medium text-slate-600 hover:text-slate-900 transition-colors duration-200 px-3 py-1.5">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-[13.5px] font-medium text-slate-600 hover:text-slate-900 transition-colors duration-200 px-3 py-1.5">Log in</a>
                    @endauth
                @endif
                <span class="w-px h-4 bg-slate-200 block"></span>
                <a href="https://wa.me/12027043668?text=Hi%2C%20I%27m%20interested%20in%20HotelBookingPanel.%20Can%20you%20show%20me%20a%20live%20demo%3F"
                   target="_blank" rel="noopener"
                   class="wa-hero-cta inline-flex items-center gap-2 text-white text-[13px] font-bold px-4 py-2 rounded-xl"
                   style="background: linear-gradient(135deg, #16a34a, #22c55e); animation: wa-pulse-glow 2.5s ease-in-out infinite;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.99 0C5.376 0 0 5.373 0 11.988c0 2.104.549 4.14 1.595 5.945L0 24l6.335-1.652A11.981 11.981 0 0011.99 24C18.604 24 24 18.627 24 12.012 24 5.373 18.604 0 11.99 0zm.01 21.823a9.886 9.886 0 01-5.03-1.372l-.362-.214-3.762.981.999-3.649-.235-.374a9.837 9.837 0 01-1.511-5.195c0-5.452 4.443-9.893 9.901-9.893 5.452 0 9.895 4.441 9.895 9.893 0 5.452-4.443 9.823-9.895 9.823z"/></svg>
                    <span>WhatsApp Us</span>
                </a>
                <a href="{{ route('contact') }}"
                   class="btn-cta inline-flex items-center gap-2 bg-[#3B82F6] text-white text-[13px] font-semibold px-4 py-2 rounded-xl border border-blue-500/30">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="7.5" cy="15.5" r="5.5"/><path d="M21 2l-9.6 9.6"/><path d="M15.5 7.5l3 3L22 7l-3-3"/></svg>
                    <span>Get License</span>
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <button id="hamburger" type="button"
                class="xl:hidden flex flex-col justify-center items-center gap-[5.5px] w-9 h-9 rounded-lg border border-slate-200 hover:border-slate-300 hover:bg-slate-50 flex-shrink-0 transition-all duration-200"
                aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-menu">
                <span class="hb-line hb-top  block w-[18px] h-[1.5px] bg-slate-700 rounded-full"></span>
                <span class="hb-line hb-mid  block w-[18px] h-[1.5px] bg-slate-700 rounded-full"></span>
                <span class="hb-line hb-bot  block w-[13px] h-[1.5px] bg-slate-400 rounded-full"></span>
            </button>

        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="mobile-menu xl:hidden"
         style="background: #ffffff; border-top: 1px solid #e2e8f0;"
         role="dialog" aria-label="Mobile navigation">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 py-3 pb-4">
            <ul class="list-none m-0 p-0 flex flex-col gap-0.5">
                <li>
                    <a href="{{ route('features') }}" class="mob-nav-item flex items-center gap-3 text-[14px] font-medium px-3 py-3 rounded-xl group {{ request()->routeIs('features') ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                        <span class="flex-shrink-0 w-[34px] h-[34px] rounded-lg flex items-center justify-center" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.15);">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </span>
                        <div>
                            <div class="font-semibold text-[14px]">Features</div>
                            <div class="text-[11.5px] text-slate-500 mt-0.5 font-normal">Full platform overview</div>
                        </div>
                        <svg class="ml-auto flex-shrink-0 text-slate-300 group-hover:text-slate-600 transition-colors" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pricing') }}" class="mob-nav-item flex items-center gap-3 text-[14px] font-medium px-3 py-3 rounded-xl group {{ request()->routeIs('pricing') ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                        <span class="flex-shrink-0 w-[34px] h-[34px] rounded-lg flex items-center justify-center" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.15);">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                        </span>
                        <div>
                            <div class="font-semibold text-[14px]">Pricing</div>
                            <div class="text-[11.5px] text-slate-500 mt-0.5 font-normal">One-time license, own it forever</div>
                        </div>
                        <svg class="ml-auto flex-shrink-0 text-slate-300 group-hover:text-slate-600 transition-colors" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('demo') }}" class="mob-nav-item flex items-center gap-3 text-[14px] font-medium px-3 py-3 rounded-xl group {{ request()->routeIs('demo') ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                        <span class="flex-shrink-0 w-[34px] h-[34px] rounded-lg flex items-center justify-center" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.15);">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        </span>
                        <div>
                            <div class="font-semibold text-[14px]">Demo</div>
                            <div class="text-[11.5px] text-slate-500 mt-0.5 font-normal">See it live before you buy</div>
                        </div>
                        <svg class="ml-auto flex-shrink-0 text-slate-300 group-hover:text-slate-600 transition-colors" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq') }}" class="mob-nav-item flex items-center gap-3 text-[14px] font-medium px-3 py-3 rounded-xl group {{ request()->routeIs('faq') ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                        <span class="flex-shrink-0 w-[34px] h-[34px] rounded-lg flex items-center justify-center" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.15);">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        </span>
                        <div>
                            <div class="font-semibold text-[14px]">FAQ</div>
                            <div class="text-[11.5px] text-slate-500 mt-0.5 font-normal">Common questions answered</div>
                        </div>
                        <svg class="ml-auto flex-shrink-0 text-slate-300 group-hover:text-slate-600 transition-colors" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="mob-nav-item flex items-center gap-3 text-[14px] font-medium px-3 py-3 rounded-xl group {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                        <span class="flex-shrink-0 w-[34px] h-[34px] rounded-lg flex items-center justify-center" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.15);">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </span>
                        <div>
                            <div class="font-semibold text-[14px]">Contact</div>
                            <div class="text-[11.5px] text-slate-500 mt-0.5 font-normal">Talk to our team</div>
                        </div>
                        <svg class="ml-auto flex-shrink-0 text-slate-300 group-hover:text-slate-600 transition-colors" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </li>
            </ul>

            <!-- Mobile CTA block -->
            <div class="mt-3 pt-3 border-t flex flex-col gap-2" style="border-color: #e2e8f0;">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="flex items-center justify-center text-[14px] font-medium text-slate-600 hover:text-slate-900 border rounded-xl px-4 py-3 transition-all duration-200 hover:border-slate-300" style="border-color: #e2e8f0; background: #f8fafc;">Dashboard &rarr;</a>
                    @else
                        <a href="{{ route('login') }}" class="flex items-center justify-center text-[14px] font-medium text-slate-600 hover:text-slate-900 border rounded-xl px-4 py-3 transition-all duration-200 hover:border-slate-300" style="border-color: #e2e8f0; background: #f8fafc;">Log in</a>
                    @endauth
                @endif
                <a href="https://wa.me/12027043668?text=Hi%2C%20I%27m%20interested%20in%20HotelBookingPanel.%20Can%20you%20show%20me%20a%20live%20demo%3F"
                   target="_blank" rel="noopener"
                   class="wa-hero-cta flex items-center justify-center gap-2 text-white text-[14px] font-bold px-4 py-3 rounded-xl"
                   style="background: linear-gradient(135deg, #16a34a, #22c55e); animation: wa-pulse-glow 2.5s ease-in-out infinite;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.99 0C5.376 0 0 5.373 0 11.988c0 2.104.549 4.14 1.595 5.945L0 24l6.335-1.652A11.981 11.981 0 0011.99 24C18.604 24 24 18.627 24 12.012 24 5.373 18.604 0 11.99 0zm.01 21.823a9.886 9.886 0 01-5.03-1.372l-.362-.214-3.762.981.999-3.649-.235-.374a9.837 9.837 0 01-1.511-5.195c0-5.452 4.443-9.893 9.901-9.893 5.452 0 9.895 4.441 9.895 9.893 0 5.452-4.443 9.823-9.895 9.823z"/></svg>
                    WhatsApp Support
                </a>
                <a href="{{ route('contact') }}"
                   class="btn-cta flex items-center justify-center gap-2 bg-[#3B82F6] text-white text-[14px] font-semibold px-4 py-3 rounded-xl border border-blue-500/30">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="7.5" cy="15.5" r="5.5"/><path d="M21 2l-9.6 9.6"/><path d="M15.5 7.5l3 3L22 7l-3-3"/></svg>
                    <span>Get License</span>
                </a>
            </div>
        </div>
    </div>

</header>

<!-- ─── Page Content ─── -->
<main style="padding-top: 66px;">
    @yield('content')
</main>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/12027043668?text=Hi%2C%20I%27m%20interested%20in%20HotelBookingPanel.%20Can%20you%20show%20me%20a%20live%20demo%3F"
   target="_blank" rel="noopener"
   id="float-wa-btn"
   aria-label="Chat on WhatsApp"
   style="position:fixed;bottom:28px;left:28px;z-index:9000;width:62px;height:62px;border-radius:50%;background:linear-gradient(135deg,#16a34a,#22c55e);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 24px rgba(34,197,94,0.5);animation:wa-float-pulse 2.5s ease-in-out infinite;text-decoration:none;transition:transform 0.2s ease;">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.99 0C5.376 0 0 5.373 0 11.988c0 2.104.549 4.14 1.595 5.945L0 24l6.335-1.652A11.981 11.981 0 0011.99 24C18.604 24 24 18.627 24 12.012 24 5.373 18.604 0 11.99 0zm.01 21.823a9.886 9.886 0 01-5.03-1.372l-.362-.214-3.762.981.999-3.649-.235-.374a9.837 9.837 0 01-1.511-5.195c0-5.452 4.443-9.893 9.901-9.893 5.452 0 9.895 4.441 9.895 9.893 0 5.452-4.443 9.823-9.895 9.823z"/></svg>
    <span id="float-wa-tooltip" style="position:absolute;left:70px;top:50%;transform:translateY(-50%);background:rgba(10,10,10,0.97);border:1px solid rgba(34,197,94,0.3);color:white;font-size:12px;font-weight:700;white-space:nowrap;padding:7px 13px;border-radius:8px;opacity:0;transition:opacity 0.2s ease;pointer-events:none;">Talk to us — Instant reply</span>
</a>


<script src="{{ url('public/assets/js/limoschedule.js') }}?v={{ filemtime(public_path('assets/js/limoschedule.js')) }}"></script>
@stack('scripts')
</body>
</html>

