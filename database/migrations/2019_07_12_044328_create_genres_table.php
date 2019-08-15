<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->timestamps();
        });

        DB::table('genres')->insert(
            array(
                array('nama' => 'Action'),
                array('nama' => 'Adventure'),
                array('nama' => 'Comedy'),
                array('nama' => 'Drama'),
                array('nama' => 'Ecchi'),
                array('nama' => 'Fantasy'),
                array('nama' => 'Game'),
                array('nama' => 'Harem'),
                array('nama' => 'Historical'),
                array('nama' => 'Horror'),
                array('nama' => 'Military'),
                array('nama' => 'Music'),
                array('nama' => 'Mystery'),
                array('nama' => 'Parody'),
                array('nama' => 'Psychological'),
                array('nama' => 'Romance'),
                array('nama' => 'Samurai'),
                array('nama' => 'Sci-Fi'),
                array('nama' => 'Seinen'),
                array('nama' => 'Shoujo'),
                array('nama' => 'Shoujo AI'),
                array('nama' => 'Shounen'),
                array('nama' => 'Shounen AI'),
                array('nama' => 'Slice of Life'),
                array('nama' => 'Sport'),
                array('nama' => 'Super Power'),
                array('nama' => 'Superhero'),
                array('nama' => 'Supernatural'),
                array('nama' => 'Thriller'),

            ));


        Schema::create('genre_series', function (Blueprint $table) {
            $table->bigInteger('series_id')->unsigned();
            $table->bigInteger('genre_id')->unsigned();

            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
