<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDienkesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dienke', function (Blueprint $table) {
            // $table->id();
            $table->string('madk');
            $table->string('makh');
            $table->string('ngaysx')->nullable();
            $table->string('ngaylap')->nullable();
            $table->string('mota')->nullable();
            $table->string('trangthai')->nullable();
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
        Schema::dropIfExists('dienkes');
    }
}
