<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('tasks.create', ['id' => $task->id ]) }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="title" :value="__('タイトル')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>
            <div>
                <x-label for="due_date" :value="__('期限')" />
                <x-input id="due_date" class="block mt-1 w-full" type="date" name="due_date" :value="old('due_date')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('送信') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
