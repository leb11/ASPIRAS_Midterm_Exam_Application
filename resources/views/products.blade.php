<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Top 5 Anime List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen py-10 font-sans">

    <div class="max-w-2xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-red-600 uppercase tracking-tighter shadow-sm">My Top 5 Anime List</h1>
            <div class="h-1 w-32 bg-red-600 mx-auto mt-2"></div>
        </div>

        <div class="grid gap-6">
            @foreach($products as $product)
                <div class="flex items-center bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-red-500 transition-all group shadow-lg">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-24 h-32 object-cover grayscale group-hover:grayscale-0 transition-all">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold group-hover:text-red-400 transition-colors">{{ $product['name'] }}</h2>
                    </div>
                </div>
            @endforeach
        </div>

        <footer class="mt-12 text-center text-gray-500 text-sm">
            ASPIRAS_Midterm_Exam_Application • 2026
        </footer>
    </div>

</body>
</html>