<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email_educacional;
    public $rm;

    public function render()
    {
        return view('livewire.aluno.create');
    }

    public function store (){
        Aluno::create([
            'nome'=>$this->nome,
            'email_educacional'=> $this->email_educacional,
            'rm'=>$this->rm
        ]);

        session()->flash('success', 'Cadastro Realizado com sucesso!');
    }
}
