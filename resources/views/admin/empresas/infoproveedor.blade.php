<x-app-layout>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      <div>
        <a href="{!! url('/admindashboard'); !!}">Administrar</a>
      </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-xl mt-16 py-6">
    <div class="px-6">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex justify-center">
                <div class="relative">
                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"/>
                </div>
            </div>
        </div>
        <div class="text-center mt-2">
            <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{!!$proveedor->nombre!!}</h3>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                {!!$proveedor->cifdni!!}
            </div>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                {!!$proveedor->telefono!!}  -  {!!$proveedor->correo!!}
            </div>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                {!!$proveedor->direccion!!} {!!$proveedor->poblacion!!} {!!$proveedor->cod_postal!!}
            </div>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                {!!$proveedor->contacto_nombre!!} {!!$proveedor->contacto_telefono!!} {!!$proveedor->contacto_correo!!}
            </div>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                {!!$proveedor->desc_01!!} {!!$proveedor->desc_02!!} {!!$proveedor->desc_03!!}
            </div>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                <img class="text-center centrado" src="{{ Storage::url($proveedor->fotoperfil) }}">
            </div>
        </div>
        <!-- component tabla-->

<!-- Aqui iran las fotos -->
        <div class="text-center mt-2">
            <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Multimedia</h3>
            
        </div>
</x-app-layout>
