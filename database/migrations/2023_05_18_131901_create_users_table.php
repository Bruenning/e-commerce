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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary()->unique()->unsigned()->autoIncrement(false);
            $table->integer('company_id')->foreign('company_id')->nullable()->references('id')->on('companies')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('api_token', 80)->unique()->nullable()->default(null);
            $table->string('avatar')->nullable();
            $table->string('zip_code')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('address')->nullable();
            $table->string('tax_id')->nullable();


            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
