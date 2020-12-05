@extends('base')

@section('content')

    <div class="p-6 max-w-2xl mx-auto">
        <div class="rounded-md bg-{{$color}}-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-{{$color}}-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-{{$color}}-800">
                        There were 2 errors with your submission
                    </h3>
                    <div class="mt-2 text-sm text-{{$color}}-700">
                        <ul class="list-disc pl-5 space-y-1">
                            <li>
                                Your password must be at least 8 characters
                            </li>
                            <li>
                                Your password must included at least one pro wrestling finishing move
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection