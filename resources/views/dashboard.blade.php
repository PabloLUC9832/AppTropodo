<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('¡Bienvenido!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mx-0 text-2xl">
                    ¿Qué son los artrópodos?
                </div>

                <div class="mt-6 text-gray-500 text-justify	">
                    Los animales artrópodos son animales invertebrados que constituyen el filo más numeroso y diverso dentro de los 29 filos que conforman el Reino Animalia o Animal. Aparecieron sobre la faz de la Tierra hace aproximadamente unos 600 o 500 millones de años. Diversos estudios evolutivos han revelado cómo los artrópodos evolucionaron muy probablemente a partir de algún tipo de gusano similar a los anélidos marinos que existen en la actualidad, de manera que los segmentos diferenciados que caracterizan a los artrópodos podrían ser una evolución de los segmentos homólogos de dichos gusanos.
                </div>
                <div class="mt-5 grid h-screen place-items-center">
                    <img class="" src="https://cdn.pixabay.com/photo/2014/05/17/11/31/arthropod-346160_1280.jpg">
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
