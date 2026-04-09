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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
<<<<<<< HEAD
            $table->bigInteger('expiration')->index();
=======
            $table->integer('expiration')->index();
>>>>>>> 0a5a29f58d1eb073bb43845033db6a4243d82e1d
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
<<<<<<< HEAD
            $table->bigInteger('expiration')->index();
=======
            $table->integer('expiration')->index();
>>>>>>> 0a5a29f58d1eb073bb43845033db6a4243d82e1d
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
