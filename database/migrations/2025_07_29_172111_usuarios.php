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
        //l
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id();
            $table->String("nombre");
            $table->String("telefono");
            $table->tinyInteger("rol");
            $table->String("email")->unique();
            $table->String("password");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
