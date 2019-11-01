@extends('portal.layouts.app')

@section('portal_css')
<link rel="stylesheet" href="/path/to/select2.css">
<link rel="stylesheet" href="/path/to/select2-bootstrap4.css">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">

@endsection

@section('content')

<section class="container mt-4 mb-5">
  <div class="text-center">
    <h3 class="display-4">Cadastre-se</h3>
    <div class="px-5">
      <p class="lead">Ao se cadastrar você estará contribuindo com a qualidade de ensino ofertada pelo IFMG-SJE.</p>
    </div>
  </div>
  <div class="container">
      <div class="d-flex justify-content-center"">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="" placeholder="Digite sua senha">
                <small id="passwordHelp" class="form-text text-muted"></small>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="icheck-success">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Lembrar-me</label>
                    </div>
                </div>
                <div class="col-5">
                    <button type="submit" class="btn btn-success w-100">
                        Logar
                    </button>
                </div>
            </div>
            <p class="my-4">
                <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}" class="text-center">
                    {{ trans('adminlte::adminlte.i_forgot_my_password') }}
                </a>
            </p>

        </form>
      </div>
  </div>
</section>

@endsection

@section('portal_js')
<script src="{{ asset('js/portal/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/portal/registro.js') }}"></script>

<script>

$(function() {

$('#login-form-link').click(function(e) {
$("#login-form").delay(100).fadeIn(100);
 $("#register-form").fadeOut(100);
$('#register-form-link').removeClass('active');
$(this).addClass('active');
e.preventDefault();
});
$('#register-form-link').click(function(e) {
$("#register-form").delay(100).fadeIn(100);
 $("#login-form").fadeOut(100);
$('#login-form-link').removeClass('active');
$(this).addClass('active');
e.preventDefault();
});

});

</script>

<script src="{{ asset('js/portal/cep.js') }}"></script>
@endsection