<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        # Name, Description, Screen Shots, Logo, Type, Minimum Requirements, Recommended Requirements-> 
        Schema::create('extensions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('price', 8, 2)->default(0.00); //text('price');
            $table->text('summary')->default("No Summary");
            $table->text('description')->default("No Description");
            $table->text('minimum_requirements')->default("No Minimum Requirements");
            $table->text('recommendations')->default("No Recommendations");
            $table->bigInteger('subscription_type_id')->unsigned();
            $table->foreign('subscription_type_id')->references('id')->on('subscription_types');
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
        Schema::dropIfExists('extensions');
    }
}
