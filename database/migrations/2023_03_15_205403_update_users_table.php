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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age')->default(0);
            $table->string('gender')->default('Other');
            $table->float('weight', 10, 2)->default(0.00);
            $table->string('weight_unit')->default('KG');
            $table->float('height', 10, 2)->default(0.00);
            $table->string('height_unit')->default('CM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
