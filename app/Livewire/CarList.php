<?php

namespace App\Livewire;

use App\Models\Car; //import this
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CarList extends Component
{
    public $usuarios;

    public function mount()
    {
        $this->usuarios = Usuarios::all(); //here we get all cars from db and asign to all cars variable..
    }
    public function delete($id){
        try {
            Usuarios::where('id',$id)->delete();
            return $this->redirect('/cars',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }
    public function render()
    {
        return view('livewire.car-list',[
            'cars' => $this->usuarios
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
