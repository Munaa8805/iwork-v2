<x-layout>
    <h1>Works page Works </h1>
    <ul>
        @forelse($jobs as $job)
            <li>
                {{-- <a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a> --}}
                {{$job}}
            </li>
        @empty
            <li>No jobs found</li>
        @endforelse
    </ul>
</x-layout>