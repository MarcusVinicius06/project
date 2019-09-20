@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Grupos
        <small>Lista de grupos</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Painel de controle</a></li>
        <li><a href="{{route('admin.group.index')}}">grupos</a></li>
        <li class="active">Lista</li>
      </ol>
@stop

@section('content')
<div class="row">
    <div class="col-xs-9">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Lista de grupos de usuários</h3>
          <div class="box-tools pull-right">
            <a href="{{route('admin.group.create')}}" class="btn bg-olive">
              <i class="fa fa-plus"></i>
              Novo
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="roles" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Permissões</th>
                  <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-xs-3">
      @component('components.small-box', ['numRoles'=> $numRoles, 'numUsers'=> $numUsers])
      @endcomponent
    </div>
  </div>
@stop

@section('css')
  <style>
      div.dt-buttons {
            position: relative;
            float: left;
        }
  </style>
@endsection

@section('js')
<script src="/js/roles/index.js"></script>
<script src="/js/roles/store.js"></script>
<script>
     const getDataRolesUrl = "{!!route('admin.group.getDataRoles')!!}";
     const createRolesUrl   = "{!!route('admin.group.create')!!}";
</script>
@stop