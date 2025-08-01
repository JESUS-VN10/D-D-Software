<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            // Llave primaria
            $table->unsignedBigInteger('id', true)->comment('Llave primaria');

            // Campos personalizados
            $table->unsignedBigInteger('user_id')->comment('Usuario que realizó la compra');
            $table->unsignedBigInteger('product_id')->comment('Producto que se compró');
            $table->decimal('price',10,2)->comment('Precio del producto');
            $table->unsignedBigInteger('quantity')->comment('Cantidad de productos que se compró');


            // Llaves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            // Campos de created_at y updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
