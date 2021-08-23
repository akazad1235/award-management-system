<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award_registers', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('business_owner_name');
            $table->string('establishment');
            $table->string('award_category');
            $table->string('signature_item');
            $table->string('subscribers');
            $table->string('website_url')->nullable();
            $table->text('major_breakthrough');
            $table->string('country');
            $table->string('district')->nullable();
            $table->string('contact');
            $table->string('email');
            $table->dateTime('join_date');
            $table->integer('review_achieved');
            $table->integer('number_of_post');
            $table->bigInteger('revenue');
            $table->string('product_innovation');
            $table->string('trade_license')->nullable();
            $table->string('team_size');
            $table->softDeletes();
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
        Schema::dropIfExists('award_registers');
    }
}
