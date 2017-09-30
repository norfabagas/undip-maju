<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nilai');
            $table->text('isi');
            $table->string('image');
            $table->timestamps();
        });

        DB::table('values')->insert([
            [
                'nilai' => 'Satisfaction',
                'isi' => 'Lorem ipsum dolor sit amet',
                'image' => 'team1.jpg'
            ],
            [
                'nilai' => 'Morale',
                'isi' => 'Lorem ipsum dolor sit amet',
                'image' => 'team1.jpg'
            ],
            [
                'nilai' => 'Integrity',
                'isi' => 'Lorem ipsum dolor sit amet',
                'image' => 'team1.jpg'
            ],
            [
                'nilai' => 'Leadership',
                'isi' => 'Lorem ipsum dolor sit amet',
                'image' => 'team1.jpg'
            ],
            [
                'nilai' => 'Entrepreneurship',
                'isi' => 'Lorem ipsum dolor sit amet',
                'image' => 'team1.jpg'
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
        Schema::dropIfExists('values');
    }
}
