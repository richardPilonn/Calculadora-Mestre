<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable(false);
            $table->string('nome', 50)->nullable(false);
            $table->string('rm', 4)->nullable(false)->unique(true);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

  //  'nome',
  //  'email_educacional',
  //  'rm',
  //  'senha'

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
