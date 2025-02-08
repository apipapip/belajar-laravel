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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('nisn',10);
            $table->enum('jk',['Laki laki','Perempuan']);
            $table->string('alamat',100);
            $table->string('no_telp',15)->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('lokal_id')->references('id')
            ->on('lokals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
