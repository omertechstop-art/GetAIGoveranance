@extends('layouts.app')

@section('title', 'Blog - AI Governance Hub')

@section('hero')
    <div class="text-center mt-16 md:mt-24 px-4">
        <h1 class="text-4xl md:text-6xl font-bold max-w-4xl mx-auto leading-tight">
            AI Governance <span class="text-blue-600">Insights</span>
        </h1>
        <p class="text-lg md:text-xl mx-auto max-w-2xl mt-6 text-gray-600">
            Analysis, explanations, and insights into the evolving world of AI governance.
        </p>
    </div>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <div class="space-y-8">
                <article class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Analysis</span>
                        <span class="text-gray-500 text-sm">March 15, 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">The State of AI Governance in 2024</h2>
                    <p class="text-gray-600 mb-4">An in-depth look at how organizations are approaching AI governance, what's working, and where the gaps remain.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">Read more →</a>
                </article>
                
                <article class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Guide</span>
                        <span class="text-gray-500 text-sm">March 12, 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Building Your First AI Governance Framework</h2>
                    <p class="text-gray-600 mb-4">A practical guide for organizations starting their AI governance journey, including key considerations and common pitfalls.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">Read more →</a>
                </article>
                
                <article class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">Comparison</span>
                        <span class="text-gray-500 text-sm">March 10, 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Model Monitoring vs Model Governance: What's the Difference?</h2>
                    <p class="text-gray-600 mb-4">Understanding the distinction between monitoring and governance, and why you need both for responsible AI.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">Read more →</a>
                </article>
            </div>
        </div>
    </div>
@endsection