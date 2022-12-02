<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creating post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Post title</label>
                <div class="relative mt-1 rounded-md shadow-sm">
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                           class="block w-full rounded-md border-gray-300 pl-4 pr-4
                    focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Title">
                </div>
            </div>
            <textarea
                name="content"
                placeholder="{{ __('Text of the post') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('content') }}</textarea>
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Publish') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
