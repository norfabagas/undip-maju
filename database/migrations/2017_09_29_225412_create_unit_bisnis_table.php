<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitBisnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_bisnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nama_lengkap');
            $table->string('url');
            $table->text('deskripsi');
            $table->string('image');
            $table->timestamps();
        });

        DB::table('unit_bisnis')->insert([
            [
                'nama' => 'Undip Food',
                'nama_lengkap' => 'Lorem ipsum dolor sit amet',
                'url' => 'undip-food',
                'deskripsi' => 'Lorem ipsum dolor sit amet inccisivus le auchr rochie',
                'image' => 'l9.jpg'
            ],
            [
                'nama' => 'Tour and Travel',
                'nama_lengkap' => 'Lorem ipsum dolor sit amet',
                'url' => 'tour-and-travel',
                'deskripsi' => 'Lorem ipsum dolor sit amet inccisivus le auchr rochie',
                'image' => 'l9.jpg'
            ],
            [
                'nama' => 'Training Center',
                'nama_lengkap' => 'Lorem ipsum dolor sit amet',
                'url' => 'training-center',
                'deskripsi' => 'Lorem ipsum dolor sit amet inccisivus le auchr rochie',
                'image' => 'l9.jpg'
            ],
            [
                'nama' => 'Klinik Pratama',
                'nama_lengkap' => 'Lorem ipsum dolor sit amet',
                'url' => 'klinik-pratama',
                'deskripsi' => 'Lorem ipsum dolor sit amet inccisivus le auchr rochie',
                'image' => 'l9.jpg'
            ],
            [
                'nama' => 'Undip Air Mineral',
                'nama_lengkap' => 'Lorem ipsum dolor sit amet',
                'url' => 'undip-air-mineral',
                'deskripsi' => 'Lorem ipsum dolor sit amet inccisivus le auchr rochie',
                'image' => 'l9.jpg'
            ],
            [
                'nama' => 'Hilirisasi Hak Paten',
                'nama_lengkap' => 'Lorem ipsum dolor sit amet',
                'url' => 'hilirisasi-hak-paten',
                'deskripsi' => 'Lorem ipsum dolor sit amet inccisivus le auchr rochie',
                'image' => 'l9.jpg'
            ],
            [
                'nama' => 'Jasa Konsultan',
                'nama_lengkap' => 'Lorem ipsum dolor sit amet',
                'url' => 'jasa-konsultan',
                'deskripsi' => 'Lorem ipsum dolor sit amet inccisivus le auchr rochie',
                'image' => 'l9.jpg'
            ]

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_bisnis');
    }
}
