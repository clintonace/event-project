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
        Schema::create('eventts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('host_name')->nullable();
            $table->longText('host_image')->nullable();
            $table->longText('description')->nullable();
            $table->string('guests')->nullable(); //rember to give them options of the guset option to add
            $table->string('sponsors')->nullable(); //rember to give them options of the guset option to add
            $table->longText('location')->nullable();
            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();
            $table->longText('banner_1')->nullable();
            $table->longText('banner_2')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('is_paid')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('category')->nullable();
            $table->longText('links')->nullable();
            $table->string('status')->nullable(); // 1=active, 0=inactive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventts');
    }
};
