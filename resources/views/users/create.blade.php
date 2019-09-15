@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Usuários
        <small>Adicionar usuario</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Painel de controle</a></li>
        <li><a href="{{route('admin.users.index')}}">Usuários</a></li>
        <li class="active">Adicionar</li>
      </ol>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar usuário</h3>
                <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="label label-primary">Label</span>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <form method="POST" action="{{route('admin.users.store')}}">
                <div class="box-body">
                    @csrf
                    @include('users/partialis/form')
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-success pull-right">Salvar</button>
                </div>
            </form>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
    </div>
</div>
@stop

@section('js')
<script src="{!! asset('js/users/store.js')!!}"></script>
@endsection