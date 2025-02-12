<x-layout>
    <div class="bg-blue-900 h-24 px-4 mb-4 flex justify-center items-center">
        <x-search />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <li>No jobs found</li>
        @endforelse
    </div>

    {{-- Pagination Links --}}
    {{$jobs->links()}}
</x-layout>