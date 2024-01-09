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
        Schema::create('eventos_culturales', function (Blueprint $table) {
            $table->id();
            $table->text('nombre', 255);
            $table->date('fecha');
            $table->text('ubicacion');
            $table->longText('description');
            $table->string('imagen');
            $table->text('autor');
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
