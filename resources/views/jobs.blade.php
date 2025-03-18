<!-- invoke the layout meta-page -->
<x-layout>
    <!-- blade meta-linking -->
    <x-slot:heading>
        Job Opinions
    </x-slot:heading>
    <!-- Blade foreach loop -->
     <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/">
                    <strong>{{ $job['title'] }}</strong>'s celery opinions: {{ $job['celery'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
