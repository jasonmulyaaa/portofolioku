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
        Schema::create('pagetitle', function (Blueprint $table) {
            $table->id();
            $table->string('judul_cv');
            $table->string('subjudul_cv');
            $table->string('judul_tutorial');
            $table->string('subjudul_tutorial');
            $table->string('courses');
            $table->string('cv');
            $table->string('contact');
            $table->string('judul_contact');
            $table->string('subjudul_contact');
            $table->string('judul_form');
            $table->string('subjudul_form');

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
        Schema::dropIfExists('pagetitle');
    }
};
