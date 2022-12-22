<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing post') }}
        </h2>
    </x-slot>

    <x-post.form
        method="patch"
        action="{{ route('posts.update', $post) }}"
        title="{{ $post->title }}"
        content="{{ $post->content }}"
        button="Edit"
        cancel-button="{{ url()->previous() }}"
    />
</x-app-layout>
