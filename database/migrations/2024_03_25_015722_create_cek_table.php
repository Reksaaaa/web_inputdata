<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\text;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cek', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tipe_perangkat', 100);
            $table->string('ssid', 100)->nullable();
            $table->string('ruangan', 100);
            $table->string('divisi', 100)->nullable();
            $table->enum('status',['Baik','Tidak Baik']);
            $table->string('upload', 10)->nullable();
            $table->string('download', 10)->nullable();
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek');
    }
};
