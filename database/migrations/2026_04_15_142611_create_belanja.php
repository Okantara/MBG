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
        Schema::create('belanja', function (Blueprint $table) {
            $table->id();

            // relasi ke users
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->date('tanggal');
            $table->string('supplier', 100)->nullable();
            $table->text('pengeluaran_belanja')->nullable();
            $table->decimal('total_belanja', 12, 0)->default(0);

            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('belanja');
    }
};
