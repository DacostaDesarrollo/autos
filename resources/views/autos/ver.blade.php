<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-light">
            {{ __('Ver Auto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="placa" value="{{ __('Placa')}}" />
                    <x-jet-input id="placa" class="block mt-1 w-full" type="text" name="placa" :value="old('placa', $autos->placa)" readonly />
                    <x-jet-label for="marca" value="{{ __('Marca')}}" />
                    <x-jet-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca', $autos->marca)" readonly />
                    <x-jet-label for="modelo" value="{{ __('Modelo')}}" />
                    <x-jet-input id="modelo" class="block mt-1 w-full" type="text" name="modelo" :value="old('modelo', $autos->modelo)" readonly />
                    <x-jet-label for="year" value="{{ __('Año')}}" />
                    <x-jet-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year', $autos->year)" readonly />

                </div>
            </div>   
        </div>    
    </div>
</x-app-layout>