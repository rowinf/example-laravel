<x-layout>
    <x-slot:heading>
        Jops Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
</x-layout>
