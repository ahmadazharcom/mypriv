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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('product_name');
            $table->string('price');
            $table->string('quantity');
            $table->string('total');
            $table->string('customer_name');
            $table->string('email');
            $table->string('contact');
            $table->text('notes');    
            $table->integer('order_status')->default('3');                                         
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
        Schema::dropIfExists('orders');
    }
};
