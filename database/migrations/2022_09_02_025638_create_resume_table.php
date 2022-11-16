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
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->int('user_id');
            // Biodata
            $table->string('nama');
            $table->string('foto');
            $table->string('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('email');
            $table->string('sosial_media');
            $table->string('cv_pdf')->nullable();

            // Deskripsi CV
            $table->longtext('about_me');
            $table->string('service');
            $table->string('skill');

            // Resume
            // Kerja History
            $table->string('kerja_history_judul');
            $table->string('kerja_history_date');
            $table->string('kerja_history_deskripsi');

            // Edukasi History
            $table->string('edukasi_history_judul');
            $table->string('edukasi_history_date');
            $table->string('edukasi_history_deskripsi');

            $table->string('klien');
            $table->string('testimonial');

            // Portfolio
            $table->string('portfolio');
            $table->string('kategori');

            // Blog
            $table->string('blog');
            $table->string('judul_blog');
            $table->longtext('deskripsi_blog');

            // Contact
            $table->string('contact_form');
            $table->string('informasi_contact');
            $table->string('contact_map');

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
        Schema::dropIfExists('resume');
    }
};
