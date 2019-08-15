<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->timestamps();

        });

        DB::table('haris')->insert(
            array(
                array('nama' => 'Senin'),
                array('nama' => 'Selasa'),
                array('nama' => 'Rabu'),
                array('nama' => 'Kamis'),
                array('nama' => 'Jumaat'),
                array('nama' => 'Sabtu'),
                array('nama' => 'Minggu'),
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('haris');
    }
}
