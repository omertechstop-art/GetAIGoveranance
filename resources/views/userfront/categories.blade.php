@extends('layouts.app')

@section('title', 'Categories - AI Governance Hub')

@section('hero')
    <div class="text-center mt-16 md:mt-24 px-4">
        <h1 class="text-4xl md:text-6xl font-bold max-w-4xl mx-auto leading-tight">
            AI Governance <span class="text-blue-600">Categories</span>
        </h1>
        <p class="text-lg md:text-xl mx-auto max-w-2xl mt-6 text-gray-600">
            Explore different types of AI governance tools organized by function and use case.
        </p>
    </div>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Governance Platforms</h3>
                <p class="text-gray-600 mb-6">Comprehensive platforms for managing AI lifecycle, policies, and oversight across your organization.</p>
                <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">View vendors →</a>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Monitoring & Observability</h3>
                <p class="text-gray-600 mb-6">Tools for tracking AI model performance, drift detection, and real-time monitoring of AI systems.</p>
                <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">View vendors →</a>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Security & Risk</h3>
                <p class="text-gray-600 mb-6">Solutions for AI security, risk assessment, and protecting against AI-specific threats and vulnerabilities.</p>
                <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">View vendors →</a>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Compliance & Oversight</h3>
                <p class="text-gray-600 mb-6">Tools for regulatory compliance, audit trails, and ensuring AI systems meet industry standards.</p>
                <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">View vendors →</a>
            </div>
        </div>
    </div>
@endsection