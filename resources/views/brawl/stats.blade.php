<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $brawler->name }} Stats</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <x-navbar />
    <div class="max-w-4xl mx-auto mt-8 px-4">
        <a href="{{ route('brawl.brawlers') }}" class="inline-flex items-center mb-6 text-purple-600 hover:text-purple-800 transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to Brawlers
        </a>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $brawler->name }}</h1>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <p class="text-lg"><span class="font-semibold text-gray-700">Rarity:</span> 
                        <span class="px-3 py-1 rounded-full text-sm 
                        @if($brawler->rarity == 'Rare') bg-green-100 text-green-800
                        @elseif($brawler->rarity == 'Super Rare') bg-blue-100 text-blue-800
                        @elseif($brawler->rarity == 'Epic') bg-purple-100 text-purple-800
                        @else bg-gray-100 text-gray-800 @endif">
                            {{ $brawler->rarity }}
                        </span>
                    </p>
                    <p class="text-lg"><span class="font-semibold text-gray-700">Role:</span> 
                        <span class="bg-gray-100 px-3 py-1 rounded-full text-sm text-gray-800">{{ $brawler->role }}</span>
                    </p>
                    @if ($brawler->stats)
                        <div class="space-y-3">
                            <p class="text-lg"><span class="font-semibold text-gray-700">Damage level 9:</span> 
                                <span class="text-red-600 font-medium">{{ $brawler->stats->Damage }}</span>
                            </p>
                            <p class="text-lg"><span class="font-semibold text-gray-700">HP level 9:</span> 
                                <span class="text-green-600 font-medium">{{ $brawler->stats->HP }}</span>
                            </p>
                            <p class="text-lg"><span class="font-semibold text-gray-700">Starpower:</span> 
                                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">{{ $brawler->stats->Starpower }}</span>
                            </p>
                        </div>
                    @else
                        <p class="text-red-500">No stats available for this brawler.</p>
                    @endif
                </div>

                <div class="flex justify-center items-center">
                    @if ($brawler->picture)
                        <img src="{{ asset($brawler->picture) }}" alt="{{ $brawler->name }}" 
                             class="rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300"
                             style="max-width: 200px; height: auto;">
                    @else
                        <div class="bg-gray-200 rounded-lg p-4 text-gray-500">No image available</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
