<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Update / Edit Task</h2>

            <form action="{{ route('update', $task->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="task" class="block text-gray-700 font-bold mb-2">Task</label>
                    <input type="text" id="task" name="task" value="{{ $task->task }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    @error('task')
                        <p class="text-red-500">This field is required</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="assign_to" class="block text-gray-700 font-bold mb-2">Assign To</label>
                    <input type="text" id="assign_to" name="assign_to" value="{{ $task->assign_to }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    @error('assign_to')
                        <p class="text-red-500">This field is required</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="assign_by" class="block text-gray-700 font-bold mb-2">Assign By</label>
                    <input type="text" id="assign_by" name="assign_by" value="{{ $task->assign_by }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    @error('assign_by')
                        <p class="text-red-500">This field is required</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
                    <input type="text" id="status" name="status" value="{{ $task->status }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    @error('status')
                        <p class="text-red-500">This field is required</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
                    <button class="bg-blue-500 text-white px-4 py-2 mx-2 rounded hover:bg-blue-600">
                        <a href="{{ route('index') }}">Back</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
