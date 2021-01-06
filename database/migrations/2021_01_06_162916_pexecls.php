<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pexecls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pexcels', function (Blueprint $table) {
            $table->id('pexcel_id');
            $table->integer('user_id')->nullable();
            $table->string('pexcel_name')->nullable();
            $table->string('pexcel_from')->nullable();
            $table->string('pexcel_to')->nullable();
            $table->string('pexcel_values')->nullable();
            $table->string('pexcel_overview')->nullable();
            $table->text('pexcel_description')->nullable();
            $table->string('pexcel_slug')->nullable();
            $table->string('pexcel_image')->nullable();
            $table->string('pexcel_files')->nullable();
            $table->integer('pexcel_status')->nullable();
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
        //
    }
}
