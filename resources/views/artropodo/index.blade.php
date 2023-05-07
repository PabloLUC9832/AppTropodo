<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de artrópodos</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('node_modules/flowbite/dist/flowbite.js')

</head>
<body class="fondo">


@include('layouts.navigation')

<div class="fondo m-10">

    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Lista de artrópodos</h3>
                    <a href="{{ route('artropodo.create') }}" class="mt-2 inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        Agregar artrópodo
                        <svg width="15px" height="15px" viewBox="0 0 1024 1024" class="icon ml-2"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512 1024C229.7 1024 0 794.3 0 512S229.7 0 512 0s512 229.7 512 512-229.7 512-512 512z m0-938.7C276.7 85.3 85.3 276.7 85.3 512S276.7 938.7 512 938.7 938.7 747.3 938.7 512 747.3 85.3 512 85.3z" fill="#3688FF" /><path d="M682.7 554.7H341.3c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7h341.3c23.6 0 42.7 19.1 42.7 42.7s-19.1 42.7-42.6 42.7z" fill="#5F6379" /><path d="M512 725.3c-23.6 0-42.7-19.1-42.7-42.7V341.3c0-23.6 19.1-42.7 42.7-42.7s42.7 19.1 42.7 42.7v341.3c0 23.6-19.1 42.7-42.7 42.7z" fill="#5F6379" /></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="md:grid md:grid-cols-4 md:gap-6">

        @if(count($artropodos) <= 0)

            <h4>No se han encontrado artrópodos.
                <a href="{{ route('artropodo.create') }}" class="mt-2 inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Agregar artrópodo
                    <svg width="15px" height="15px" viewBox="0 0 1024 1024" class="icon ml-2"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512 1024C229.7 1024 0 794.3 0 512S229.7 0 512 0s512 229.7 512 512-229.7 512-512 512z m0-938.7C276.7 85.3 85.3 276.7 85.3 512S276.7 938.7 512 938.7 938.7 747.3 938.7 512 747.3 85.3 512 85.3z" fill="#3688FF" /><path d="M682.7 554.7H341.3c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7h341.3c23.6 0 42.7 19.1 42.7 42.7s-19.1 42.7-42.6 42.7z" fill="#5F6379" /><path d="M512 725.3c-23.6 0-42.7-19.1-42.7-42.7V341.3c0-23.6 19.1-42.7 42.7-42.7s42.7 19.1 42.7 42.7v341.3c0 23.6-19.1 42.7-42.7 42.7z" fill="#5F6379" /></svg>
                </a>
            </h4>
        @else

            @foreach($artropodos as $artropodo)

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://desarrollointeracciones.blob.core.windows.net/files/{{$artropodo->foto}}" alt="{{ $artropodo->nombre_comun }}">
                    <div class="px-6 py-4">

                        <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $artropodo->nombre_comun }}</h4>

                        <h2 class="mb-2 text-2xl font-light tracking-tight text-gray-900 dark:text-white">{{ $artropodo->nombre_cientifico }}</h2>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold"> Clasificación:</span> {{ $artropodo->clasificacion }}</p>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold"> Hábitat:</span> {{ $artropodo->habitat }}</p>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold"> Distribución geográfica:</span> {{ $artropodo->distribucion_geografica }}</p>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold"> Color:</span> {{ $artropodo->color }}</p>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold"> Peligroso:</span> {{ $artropodo->peligroso }}</p>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold"> Número de patas:</span> {{ $artropodo->patas }}</p>

                        <a href="{{route('artropodo.edit',$artropodo->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Editar
                        </a>
                        <button type="button"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                data-modal-toggle="delete-modal{{$artropodo->id}}">Eliminar</button>

                    </div>
                </div>

                @include('artropodo.modalConfirmarEliminacion')

                @endforeach


        @endif



    </div>

</div>

</body>
</html>
