<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') – HotelBookingPanel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>
<body class="min-h-screen" style="background: #f1f5f9; font-family: 'Inter', sans-serif;">

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 px-6 py-0 flex items-center justify-between"
         style="background: #ffffff; border-bottom: 1px solid #e2e8f0; box-shadow: 0 1px 6px rgba(0,0,0,0.05); height: 60px;">
        <div class="flex items-center gap-4">
            <!-- Brand -->
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                     style="background: linear-gradient(135deg, #1d4ed8, #3B82F6);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                        <polyline stroke="white" stroke-width="1.5" points="9 22 9 12 15 12 15 22" fill="none"/>
                    </svg>
                </div>
                <span class="font-bold text-base" style="color: #0f172a;">HotelBookingPanel</span>
            </div>

            <!-- Nav Links -->
            <div class="hidden sm:flex items-center gap-1 ml-4">
                <a href="{{ route('admin.dashboard') }}"
                   class="px-3 py-1.5 rounded-lg text-sm font-medium transition-colors duration-150 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'hover:bg-slate-100' }}"
                   style="{{ request()->routeIs('admin.dashboard') ? 'background: linear-gradient(135deg, #1d4ed8, #3B82F6); color: white;' : 'color: #475569;' }}">
                    Demo Requests
                </a>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <span class="text-sm hidden md:block" style="color: #94a3b8;">{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                    class="text-sm px-4 py-1.5 rounded-lg font-medium transition-colors duration-150"
                    style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0;"
                    onmouseover="this.style.background='#e2e8f0';"
                    onmouseout="this.style.background='#f1f5f9';">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>
