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
        Schema::table('coments', function (Blueprint $table) {
            $table->longText('coment')->change(); // Mengubah kolom menjadi longText
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coments', function (Blueprint $table) {
            $table->string('coment')->change(); // Mengembalikan ke tipe string jika rollback
        });
    }
};
