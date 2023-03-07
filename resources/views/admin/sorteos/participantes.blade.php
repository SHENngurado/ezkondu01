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
          <h3>Participantes</h3>
          <h3>entre el {{$fechainiciopublic}} al {{$fechafinpublic}}</h3>
        </div>

        <div class="max-w-2xl mx-auto">
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4">
              <a href="https://echaloasuerte.com/" target="_blank">Realizar sorteo</a>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Nº Sorteo sobre {!!$totalparticipantes!!}
                  </th>
                  <th scope="col" class="px-6 py-3">
                    correo
                  </th>
                  <th scope="col" class="px-6 py-3">
                    fecha
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Winwin?
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($participantes as $participante)
                <tr class="bg-white border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{!!$loop->iteration!!}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{!!$participante->usuario->email!!}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{!!$participante->fecha_boda!!}</td>
                  <form action="{{ url('/premiado') }}" enctype="multipart/form-data" method="post" autocomplete="off" data-toogle="validator" role="form">
                  {{ csrf_field() }}
                  <input type="text" name="user_id" value="{!!$participante->usuario->id!!}" hidden />
                  <input type="text" name="fecha_boda" value="{!!$participante->fecha_boda!!}" hidden />
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><button type="submit" class="btn btn-info button">WINwin</button></td>
                  </form>
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


