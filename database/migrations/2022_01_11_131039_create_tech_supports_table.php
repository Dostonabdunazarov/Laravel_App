<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_supports', function (Blueprint $table) {
            $table->id();
            $table->date('date_tech_supp');
            $table->string('type_tech_supp');
            $table->integer('km_auto');
            $table->timestamps();
            $table->SoftDeletes();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('auto_id')->nullable()->references('id')->on('autos')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tech_supports', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
