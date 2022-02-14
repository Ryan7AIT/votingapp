<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>voting-app</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        {{-- livewire --}}

        {{-- @livewireStyles --}}


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-white text-sm bg-gray-900">

        <header class="flex items-center justify-between p-6">
            <a href="">Logo</a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class=" px-6 py-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm  underline">Dashboard</a>
                            <a href="{{ route('login') }}" class="text-sm  underline">Log Out</a>

                        @else
                            <a href="{{ route('login') }}" class="text-sm  underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm  underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" class="w-10 h-10 rounded-full" alt="">
            </div>
        </header>

        <main class="container mx-auto flex">
            <div class="mr-5 w-72">
                <div
                    class="bg-white border-2 border-blue rounded-xl mt-16 text-gray-900"
                    style="
                          border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;
                    "
                >
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        <p class="text-xs mt-4">
                        @auth
                            Let us know what you would like and we'll take a look over!
                        @else
                            Please login to create an idea.
                        @endauth

                        </p>
                    </div>

                    @auth
                        <form class="mx-auto w-60 space-y-6 mt-4 mb-4">
                            <div>
                                <input class="w-full text-sm border-none rounded-xl px-4 py-2 placeholder-gray-900" type="text" placeholder="title goes here">
                            </div>
                            <div>
                                <select class="text-sm w-full rounded-xl border-none px-4 py-2 ">
                                    <option>value 1</option>
                                    <option>value 1</option>
                                    <option>value 1</option>    
                                </select>
                            </div>
                            <div>
                                <textarea class="w-full rounded-xl border-none px-4 py-2 placeholder-gray-900" placeholder="talk dont be shy">
                                    
                                </textarea>
                            </div>
                        </form>
                    @else



                    <div class="my-6 text-center">
                        <a
                            href="{{ route('login') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-sky-500 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                        >
                            <span class="ml-1">Login</span>
                        </a>
                        <a
                            href="{{ route('register') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4"
                        >
                            Sign Up
                        </a>
                    </div>


                    @endauth
                </div>
            </div>

            <div class="w-3/5 ml-16">
                <nav class="flex justify-between items-center text-xs">
                    <ul class="flex justify-between w-68 space-x-10 font-semibold uppercase border-b-4  border-gray-700">
                        <li class="border-b-4 border-blue-500">All Ideas</li>
                        <li>All Ideas</li>
                        <li>All Ideas</li>
                    </ul>
                    <ul class="flex justify-between w-68 space-x-10 font-semibold uppercase border-b-4  border-gray-700 mr-40">
                        <li>All Ideas</li>
                        <li>All Ideas</li>
                        <li>All Ideas</li>
                    </ul>
                </nav>  

                <div class="mt-8">
                    {{ $slot}}
                </div>

            </div>

        </main>

        {{-- @livewireScripts --}}

    </body>
</html>
