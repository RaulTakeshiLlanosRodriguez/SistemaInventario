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
        Schema::create('mubles', function (Blueprint $table) {
            $table->id();
            $table->string('codPatrimonial');
            $table->string('tipo');
            $table->string('unidadMedida');
            $table->string('estado')->nullable();;
            $table->string('procedencia')->nullable();;
            $table->string('ubicacion')->nullable();;
            $table->string('observacion')->nullable();;
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
        Schema::dropIfExists('mubles');
    }
};
