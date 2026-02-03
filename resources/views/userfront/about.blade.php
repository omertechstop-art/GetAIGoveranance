@extends('layouts.app')

@section('title', 'About - AI Governance')

@section('hero')
    <div class="flex items-center gap-2 border border-slate-300 hover:border-slate-400/70 rounded-full w-max mx-auto px-4 py-2 mt-40 md:mt-32">
        <span>Learn more about our mission</span>
        <button class="flex items-center gap-1 font-medium">
            <span>Explore</span>
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.959 9.5h11.083m0 0L9.501 3.958M15.042 9.5l-5.541 5.54" stroke="#050040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <h5 class="text-4xl md:text-7xl font-medium max-w-[850px] text-center mx-auto mt-8">
        About AI Governance
    </h5>

    <p class="text-sm md:text-base mx-auto max-w-2xl text-center mt-6 max-md:px-2">We're dedicated to making AI systems more transparent, accountable, and aligned with human values.</p>

    <div class="mx-auto w-full flex items-center justify-center gap-3 mt-4">
        <button class="bg-slate-800 hover:bg-black text-white px-6 py-3 rounded-full font-medium transition">
            Our Story
        </button>
        <button class="flex items-center gap-2 border border-slate-300 hover:bg-slate-200/30 rounded-full px-6 py-3">
            <span>Contact Team</span>
            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.25.5 4.75 4l-3.5 3.5" stroke="#050040" stroke-opacity=".4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Our Mission</h2>
            <p class="text-lg text-gray-600 mb-6">
                At AI Governance, we believe that artificial intelligence should be developed and deployed responsibly. Our platform provides the tools and frameworks necessary to ensure AI systems are transparent, fair, and aligned with human values.
            </p>
            <p class="text-lg text-gray-600 mb-6">
                We work with organizations of all sizes to implement best practices in AI governance, from startups building their first AI models to enterprise companies managing complex AI ecosystems.
            </p>
        </div>
    </div>
@endsection