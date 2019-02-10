@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Perfil
    </h1>
    <small>Informações detalhadas de seu perfil.
    </small>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('home')}}">
          <i class="fa fa-th ">
          </i> Dashboard
        </a>
      </li>
      <li class="active">Perfil
      </li>
    </ol>
  </section>
  @include('layouts._includes.alerts')
<div class="modal fade" id="senhaModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Complete seu Cadastro!</h4>
        </div>
        <div class="modal-body">
            <ul>
              <li>É necessário que você informe uma senha para completar o seu cadastro.</li>
            </ul> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



  <section class="content">
    <form action="{{ route('perfil.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

                @if (substr(auth()->user()->avatar,0, 4) == 'http')
                  <img class="profile-user-img img-responsive img-circle display: block" src="{{ Auth::user()->avatar }}" alt="Avatar">
                @else
                  <img class="profile-user-img img-responsive img-circle display: block" src="{{ url("storage/users/".auth()->user()->avatar) }}" alt="Avatar">
                @endif
              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
              <p class="text-muted text-center">{{ Auth::user()->profissao }}</p>
              <div class="form-group">
                <div class="btn btn-primary btn-file btn-block">
                    <i class="fa fa-upload"></i> Carregar Foto
                    <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg">                  
                </div>
                <p class="help-block">Max. 4MB</p>
              </div>
            </div>
          </div>
          <!-- /.box -->
          <!-- Social Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Redes Sociais
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if(Auth::user()->facebook)
              <a href="{{ url('/logout/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat">
                <i class="fa fa-facebook">
                </i> Desconectar do Facebook
              </a>
              @else
              <a href="{{ url('/login/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat">
                <i class="fa fa-facebook">
                </i> Conectar com Facebook
              </a>
              @endif
              @if(Auth::user()->google)
              <a href="{{ url('/logout/google') }}" class="btn btn-block btn-social btn-google btn-flat">
                <i class="fa fa-google-plus">
                </i> Desconectar do Google+
              </a>
              @else
              <a href="{{ url('/login/google') }}" class="btn btn-block btn-social btn-google btn-flat">
                <i class="fa fa-google-plus">
                </i> Conectar com Google+
              </a>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <section class="content">
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-12">
                    <label for="nome">Nome
                    </label>
                    <input name="name" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}" autofocus required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <label for="email">E-mail
                    </label>
                    <input style="text-transform:lowercase" onkeyup="minuscula(this)" name="email" id="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}" reqired disabled>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <label for="profissao">Profissão
                    </label>
                    <input name="profissao" id="profissao" type="text" class="form-control{{ $errors->has('profissao') ? ' is-invalid' : '' }}" value="{{ isset(Auth::user()->profissao) ? Auth::user()->profissao : '' }}" reqired>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <label for="email">Senha
                    </label>
                    <input id="password" name="password" type="password" placeholder="Senha" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                  </div>
                  <div class="col-xs-6">
                    <label for="email">Confirme a Senha
                    </label>
                    <input id="password-confirm" name="password_confirmation" type="password" placeholder="Repita a Senha" class="form-control {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Atualizar
                </button>
              </div>    
            </section> 
          </div>          
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </form>
  </section>
</div>



@endsection
