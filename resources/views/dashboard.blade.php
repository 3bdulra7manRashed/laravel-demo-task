<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Active Items</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-xl p-6">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Active Items
        </h1>

        @if ($items->isEmpty())
            <div class="text-center py-8 text-gray-500 text-lg">
                No available items
            </div>
        @else
            <ul class="space-y-3">
                @foreach ($items as $item)
                    <li class="flex items-center justify-between bg-gray-50 border border-gray-200 p-4 rounded-lg">
                        <span class="font-medium text-gray-800">
                            {{ $item->name }}
                        </span>

                        <span class="text-sm text-gray-500">
                            {{ $item->created_at->format('Y-m-d H:i') }}
                        </span>
                    </li>
                @endforeach
            </ul>
        @endif

    </div>

</body>
</html>
