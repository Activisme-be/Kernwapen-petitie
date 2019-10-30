<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignaturesTable extends Migration
{
    public function up()
    {
        Schema::create('signatures', static function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('postal_id');
            $table->timestamps();

            // Foreign keys and indexes
            $table->foreign('postal_id')->references('id')->on('postals');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('signatures');
    }
}
