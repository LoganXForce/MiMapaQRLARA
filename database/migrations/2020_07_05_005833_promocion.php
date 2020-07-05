<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Promocion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();
            $table->text('descripccion');
            $table->char('latitud',15);
            $table->char('longitud',15);
            $table->string('giro', 50);
            $table->string('link')->nullable();
            $table->string('imagen') ->nullable();
            $table->string('galeria1')->nullable();
            $table->string('galeria2')->nullable();
            $table->string('galeria3')->nullable();
            $table->string('galeria4')->nullable();

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
        Schema::dropIfExists('promociones');
    }
}
