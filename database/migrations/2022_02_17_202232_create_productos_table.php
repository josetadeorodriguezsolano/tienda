<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',100);
            $table->double('precio',12,2)->default(999999.99);
            $table->integer('cantidad')->default(0);
            $table->double('descuento',6,2)->default(0.00);
            $table->string('foto');
            $table->longText('especificaciones')->nullable();

            $table->foreignId('categoria_id')->references('id')->on('categorias')->restrictOnDelete();

            $table->index(['descripcion']);
            $table->index(['precio']);
            $table->fullText(['especificaciones']);

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
        Schema::dropIfExists('productos');
    }
}
