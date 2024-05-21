<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            // $table->id();
            $table->string('mahd');
            $table->string('madk');
            $table->string('ky');
            $table->string('tungay');
            $table->string('denngay');
            $table->string('chisodau');
            $table->string('chisocuoi');
            $table->string('tongthanhtien');
            $table->string('ngaylaphd');
            $table->string('tinhtrang');
            $table->string('create_at');
            $table->string('create_by');
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
        Schema::dropIfExists('hoa_dons');
    }
}
