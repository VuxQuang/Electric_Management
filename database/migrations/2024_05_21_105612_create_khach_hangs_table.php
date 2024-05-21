<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            // $table->id();
            $table->string('makh');
            $table->string('tenkh')->nullable();
            $table->string('dt')->nullable();
            $table->string('diachi')->nullable();
            $table->string('cmnd')->nullable();
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
        Schema::dropIfExists('khach_hangs');
    }
}
