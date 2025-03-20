<?php

namespace App\Livewire\Aluno\Perfil;

use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Perfil extends Component
{

    public $alunoId;
    public $nome;
    public $email;
    public $rm;
    public $password;

    public function mount()
    {
        
        
        $aluno = Aluno::find(Auth::user()->aluno->id);
        $this->alunoId = $aluno->id;
        $this->nome = $aluno->nome;
        $this->email = $aluno->user->email;
        $this->rm = $aluno->rm;

    }

    public function salvar(){
        $aluno = Aluno::find($this->alunoId);
        $aluno->nome = $this->nome;
        $aluno->user->email = $this->email;
        $aluno->rm = $this->rm;
        //$aluno->user->password = $this->password;
        $aluno->save();
        $aluno->user->save();
        session()->flash('success', 'Tarefa Atualizada');
    }


    public function render()
    {
        return view('livewire.aluno.perfil.perfil');
    }
}
