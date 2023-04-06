<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->foreignId('category_id')->constrained();
            $table->string('tags')->nullable();
            $table->foreignId('payment_category_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->integer('max_age');
            $table->string('image');
            $table->integer('price')->nullable();
            $table->integer('views')->default(0);
            $table->foreignId('user_id')->constrained();
            $table->enum('status',['pending','approved','rejected'])->default('pending');
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
        Schema::dropIfExists('posts');
    }
};
