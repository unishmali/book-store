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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('province')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('email');
         $table->string('phone');
         $table->text('note')->nullable();
         $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
         $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
