<div class="col-xs-6">
    <div class="form-group @error('name') has-error @enderror">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" required placeholder="Digite o nome do grupo." value="{{ @old('name', $role->name)}}" >
        @error('name')
            <span class="help-block">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-xs-6">
    <div class="form-group @error('permission') has-error @enderror">
        <label for="grupo">Permições</label>
        <select class="form-control select2-permission-groups" name="permission[]" multiple="multiple" data-placeholder="Selecione um grupo"
                style="width: 100%;">

            @foreach ($permissions as $permission)
            <option value="{{$permission->name}}"
                @isset($role->permissions)
                    @foreach ($role->permissions as $rolePermission)
                        @if ($permission->name == $rolePermission->name)
                            selected
                        @endif
                    @endforeach
                @endisset
                >
                    {{$permission->name}}
                </option>
            @endforeach
        </select>
        @error('permission')
            <span class="help-block">{{ $message }}</span>
        @enderror
    </div>
</div>