@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center my-16 px-6 md:px-16">
        <div class="text-center md:text-left space-y-5">
            <h1 class="text-5xl md:text-6xl font-extrabold">
                <span class="second-color">Bao Truc</span>, Say Hi
            </h1>
            <p class="text-2xl md:text-3xl font-semibold">Software Engineer</p>
            <button
                class="px-6 py-3 second-bg text-white rounded-full font-semibold transition duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-blue-500">
                My Resume
            </button>
        </div>

        <div class="ml-0 md:ml-10 mt-8 md:mt-0">
            <div class="w-40 h-40 md:w-48 md:h-48 bg-blue-500 rounded-full overflow-hidden shadow-lg">
                <img class="w-full h-full object-cover" src="{{ asset('assets/img/avatar.png') }}" alt="Avatar">
            </div>
        </div>
    </div>

    {{-- @include('components.experience') --}}
    @include('components.about')
    @include('components.project')
    @include('components.contact')
@endsection
