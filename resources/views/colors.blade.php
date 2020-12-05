@extends('base')

@section('content')
    <div class="bg-white shadow sm:rounded-lg max-w-2xl mx-auto mt-12">
        <div class="px-4 py-5 sm:p-6">
            <button type="button"
                    class="
                    inline-flex
                    items-center
                    px-6 py-4
                    border
                    border-transparent
                    text-lg
                    font-medium
                    rounded-md
                    shadow-sm
                    text-white
                    bg-primary-600
                    hover:bg-primary-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-offset-2
                    focus:ring-primary-500">
                Primary Button
            </button>

            <button type="button"
                    class="
                    inline-flex
                    items-center
                    px-6 py-4
                    border
                    border-transparent
                    text-lg
                    font-medium
                    rounded-md
                    shadow-sm
                    text-white
                    bg-secondary-600
                    hover:bg-secondary-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-offset-2
                    focus:ring-secondary-500">
                Secondary Button
            </button>
        </div>
    </div>
@endsection
