<x-layout>
    <h2
    class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3"
>
    Saved Jobs
</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <!-- Saved Job Listing 1 -->
   @forelse($bookmarks as $bookmark)
   <x-job-card :job="$bookmark" />
    @empty
    <p class='text-gray-500 text-center'>You have no bookmarked job</p>
@endforelse  
</div>
</x-layout>