<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionTypeExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_extension_type', function (Blueprint $table) {
            $table->bigInteger('extension_type_id')->unsigned();
            $table->foreign('extension_type_id')->references('id')->on('extension_types');
            $table->bigInteger('extension_id')->unsigned();
            $table->foreign('extension_id')->references('id')->on('extensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extension_type_extension');
    }
}
