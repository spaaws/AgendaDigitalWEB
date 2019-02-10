<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agenda Digital | Cadastro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a>Agenda Digital <b>WEB</b></a>
  </div>
  <!-- /.login-logo -->
    <div class="register-box-body">
        <p class="register-box-msg">Cadastre-se e comece a usar sua Agenda Digital.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group has-feedback">
                <input id="name" name="name" type="text" placeholder="Nome Completo" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="email" name="email" type="email" placeholder="E-mail" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password" name="password" type="password" placeholder="Senha" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password-confirm" name="password_confirmation" type="password" placeholder="Repita a Senha" class="form-control {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password-confirm" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <input onclick="checar()" type="checkbox" name="termo" id="termo" {{ old('termo') ? 'checked' : '' }}> Eu aceito os <a href="#">termos.</a>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">  
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
                </div>
                <!-- /.col -->
        </div>
        </form>

        <div class="social-auth-links text-center">
        <p>- OU -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Cadastre-se usando o Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Cadastre-se usando o Google+</a>
        </div>
        <!-- /.social-auth-links -->
        <div class="row">
            <div class="col-xs-12">
                <a href="{{ route('login') }}">{{ __('Já tenho conta. Fazer login.') }}</a>
            </div>
        </div>
    </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script type="text/javascript" src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>