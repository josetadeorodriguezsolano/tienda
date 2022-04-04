<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->references('id')->on('pedidos')->cascadeOnDelete();
            $table->foreignId('producto_id')->references('id')->on('productos')->restrictOnDelete();
            $table->integer('cantidad')->default(1);
            $table->double('precio',12,2);
            $table->double('descuento',6,2)->default(0.00);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE detalle_pedidos ADD CONSTRAINT chk_cantidad CHECK (cantidad>0);');
        DB::statement('ALTER TABLE detalle_pedidos ADD CONSTRAINT chk_precio CHECK (precio>0);');
        DB::statement('ALTER TABLE detalle_pedidos ADD CONSTRAINT chk_descuento CHECK (descuento>=0 AND descuento<=100);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedidos');
    }
}
