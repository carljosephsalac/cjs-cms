<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="px-3 py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 mx-auto bg-white rounded-lg shadow sm:p-8 dark:bg-gray-800">
                <div class="w-full">
                    <section>
                        <form method="post" action="{{ route('posts.update', $post) }}" class="flex flex-col gap-6">
                            @csrf
                            @method('patch')
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="block w-full mt-1"
                                    :value="old('title', $post->title)" required autofocus autocomplete="title" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="content" :value="__('Content')" />
                                <textarea id="content" name="content" placeholder="{{ __('What\'s on your mind?') }}"
                                    class="block w-full h-auto border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">{{ old('content', $post->content) }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Update') }}</x-primary-button>
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
