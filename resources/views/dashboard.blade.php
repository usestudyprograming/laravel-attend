<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ダッシュボード') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('attends.index') }}" class="text-sm text-gray-700 underline">勤怠管理</a>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ Auth::user()->name }}
                        {{ Auth::user()->status }}
                    </div>
                </div>
            <a href="{{ route('attends.index') }}" class="text-sm text-gray-700 underline">ToDo</a>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        ToDo
                    </div>
                </div>
            <a href="{{ route('attends.index') }}" class="text-sm text-gray-700 underline">投稿</a>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        投稿
                    </div>
                </div>    
        </div>
    </div>
</x-app-layout>
