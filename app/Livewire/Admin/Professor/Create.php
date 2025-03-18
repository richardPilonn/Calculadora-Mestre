<?php

namespace App\Livewire\Admin\Professor;

use App\Models\Professor;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $email;
    public $telefone;

    public function adminCadastrarProfessor (){
        Professor::create([
            'nome'=>$this->nome,
            'email'=> $this->email,
            'telefone'=>$this->telefone
        ]);

        session()->flash('success', 'Cadastro Realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.admin.professor.create');
    }
}
