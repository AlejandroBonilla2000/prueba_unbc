<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Laravel 11.x + Livewire 3.x CRUD</h2>
                </div>
                <div class="col">
                    <a href="/cars" wire:navigate class="btn btn-primary btn-sm float-end">User List</a>
                </div>
                <div>
                    @if (Auth::check())
                        <button wire:click="logout">Logout</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="saveUsuario">
                {{-- saveUsuario is the function that will save our user to database. --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" wire:model="nombre" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    @error('nombre')
                        {{-- here we show validation error --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" wire:model="apellido" class="form-control" id="apellido" name="apellido" placeholder="Enter apellido">
                    @error('apellido')
                        {{-- here we show validation error --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" wire:model="correo" class="form-control" id="correo" name="correo" placeholder="Enter correo">
                    @error('correo')
                        {{-- here we show validation error --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nro_telefono" class="form-label">Nro Telefono</label>
                    <input type="text" wire:model="nro_telefono" class="form-control" id="nro_telefono" name="nro_telefono" placeholder="Enter nro telefono">
                    @error('nro_telefono')
                        {{-- here we show validation error --}}
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
