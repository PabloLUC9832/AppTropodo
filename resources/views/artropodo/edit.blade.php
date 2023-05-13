<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edición artrópodo</title>

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
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edición de artrópodo</h3>
                    <p class="mt-1 text-sm text-gray-600">Ingresa la información solicitada a continuación para la edición del artrópodo.</p>
                </div>
            </div>

        </div>
    </div>

    <form action="{{route('artropodo.update',$artropodo->id)}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                <x-input name="nombreComun" message="Nombre común" value="{{$artropodo->nombre_comun}}"></x-input>

                <x-input name="nombreCientifico" message="Nombre Científico" value="{{$artropodo->nombre_cientifico}}"></x-input>

                {{--
                <x-input name="clasificacion" message="Clasificación" value="{{$artropodo->clasificacion}}"></x-input>
                --}}

                <div class="col-span-6 md:grid grid-cols-6 gap-4">

                    <div class="block md:col-start-1">
                        <label for="clasificacion" class="block text-sm font-bold text-gray-700">Clasificación</label>
                    </div>

                    <div class="block mt-3 md:col-start-3 col-end-6">
                        <select  id="clasificacion" name="clasificacion" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="{{$artropodo->clasificacion}}">{{$artropodo->clasificacion}}</option>
                            <option value="Unirrámeos">Unirrámeos</option>
                            <option value="Crustáceos">Crustáceos</option>
                            <option value="Quelicerados">Quelicerados</option>
                            <option value="Trilobitomorfos">Trilobitomorfos</option>
                        </select>
                    </div>

                </div>

                <x-input name="habitat" message="Hábitat" value="{{$artropodo->habitat}}"></x-input>

                <x-input name="distribucionGeografica" message="Distribución geográfica" value="{{$artropodo->distribucion_geografica}}"></x-input>

                <x-input name="color" message="Color" value="{{$artropodo->color}}"></x-input>

                <x-input name="peligroso" message="Peligroso" value="{{$artropodo->peligroso}}"></x-input>

                <x-input name="patas" message="Número de patas" value="{{$artropodo->patas}}"></x-input>

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="col-span-6 md:grid grid-cols-6 gap-4">

                    <div class="block md:col-start-1">
                        <label for="file" class="block text-sm font-bold text-gray-700">Imagen</label>
                    </div>

                    <div class="block mt-3 md:col-start-3 col-end-6">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Elige la imagen</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file" type="file" name="file" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG</p>

                    </div>

                </div>

                <a href="{{route('artropodo.index')}}" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancelar</a>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Guardar</button>

            </div>

        </div>


    </form>

</div>

</body>
</html>
