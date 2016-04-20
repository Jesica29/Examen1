@extends('/templates.website')
@section('content')

  <section   >
      <th><h4> <center>INICIO DE SESIÓN </center></h4> </th>      

    <div class="container">
  <center>
    <div class="row">
      <div class="col s12">
        <div class="card-panel form-acceso">
          @if(Session::has('error'))
            <p class="error">Usuario no encontrado</p>
          @endif
          <form class="col s12" action="/login" method="POST">
            {{ csrf_field() }}
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate">
                <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" name="password" class="validate">
                <label for="password"><i class="fa fa-key"></i> Password</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <button name="action" type"submit" class="btn waves-effect waves-light">INICIAR</button>
                <a  href="/"  class="btn waves-effect waves-light  "> REGRESAR</a>
              </div>
              
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </center>
</div>      

    
</section>

@stop