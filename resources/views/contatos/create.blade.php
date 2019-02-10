@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Cadastrar Contato</h1>
        <small>Cadastre seus contatos pessoais e/ou profissionais.</small>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-th "></i> Dashboard</a></li>
            <li><a href="{{route('contatos.index')}}"><i class="fa fa-users "></i> Contatos</a></li>
            <li class="active">Add Contato</li>
        </ol>
    </section>
    @include('layouts._includes.alerts')
    <!-- Main content -->
    <section class="content">
        <form action="{{ route('contatos.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box box-success">
                <div class="box-body">
                    
                        @include('contatos._form')
                    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
    </section> 
</div>
@endsection