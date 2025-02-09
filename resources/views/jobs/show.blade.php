<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h2>{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per year.</p>
    <p>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
