<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creating post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <textarea
                name="content"
                placeholder="{{ __('Text of the post') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('text') }}</textarea>
            <x-input-error :messages="$errors->get('text')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Publish') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
