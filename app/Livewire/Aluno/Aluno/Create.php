<?php

namespace App\Livewire\Aluno\Aluno;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $rm;
    public $password;
    public $email;

    public function store (){

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'aluno'
        ]);

        Aluno::create([
            'nome' => $this->nome,
            'rm' => $this->rm,
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.aluno.aluno.create');
    }
}
