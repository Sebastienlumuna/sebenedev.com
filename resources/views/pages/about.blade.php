@extends('layout')

@section('title', 'A propos de moi')

@section('content')



    <!-- Hero Section -->
<main>
<div class="hero section">
    <div class="container mx-auto px-16 py-8 mb-16">
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 text-center">
            <img src="{{ asset('img/moi.jpg')}}" alt="Profile" class="mb-4 w-20 h-20 rounded-full object-cover shadow-lg" style="border-radius: 50%;">
            <H3>Sebastien Lumuna</H3>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>


    </div></div>

</main>




@endsection


