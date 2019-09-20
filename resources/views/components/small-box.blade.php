 <!-- small box -->
 <div class="small-box bg-yellow">
    <div class="inner">
    <h3>{{ $numUsers }}</h3>

      <p>Usuário Registrados</p>
    </div>
    <div class="icon">
      <i class="ion ion-person"></i>
    </div>
    <a href="{{ route('admin.users.index') }}" class="small-box-footer">
      Lista de usuários <i class="fa fa-arrow-circle-right"></i>
    </a>
</div>

<!-- small box -->
<div class="small-box bg-red">
  <div class="inner">
  <h3>{{ $numRoles }}</h3>

    <p>Grupos</p>
  </div>
  <div class="icon">
    <i class="ion ion-person-stalker"></i>
  </div>
    <a href="{{ route('admin.group.index') }}" class="small-box-footer">
    Lista de grupos <i class="fa fa-arrow-circle-right"></i>
  </a>
</div>