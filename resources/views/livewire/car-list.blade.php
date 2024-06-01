<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="m-0">Laravel 11.x + Livewire 3.x CRUD</h2>
                </div>
                <div>
                    @if (Auth::check())
                        <button class="btn btn-danger btn-sm" wire:click="logout">Logout</button>
                    @endif
                </div>
                <div class="col text-end">
                    <a href="/add/new" wire:navigate class="btn btn-success btn-sm">Add New</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Nro Telefono</th>
                            <th colspan="2" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $item)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->apellido}}</td>
                                <td>{{$item->correo}}</td>
                                <td>{{$item->nro_telefono}}</td>
                                <td>
                                    <a href="/edit/car/{{$item->id}}" wire:navigate class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" wire:click="delete({{$item->id}})" wire:confirm="Are you sure you want to delete this?">Delete</button>
                                    <div wire:loading wire:target="delete({{ $item->id }})">
                                        <div class="spinner-border spinner-border-sm text-danger" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
