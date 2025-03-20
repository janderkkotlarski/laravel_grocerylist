<!-- invoke the layout meta-page -->
<x-layout>
    <!-- blade meta-linking -->
    <x-slot:heading>
        Celery Opinions
    </x-slot:heading>
    <!-- Blade foreach loop -->
     <ul>
        @foreach ($celeries as $celery)
            <li>
                <a href="/celeries/{{ $celery['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $celery['title'] }}</strong>'s celery opinions: {{ $celery['celery'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
