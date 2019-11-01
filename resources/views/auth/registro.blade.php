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
  @include('auth.new-register')
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