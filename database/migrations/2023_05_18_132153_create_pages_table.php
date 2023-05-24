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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->foreign('company_id')->nullable()->references('id')->on('companies')->onDelete('cascade');
            $table->json('data')->nullable();
            $table->string('page');
            $table->string('slug');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages_tabel');
    }
};
