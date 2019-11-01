<div class="container mt-4 mb-5 d-flex justify-content-center">
    <div class="card border-light mb-3" style="max-width: 35rem;">
        <div class="card-body">
            <ul class="nav justify-content-center">
                <li class="nav-item mx-5 my-2">
                    <a class="nav-link active" data-toggle="tab" href="#login">Login</a>
                </li>
                <li class="nav-item mx-5 my-2">
                    <a class="nav-link" data-toggle="tab" href="#register">Register</a>
                </li>
            </ul>
            <hr>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active show" id="login">
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
                <div class="tab-pane fade" id="register">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Digite seu nome completo">
                            <small id="namelHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="cpf" class="form-control" id="cpf" name="cpf" aria-describedby="cpfHelp" placeholder="Digite seu cpf">
                            <small id="cpfHelp" class="form-text text-muted"></small>
                            </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" name="" placeholder="Digite sua senha">
                            <small id="passwordHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="password" class="form-control" name="password_confirmation" type="password" id="password_confirmation" placeholder="Confirme sua senha">
                            <small id="passwordHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success w-100"> Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>