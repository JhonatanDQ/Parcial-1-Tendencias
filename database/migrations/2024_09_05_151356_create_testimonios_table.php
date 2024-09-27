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
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->unsigned();
            $table->bigInteger('ciudad_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('message');
            $table->string('image');
            $table->string('status');
            $table->string('register_user');
            $table->timestamps();
            $table->foreign('service_id')
                ->references('id')->on('services');
            $table->foreign('ciudad_id')
                ->references('id')->on('ciudads');
            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonios');
    }
};
