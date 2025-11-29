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

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Active Items
            </h1>
            
            <a href="{{ route('dashboard.create') }}" 
               class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-lg transition duration-200">
                + Create New Item
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($items->isEmpty())
            <div class="text-center py-8 text-gray-500 text-lg">
                No available items
            </div>
        @else
            <ul class="space-y-3">
                @foreach ($items as $item)
                    <li class="flex items-center justify-between bg-gray-50 border border-gray-200 p-4 rounded-lg">
                        <div class="flex flex-col">
                            <span class="font-medium text-gray-800">
                                {{ $item->name }}
                            </span>
                            <span class="text-sm text-gray-500">
                                {{ $item->created_at->format('Y-m-d H:i') }}
                            </span>
                        </div>

                        <div class="flex gap-2">
                            <a href="{{ route('dashboard.edit', $item) }}" 
                               class="bg-sky-400 hover:bg-sky-500 text-white font-semibold px-4 py-2 rounded-lg transition duration-200">
                                Edit
                            </a>
                            
                            <form action="{{ route('dashboard.destroy', $item) }}" method="POST" 
                                  onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg transition duration-200">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif

    </div>

</body>
</html>
