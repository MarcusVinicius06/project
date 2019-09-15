@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Usuários
        <small>Exibir dados do usuário</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Painel de controle</a></li>
      <li><a href="{{route('admin.users.index')}}">Usuários</a></li>
        <li class="active">Perfil</sli>
      </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-md-8">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#settings" data-toggle="tab">Configuração</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="settings">
            <form class="form">
              @include('users.partialis.form')
                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Salvar</button>
                </div>
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-yellow">
            <div class="widget-user-image">
              <h3 class="widget-user-username">{{$user->name}}</h3>
              <h5 class="widget-user-desc">{{$user->email}}</h5>
            </div>
            <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
            <!-- /.widget-user-image -->
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
              <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
              <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
              <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <!-- /.col -->
  </div>
  <!-- /.row -->
@stop

@section('css')
    <style>
    .nav-tabs-custom>.nav-tabs>li.active {
       border-top-color: #4fa75b;
    }
    </style>
@endsection

@section('js')
      <script>
      $(()=>{
            $('.select2-group-users').select2();
        });
      </script>
@endsection