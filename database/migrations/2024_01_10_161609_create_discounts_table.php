<?php

use App\Enums\DiscountTypeEnum;
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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->integer('percentage');
            $table->enum('type', DiscountTypeEnum::toArray())->default('general');
            $table->boolean('active')->default('true');
            $table->foreignId('category_id')->nullable()->references('id')->on('categories');
            $table->foreignId('item_id')->nullable()->references('id')->on('items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
