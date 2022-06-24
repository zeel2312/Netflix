<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideouploaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videouploader', function (Blueprint $table) {
            $table->id();
            $table->Integer('category_id');
            $table->Integer('subcategory_id');
            $table->string('name');
            $table->string('video');
            $table->string('duration');
            $table->string('cast');
            $table->string('director');
            $table->Integer('year')->length(4);
            $table->string('description');
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_delete')->default(0);
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
        Schema::dropIfExists('videouploader');
    }
}
