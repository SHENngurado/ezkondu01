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
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <h3>Hacer sorteo: segundo paso</h3>
                    <p>fecha inicio = {{$fechainicio}}</p>
                </div>
    <section class="ftco-section">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <h3 class="h5">Fecha fin:</h3>
                    <div class="w-100">
            <form action="{{ url('/fechafinsorteo') }}" enctype="multipart/form-data" method="post" class="datepickers" autocomplete="off" data-toogle="validator" role="form">
            {{ csrf_field() }}
              <div class="form-group">
                <!-- <label class="label-control" for="id_start_datetime">Datetime picker</label> -->
                <div class="input-group date" id="id_0">
                  <input type="text" name="fechafin" value="" class="form-control" placeholder="MM/DD/YYYY hh:mm:ss" required/>
                </div>
              </div>
            <input type="text" name="fechainicio" value="{!!$fechainicio!!}" hidden />
            <button type="submit" class="btn btn-info button">Fin</button>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
