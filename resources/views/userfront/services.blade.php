@extends('layouts.app')

@section('title', 'Services - AI Governance')

@section('hero')
    <div class="flex items-center gap-2 border border-slate-300 hover:border-slate-400/70 rounded-full w-max mx-auto px-4 py-2 mt-40 md:mt-32">
        <span>Comprehensive AI governance solutions</span>
        <button class="flex items-center gap-1 font-medium">
            <span>View all</span>
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.959 9.5h11.083m0 0L9.501 3.958M15.042 9.5l-5.541 5.54" stroke="#050040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <h5 class="text-4xl md:text-7xl font-medium max-w-[850px] text-center mx-auto mt-8">
        Our Services
    </h5>

    <p class="text-sm md:text-base mx-auto max-w-2xl text-center mt-6 max-md:px-2">From compliance monitoring to ethical AI frameworks, we provide end-to-end solutions for responsible AI development.</p>

    <div class="mx-auto w-full flex items-center justify-center gap-3 mt-4">
        <button class="bg-slate-800 hover:bg-black text-white px-6 py-3 rounded-full font-medium transition">
            Get Quote
        </button>
        <button class="flex items-center gap-2 border border-slate-300 hover:bg-slate-200/30 rounded-full px-6 py-3">
            <span>Schedule Demo</span>
            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.25.5 4.75 4l-3.5 3.5" stroke="#050040" stroke-opacity=".4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">AI Compliance Monitoring</h3>
                <p class="text-gray-600">Ensure your AI systems meet regulatory requirements and industry standards.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Ethical AI Framework</h3>
                <p class="text-gray-600">Implement ethical guidelines and principles in your AI development process.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Risk Assessment</h3>
                <p class="text-gray-600">Identify and mitigate potential risks in your AI systems before deployment.</p>
            </div>
        </div>
    </div>
@endsection