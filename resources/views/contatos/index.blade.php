@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Contatos</h1>
      <small>Visualize todos os seus contatos.</small>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-th "></i> Dashboard</a></li>
        <li class="active">Contatos</li>
      </ol>
    </section>

    @include('layouts._includes.alerts')
    <section class="content">
      <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Contatos cadastrados.</h3>
            <div class="pull-right box-tools">
              <a href="{{ route('contatos.create') }}">
                <button type="button" class="btn btn-info">
                  Add Contato
                </button>
              </a>
            </div>
          </div>

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Fone/Whatsapp</th>
              <th class="text-center">Social</th>
              <th class="text-center">Ação</th>
            </tr>
            </thead>
            <tbody>
								@foreach($registros as $registro)
									<tr>
										<td>{{ $registro->nome }} </td>
										<td>
                      <div class="row">
                        <div class="col-sm-9">{{ $registro->email }}</div>
                        <div class="col-sm-3">
                          <a target="_blank" href="mailto:{{ $registro->email }}?subject=Agenda Digital&body=Olá {{ $registro->nome }}." class="btn btn-xs btn-social-icon bg-black"><i class="fa fa-envelope"></i></a>
                      </div>
                    </td>
                    <td>
                      @if($registro->fone == '(XX) XXXXX-XXXX')
                      <div class="row">
                        <div class="col-sm-9">{{ $registro->fone }}</div>
                        <div class="col-sm-3"><a href="#" class="btn btn-xs btn-social-icon bg-green disabled"><i class="fa fa-whatsapp"></i></a></div>
                      </div>
                      @else
                      <div class="row">
                        <div class="col-sm-9">{{ $registro->fone }}</div>
                        <div class="col-sm-3"><a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=55{{ substr($registro->fone, 1, 2).substr($registro->fone, 5, 5).substr($registro->fone,11, 4)  }}&text=Olá {{ $registro->nome }}, eu me chamo {{ Auth::user()->name }} e tenho interesse em fazer este curso." class="btn btn-xs btn-social-icon bg-green"><i class="fa fa-whatsapp"></i></a></div>
                      </div>
                      @endif
                    </td>
										<td class="text-center">
                        @if($registro->facebook == '')
                          <a href="#" class="btn btn-xs btn-social-icon btn-facebook disabled"><i class="fa fa-facebook"></i></a>
                        @else
                          <a target="_blank" href="{{ $registro->facebook }}" class="btn btn-xs btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                        @endif

                        @if($registro->twitter == '')
                          <a href="#" class="btn btn-xs btn-social-icon btn-twitter disabled"><i class="fa fa-twitter"></i></a>
                        @else
                          <a target="_blank" href="{{ $registro->twitter }}" class="btn btn-xs btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                        @endif

                        @if($registro->instagram == '')
                          <a href="#" class="btn btn-xs btn-social-icon btn-instagram disabled"><i class="fa fa-instagram"></i></a>
                        @else
                          <a target="_blank" href="{{ $registro->instagram }}" class="btn btn-xs btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                        @endif
                    </td>
										<td class="text-center">
											{{--<form action="{{ route('contatos.destroy',$registro->id) }}" method="POST">
                        {{method_field('delete')}}
                        {{csrf_field()}}--}}
                        <a href="{{ route('contatos.show',$registro->id) }}"><button class="btn btn-xs btn-primary" type="button"><em class="fa fa-eye"></em></button></a>
                        <a href="#"><button class="btn btn-xs bg-maroon" type="button"><em class="fa fa-print"></em></button></a>
                        <a href="{{ route('contatos.edit',$registro->id) }}"><button class="btn btn-xs btn-warning" type="button"><em class="fa fa-pencil"></em></button></a>
                        <button class="btn btn-xs btn-danger" data-contatoid={{$registro->id}} data-toggle="modal" data-target="#delete" type="submit"><em class="fa fa-trash"></em></button>
                      {{--</form> --}}
                    </td>
									</tr>
								@endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal modal-danger fade" id="delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center">Confirmar Exclusão</h4>
        </div>
        <form action="{{ route('contatos.destroy','test') }}" method="POST">
          {{method_field('delete')}}
          {{csrf_field()}}
          <div class="modal-body">

            <p></p>
            <input type="hidden" name="delete_contato" id="contato_id" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Não, cancelar!</button>
            <button type="submit" class="btn btn-warning">Sim, deletar!</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection
