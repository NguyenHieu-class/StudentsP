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
        Schema::create('lops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('malop', 10)->unique();
            $table->string('tenlopvt');
            $table->string('tenlop');
            $table->integer('khoa_id')->unsigned();
            $table->foreign('khoa_id')->references('id')->on('khoas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lops');
    }
};
