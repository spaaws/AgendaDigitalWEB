@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Detalhes do Contato</h1>
        <small>Visualize cada detalhe do cadastro de seus contatos.</small>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-th "></i> Dashboard</a></li>
            <li><a href="{{route('contatos.index')}}"><i class="fa fa-users "></i> Contatos</a></li>
            <li class="active">Detalhes do Contato</li>
        </ol>
    </section>
    @include('layouts._includes.alerts')
    <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                      {{ \Carbon\Carbon::parse($registro->created_at)->toFormattedDateString() }}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a>Detalhes do Contato</a></h3>

                <div class="timeline-body">
                  <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                      <strong>Pessoal</strong>
                      <address>
                        <strong>Nome:     </strong>{{ $registro->nome }}<br>
                        <strong>E-mail:   </strong>{{ $registro->email }}<br>
                        <strong>Fone:     </strong>{{ $registro->fone }}<br>
                        <strong>Endereço: </strong>{{ $registro->nome }}<br>
                        <strong>Data Cadastro:</strong>{{ \Carbon\Carbon::parse($registro->created_at)->format('d/mm/Y - H:i:s') }}                      </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                      <strong>Pessoal</strong>
                      <address>
                        <strong>Admin, Inc.</strong><br>
                        <strong>Admin, Inc.</strong><br>
                        <strong>Admin, Inc.</strong><br>
                        <strong>Admin, Inc.</strong><br>
                        <strong>Admin, Inc.</strong><br>
                      </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                      <b>Social</b><br>
                      <b>Nome:</b> 4F3S8J<br>
                      <b>E-mail:</b> 2/22/2014<br>
                      <b>Fone:</b> 968-34567
                    </div>
                    <!-- /.col -->
                  </div>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-facebook bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header"><a href="#">Último Post</a><small> - Clique e acesso o Facebook.</small></h3>
                <div class="timeline-body">
                  Facebook aqui!
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-twitter bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header"><a href="#">Último Twitter</a><small> - Clique e acesso o Twitter.</small></h3>
                <div class="timeline-body">
                    <a href="https://twitter.com/spaaws?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @spaaws</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  
                  <a class="twitter-timeline" href="{{ $registro->twitter }}?ref_src=twsrc%5Etfw">Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-instagram bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                <h3 class="timeline-header"><a href="#">Últimas Fotos</a><small> - Clique e acesso o Instagram.</small></h3>

                <div class="timeline-body">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
              </div>
            </li>
            <!-- END timeline item -->
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>

@endsection