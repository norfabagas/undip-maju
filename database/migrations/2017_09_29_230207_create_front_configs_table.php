<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('config_name');
            $table->text('config_value');
            $table->timestamps();
        });

        DB::table('front_configs')->insert([
            [
                'config_name' => 'title',
                'config_value' => 'PT. Undip Maju'
            ],
            [
                'config_name' => 'tagline',
                'config_value' => 'Tagline disini'
            ],
            [
                'config_name' => 'facebook',
                'config_value' => '#'
            ],
            [
                'config_name' => 'twitter',
                'config_value' => '#'
            ],
            [
                'config_name' => 'googleplus',
                'config_value' => '#'
            ],
            [
                'config_name' => 'alamat',
                'config_value' => 'Jalan Soedharto, Tembalang, Semarang'
            ],
            [
                'config_name' => 'telepon',
                'config_value' => '024-12345'
            ],
            [
                'config_name' => 'email',
                'config_value' => 'contact@undipmaju.com'
            ],
            [
                'config_name' => 'jamkerja',
                'config_value' => 'Mon to Fri : 10am to 6 pm'
            ],
            [
                'config_name' => 'kota',
                'config_value' => 'SEMARANG'
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
        Schema::dropIfExists('front_configs');
    }
}
