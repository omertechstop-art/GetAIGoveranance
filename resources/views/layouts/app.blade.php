<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AI Governance Hub')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <section class="bg-gradient-to-br from-slate-100 via-gray-50 to-zinc-100 w-full text-sm pb-20 md:pb-32 relative overflow-hidden">
        <!-- Rough texture overlay -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0" style="background-image: 
                radial-gradient(circle at 20% 50%, rgba(0, 0, 0, 0.05) 1px, transparent 1px),
                radial-gradient(circle at 80% 20%, rgba(0, 0, 0, 0.03) 1px, transparent 1px),
                radial-gradient(circle at 40% 80%, rgba(0, 0, 0, 0.04) 1px, transparent 1px);
                background-size: 60px 60px, 40px 40px, 80px 80px;"></div>
        </div>
        <div class="relative z-10">
            <livewire:header />
            @yield('hero')
        </div>
    </section>

    <main>
        @yield('content')
    </main>
</body>
</html>