
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                All Student Profile
            </h2>
            <div class="">
                <!-- all about audio embeded property -->
                <audio controls loop autoplay preload="auto">
                    <source src="{{asset('home')}}/mp3/School.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
    </x-slot>
    
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-6 lg:gap-8 py-12 px-4">
            @foreach ($users as $user)
                <!-- users -->
                <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 items-center justify-center">
                    <a href="{{ route('show', $user->id) }}">
                        <div>
                            <!-- Feature img -->
                            <div class="h-40 w-100 bg-red-100 flex items-center justify-center rounded">
                                <img src="{{ asset($user->profile_image) }}" alt="{{ $user->name }}" class="h-40 w-100 rounded">
                            </div>
                            <span class="mt-2 text-gray-500 text-sm mx-auto leading-relaxed">
                                Batch : {{ $user->year }}
                            </span>
                            <!-- user name -->
                            <h2 class="mt-6 text-xl font-semibold text-gray-900">
                                {{ $user->name }}
                            </h2>
                            <!-- User Bio -->
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            {{  Str::limit($user -> bio, 50) }}
                            </p>
                        </div>
                    </a>
                </div><!--/end  users-->
            @endforeach
        </div>
        <div class="max-w-6xl mx-auto py-12">
            {{ $users->links() }}
        </div>
    </div>
    
    
</x-app-layout>