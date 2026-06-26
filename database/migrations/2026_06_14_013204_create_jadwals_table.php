<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();

            $table->string('kode_matakuliah', 8);
            $table->string('nidn', 10);

            $table->string('kelas', 10);
            $table->string('hari', 10);
            $table->time('jam');

            $table->timestamps();

            $table->foreign('kode_matakuliah')
                ->references('kode_matakuliah')
                ->on('mata_kuliahs')
                ->onDelete('cascade');

            $table->foreign('nidn')
                ->references('nidn')
                ->on('dosens')
                ->onDelete('cascade');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
