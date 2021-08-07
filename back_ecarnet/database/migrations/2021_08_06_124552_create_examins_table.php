<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examins', function (Blueprint $table) {
            $table->id();
            $table->date('date_exam');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('enfant_id')->constrained();
            $table->string('appreciation_moniteur')->nullable();
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
        Schema::dropIfExists('examins');
    }
}
