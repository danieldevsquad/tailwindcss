@extends('base')

@section('content')
    <div class="max-w-xl mx-auto mt-12 grid grid-cols-3 gap-6">
        <div class="shadow-sm h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center">shadow-sm</div>
        <div class="shadow h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center">shadow</div>
        <div class="shadow-md h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center">shadow-md</div>
        <div class="shadow-lg h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center">shadow-lg</div>
        <div class="shadow-xl h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center">shadow-xl</div>
        <div class="shadow-2xl h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center">shadow-2xl</div>
    </div>
@endsection
