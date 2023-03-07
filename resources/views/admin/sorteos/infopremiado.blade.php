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
                <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-4">
        <div class="text-center mt-2">
            <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">correo ganador: {!!$premiado->usuario->email!!}</h3>
    <form method="post" enctype="multipart/form-data" action="{{ url('/editpremiadoguardar') }}" data-toogle="validator" role="form" id="logo_form" autocomplete="off" class="centrado centrardivs">
    {{ csrf_field() }}
    <table id="customers2">
      <tbody>
        <tr>
          <td>
            <br>
            <br>
            <nav>
              <ul>
                <li>Nombre:  <input type="text" name="nombre" value="{!!$premiado->nombre!!}"  /></li>
                <li>Telefono:  <input type="text" name="telefono" value="{!!$premiado->telefono!!}" /></li>
                <input hidden type="text" name="id" value="{!!$premiado->id!!}" />
              </ul>
            </nav>
          </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>
            <nav>
              <ul>
                <li>contacto nombre:  <input type="text" name="contacto2_nombre" value="{!!$premiado->contacto2_nombre!!}"  /></li>
                <li>contacto telefono:  <input type="text" name="contacto2_telefono" value="{!!$premiado->contacto2_telefono!!}" /></li>
              </ul>
            </nav>
          </td>
           </tbody>
      <tbody>
          <td>
            <nav>
              <ul>
                <li>Lugar:  <input type="text" name="lugar_boda" value="{!!$premiado->lugar_boda!!}" /></li>
                <li>fecha:  <input type="text" name="fecha_boda" value="{!!$premiado->fecha_boda!!}" disabled="disabled" /></li>
                <li>Hora:  <input type="text" name="horario_boda" value="{!!$premiado->horario_boda!!}"  /></li>
              </ul>
            </nav>
          </td>
        </tr>
      </tbody>
    </table>
    <br>

  <button type="submit" class="btn btn-primary button centrado">Guardar</button>
  </div>

</form>
        </div>
</div>
</div>
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <h3>Notas</h3>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalnotas">Nueva</button> 
                </div>
                <div class="max-w-2xl mx-auto">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        edit
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($notasboda as $notaboda)
                                <tr class="bg-white border-b">
                                    <form  method="post" enctype="multipart/form-data" action="{{ url('/editnotaboda') }}" autocomplete="off" data-toogle="validator" role="form">
                                        {{ csrf_field() }}
                                        <td><input type="text" name="nota" value="{!!$notaboda->nota!!}"/></td>
                                        <td><button type="submit" class="btn btn-primary button">Editar</button><a href="{{ url('/deletenotaboda') }}/{!!$premiado->id!!}/{!!$notaboda->id!!}" class="btn btn-danger button" onclick="return confirm('seguro?');">Borrar</a></td>
                                        <input type="text" name="notaboda_id" value="{!!$notaboda->id!!}" hidden />
                                        <input type="text" name="premiado_id" value="{!!$premiado->id!!}" hidden />
                                    </form>
                                </tr class="bg-white border-b">
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Pregunta -->
<div class="modal fade" id="modalnotas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Añadir Nota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form  method="post" enctype="multipart/form-data" action="{{ url('/annadirnotaboda') }}" autocomplete="off" data-toogle="validator" role="form" id="formnotaboda">
        {{ csrf_field() }}
        <table class="centrardivs">
          <tbody>
            <tr>
              <td >
                <nav>
                  <ul>
                    <li><input type="text" name="nota" value="" placeholder="Nota" required/></li>
                    <input type="text" name="premiado_id" value="{!!$premiado->id!!}" hidden />
                </ul>
            </nav>
        </td>
    </tr>
</tbody>
</table>
</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" onclick="document.getElementById('formnotaboda').submit();">Guardar</button>
</div>
</div>
</div>
</div>
<!-- FIN Modal Pregunta -->
</x-app-layout>
