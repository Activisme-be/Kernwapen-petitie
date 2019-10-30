<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('provinces', static function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('postals', static function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('cities', static function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('postal_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->string('name');
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();

            // Foreign keys and index
            $table->foreign('postal_id')->references('id')->on('postals');
            $table->foreign('province_id')->references('id')->on('provinces');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('postals');
    }
}
