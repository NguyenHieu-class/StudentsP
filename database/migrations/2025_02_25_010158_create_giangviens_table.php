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
        Schema::create('giangviens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('magv',10)->unique();
            $table->string('hogv');
            $table->string('tengv');
            $table->date('ngaysinh');
            $table->boolean('gioitinh');
            $table->string('hocham');
            $table->string('hocvi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giangviens');
    }
};
