<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto bg-white p-6 shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">CRUD Application</h1>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">+ Create New Product</button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Details</th>
                        <th class="py-2 px-4 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <tr>
                        <td class="py-2 px-4 border-b text-center">1</td>
                        <td class="py-2 px-4 border-b">Product Name 1</td>
                        <td class="py-2 px-4 border-b">Product details 1</td>
                        <td class="py-2 px-4 border-b text-center">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Show</button>
                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                    <!-- More rows can be added here -->
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <!-- Pagination can be added here -->
            <div class="flex justify-center">
                <button class="px-3 py-1 border border-gray-300 rounded-l-lg">Previous</button>
                <button class="px-3 py-1 border-t border-b border-gray-300">1</button>
                <button class="px-3 py-1 border-t border-b border-r border-gray-300 rounded-r-lg">Next</button>
            </div>
        </div>
    </div>
</body>
</html>
