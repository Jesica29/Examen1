@extends('/templates.website')
@section('content')

<section class="container" >       
              <th><h2>REGISTRO DE MASCOTA</h2> </th>      
       
           
             <div class="row">
                 <form action="/registroMascota" method="POST" class="col s12 ">
                  {{ csrf_field() }}
                     <div class="row" >
                        <div class="input-field col s6">
                           Nombre: <input type="text" name="nombre" class="validate"></input>
                        </div>
                      </div>
                        <div class="row">
                          <div class="input-field col s6">
                             Edad: <input type="text" name="edad"  class="validate"></input>
                          </div>
                         
                        </div>
                         <div class="row">
                           <div class="input-field col s6">
                             Tipo: <input type="text" name="edad"  class="validate"></input>
                          </div>
                         
                        </div>
                         <div class="row">
                           <div class="input-field col s6">
                             Color: <input type="text" name="color"  class="validate"></input>
                          </div>
                         
                        </div>

                          <a href="/administrador" class="waves-effect waves-light btn-large"> REGRESAR</a>
                          <button class="waves-effect waves-light btn-large" type="submit" name="action">ENVIAR
                  </form>
                </div>
               <br>
                 <?php foreach ($mascotas as $mascota): ?>
                <a style="color: black;" href="/mascotasRegistradas/<?=$mascota['id']?>"><?=$mascota['nombre']?></a>
                <?php endforeach ?>
</div>
         
</section> 

@stop