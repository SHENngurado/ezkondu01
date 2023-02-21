<x-app-layout>
  <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <a href="{!! url('/admindashboard'); !!}">Administrar</a>
    </div>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-4">
        <div class="text-center mt-2">
            <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{!!$proveedor->nombre!!}</h3>
    <form method="post" enctype="multipart/form-data" action="{{ url('/editproveedorguardar') }}" data-toogle="validator" role="form" id="logo_form" autocomplete="off">
    {{ csrf_field() }}
    <h1>EDITAR</h1>
    <table id="customers2">
      <tbody>
        <tr>
          <td>
            <br>
            <br>
            <nav>
              <ul>
                <li>Nombre:  <input type="text" name="nombre" value="{!!$proveedor->nombre!!}"  /></li>
                <li>CIF/DNI:  <input type="text" name="cifdni" value="{!!$proveedor->cifdni!!}" /></li>
                <input hidden type="text" name="id" value="{!!$proveedor->id!!}" />
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
                <li>Telefono:  <input type="text" name="telefono" value="{!!$proveedor->telefono!!}"  /></li>
                <li>Correo:  <input type="text" name="correo" value="{!!$proveedor->correo!!}" size="30" /></li>
              </ul>
            </nav>
          </td>
           </tbody>
      <tbody>
          <td>
            <nav>
              <ul>
                <li>Dirección:  <input type="text" name="direccion" value="{!!$proveedor->direccion!!}" size="30" /></li>
                <li>Cod_postal:  <input type="text" name="cod_postal" value="{!!$proveedor->cod_postal!!}"  /></li>
                <li>Poblacion:  <input type="text" name="poblacion" value="{!!$proveedor->poblacion!!}"  /></li>
              </ul>
            </nav>
          </td>
        </tr>
      </tbody>
            <tbody>
          <td>
            <nav>
              <ul>
                <li>Nombre contacto:  <input type="text" name="contacto_nombre" value="{!!$proveedor->contacto_nombre!!}" size="30" /></li>
                <li>Telefono contacto:  <input type="text" name="contacto_telefono" value="{!!$proveedor->contacto_telefono!!}"  /></li>
                <li>Correo contacto:  <input type="text" name="contacto_correo" value="{!!$proveedor->contacto_correo!!}" /></li>
              </ul>
            </nav>
          </td>
        </tr>
      </tbody>
                  <tbody>
          <td>
            <nav>
              <ul>
                <li>desc_01:  <input type="text" name="desc_01" value="{!!$proveedor->desc_01!!}" size="30" /></li>
                <li>desc_02:  <input type="text" name="desc_02" value="{!!$proveedor->desc_02!!}"  /></li>
                <li>desc_03:  <input type="text" name="desc_03" value="{!!$proveedor->desc_03!!}" /></li>
              </ul>
            </nav>
          </td>
        </tr>
      </tbody>
                        <tbody>
          <td>
            <nav>
              <ul>
                <li>tipo:  <input type="text" name="tipo" value="{!!$proveedor->tipo!!}" size="30" /></li>
                <li>googleapi:  <input type="text" name="googleapi" value="{!!$proveedor->google_api_url!!}"  /></li>
              </ul>
            </nav>
          </td>
        </tr>
      </tbody>
    </table>
    <br>

  </div>

  <button type="submit" class="btn btn-primary button">Guardar</button>
</form>
        </div>
</div>
</div>
</x-app-layout>
