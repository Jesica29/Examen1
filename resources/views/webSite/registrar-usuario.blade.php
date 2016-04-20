@extends('/templates.website')
@section('content')
      
              
  <section id="tabla" class="container" >       
              <th><h4>REGISTRO DE USUARIO</h4> </th>      
       
           
             <div class="row">
                 <form action="/registro" method="POST" class="col s12 ">
                  {{ csrf_field() }}
                     <div class="row" >
                        <div class="input-field col s6">
                          <input id="nombre" type="text" name="nombre" class="validate" required>
              <label for="nombre">Nombre</label>
            </div>
                      </div>
                        <div class="row">
                          <div class="input-field col s6">
              <input id="email" type="email" name="email" class="validate" required>
              <label for="email">Email</label>                          </div>
                         
                        </div>
                         <div class="row">
                          <div class="input-field col s6">
              <input id="password" type="password" name="password" class="validate" required>
              <label for="password">Password</label>                          </div>
                         
                        </div>

                         <a href="/" class="waves-effect waves-light btn-large ">
            <b>REGRESAR</b>
            </a>
            <button class="waves-effect waves-light btn-large" type="submit" name="action">
              <b>REGISTRAR</b>
            </button>
                  </form>
                </div>
         
</section> 

@stop