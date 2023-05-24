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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('company_id')->foreign('company_id')->nullable()->references('id')->on('companies')->onDelete('cascade');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->integer('responsible')->foreign('responsible')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->integer('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('tax_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
