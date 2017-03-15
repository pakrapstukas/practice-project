<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Best title ever</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Scripts -->
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default navbar-menu">
        <div class="container-fluid  main-title">
            <!-- Home and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="{{ url('/') }}">Pradinis</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Vartotojai<span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="jumbotron text-center main-header">
                <h1>Lolo megėjų lyga</h1>
            </div>
        </div>
        <!-- /.container-fluid -->

    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="side-bar-left col-lg-4 col-sm-6">
            <div class="panel panel-default transparent-panel">
                <div class="panel-heading text-center">
                    <h4>Valdymo punktas</h4></div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                          @if (Auth::guest())
                            <div class="col-xs-12">
                                <a href="{{ url('/login') }}" class="btn btn-default btn-lg btn-block button-style">Prisijungti</a>
                            </div>
                            <div class="col-xs-12">
                                <a href="{{ url('/register') }}" class="btn btn-default btn-lg btn-block button-style">Registruotis</a>
                            </div>
                          @else
                          <h5>Sveiki prisijunge ,{{ Auth::user()->name }}!</h5>
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-lg btn-block button-style"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                    @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel pandel-default">
                <div class="panel-heading">
                    <h4>Discord serveris</h4>
                </div>
                <div class="panel-body">
                    <iframe src="https://discordapp.com/widget?id=285121711219671042&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                </div>
            </div>
        </div>
        @yield('content')
      </div id="closing">
    </div>

    <footer>
        <div class="container-fluid">
            <div style="direction:ltr;">
                <p>Copyright © 2017 by The Best Company Ever</p>
            </div>
        </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
