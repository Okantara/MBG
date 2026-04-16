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
        Schema::create('ompreng', function (Blueprint $table) {
            $table->id();

            // relasi ke tabel users
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->string('nama_pelanggan', 100);
            $table->integer('jumlah');

            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ompreng');
    }
};
