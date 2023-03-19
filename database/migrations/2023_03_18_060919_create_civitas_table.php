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
        Schema::create('civitas', function (Blueprint $table) {
            $table->char('nik',17);
            $table->string('nama',100);
            $table->string('username',100);
            $table->enum('level',['M','F']);
            $table->enum('status',['M','F']);
            $table->primary('nik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civitas');
    }
};
