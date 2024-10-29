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
        Schema::create('sneakers', function (Blueprint $table) {
            $table->id();
            $table->string("brand", 100)->nullable(false);
            $table->string("model", 100)->nullable(false);
            $table->string("colorway", 100)->nullable(false);
            $table->year("year_release")->nullable(false);
            $table->float("retail_price", 7, 2)->nullable(false);
            $table->float("actual_price", 7, 2)->nullable(false);
            $table->text("img_url");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sneakers');
    }
};