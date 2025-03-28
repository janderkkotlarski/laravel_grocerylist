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
        Schema::create('jags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('celery_jag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFOr(\App\Models\Celery::class, 'celery_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFOr(\App\Models\Jag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jags');
        Schema::dropIfExists('celery_jag');
    }
};
