<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrawlZone - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <x-navbar />
    
    <div class="relative min-h-screen bg-pattern overflow-hidden">
        <!-- Purple gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-purple-900/90 to-purple-600/90"></div>

        <!-- Animated background circles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -left-10 top-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float"></div>
            <div class="absolute -right-10 top-40 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 2s"></div>
            <div class="absolute left-1/3 bottom-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 4s"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class="text-center space-y-12">
                    <h1 class="text-7xl font-extrabold tracking-tight">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white to-purple-200 animate-pulse">Brawl</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-pink-300 mt-2">Zone</span>
                    </h1>

                    <p class="max-w-2xl mx-auto text-xl text-purple-100/90">
                        Explore all your favorite Brawlers and their stats in one place! 
                        Join the ultimate Brawl Stars companion platform.
                    </p>

                    <div class="flex justify-center space-x-6">
                        <a href="{{ route('brawl.brawlers') }}" 
                           class="group relative inline-flex items-center px-8 py-4 text-lg font-medium">
                            <span class="absolute inset-0 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 opacity-50 transition-all duration-300 ease-out group-hover:opacity-100"></span>
                            <span class="absolute inset-0 rounded-lg border-2 border-white opacity-20"></span>
                            <span class="relative text-white group-hover:text-white transition-colors">
                                See all Brawlers
                                <svg class="inline-block w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </span>
                        </a>

                        <a href="#" 
                           class="group relative inline-flex items-center px-8 py-4 text-lg font-medium">
                            <span class="absolute inset-0 rounded-lg bg-white/10 transition-all duration-300 ease-out group-hover:bg-white/20"></span>
                            <span class="absolute inset-0 rounded-lg border-2 border-white opacity-20"></span>
                            <span class="relative text-white group-hover:text-white">
                                Learn More
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating elements -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center space-x-4 opacity-75">
            <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0s"></div>
            <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
            <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
        </div>
    </div>
</body>
</html>
