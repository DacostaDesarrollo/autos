@csrf
<div class="block">
    <x-jet-label for="documento" value="{{ __('Documento')}}" />
    <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento', $ventas->documento)" required autofocus />
    <x-jet-label for="nombre    " value="{{ __('Nombre')}}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $ventas->nombre)" required autofocus />
    <x-jet-label for="precio" value="{{ __('Precio')}}" />
    <x-jet-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('precio', $ventas->precio)" required autofocus />
    <x-jet-label for="automovil" value="{{ __('Automovil')}}" />
    <x-jet-input id="automovil" class="block mt-1 w-full" type="select" name="automovil" :value="old('automovil', $ventas->automovil)" required autofocus />


    <div class="flex justify-end">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('ventas.create')}}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>
</div