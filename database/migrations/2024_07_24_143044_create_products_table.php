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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->string('photo')->nullable();
            $table->integer('price');
            $table->integer('discount');
            $table->text('description');
            $table->string('isbn');
            $table->string('author');
            $table->enum('offer',['Yes','No'])->default('No');
            $table->enum('feature',['Yes','No'])->default('No');
            $table->enum('bestselling',['Yes','No'])->default('No');
            $table->string('language');
            $table->string('pages');
            $table->string('publisher');
            $table->string('lesson');
            $table->date('datepublish');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
