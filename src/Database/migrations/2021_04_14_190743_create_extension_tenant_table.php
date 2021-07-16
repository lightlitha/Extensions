<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_tenant', function (Blueprint $table) {
            $table->bigInteger('tenant_id')->unsigned();
            $table->foreign('tenant_id')->references('id')->on('tenants');
            $table->bigInteger('extension_id')->unsigned();
            $table->foreign('extension_id')->references('id')->on('extensions');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('extension_tenant');
    }
}
