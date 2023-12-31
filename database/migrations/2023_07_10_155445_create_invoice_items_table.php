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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id'); // Trường invoice_id (khóa ngoại)
            $table->string('phone_id'); // Trường phone_id (khóa ngoại)
            $table->integer('quantity'); // Trường quantity (số lượng)
            $table->decimal('price', 10, 0); // Trường price (giá)
            $table->decimal('total', 10, 0); // Trường price (giá)
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
        Schema::dropIfExists('invoice_items');
    }
};
