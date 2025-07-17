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
        Schema::create('pencapaians', function (Blueprint $table) {
            $table->id('pencapaian_id');
            $table->string('title', 150);
            $table->string('slug');
            $table->string('description');
            $table->string('image', 255) ->nullable();
            $table->date('publish_date');
            $table->foreignId('created_by') ->constrained('users') ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencapaians');
    }
};
