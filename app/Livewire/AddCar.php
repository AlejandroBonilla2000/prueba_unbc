<?php

namespace App\Livewire;

namespace App\Livewire;

use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddCar extends Component
{
    public $nombre = '';
    public $apellido = '';
    public $correo = '';
    public $nro_telefono = '';

    public function saveUsuario()
    {
        $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email|unique:usuarios,correo',
            'nro_telefono' => 'required',
        ]);

        try {
            // Get the user ID from your custom method of identification
            $userId = $this->getCurrentUserId();

            $new_usuario = new Usuarios();
            $new_usuario->nombre = $this->nombre;
            $new_usuario->apellido = $this->apellido;
            $new_usuario->correo = $this->correo;
            $new_usuario->nro_telefono = $this->nro_telefono;
            $new_usuario->user_id = $userId; // Associate the usuario with the user
            $new_usuario->save();

            return $this->redirect('/cars', navigate:true);
        } catch (\Exception $e) {
            dd($e);
        }
    }

    // Example method to get the current user ID
    private function getCurrentUserId()
    {
        // Implement your custom logic to get the current user ID
        // For example, if you store the user ID in the session:
        // return session('user_id');

        // This is just a placeholder; you need to replace it with your actual logic.
        return 1; // Example user ID; replace with your actual logic.
    }

    public function render()
    {
        return view('livewire.add-car');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
