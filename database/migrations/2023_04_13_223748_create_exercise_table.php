<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('chest')->nullable();
            $table->string('back')->nullable();
            $table->string('shoulders')->nullable();
            $table->string('biceps')->nullable();
            $table->string('triceps')->nullable();
            $table->string('forearms')->nullable();
            $table->string('abs')->nullable();
            $table->string('quads')->nullable();
            $table->string('hamstrings')->nullable();
            $table->string('calves')->nullable();
            $table->string('glutes')->nullable();
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
        Schema::dropIfExists('exercise');
    }
};
