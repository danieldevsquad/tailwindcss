@extends('base')

@section('content')
    <div class="bg-white shadow sm:rounded-lg max-w-xl mx-auto mt-12">
        <div class="mt-1 relative rounded-md shadow-sm text-gray-400 focus-within:text-indigo-500">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
            <input type="text" aria-label="search" name="search" id="search"
                   class="
                   focus:ring-indigo-500
                   focus:border-indigo-500
                   block
                   w-full
                   pl-12
                   pr-5
                   py-3
                   text-xl
                   border-gray-300
                   rounded-md"
                   placeholder="search">
        </div>
    </div>
@endsection
