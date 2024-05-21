<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaDiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giadien', function (Blueprint $table) {
            // $table->id();
            $table->string('mabac');
            $table->string('tenbac')->nullable();
            $table->string('tusokw')->nullable();
            $table->string('densokw')->nullable();
            $table->string('dongia')->nullable();
            $table->string('ngayapdung')->nullable();
            $table->string('create_at')->nullable();
            $table->string('create_by')->nullable();
            $table->string('update_at')->nullable();
            $table->string('update_by')->nullable();
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
        Schema::dropIfExists('gia_diens');
    }
}
