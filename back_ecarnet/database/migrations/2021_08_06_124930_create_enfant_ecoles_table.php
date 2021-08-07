<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfantEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfant_ecoles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ecole_id')->constrained();
            $table->foreignId('enfant_id')->constrained();
            $table->boolean('présent')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfant_ecoles');
    }
}
