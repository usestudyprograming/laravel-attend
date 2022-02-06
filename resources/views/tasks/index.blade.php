<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('tasks.create') }}">新規作成</a>
                </div>
            </div>
        </div>
    </div>
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($tasks as $task)
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $task->id }}
                        {{ $task->title }}
                        {{ $task->due_date }}
                        <a href="{{ route('tasks.edit', ['task' => $task] ) }}" class="text-sm text-gray-700 underline">編集</a>
                    </div>
                @endforeach
            </div>
        </div>

</x-app-layout>
