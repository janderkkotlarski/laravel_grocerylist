<!-- invoke the layout meta-page -->
<x-layout>
    <!-- blade meta-linking -->
    <x-slot:heading>
        Celery
    </x-slot:heading>
  
    <h2 class="font-bold text-lg">{{ $celery['title'] }}</h2>
    <p>
        Opinion on celery is: {{ $celery['opinion'] }}
    </p>
</x-layout>
