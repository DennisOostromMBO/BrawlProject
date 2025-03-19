<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-purple-600 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <ul class="flex space-x-8">
                        <li><a href="{{ route('brawl.index') }}" class="text-white hover:text-purple-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a></li>
                        <li><a href="{{ route('brawl.brawlers') }}" class="text-white hover:text-purple-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Brawlers</a></li>
                        <li><a href="{{ route('login') }}" class="text-white hover:text-purple-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Log in</a></li>
                        <li><a href="{{ route('register') }}" class="text-white hover:text-purple-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Register</a></li>   
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
