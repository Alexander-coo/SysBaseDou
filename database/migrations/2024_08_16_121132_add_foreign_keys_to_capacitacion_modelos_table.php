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
        Schema::table('capacitacion_modelos', function (Blueprint $table) {
            $table->foreign(['marca_id'], 'fk_modelo_marca1')->references(['id'])->on('capacitacion_marcas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('capacitacion_modelos', function (Blueprint $table) {
            $table->dropForeign('fk_modelo_marca1');
        });
    }
};
