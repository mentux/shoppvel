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
            <div clas="row">
                <h3 class="text-muted col-sm-2">Shoppvel</h3>
                {!! Form::open(array('route' => 'produto.buscar', 'class'=>'navbar-form navbar-right')) !!} 
                    <div class="form-group">
                        {!! Form::text('termo-pesquisa', null,['placeholder'=>'Pesquisar',
                        'class'=>'form-control']) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                {!! Form::close() !!}
                <nav>
                    <ul class="nav nav-justified">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{route('categoria.listar')}}">Categorias</a></li>
                        <li><a href="{{route('carrinho.listar')}}">Carrinho de compras</a></li>
                        <li><a href="{{route('sobre')}}">Sobre o projeto</a></li>            
                    </ul>
                </nav>
            </div>

            <hr class="clearfix"/>
            
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-lg-2">
                    <h3>Categorias</h3>
                    <ul>
                        @foreach ($categorias as $cat)
                            @if (is_null($cat->categoria_id))
                                <li>
                                    <a href="{{route('categoria.listar', $cat->id)}}">
                                    {{$cat->nome}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-10">
                    @include('layouts.messages')
                    
                    @yield('conteudo')
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
