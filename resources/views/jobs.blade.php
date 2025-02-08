<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg bg-blue-100">
            <p class="mb-2 text-blue-500 text-xl font-bold font-serif">{{ $job->company->name }}</p>
            <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
        </a>
        @endforeach
    </div>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>