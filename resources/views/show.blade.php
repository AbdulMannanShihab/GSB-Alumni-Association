<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user-> name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center text-gray-900">
                    <div class="mb-6">                
                        <p class="mt-1 text-sm text-gray-600">
                            <img class="h-32 w-32 mx-auto rounded-full" src="{{ asset($user->profile_image) }}" alt="{{ $user->title }}" srcset="">
                        </p>
                    </div>
                    <div class="mb-6">                
                        <p class="mt-1 text-2xl text-gray-600">
                            {{ $user->name }}
                        </p>
                    </div>
                    <div class="mb-6">                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $user->bio }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
