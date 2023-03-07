<!-- component -->
  <x-app-layout>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      <div>
        <a href="{!! url('/admindashboard'); !!}">Administrar</a>
      </div>
    </div>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <!--CONTENIDO-->
        <div class="mt-6 py-6 border-t border-slate-200 text-center">
          <h3>Premiados</h3>
        </div>

        <div class="max-w-2xl mx-auto">
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4">
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    fecha
                  </th>
                  <th scope="col" class="px-6 py-3">
                    correo
                  </th>
                  <th scope="col" class="px-6 py-3">
                    confirmado
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($premiados as $premiado)
                <tr class="bg-white border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="{{ url('/infopremiado') }}/{!!$premiado->id!!}">{!!$premiado->fecha_boda!!}</a></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{!!$premiado->usuario->email!!}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">no</td>
                </tr class="bg-white border-b">
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>


