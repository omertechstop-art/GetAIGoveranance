@extends('layouts.app')

@section('title', 'Q & A - AI Governance Hub')

@section('hero')
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl mb-6 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            
            <h1 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                AI Governance <span class="text-blue-600">Q & A</span>
            </h1>
            
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                Practical answers to common AI governance questions from practitioners and experts.
            </p>
            
            <div class="flex items-center justify-center gap-4 text-sm">
                <div class="flex items-center gap-2 bg-white px-6 py-3 rounded-full shadow-lg hover:shadow-xl transition-shadow border border-gray-200">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-semibold text-gray-900">{{ $qas->count() }}</span>
                    <span class="text-gray-600">Questions</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-4xl mx-auto">
        <div class="space-y-4">
            @forelse($qas as $index => $qa)
            <div class="faq-item bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="faq-header flex items-center justify-between w-full cursor-pointer p-6" data-index="{{ $index }}">
                    <h3 class="font-playfair text-xl font-bold text-gray-900 pr-8">{{ $qa->question }}</h3>
                    <svg class="faq-icon flex-shrink-0 transition-transform duration-300 ease-in-out" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 7.5l5 5 5-5" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="faq-answer overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                    <p class="font-futura text-gray-600 px-6 pb-6 leading-relaxed">{{ $qa->answer }}</p>
                    <div class="flex items-center gap-4 text-sm text-gray-500 px-6 pb-6">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ $qa->published_at ? $qa->published_at->format('M j, Y') : $qa->created_at->format('M j, Y') }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-12 text-gray-500">
                No questions available yet.
            </div>
            @endforelse
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.faq-header').forEach((header) => {
            header.addEventListener('click', () => {
                const parent = header.closest('.faq-item');
                const answer = parent.querySelector('.faq-answer');
                const icon = parent.querySelector('.faq-icon');
                const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
                
                if (isOpen) {
                    answer.style.maxHeight = '0px';
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });
    });
</script>
@endsection