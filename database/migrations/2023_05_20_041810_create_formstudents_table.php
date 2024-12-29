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
        Schema::create('formstudents', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->required();
            $table->string('ttl', 100)->required();
            $table->string('alamat', 100)->required();
            $table->string('asal_sekolah', 100)->required();
            $table->string('ijazah', 500)->required();
            $table->string('no_pendaftaran', 10000)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formstudents');
    }
};
