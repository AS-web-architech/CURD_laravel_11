<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto bg-white p-6 shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Task Management System</h1>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                <a href="{{ route('create') }}">+ Create New Task</a>
            </button>
        </div>
        @if(session()->has('message'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Congratulations!</span> {{ session()->get('message') }}.
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Task</th>
                        <th class="py-2 px-4 border-b">Assign To</th>
                        <th class="py-2 px-4 border-b">Assign By</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    @foreach($tasks as $task)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">{{$task->id}}</td>
                        
                        <td class="py-2 px-4 border-b">{{$task->task}}</td>
                        <td class="py-2 px-4 border-b">{{$task->assign_to}}</td>
                        <td class="py-2 px-4 border-b">{{$task->assign_by}}</td>
                        <td class="py-2 px-4 border-b">{{$task->status}}</td>
                        <td class="py-2 px-4 border-b text-center ">
                            
                            <div class="flex space-x-2">
                                <a class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600" href="{{route('task.show',$task->id)}}">show</a>
                                
                                <form action="{{route('delete',$task->id)}}" method="post">
                                <!-- <form action="#" method="post"> -->
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="bg-red-500 text-white px-3 py-1  rounded hover:bg-red-600">Delete</button>
                                </form>
                            </div>
                                
                            
                        </td>
                        
                        
                    </tr>
                    
                    @endforeach
                    <!-- More rows can be added here -->
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <!-- Pagination can be added here -->
            <div class="flex justify-center">
                
                <button class="px-3 py-1 border-t border-b border-gray-300">{{$tasks->links()}}</button>
                
            </div>
        </div>
    </div>
    <script is:inline src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
