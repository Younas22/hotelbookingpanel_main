@extends('admin.layouts.app')

@section('title', 'Demo Requests')

@section('content')

    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-xl font-bold" style="color: #0f172a;">Demo Requests</h1>
            <p class="text-sm mt-0.5" style="color: #64748b;">All incoming license requests from the contact form</p>
        </div>
        <a href="{{ url('/contact') }}" target="_blank"
           class="text-sm font-medium px-4 py-2 rounded-xl transition-colors duration-150"
           style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.2); color: #2563eb;">
            View Contact Page &rarr;
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 px-4 py-3 rounded-xl text-sm" style="background: rgba(34,197,94,0.07); border: 1px solid rgba(34,197,94,0.25); color: #15803d;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
        <div class="bg-white rounded-xl p-5" style="border: 1px solid #e2e8f0; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
            <p class="text-xs font-semibold uppercase tracking-wider mb-1" style="color: #94a3b8;">Total Requests</p>
            <p class="text-3xl font-bold" style="color: #0f172a;">{{ $total }}</p>
        </div>
        <div class="bg-white rounded-xl p-5" style="border: 1px solid #e2e8f0; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
            <p class="text-xs font-semibold uppercase tracking-wider mb-1" style="color: #94a3b8;">Today</p>
            <p class="text-3xl font-bold" style="color: #1d4ed8;">{{ $today }}</p>
        </div>
        <div class="bg-white rounded-xl p-5" style="border: 1px solid #e2e8f0; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
            <p class="text-xs font-semibold uppercase tracking-wider mb-1" style="color: #94a3b8;">This Week</p>
            <p class="text-3xl font-bold" style="color: #3B82F6;">{{ $thisWeek }}</p>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="bg-white rounded-xl p-4 mb-4" style="border: 1px solid #e2e8f0; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
        <form method="GET" action="{{ route('admin.dashboard') }}" class="flex gap-3">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search by name, email or company..."
                class="flex-1 px-4 py-2 rounded-xl text-sm"
                style="border: 1px solid #e2e8f0; background: #f8fafc; color: #0f172a; outline: none;"
                onfocus="this.style.borderColor='rgba(59,130,246,0.5)'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';"
            >
            <button type="submit"
                class="font-medium px-5 py-2 rounded-xl text-sm text-white transition-all duration-150"
                style="background: linear-gradient(135deg, #1d4ed8, #3B82F6);">
                Search
            </button>
            @if(request('search'))
                <a href="{{ route('admin.dashboard') }}"
                   class="font-medium px-4 py-2 rounded-xl text-sm transition-colors duration-150"
                   style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0;">
                    Reset
                </a>
            @endif
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-xl overflow-hidden" style="border: 1px solid #e2e8f0; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
        @if($requests->isEmpty())
            <div class="text-center py-16" style="color: #94a3b8;">
                <svg class="w-12 h-12 mx-auto mb-3 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <p class="text-sm">No requests found</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">#</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Name</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Company</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Email</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">WhatsApp</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Country</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Employees</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Budget</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Date</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide" style="color: #94a3b8;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $req)
                        <tr style="border-bottom: 1px solid #f1f5f9;" onmouseover="this.style.background='#f8fafc';" onmouseout="this.style.background='';">
                            <td class="px-5 py-3.5" style="color: #94a3b8;">{{ $requests->firstItem() + $loop->index }}</td>
                            <td class="px-5 py-3.5 font-semibold" style="color: #0f172a;">{{ $req->name }}</td>
                            <td class="px-5 py-3.5" style="color: #475569;">{{ $req->company ?? '—' }}</td>
                            <td class="px-5 py-3.5">
                                <a href="mailto:{{ $req->email }}" style="color: #2563eb;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='';">{{ $req->email }}</a>
                            </td>
                            <td class="px-5 py-3.5" style="color: #475569;">{{ $req->whatsapp ?? '—' }}</td>
                            <td class="px-5 py-3.5" style="color: #475569;">{{ $req->country ?? '—' }}</td>
                            <td class="px-5 py-3.5" style="color: #475569;">{{ $req->total_employees ?? '—' }}</td>
                            <td class="px-5 py-3.5 font-semibold" style="color: #1d4ed8;">{{ $req->budget ?? '—' }}</td>
                            <td class="px-5 py-3.5 whitespace-nowrap" style="color: #64748b;">
                                {{ $req->created_at ? $req->created_at->format('d M Y') : '—' }}
                            </td>
                            <td class="px-5 py-3.5">
                                <form method="POST" action="{{ route('admin.requests.destroy', $req->id) }}" onsubmit="return confirm('Delete this record?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs font-semibold transition-colors duration-150" style="color: #ef4444;"
                                        onmouseover="this.style.color='#dc2626';" onmouseout="this.style.color='#ef4444';">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($requests->hasPages())
                <div class="px-5 py-4" style="border-top: 1px solid #f1f5f9;">
                    {{ $requests->links() }}
                </div>
            @endif
        @endif
    </div>

    @if(!$requests->isEmpty())
        <p class="text-xs mt-3 text-right" style="color: #94a3b8;">
            Showing {{ $requests->firstItem() }}–{{ $requests->lastItem() }} of {{ $requests->total() }} results
        </p>
    @endif

@endsection
