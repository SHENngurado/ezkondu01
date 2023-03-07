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
                        {!!$proveedor->desc_01!!}
                    </div>
                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                        {!!$proveedor->desc_02!!}
                    </div>
                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                        {!!$proveedor->desc_03!!}
                    </div>
                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                        <img class="text-center centrado" src="{{ Storage::url($proveedor->fotoperfil) }}">
                    </div>
                </div>
                <!-- component tabla-->

                <!-- This is an example component -->
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <h3>Preguntas y Respuestas</h3>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalpregunta">Nueva</button> 
                </div>
                <div class="max-w-2xl mx-auto">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Pregunta
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Respuesta
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        edit
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($preguntas as $pregunta)
                                <tr class="bg-white border-b">
                                    <form  method="post" enctype="multipart/form-data" action="{{ url('/editpregunta') }}" autocomplete="off" data-toogle="validator" role="form">
                                        {{ csrf_field() }}
                                        <td><input type="text" name="pregunta" value="{!!$pregunta->pregunta!!}"/></td>
                                        <td><input type="text" name="respuesta" value="{!!$pregunta->respuesta!!}" title="{!!$pregunta->respuesta!!}"/></td>
                                        <td><button type="submit" class="btn btn-primary button">Editar</button><a href="{{ url('/deletepregunta') }}/{!!$proveedor->id!!}/{!!$pregunta->id!!}" class="btn btn-danger button" onclick="return confirm('seguro?');">Borrar</a></td>
                                        <input type="text" name="pregunta_id" value="{!!$pregunta->id!!}" hidden />
                                        <input type="text" name="proveedor_id" value="{!!$proveedor->id!!}" hidden />
                                    </form>
                                </tr class="bg-white border-b">
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- This is an example component -->
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <h3>Servicios</h3>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalservicio">Nueva</button> 
                </div>
                <div class="max-w-2xl mx-auto">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        edit
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($servicios as $servicio)
                                <tr class="bg-white border-b">
                                    <form  method="post" enctype="multipart/form-data" action="{{ url('/editservicio') }}" autocomplete="off" data-toogle="validator" role="form">
                                        {{ csrf_field() }}
                                        <td><input type="text" name="nombre" value="{!!$servicio->nombre!!}"/></td>
                                        <td><button type="submit" class="btn btn-primary button">Editar</button><a href="{{ url('/deleteservicio') }}/{!!$proveedor->id!!}/{!!$servicio->id!!}" class="btn btn-danger button" onclick="return confirm('seguro?');">Borrar</a></td>
                                        <input type="text" name="servicio_id" value="{!!$servicio->id!!}" hidden />
                                        <input type="text" name="proveedor_id" value="{!!$proveedor->id!!}" hidden />
                                    </form>
                                </tr class="bg-white border-b">
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- MULTIMEDIA -->
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <h3>Multimedia</h3>
                    <a href="{{ url('/multimediaproveedor') }}/{!!$proveedor->id!!}">Editar</a> 
                </div>
                <div class="max-w-2xl mx-auto">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="container">
                            <div class="row Multimedia">
                            @foreach($fotos as $foto)
                                <div class="col-sm-6 col-md-4 col-lg-3 item elespacionero">
                                    <img class="text-center centrado" style="width:200px;" src="{{ Storage::url($foto->url) }}">
                                </div>
                            @endforeach
                        </div>
                  </div>
              </div>
          </div>

          <!-- Modal Pregunta -->
          <div class="modal fade" id="modalpregunta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Añadir Pregunta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form  method="post" enctype="multipart/form-data" action="{{ url('/annadirpregunta') }}" autocomplete="off" data-toogle="validator" role="form" id="formpregunta">
                    {{ csrf_field() }}
                    <table class="centrardivs">
                      <tbody>
                        <tr>
                          <td >
                            <nav>
                              <ul>
                                <li><input type="text" name="pregunta" value="" placeholder="Pregunta" required/></li>
                                <li><input type="text" name="respuesta" value="" placeholder="Respuesta" required/></li>
                                <input type="text" name="proveedor_id" value="{!!$proveedor->id!!}" hidden />
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
    <button type="submit" class="btn btn-primary" onclick="document.getElementById('formpregunta').submit();">Guardar</button>
</div>
</div>
</div>
</div>
<!-- FIN Modal Pregunta -->
<!-- Modal Pregunta -->
<div class="modal fade" id="modalservicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Añadir Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form  method="post" enctype="multipart/form-data" action="{{ url('/annadirservicio') }}" autocomplete="off" data-toogle="validator" role="form" id="formservicio">
        {{ csrf_field() }}
        <table class="centrardivs">
          <tbody>
            <tr>
              <td >
                <nav>
                  <ul>
                    <li><input type="text" name="nombre" value="" placeholder="Nombre servicio" required/></li>
                    <input type="text" name="proveedor_id" value="{!!$proveedor->id!!}" hidden />
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
    <button type="submit" class="btn btn-primary" onclick="document.getElementById('formservicio').submit();">Guardar</button>
</div>
</div>
</div>
</div>
<!-- FIN Modal Pregunta -->
</x-app-layout>
