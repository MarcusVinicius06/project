<div class="form-group @error('name') has-error @enderror">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" required placeholder="Digite o nome do grupo." value="{{ @old('name', $role->name)}}" >
    @error('name')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>