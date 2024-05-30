@extends('main')
@section('content')
    <body class="bg-cover bg-center" style="background-image: url('https://wallpaperaccess.com/full/780475.jpg')">
    <div class="relative flex min-h-screen justify-center overflow-hidden py-6 sm:py-12 h-25">
        <div class="flex space-x-6 h-25 ml-10">
            <a href="{{ route('torneos.index') }}" class="ml-10 mr-20 pr-10 pb-20 group relative cursor-pointer overflow-hidden bg-gray-200 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:max-w-sm sm:rounded-lg sm:px-10 w-full h-full">
                <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-green-500 transition-all duration-300 group-hover:scale-[10]"></span>
                <div class="relative z-10 mx-auto max-w-md ">
                    <span class="grid h-20 w-20 place-items-center rounded-full bg-green-500 transition-all duration-300 group-hover:bg-green-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0"/>
                        </svg>
                    </span>
                    <div class="space-y-6 pt-5 text-base text-xl leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <p>Pulsa aquí para ver la información de los torneos</p>
                    </div>
                </div>
            </a>
            <a href="{{ route('tenistas.index') }}" class="w-full h-full">
                <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-20 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:max-w-sm sm:rounded-lg sm:px-10 w-full h-full">
                    <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-yellow-500 transition-all duration-300 group-hover:scale-[10]"></span>
                    <div class="relative z-10 mx-auto max-w-md">
                        <span class="grid h-20 w-20 place-items-center rounded-full bg-yellow-500 transition-all duration-300 group-hover:bg-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                        </span>
                        <div class="space-y-6 pt-5 text-xl leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                            <p>Pulsa aquí para ver la información de los tenistas</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    </body>
@endsection
