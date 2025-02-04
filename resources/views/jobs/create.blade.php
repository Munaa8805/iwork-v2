<x-layout>
    <x-slot name="title">
        Create job
    </x-slot>
    <h1>Create job</h1>
    <form  action="/jobs" method="POST">
     @csrf
      <div class="my-5">
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
        @error('title')
            <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
        @enderror
      </div>
      <br>
      <div class="mb-5">
        <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">
        @error('description')
        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
    @enderror
      </div>
      <br>
   <div class='my-5 text-center bg-orange-500'>
    <button type="submit" class=' bg-blue-500 py-6 px-4  text-2xl text-white rounded-sm'> Create job</button>
   </div>
    </form>
</x-layout>