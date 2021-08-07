<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminQuestionMoniteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examin_question_moniteurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examin_id')->constrained();
            $table->foreignId('question_id')->constrained();
            $table->boolean('acquis')->default(false);
            $table->boolean('en_cours')->default(false);
            $table->boolean('non_acquis')->default(true);
            $table->boolean('non_evalue')->default(false);
            $table->string('appreciation')->nullable();
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
        Schema::dropIfExists('examin_question_moniteurs');
    }
}
