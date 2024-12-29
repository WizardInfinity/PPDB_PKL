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
        Schema::table('formstudents', function (Blueprint $table) {
            $table->unsignedBigInteger('hasil_peserta')->after('no_pendaftaran')->nullable();
            $table->foreign('hasil_peserta')->references('id')->on('hasil')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hasil', function (Blueprint $table) {
            $table->dropForeign(['hasil_peserta']);
            $table->dropColumn(['hasil_peserta']);
        });
    }
};
