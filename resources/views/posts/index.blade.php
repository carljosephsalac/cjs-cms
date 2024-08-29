<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between ">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Posts') }}
            </h2>
            <x-primary-button type="link" href="{{ route('posts.create') }}">{{ __('Create Post') }}</x-primary-button>
        </div>
    </x-slot>

    <div class="px-3 py-12">
        <div class="flex flex-col gap-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
            @session('created')
                <x-alert type="check">{{ $value }}</x-alert>
            @endsession
            @session('deleted')
                <x-alert type="cross">{{ $value }}</x-alert>
            @endsession
            @foreach ($posts as $post)
                <a href="{{ route('posts.show', $post) }}">
                    <div class="overflow-hidden bg-white rounded-lg shadow-sm dark:bg-gray-800">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 -scale-x-100" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                <div>
                                    <span class="text-sm ">{{ $post->user->name }}</span>
                                    <small class="text-sm ">
                                        - {{ $post->created_at->format('j M Y, g:i a') }}
                                    </small>
                                    @unless ($post->created_at->eq($post->updated_at))
                                        <small class="text-xs">edited</small>
                                    @endunless
                                </div>
                            </div>
                            <strong>{{ $post->title }}</strong>
                        </div>
                    </div>
                </a>
            @endforeach
            <div>{{ $posts->links() }}</div>
        </div>
    </div>
</x-app-layout>
