@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Usuários
        <small>Editar usuario</small>
    </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Painel de controle</a></li>
        <li><a href="{{route('admin.users.index')}}">Usuários</a></li>
        <li class="active">Editar</li>
      </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-9">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar usuário</h3>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <form method="POST" action="{{route('admin.users.update', $user)}}">
                    <div class="box-body">
                        @csrf
                        @method('PUT')
                        @include('users.partialis.form')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Salvar</button>
                    </div>
                </form>
                <!-- box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-xs-3">
            @component('components.small-box', ['numRoles'=> $roles->count(), 'numUsers'=> $user->count()])
            @endcomponent
        </div>
    </div>
@stop

@section('js')
<script src="{!! asset('js/users/store.js')!!}"></script>
@endsection