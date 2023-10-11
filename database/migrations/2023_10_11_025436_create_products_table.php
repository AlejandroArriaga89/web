<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->text("description");
            $table->unsignedSmallInteger("ratting");
            $table->decimal("original_price", 5, 2, true);
            $table->decimal("sale_price", 5, 2, true);
            $table->unsignedSmallInteger("quantity");
            $table->char("size", 5);
            $table->string("color", 50);
            $table->string("image", 50);
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references("id")->on("categories")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }
};
