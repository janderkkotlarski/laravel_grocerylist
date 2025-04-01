<!-- invoke the layout meta-page -->
<x-layout>
    <!-- blade meta-linking -->
    <x-slot:heading>
        Celery Opinions
    </x-slot:heading>
    <!-- Blade foreach loop -->
    <div class="space-y-4">
        @foreach ($celeries as $celery)
            <a href="/celeries/{{ $celery['id'] }}" class="block px-4 py-6 border border-purple-200 rounded-lg">
                <div class=" font-bold text-blue-500 text-sm">
                    {{ $celery->employer->name }}
                </div>
                <div>
                    <strong>{{ $celery['title'] }}</strong>'s celery opinions: {{ $celery['celery'] }}
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
