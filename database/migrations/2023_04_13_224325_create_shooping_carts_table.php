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
        Schema::create('shooping_carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_produit')->unique();
            $table->timestamp('added_to_cart')->nullable();
            $table->timestamp('buyet_at')->nullable();
            $table->index('id_produit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shooping_carts');
    }
};
