<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-4">
       <div class="text-center mt-2 py-8">
        <form  method="post" enctype="multipart/form-data" action="{{ url('/newclienteguardar') }}" autocomplete="off" data-toogle="validator" role="form" id="logo_form">
          {{ csrf_field() }}
          <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Nuevo cliente</h3>
          <br>
          <table class="elcentrador">
            <tbody>
              <tr>
                <td >
                  <nav>
                    <ul>
                      <li><input type="text" name="nombre" value="" placeholder="Nombre" required/></li>
                      {{--<li><input type="text" name="cifdni" value="" placeholder="CIF/DNI" required/></li>--}}
                      <li><input type="text" name="telefono" value="" placeholder="Telefono" required/></li>
                      <li><input type="text" name="correo" value="" placeholder="Correo" /></li>
                    <br>
                      <li><input type="text" name="direccion" value="" placeholder="direccion" /></li>
                      {{--<li><input type="text" name="cod_postal" value="" placeholder="Cod. Postal" /></li>--}}
                      <li><input type="text" name="poblacion" value="" placeholder="poblacion" /></li>
                    <br>
                      {{--<li><input type="text" name="contacto_nombre" value="" placeholder="contacto_nombre" /></li>--}}
                      {{--<li><input type="text" name="contacto_correo" value="" placeholder="contacto_correo" /></li>--}}
                      {{--<li><input type="text" name="contacto_telefono" value="" placeholder="contacto_telefono" /></li>--}}
                    <br> 
                      <li><input type="text" name="desc_01" value="" placeholder="desc_01" /></li>
                      <li><input type="text" name="desc_02" value="" placeholder="desc_02" /></li>
                      <li><input type="text" name="desc_03" value="" placeholder="desc_03" /></li>
                    <br>
                      <li><input type="text" name="tipo" value="" placeholder="tipo" /></li>
                      <li><input type="text" name="googleapi" value="" placeholder="googleapi" /></li>
                      <label for="image">Choose an image:</label>
                      <input type="file" id="fotoperfil" name="fotoperfil">
                      </ul>
                    </nav>
                  </td>
                </tr>
              </tbody>
            </table>
            <br>
            <button type="submit" class="btn btn-primary button">Guardar</button>
          </form>
        </div>


      </div>
    </div>
  </div>
</x-app-layout>
<script type="text/javascript">
  @if (session()->has('info'))
  alert("No existe cliente con ese CIF/DNI")
  @endif


  $(document).ready(function() {
    $(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
  });
</script>
