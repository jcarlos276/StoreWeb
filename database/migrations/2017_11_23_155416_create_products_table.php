<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigo',6);
            $table->string('nombre', 100);
            // Añadimos la clave foránea con Fabricante. fabricante_id
            $table->integer('categoria_id')->unsigned();
            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('categoria_id')->references('id')->on('categories');
            $table->string('descripcion');
            $table->string('imagen',100);
            $table->char('estado', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
