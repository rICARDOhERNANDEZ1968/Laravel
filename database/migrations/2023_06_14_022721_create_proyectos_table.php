<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProyecto',255)->unique();
            $table->string('fuenteFondos');
            $table->double('MontoPlanificado', 8, 2);
            $table->double('MontoPatrocinado', 8, 2);
            $table->double('MontoFondosPropios', 8, 2);
            $table->timestamp('created_at')->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
