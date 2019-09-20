<div class="form-group @error('name') has-error @enderror">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" required placeholder="Digite o nome..." value="{{@old('name', $user->name)}}" >
    @error('name')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>

<div class="form-group @error('email') has-error @enderror">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" required placeholder="Digite o email..." value="{{ @old('email', $user->email)}}" >
    @error('email')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>
<div class="form-group @error('password') has-error @enderror ">
    <label for="password">Senha</label>
<input type="password" class="form-control" value="{{@old('password', $user->password)}}" id="password" name="password" required placeholder="Digite a senha" >
    @error('password')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>
@if (! (auth()->id() == $user->id))
    <div class="form-group @error('grupo') has-error @enderror">
        <label for="grupo">Grupos de usuários</label>
        <select class="form-control select2-group-users" name="grupo[]" multiple="multiple" data-placeholder="Selecione um grupo"
                style="width: 100%;">
            @foreach ($roles as $role)
                <option value="{{$role->name}}"
                    @isset($user->roles)
                        @foreach ($user->roles as $userRole)
                            @if ($userRole->name == $role->name)
                                selected
                            @endif
                        @endforeach
                    @endisset
                >
                    {{$role->name}}
                </option>
            @endforeach
        </select>
        @error('grupo')
            <span class="help-block">{{ $message }}</span>
        @enderror
    </div>
@endif