<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items Management System</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto my-8 p-4">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Items Management System</h1>
        <div class="text-right mb-4">
            <a href="{{ route('items.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New Item</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full bg-white shadow rounded-lg">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr class="border-t border-gray-300 hover:bg-gray-100">
                        <td class="px-4 py-2 text-center">{{ $item->id }}</td>
                        <td class="px-4 py-2">{{ $item->name }}</td>
                        <td class="px-4 py-2">{{ $item->description }}</td>
                        <td class="px-4 py-2 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('items.show', $item->id) }}" class="text-blue-500 hover:underline">View</a>
                                <a href="{{ route('items.edit', $item->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                <form action="{{ route('items.destroy', $item->id)}}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
