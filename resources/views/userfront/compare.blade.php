@extends('layouts.app')

@section('title', 'Compare Tools - AI Governance Hub')

@section('hero')
    <div class="text-center mt-16 md:mt-24 px-4">
        <h1 class="text-4xl md:text-6xl font-bold max-w-4xl mx-auto leading-tight">
            Compare AI Governance <span class="text-blue-600">Tools</span>
        </h1>
        <p class="text-lg md:text-xl mx-auto max-w-2xl mt-6 text-gray-600">
            Side-by-side comparisons to help you understand differences and make informed decisions.
        </p>
    </div>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Popular Comparisons</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg border border-gray-200 hover:shadow-md transition">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Governance Platforms: Enterprise vs Startup Solutions</h3>
                    <p class="text-gray-600 mb-4">Compare comprehensive governance platforms suitable for different organization sizes.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">View comparison →</a>
                </div>
                
                <div class="bg-white p-6 rounded-lg border border-gray-200 hover:shadow-md transition">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Model Monitoring: Real-time vs Batch Processing</h3>
                    <p class="text-gray-600 mb-4">Understand the trade-offs between different monitoring approaches.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">View comparison →</a>
                </div>
                
                <div class="bg-white p-6 rounded-lg border border-gray-200 hover:shadow-md transition">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Compliance Tools: Industry-Specific Solutions</h3>
                    <p class="text-gray-600 mb-4">Compare compliance tools designed for healthcare, finance, and other regulated industries.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">View comparison →</a>
                </div>
            </div>
        </div>
    </div>
@endsection