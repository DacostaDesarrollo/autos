@csrf
<div class="block">
    <x-jet-label for="placa" value="{{ __('Placa')}}" />
    <x-jet-input id="placa" class="block mt-1 w-full" type="text" name="placa" :value="old('placa', $autos->placa)" required autofocus />
    <x-jet-label for="marca    " value="{{ __('Marca')}}" />
    <x-jet-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca', $autos->marca)" required autofocus />
    <x-jet-label for="modelo" value="{{ __('Modelo')}}" />
    <x-jet-input id="modelo" class="block mt-1 w-full" type="number" name="modelo" :value="old('modelo', $autos->modelo)" required autofocus />
    <x-jet-label for="year" value="{{ __('Año')}}" />
    <x-jet-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('ano', $autos->year)" required autofocus />


    <div class="flex justify-end">
        <div class="p-2">
            <div class="flex justify-end">
               
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
               
            </div>
        </div>
    </div>
</div