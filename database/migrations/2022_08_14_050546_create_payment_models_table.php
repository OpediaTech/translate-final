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
        Schema::create('payment_models', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('translate_type');
            $table->string('translate_from');
            $table->string('translate_to');
            $table->string('page_count')->nullable();
            $table->string('word_count')->nullable();
            $table->string('translated_file')->nullable();
            $table->string('days')->nullable();
            $table->string('extra_service')->nullable();
            $table->string('payment_type');
            $table->string('Notes')->nullable();
            $table->string('grand_total');
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
        Schema::dropIfExists('payment_models');
    }
};
