<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('title'); // Kolom judul berita
            $table->string('author'); // Koloom Penulis berita
            $table->string('description'); //Kolom deskripsi berita
            $table->text('content'); // Kolom konten berita
            $table->string('url'); //Kolom URL Berita
            $table->string('url_image'); //Koloom URL Gambar Berita
            $table->datetime('published_at'); //Kolom Publish Berita
            $table->string('category'); //Kolom Kategori Berita
            $table->timestamps(); // Kolom untuk tanggal pembuatan dan pembaruan berita
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
