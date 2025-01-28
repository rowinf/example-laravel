<x-layout>
    <x-slot:heading>
        Skills Page
    </x-slot:heading>

    @foreach ($skills as $skill)
        <li>
            <a href="/skills/{{ $skill['id'] }}">
                <strong>{{ $skill['title'] }}</strong>: Required Level: {{ $skill['level'] }}.
            </a>
        </li>
    @endforeach
</x-layout>
