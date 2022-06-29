<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-light">
            {{ __('Ver Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="documento" value="{{ __('Documento')}}" />
                    <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento', $ventas->documento)" readonly />
                    <x-jet-label for="namee" value="{{ __('Nombre')}}" />
                    <x-jet-input id="namee" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $ventas->nombre)" readonly />
                    <x-jet-label for="edad" value="{{ __('Precio')}}" />
                    <x-jet-input id="edad" class="block mt-1 w-full" type="text" name="precio" :value="old('precio', $ventas->precio)" readonly />
                    <x-jet-label for="automovil" value="{{ __('Automovil')}}" />
                    <x-jet-input id="automovil" class="block mt-1 w-full" type="text" name="automovil" :value="old('automovil', $ventas->automovil)" readonly />

                </div>
            </div>   
        </div>    
    </div>
</x-app-layout>