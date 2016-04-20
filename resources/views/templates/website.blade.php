<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/> 
  <title>Veterinaria</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/app.css">
   

</head>

<body>

  <header>
    <?php $route=Route::current()->uri(); ?>
    <nav class= "cyan accent-3 ">
        <div class="nav-wrapper">
          <a href="/" class="brand-logo" style="margin-left: 20px">   Veterinaria <i class="fa fa-plus-square" aria-hidden="true"></i></a>
          <a href="/" data-activates="mobile-demo" class="button-collapse"> <i class="fa fa-bars fa-pull-right"></i></a>
          <ul class="right hide-on-med-and-down">

            </ul>
             
        </div>
      </nav>
  </header>

  @yield('content')

<footer class="page-footer cyan accent-3 ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"> Veterinaria <i class="fa fa-plus-square" aria-hidden="true"></i> </h5>
               
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 -  Jesica Coronado
            <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square  fa-4x"></i></a>
             <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square  fa-4x"></i></a>
            </div>
          </div>
        </footer>

 

  <script  src="/js/jquery.min.js"></script>
  <script  src="/js/app.js"></script>
  <script  src="/js/materialize.min.js"></script>
  
</body>
</html>