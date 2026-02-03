@extends('layouts.app')

@section('title', 'Q&A - AI Governance Hub')

@section('hero')
    <div class="text-center mt-16 md:mt-24 px-4">
        <h1 class="text-4xl md:text-6xl font-bold max-w-4xl mx-auto leading-tight">
            AI Governance <span class="text-blue-600">Q&A</span>
        </h1>
        <p class="text-lg md:text-xl mx-auto max-w-2xl mt-6 text-gray-600">
            Practical answers to common AI governance questions from practitioners and experts.
        </p>
    </div>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <div class="space-y-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">How do I start implementing AI governance in my organization?</h3>
                    <p class="text-gray-600 mb-4">Start with a risk assessment of your current AI systems, establish clear policies, and implement monitoring for your highest-risk models. Focus on one category at a time rather than trying to solve everything at once.</p>
                    <div class="flex items-center gap-4 text-sm text-gray-500">
                        <span>Asked by: Enterprise Team Lead</span>
                        <span>•</span>
                        <span>March 14, 2024</span>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">What's the difference between AI governance and MLOps?</h3>
                    <p class="text-gray-600 mb-4">MLOps focuses on the technical deployment and operation of ML models, while AI governance covers the broader organizational policies, risk management, and compliance aspects. They complement each other but serve different purposes.</p>
                    <div class="flex items-center gap-4 text-sm text-gray-500">
                        <span>Asked by: ML Engineer</span>
                        <span>•</span>
                        <span>March 12, 2024</span>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Do I need different governance tools for different types of AI models?</h3>
                    <p class="text-gray-600 mb-4">It depends on your use cases. Some platforms handle multiple model types, while others specialize. Consider your model diversity, risk levels, and compliance requirements when choosing between specialized vs. comprehensive solutions.</p>
                    <div class="flex items-center gap-4 text-sm text-gray-500">
                        <span>Asked by: Data Science Manager</span>
                        <span>•</span>
                        <span>March 10, 2024</span>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">How much should I expect to spend on AI governance tools?</h3>
                    <p class="text-gray-600 mb-4">Costs vary widely based on organization size, number of models, and feature requirements. Enterprise platforms typically start at $50K+ annually, while smaller solutions may be $10K-30K. Consider the cost of non-compliance when evaluating ROI.</p>
                    <div class="flex items-center gap-4 text-sm text-gray-500">
                        <span>Asked by: CTO</span>
                        <span>•</span>
                        <span>March 8, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection