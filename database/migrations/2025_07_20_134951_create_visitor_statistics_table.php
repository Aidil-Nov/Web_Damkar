<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('visitor_statistics', function (Blueprint $table) {
        $table->id();
        $table->ipAddress('ip_address');
        $table->string('page'); // Nama halaman yang dikunjungi (misalnya: berita atau galeri)
        $table->string('user_agent')->nullable();
        $table->timestamp('visited_at')->useCurrent();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_statistics');
    }
};
