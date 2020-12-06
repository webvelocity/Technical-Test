<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title', 400);
            $table->longText('image');
            $table->longText('slug');
            $table->longText('address');
            $table->string('suburb');
            $table->string('city');
            $table->string('postalcode');
            $table->decimal('price');
            $table->decimal('share_percentage');
            $table->string('min_deposit');
            $table->timestamp('published_at')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}