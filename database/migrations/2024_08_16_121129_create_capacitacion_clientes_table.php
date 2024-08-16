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
        Schema::create('capacitacion_clientes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombres');
            $table->string('apellidos');
            $table->char('telefono', 8);
            $table->string('direccion')->nullable();
            $table->char('cui', 13)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitacion_clientes');
    }
};
