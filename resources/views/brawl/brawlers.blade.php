<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawlers</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <x-navbar />
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">List of Brawlers Global Release</h1>
            <p class="text-lg text-purple-600 mb-4">Press on a brawler card to see detailed stats</p>
            <a href="{{ route('brawl.index') }}" class="text-purple-600 hover:text-purple-800 transition-colors">
                <span class="inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to homepage
                </span>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($brawlers as $brawler)
                <a href="{{ route('brawl.brawlers.stats', $brawler->id) }}" 
                   class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="p-4">
                        <div class="flex justify-center mb-4">
                            @if ($brawler->picture)
                                <img src="{{ asset($brawler->picture) }}" 
                                     alt="{{ $brawler->name }}" 
                                     class="w-24 h-24 object-cover rounded-lg transform hover:scale-110 transition-transform duration-300">
                            @else
                                <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <span class="text-gray-500">No image</span>
                                </div>
                            @endif
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">{{ $brawler->name }}</h3>
                        <div class="space-y-2">
                            <p class="text-center">
                                <span class="px-3 py-1 rounded-full text-sm inline-block
                                    @if($brawler->rarity == 'Rare') bg-green-100 text-green-800
                                    @elseif($brawler->rarity == 'Super Rare') bg-blue-100 text-blue-800
                                    @elseif($brawler->rarity == 'Epic') bg-purple-100 text-purple-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ $brawler->rarity }}
                                </span>
                            </p>
                            <p class="text-center">
                                <span class="bg-gray-100 px-3 py-1 rounded-full text-sm text-gray-800 inline-block">
                                    {{ $brawler->role }}
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>
</html>
