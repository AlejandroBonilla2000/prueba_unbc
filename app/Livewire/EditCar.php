<?php

namespace App\Livewire;

use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditCar extends Component
{
    public $is_flash_showing = false;
    public $car_id;
    public Usuarios $car_data;
    public $car_name;
    public $apellido;
    public $correo;
    public $nro_telefono;

    public function mount($id)
    {
        $this->car_id = $id;

        $this->car_data = Usuarios::find($id);

        $this->car_name = $this->car_data->nombre;
        $this->apellido = $this->car_data->apellido;
        $this->correo = $this->car_data->correo;
        $this->nro_telefono = $this->car_data->nro_telefono;
    }

    public function update()
    {
        $this->validate([
            'car_name' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email|unique:usuarios,correo,'.$this->car_id,
            'nro_telefono' => 'required',
        ]);

        try {
            Usuarios::where('id', $this->car_id)->update([
                'nombre' => $this->car_name,
                'apellido' => $this->apellido,
                'correo' => $this->correo,
                'nro_telefono' => $this->nro_telefono,
            ]);
            $this->is_flash_showing = true;
        } catch (\Exception $th) {
            dd($th);
        }
    }

    public function render()
    {
        return view('livewire.edit-car');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
