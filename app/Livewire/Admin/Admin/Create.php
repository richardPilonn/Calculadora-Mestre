<?php

namespace App\Livewire\Admin\Admin;

use App\Models\Admin;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $email;
    public $telefone;

    public function adminCadastrarAdmin (){
        Admin::create([
            'nome'=>$this->nome,
            'email'=> $this->email,
            'telefone'=>$this->telefone
        ]);

        session()->flash('success', 'Cadastro Realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.admin.admin.create');
    }
}
