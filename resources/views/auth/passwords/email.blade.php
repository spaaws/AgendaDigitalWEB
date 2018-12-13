<!DOCTYPE html>
<html lang="br">
  <!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content=" Agenda Digital para armazenar informações de seus contatos pessoais e profissionais.">
    <meta name="keywords" content="agenda digital">
    <title>Redefinir Senha | Agenda Digital</title>
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link rel="stylesheet" href="{{ asset('css/themes/fixed-menu/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/fixed-menu/materialize.css') }}">
    <!-- Custome CSS-->
    <link rel="stylesheet" href="{{ asset('css/custom/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/page-center.css') }}">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
</head>
  <body class="cyan">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
          </div>
          <!-- End Page Loading -->
          <div id="login-page" class="row">
            <div class="col s12 z-depth-4 card-panel">
              <form class="login-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="row">
                  <div class="input-field col s12 center">
                    <h4>Redefinir Senha</h4>
                    <p class="center">Você pode redefinir sua senha.</p>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-5">email</i>
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <button type="submit" class="btn waves-effect waves-light col s12">{{ __('Redefinir Senha') }}</button>
                  </div>
                  <div class="input-field col s12">
                    <p class="margin sign-up"><a href={{ route('login') }}>Login</a> <a href={{ route('register') }} class="right">Cadastre-se!</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('vendors/jquery-3.2.1.min.js') }}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
  </body>
</html>