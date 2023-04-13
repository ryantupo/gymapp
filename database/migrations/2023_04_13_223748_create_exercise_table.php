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
            $table->float('quads')->nullable();
            $table->float('hamstrings')->nullable();
            $table->float('glutes')->nullable();
            $table->float('calves')->nullable();
            $table->float('lower_back')->nullable();
            $table->float('core')->nullable();
            $table->float('chest')->nullable();
            $table->float('upper_chest')->nullable();
            $table->float('lower_chest')->nullable();
            $table->float('shoulders')->nullable();
            $table->float('triceps')->nullable();
            $table->float('biceps')->nullable();
            $table->float('forearms')->nullable();
            $table->float('upper_back')->nullable();
            $table->float('abs')->nullable();
            $table->float('obliques')->nullable();
            $table->float('hip_flexors')->nullable();
            $table->float('ankles')->nullable();
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
