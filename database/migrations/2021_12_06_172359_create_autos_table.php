<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('photo_auto')->comment('Фото')->nullable();
            $table->string('mark_auto')->comment('Марка');
            $table->string('model_auto')->comment('Модель');
            $table->date('date_auto')->comment('Дата выпуска')->nullable();
            $table->integer('km_auto')->comment('Пробег');
            $table->string('color')->comment('Цвет');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autos', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
