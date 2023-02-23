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
                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Multimedia de {!!$proveedor->nombre!!}</h3>
                   
                </div>
                <!-- component tabla-->

              
                <!-- MULTIMEDIA -->
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalpregunta">Nueva</button>
                </div>
                <div class="max-w-2xl mx-auto">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="container">
                        	<div class="row Multimedia">
                            @foreach($fotos as $foto)
                                <div class="col-sm-6 col-md-4 col-lg-3 item elespacionero">
                                    <img class="text-center centrado" style="width:400px;" src="{{ Storage::url($foto->url) }}">
                                    <button class="btn btn-info centrado">posición</button><a href="{{ url('/deletefoto') }}/{!!$proveedor->id!!}/{!!$foto->id!!}" class="btn btn-danger button centrado" onclick="return confirm('seguro?');">Borrar</a>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Añadir Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form  method="post" enctype="multipart/form-data" action="{{ url('/annadirfoto') }}" autocomplete="off" data-toogle="validator" role="form" id="formservicio">
        {{ csrf_field() }}
        <table class="centrardivs">
          <tbody>
            <tr>
              <td >
                <nav>
                  <ul>
                    <li><input type="text" name="nombre" value="descripcion foto" required/></li>
                    <label for="image">Choose an image:</label>
                	<input type="file" id="foto" name="foto">
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
