<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('service_category_id');
            $table->text('short_description')->nullable();
            $table->longText('details')->nullable(); 
            $table->boolean('status')->default(true);
            $table->string('featured_image');
            $table->timestamps();

            $table->foreign('service_category_id')->references('id')->on('service_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
