<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisiMisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visi_misis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_unit');
            $table->enum('tipe', ['visi', 'misi', 'nilai']);
            $table->string('judul');
            $table->text('isi');
            $table->timestamps();
        });

        DB::table('visi_misis')->insert([
            [
                'id_unit' => '1',
                'tipe' => 'visi',
                'judul' => 'visi',
                'isi' => 'visi disini'
            ],
            [
                'id_unit' => '1',
                'tipe' => 'misi',
                'judul' => 'misi',
                'isi' => 'misi 1 lorem ipsum dolor sit amet'
            ],
            [
                'id_unit' => '1',
                'tipe' => 'misi',
                'judul' => 'misi',
                'isi' => 'misi 2 lorem ipsum dolor sit amet'
            ],
            [
                'id_unit' => '1',
                'tipe' => 'misi',
                'judul' => 'misi',
                'isi' => 'misi 3 lorem ipsum dolor sit amet'
            ],
            [
                'id_unit' => '1',
                'tipe' => 'nilai',
                'judul' => 'Integritas',
                'isi' => 'Lorem Ipsum dolor sit amet'
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
        Schema::dropIfExists('visi_misis');
    }
}
