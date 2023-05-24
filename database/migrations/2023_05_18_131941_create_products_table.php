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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->foreign('company_id')->nullable()->references('id')->on('companies')->onDelete('cascade');
            $table->integer('user_id')->foreign('user_id')->nullable()->references('id')->on('users');
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->json('images');
            $table->integer('price');
            $table->foreignId('product_unit');
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id');
            $table->foreignId('brand_id');
            $table->foreignId('product_type_id');
            $table->foreignId('product_status_id');
            $table->foreignId('product_condition_id');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
