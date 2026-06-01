<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login – HotelBookingPanel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes hbp-ping {
            75%, 100% { transform: scale(2); opacity: 0; }
        }
        .hbp-ping { animation: hbp-ping 1.6s cubic-bezier(0, 0, 0.2, 1) infinite; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center" style="background: #f8fafc; font-family: 'Inter', sans-serif;">

    <!-- Background decorations -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute" style="top:-160px; right:-160px; width:560px; height:560px; background: radial-gradient(circle, rgba(59,130,246,0.09) 0%, transparent 70%);"></div>
        <div class="absolute" style="bottom:-120px; left:-100px; width:400px; height:400px; background: radial-gradient(circle, rgba(14,165,233,0.06) 0%, transparent 70%);"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px); background-size: 28px 28px; opacity: 0.3;"></div>
        <div class="absolute top-0 left-0 right-0" style="height: 3px; background: linear-gradient(90deg, transparent 0%, #3B82F6 30%, #60a5fa 70%, transparent 100%);"></div>
    </div>

    <div class="relative w-full max-w-md px-4">

        <!-- Logo / Brand -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center shadow-lg" style="background: linear-gradient(135deg, #1d4ed8, #3B82F6);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="white">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                        <polyline stroke="white" stroke-width="1.5" points="9 22 9 12 15 12 15 22" fill="none"/>
                    </svg>
                </div>
            </div>
            <h1 class="text-2xl font-bold" style="color: #0f172a;">HotelBookingPanel</h1>
            <p class="text-sm mt-1" style="color: #64748b;">Admin Panel</p>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl p-8" style="box-shadow: 0 4px 40px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">

            <div class="flex items-center gap-2 mb-6">
                <div class="relative flex" style="width:8px; height:8px;">
                    <span class="hbp-ping absolute inline-flex w-full h-full rounded-full" style="background: rgba(59,130,246,0.6);"></span>
                    <span class="relative inline-flex rounded-full w-2 h-2" style="background:#3B82F6;"></span>
                </div>
                <h2 class="text-base font-semibold" style="color: #0f172a;">Sign in to your account</h2>
            </div>

            @if(session('error'))
                <div class="mb-4 px-4 py-3 rounded-xl text-sm" style="background: rgba(239,68,68,0.06); border: 1px solid rgba(239,68,68,0.2); color: #dc2626;">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1.5" style="color: #374151;">Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="admin@yourdomain.com"
                        class="w-full px-4 py-2.5 rounded-xl text-sm transition-all duration-200"
                        style="border: 1px solid #e2e8f0; background: #f8fafc; color: #0f172a; outline: none;"
                        onfocus="this.style.borderColor='rgba(59,130,246,0.55)'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                        onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';"
                        autofocus
                    >
                    @error('email')
                        <p class="mt-1 text-xs" style="color: #dc2626;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block text-sm font-medium mb-1.5" style="color: #374151;">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        class="w-full px-4 py-2.5 rounded-xl text-sm transition-all duration-200"
                        style="border: 1px solid #e2e8f0; background: #f8fafc; color: #0f172a; outline: none;"
                        onfocus="this.style.borderColor='rgba(59,130,246,0.55)'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                        onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';"
                    >
                    @error('password')
                        <p class="mt-1 text-xs" style="color: #dc2626;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" name="remember" id="remember"
                        class="w-4 h-4 rounded"
                        style="accent-color: #3B82F6;">
                    <label for="remember" class="ml-2 text-sm" style="color: #64748b;">Remember me</label>
                </div>

                <button type="submit"
                    class="w-full font-semibold py-2.5 rounded-xl text-sm text-white transition-all duration-200"
                    style="background: linear-gradient(135deg, #1d4ed8, #3B82F6); box-shadow: 0 4px 16px rgba(59,130,246,0.35);"
                    onmouseover="this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 20px rgba(59,130,246,0.45)';"
                    onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 16px rgba(59,130,246,0.35)';">
                    Sign In
                </button>
            </form>
        </div>

        <p class="text-center text-xs mt-6" style="color: #94a3b8;">&copy; {{ date('Y') }} HotelBookingPanel. All rights reserved.</p>
    </div>

</body>
</html>
