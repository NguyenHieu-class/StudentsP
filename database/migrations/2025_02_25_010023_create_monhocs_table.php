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
        Schema::create('monhocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mamon',10)->unique();
            $table->string('tenmon')->comment('tên môn học');
            $table->string('tenbomon')->comment('tên bộ môn');
            $table->integer('sotinchi');
            $table->integer('sotiet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monhocs');
    }
};
