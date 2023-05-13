<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Matricula -->
        <div class="mt-4">
            <x-input-label for="matricula" :value="__('Matrícula (Iniciando por la  S)')" />
            <x-text-input id="matricula" class="block mt-1 w-full" type="text" name="matricula" :value="old('matricula')" required/>
            <x-input-error :messages="$errors->get('matricula')" class="mt-2" />
        </div>

        <!-- Rol -->
        {{--
        <div class="mt-4">
            <x-input-label for="rol" :value="__('Rol')" />
            <x-text-input id="rol" class="block mt-1 w-full" type="text" name="rol" :value="old('rol')" required/>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>
        --}}
        <div class="mt-4">
            <label for="rol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Rol</label>
            <select  id="rol" name="rol" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Selecciona tu rol</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Experto">Experto</option>
            </select>
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya tienes una cuenta?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
