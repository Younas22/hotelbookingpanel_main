<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Country;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $countries = Country::orderBy('name')->get();

        $seo = [
            'title'       => 'HotelBookingPanel — Self-Hosted Automated Hotel Booking System',
            'description' => 'Self-hosted, white-label hotel booking system. Install on your own server in 30 minutes. Full source code included. One-time license.',
            'canonical'   => url('/'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];

        return view('home', compact('countries', 'seo'));
    }

    public function features()
    {
        $seo = [
            'title'       => 'Features — HotelBookingPanel',
            'description' => 'Explore all features of HotelBookingPanel: online booking engine, channel manager, admin dashboard, guest portal, and more.',
            'canonical'   => route('features'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.features', compact('seo'));
    }

    public function pricing()
    {
        $seo = [
            'title'       => 'Pricing — HotelBookingPanel',
            'description' => 'One-time license. Own your hotel booking software forever. No monthly fees, no commissions, full source code included.',
            'canonical'   => route('pricing'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.pricing', compact('seo'));
    }

    public function demo()
    {
        $seo = [
            'title'       => 'Book a Demo — HotelBookingPanel',
            'description' => 'See HotelBookingPanel in action. Request a live demo and watch the full booking flow, admin panel, and guest experience.',
            'canonical'   => route('demo'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.demo', compact('seo'));
    }

    public function voiceSearch()
    {
        $seo = [
            'title'       => 'Voice Search Booking — HotelBookingPanel',
            'description' => 'Let guests book hotel rooms by speaking naturally. HotelBookingPanel\'s AI voice search understands destination, check-in, check-out, and room preference instantly.',
            'canonical'   => route('voice-search'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.voice-search', compact('seo'));
    }

    public function aiAgent()
    {
        $seo = [
            'title'       => 'AI Voice Call Agent — HotelBookingPanel',
            'description' => 'Your AI front-desk agent answers every call 24/7, collects guest details, quotes room rates, checks availability, and confirms bookings automatically.',
            'canonical'   => route('ai-agent'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.ai-agent', compact('seo'));
    }

    public function adminPanel()
    {
        $seo = [
            'title'       => 'Admin Panel — HotelBookingPanel',
            'description' => 'Manage bookings, rooms, pricing, analytics, and your team from one powerful white-label admin dashboard. Complete control, zero limitations.',
            'canonical'   => route('admin-panel'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.admin-panel', compact('seo'));
    }

    public function howItWorks()
    {
        $seo = [
            'title'       => 'How It Works — HotelBookingPanel',
            'description' => 'See how HotelBookingPanel works in 3 simple steps: install on your server, configure your rooms and pricing, then go live and start taking automated bookings.',
            'canonical'   => route('how-it-works'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.how-it-works', compact('seo'));
    }

    public function faq()
    {
        $seo = [
            'title'       => 'FAQ — HotelBookingPanel',
            'description' => 'Answers to common questions about HotelBookingPanel: licensing, installation, features, and support.',
            'canonical'   => route('faq'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.faq', compact('seo'));
    }

    public function contact()
    {
        $countries = Country::orderBy('name')->get();
        $seo = [
            'title'       => 'Contact — HotelBookingPanel',
            'description' => 'Get in touch with the HotelBookingPanel team. Request a demo, ask questions, or discuss your hotel business needs.',
            'canonical'   => route('contact'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];
        return view('pages.contact', compact('countries', 'seo'));
    }

    public function blogs(Request $request)
    {
        $blogs = Blog::with('category')
            ->where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        if ($request->ajax()) {
            return response()->json([
                'html'         => view('blogs._cards', compact('blogs'))->render(),
                'hasMorePages' => $blogs->hasMorePages(),
            ]);
        }

        $seo = [
            'title'       => 'Blog — HotelBookingPanel',
            'description' => 'Read the latest articles, guides and news about hotel booking automation, property management software, and the hospitality industry on the HotelBookingPanel blog.',
            'canonical'   => route('blogs.index'),
            'og_type'     => 'website',
            'og_image'    => url('public/logo/favicon.png'),
            'twitter_card'=> 'summary',
        ];

        return view('blogs.index', compact('blogs', 'seo'));
    }

    public function blogShow(string $slug)
    {
        $blog = Blog::with('category')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $seo = [
            'title'              => ($blog->meta_title ?: $blog->title) . ' — HotelBookingPanel Blog',
            'description'        => $blog->meta_description ?: ($blog->excerpt ?: 'Read this article on the HotelBookingPanel blog.'),
            'canonical'          => route('blog.show', $blog->slug),
            'og_type'            => 'article',
            'og_image'           => $blog->featured_image ? url('public/' . $blog->featured_image) : url('public/logo/favicon.png'),
            'twitter_card'       => 'summary_large_image',
            'og_published_time'  => $blog->published_at?->toIso8601String(),
            'og_section'         => $blog->category?->name,
        ];

        return view('blogs.show', compact('blog', 'seo'));
    }
}
