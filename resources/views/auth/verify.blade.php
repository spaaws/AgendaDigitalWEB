@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    @include('layouts._includes.alerts')

	<section class="content">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="box box-default">
					<div class="box-header with-border">
						<i class="fa fa-envelope"></i>
						<h3 class="box-title">Verifique seu e-mail</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="callout callout-warning">
							<h4>Atenção!</h4>
							<p>Antes de prosseguir, verifique seu e-mail em busca de um link de verificação. Se você não recebeu o e-mail, solicite outro.</p>
							<p class=text-right>
                                    <a href="{{ route('verification.resend') }}"><button type="button" class="btn btn-success ">Solicitar e-mail de verificação</button></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</section>
</div>
@endsection
