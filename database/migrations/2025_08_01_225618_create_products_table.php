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

        Schema::create('categories', function (Blueprint $table) {
            // Llave primaria
            $table->unsignedBigInteger('id', true)->comment('Llave primaria');

            // Campos personalizados
            $table->string('name')->comment('Nombre de la categoría');
            $table->string('description')->comment('Descripción de la categoría');

            // Campos de created_at y updated_at
            $table->timestamps();
        });

        Schema::create('brands', function (Blueprint $table) {
            // Llave primaria
            $table->unsignedBigInteger('id', true)->comment('Llave primaria');

            // Campos personalizados
            $table->string('name')->comment('Nombre de la marca');
            $table->string('description')->comment('Descripción de la marca');

            // Campos de created_at y updated_at
            $table->timestamps();
        });


        Schema::create('products', function (Blueprint $table) {
            // Llave primaria
            $table->unsignedBigInteger('id', true)->comment('Llave primaria');

            // Campos personalizados
            $table->string('name')->comment('Nombre del producto');
            $table->string('description')->comment('Descripción del producto');
            $table->string('image')->comment('Imagen del producto');
            $table->decimal('price',10,2)->comment('Precio del producto');
            $table->unsignedBigInteger("stock")->comment("Stock del producto")->default(0);
            $table->unsignedTinyInteger('discount')->comment('Descuento del producto')->default(0);
            $table->boolean('is_active')->comment('Si el producto está activo o no');

            // Llaves foráneas
            $table->unsignedBigInteger('category_id')->comment('Categoría del producto');
            $table->unsignedBigInteger('brand_id')->comment('Marca del producto');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');

            // Campos de created_at y updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('products');
    }
};
