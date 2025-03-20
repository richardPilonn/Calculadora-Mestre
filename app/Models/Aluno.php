<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'rm',
        'user_id'
    ];

  public function user()
  {
    return $this->belongsTo(User::class);
  } 
}
