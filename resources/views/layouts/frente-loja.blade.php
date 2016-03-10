<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Shoppvel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('bootstrap/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('bootstrap/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Shoppvel</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Carrinho de compras</a></li>
            <li><a href="#">Sobre o projeto</a></li>            
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Shoppvel</h1>
        <p class="lead">Sistema de loja virtual.</p>
        <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-2">
          <h2>Categorias</h2>
          <ul>
			<li>Layout</li>
			<li>para</li>
			<li>listar</li>
			<li>categorias</li>
		  </ul>
        </div>
        <div class="col-lg-10">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjg3IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDY4NyAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzNjJkY2MyOWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozNHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTM2MmRjYzI5ZSI+PHJlY3Qgd2lkdGg9IjY4NyIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIyNTUuMjQxNjY4NzAxMTcxODgiIHk9IjExNS42Ij42ODd4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" style="height: 200px; width: 100%; display: block;" data-src="holder.js/100%x200" alt="100%x200">
				  <div class="caption">
					<h3>Produto</h3>
					<p>descrição</p>
					<p><a href="#" class="btn btn-primary" role="button">Detalhes</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
				  </div>
				</div>
			  </div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjg3IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDY4NyAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzNjJkY2MyOWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozNHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTM2MmRjYzI5ZSI+PHJlY3Qgd2lkdGg9IjY4NyIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIyNTUuMjQxNjY4NzAxMTcxODgiIHk9IjExNS42Ij42ODd4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" style="height: 200px; width: 100%; display: block;" data-src="holder.js/100%x200" alt="100%x200">
				  <div class="caption">
					<h3>Produto</h3>
					<p>descrição</p>
					<p><a href="#" class="btn btn-primary" role="button">Detalhes</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
				  </div>
				</div>
			  </div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjg3IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDY4NyAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzNjJkY2MyOWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozNHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTM2MmRjYzI5ZSI+PHJlY3Qgd2lkdGg9IjY4NyIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIyNTUuMjQxNjY4NzAxMTcxODgiIHk9IjExNS42Ij42ODd4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" style="height: 200px; width: 100%; display: block;" data-src="holder.js/100%x200" alt="100%x200">
				  <div class="caption">
					<h3>Produto</h3>
					<p>descrição</p>
					<p><a href="#" class="btn btn-primary" role="button">Detalhes</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
				  </div>
				</div>
			  </div>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Ademir Mazer Junior. @nunomazer - ademir.mazer.jr@gmail.com</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('bootstrap/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
