<x-layout>
    <h1>Works page Works </h1>
    <ul>
        @forelse($jobs as $job)
            <li>
                <a href="{{ route('jobs.show', $job->id) }}" class='font-bold text-2xl'>{{ $job->title }}</a>
                <p>{{$job->description}}</p>
                {{-- {{$job->title}} --}}
            </li>
        @empty
            <li>No jobs found</li>
        @endforelse
    </ul>
</x-layout>