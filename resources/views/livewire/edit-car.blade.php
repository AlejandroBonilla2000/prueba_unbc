<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Editar Usuario</h2>
                </div>
                <div class="col">
                    <a href="/cars" class="btn btn-primary btn-sm float-end">Lista de Usuarios</a>
                </div>
                <div>
                    @if (Auth::check())
                        <button wire:click="logout">Logout</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            {{-- Mostrar mensaje de éxito --}}
            @if ($is_flash_showing == true)
                <span class="alert alert-success p-2">Usuario actualizado exitosamente.</span>
            @endif
            <form wire:submit="update">
                {{-- Input para el nombre del usuario --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" wire:model="car_name" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" value="{{$car_name}}">
                    @error('car_name')
                        {{-- Mostrar error de validación --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{-- Input para el apellido del usuario --}}
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" wire:model="apellido" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido" value="{{$apellido}}">
                    @error('apellido')
                        {{-- Mostrar error de validación --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{-- Input para el correo del usuario --}}
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" wire:model="correo" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo" value="{{$correo}}">
                    @error('correo')
                        {{-- Mostrar error de validación --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{-- Input para el número de teléfono del usuario --}}
                <div class="mb-3">
                    <label for="nro_telefono" class="form-label">Número de Teléfono</label>
                    <input type="text" wire:model="nro_telefono" class="form-control" id="nro_telefono" name="nro_telefono" placeholder="Ingrese el número de teléfono" value="{{$nro_telefono}}">
                    @error('nro_telefono')
                        {{-- Mostrar error de validación --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
</div>
