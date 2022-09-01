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
        Schema::create('service_items_changes', function (Blueprint $table) {
            $table->id();
            $table->string('t1');
            $table->string('t1_price');
            $table->string('t2');
            $table->string('t2_price');
            $table->string('t3');
            $table->string('t3_price');
            $table->string('t1Ex1')->nullable();
            $table->string('t1Ex1_price')->nullable();
            $table->string('t1Ex2')->nullable();
            $table->string('t1Ex2_price')->nullable();
            $table->string('t2Ex')->nullable();
            $table->string('t2Ex_price')->nullable();
            $table->string('t3Ex')->nullable();
            $table->string('t3Ex_price')->nullable();
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
        Schema::dropIfExists('service_items_changes');
    }
};
