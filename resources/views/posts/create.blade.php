<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Post') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
       <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
       <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <div class="mb-4">
                <x-input-label for="caption" :value="__('Post Caption')" />
                <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" required autofocus autocomplete="caption" />
                <x-input-error :messages="$errors->get('caption')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="image" :value="__('Post Image')" />
                <x-text-input id="caption" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-blue-500 mt-1" type="file" name="image" :value="old('caption')" required autofocus autocomplete="caption" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <div class="mb-4">
            <x-primary-button class="ms-4 ml-0">
                {{ __('Add New Post') }}
            </x-primary-button>
            </div>
        </div>
       </div>
       </form>
    </div>
</div>
</x-app-layout>
