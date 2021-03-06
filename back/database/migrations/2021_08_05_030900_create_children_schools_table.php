<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children_schools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('children_id')->constrained();
            $table->foreignId('school_id')->constrained();
            $table->date('date_school');
            $table->boolean('here');
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
        Schema::dropIfExists('children_schools');
    }
}
