<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('adress')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->date('birthday');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('register_date');
            $table->string('size')->nullable();
            $table->boolean('photo')->default(false);
            $table->text('note')->nullable();
            $table->string('token');
            $table->foreignId('responsable_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('enfants');
    }
}
