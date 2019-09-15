@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Usuários
        <small>Lista de usuarios</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Painel de controle</a></li>
        <li><a href="{{route('admin.users.index')}}">Usuários</a></li>
        <li class="active">Lista</li>
      </ol>
      @if (session('status'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-check"></i>{{ session('status') }}</h5>

        </div>
      @endif
@stop

@section('content')
<div class="row">
    <div class="col-xs-9">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Lista de Usuários</h3>
          <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
            <a href="{{route('admin.users.create')}}" class="btn bg-olive">
              <i class="fa fa-plus"></i>
              Novo
            </a>
          </div>
        </div>
        <!-- /.box-header -->
      <div class="box-body">
            <table id="users" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Grupo</th>
                  <th>Status</th>
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
    <div class="col-xs-3">
      <!-- small box -->
      <div class="small-box bg-yellow">
          <div class="inner">
          <h3>{{$users->count()}}</h3>

            <p>Usuário Registrados</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
      </div>

      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
        <h3>{{$roles->count()}}</h3>

          <p>Grupos</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-stalker"></i>
        </div>
                     <a href="#" class="small-box-footer">
          Lista de grupos <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>

    </div>
    <!-- ./col -->
    <!-- /.col -->
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
<script src="/js/users/index.js"></script>
<script>
     const getDataUsersUrl = "{!!route('admin.users.getDataUsers')!!}";
     const createUserUrl   = "{!!route('admin.users.create')!!}";
</script>
@stop