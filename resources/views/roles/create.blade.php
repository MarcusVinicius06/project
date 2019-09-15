@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Grupos
        <small>Adicionar grupo</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Painel de controle</a></li>
        <li><a href="{{route('admin.users.index')}}">Grupos</a></li>
        <li class="active">Adicionar</li>
      </ol>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar grupo</h3>
            </div>
            <!-- /.box-header -->
            <form method="POST" action="{{route('admin.group.store')}}">
                <div class="box-body">
                    @csrf
                    @include('roles/partialis/form')
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
<script src="{!! asset('js/roles/store.js')!!}"></script>
@endsection