<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key', 63)->unique();

            $table->string('label');
            $table->string('description')->nullable();

            $table->string('type', 31); // image, video, link, phone
            $table->string('url');

            $table->boolean('is_visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_assets');
    }
}
