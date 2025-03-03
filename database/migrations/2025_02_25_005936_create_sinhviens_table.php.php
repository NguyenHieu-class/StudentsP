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
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('masv', 10)->unique();
            $table->string('hosv', 50);
            $table->string('tensv', 50);
            $table->boolean('gioitinh');
            $table->date('ngaysinh');
            $table->text('quequan');
            $table->integer('lop_id')->unsigned();
            $table->foreign('lop_id')->references('id')->on('lops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinhviens');
    }
};
